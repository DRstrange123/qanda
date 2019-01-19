<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Summarize;
use Auth;
use DB;
use Carbon\Carbon;

class ManagerController extends Controller
{
    public function index()
    {

        //$cars = Car::paginate(5);
        //$cars = DB::table('car')->paginate(5);
        //$cars=Car::select(DB::table('num,count(id) count'))->groupBy('username')->paginate(5)->toArray();
        //$cars=DB::table('car')->groupBy('username')->paginate(5);
        $cars = DB::table('car')
              ->select(DB::raw('sum(num) as user_count,max(date) as maxdate, username,id,cliname,carcontract'))
              ->groupBy('username')
              ->paginate(5);
        return view('manager.index',[
            'cars'=>$cars,
        ]);
    }

    public function detail($username)
    {
        $cars = DB::table('car')->where('username', '=', $username)->paginate(5);

        return view('manager.detail',[
            'cars'=>$cars
        ]);
    }

    public function daylist(Request $request)
    {
        //获取时间戳
        $time = time();
        //对时间戳进行格式化
        $month = date('n',$time);
        $day = date('j',$time);
        $year = date('Y',$time);
        //获取当前日期
        $currentdate=$year.'-'.$month.'-'.$day;
        $data = $request->input('Car');
        if($data) {
            $now=$data['date'];
        }else{
            $now=$currentdate;
        }
        $cars = DB::table('car')
            ->select(DB::raw('sum(num) as user_count, username,date'))
            ->groupBy('username')
            ->where('date', '=', $now)
            ->orderBy('user_count','desc')
            ->paginate(5);
        return view('manager.daylist',[
            'cars'=>$cars,
        ]);
    }

    public function weeklist(Request $request)
    {
        $now=Carbon::now()->toDateString();
        $currentweek = date('W',strtotime($now));
        $data = $request->input('Car');
        if($data) {
            $now=$data['week'];
        }else{
            $now=$currentweek;
        }
        $cars = DB::table('car')
            ->select(DB::raw('sum(num) as user_count, username,week'))
            ->groupBy('username')
            ->where('week', '=', $now)
            ->orderBy('user_count','desc')
            ->paginate(5);
        return view('manager.weeklist',[
            'cars'=>$cars,
        ]);
    }

    public function monthlist(Request $request)
    {
        //获取时间戳
        $time = time();
        //对时间戳进行格式化
        $currentmonth = date('n',$time);
        $data = $request->input('Car');
        if($data) {
            $now=$data['month'];
        }else{
            $now=$currentmonth;
        }
        $cars = DB::table('car')
            ->select(DB::raw('sum(num) as user_count, username,month'))
            ->groupBy('username')
            ->where('month', '=', $now)
            ->orderBy('user_count','desc')
            ->paginate(5);
        return view('manager.monthlist',[
            'cars'=>$cars,
        ]);
    }

    public function managerlogin()
    {
        return view('car.managerlogin');
    }

    public function validatemanager(Request $request)
    {
        $data = $request->input('Manager');
        if($data['name']=='root' and $data['name']=='root') {
            return redirect('manager/index');
        }else{
            return redirect()->back();
        }
    }

}
