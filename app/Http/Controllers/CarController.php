<?php

namespace App\Http\Controllers;
use App\Car;
use App\Summarize;
use Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;


class CarController extends Controller
{
    //汽车列表页
    public function index()
    {
        //分页
        $cars = Car::where('username', '=', Auth::user()->name)->paginate(5);
        return view('car.index',[
            'cars'=>$cars,
        ]);
    }
    //添加页面
    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {

            //2.validator类验证
            $validator= \Validator::make($request->input(),[
                'Car.cliname'=>'required|min:2',
                'Car.clitel'=>'required',
                'Car.clisour'=>'required',
                'Car.cliadd'=>'required',
                'Car.carnum'=>'required',
                'Car.carcontract'=>'required',
                'Car.carturnover'=>'required',
                'Car.carconsultant'=>'required',
                'Car.num'=>'required|integer',
                'Car.year'=>'required',
                'Car.month'=>'required',
                'Car.day'=>'required',
            ],[
                'required'=>':attribute为必填项',
                'min'=>':attribute长度不符合要求',
                'integer'=>':attribute必须为整数'
            ],[
                'Car.cliname'=>'客户姓名',
                'Car.clitel'=>'客户电话',
                'Car.clisour'=>'客户来源',
                'Car.cliadd'=>'客户地址',
                'Car.carnum'=>'汽车型号',
                'Car.carcontract'=>'合同号',
                'Car.carturnover'=>'成交价',
                'Car.carconsultant'=>'咨询顾问',
                'Car.num'=>'成交数量',
                'Car.year'=>'成交年份',
                'Car.month'=>'成交月份',
                'Car.day'=>'成交日',
            ]);

            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $data = $request->input('Car');
            $car = new Car();
            $car->username = $data['username'];
            $car->cliname = $data['cliname'];
            $car->clitel = $data['clitel'];
            $car->clisour = $data['clisour'];
            $car->cliadd = $data['cliadd'];
            $car->carnum = $data['carnum'];
            $car->carcontract = $data['carcontract'];
            $car->carturnover = $data['carturnover'];
            $car->carconsultant = $data['carconsultant'];
            $car->num = $data['num'];
            $car->year = $data['year'];
            $car->month = $data['month'];
            $car->day = $data['day'];
            $date=$data['year'].'-'.$data['month'].'-'.$data['day'];
            $car->date = $date;
            $car->week = date('W',strtotime($date));

            //Car::create($data)
            if ($car->save()) {
                return redirect('car/index')->with('success','添加成功');
            } else {
                return redirect()->back();
            }
        }
        return view('car.create');

    }

    public function save(Request $request)
    {
        $data = $request->input('Car');
        $car = new Car();
        $car->username = Auth::user()->name;
        $car->cliname = $data['cliname'];
        $car->clitel = $data['clitel'];
        $car->clisour = $data['clisour'];
        $car->cliadd = $data['cliadd'];
        $car->carnum = $data['carnum'];
        $car->carcontract = $data['carcontract'];
        $car->carturnover = $data['carturnover'];
        $car->carconsultant = $data['carconsultant'];
        $car->num = $data['num'];
        $car->year = $data['year'];
        $car->month = $data['month'];
        $car->day = $data['day'];

        if($car->save()) {
            return redirect('car/index');
        }else{
            return redirect()->back();
        }

    }

    public function update(Request $request,$id)
    {
        $car = Car::find($id);

        if($request->isMethod('POST')){

            $this->validate($request,[
                'Car.cliname'=>'required|min:2',
                'Car.clitel'=>'required',
                'Car.clisour'=>'required',
                'Car.cliadd'=>'required',
                'Car.carnum'=>'required',
                'Car.carcontract'=>'required',
                'Car.carturnover'=>'required',
                'Car.carconsultant'=>'required',
                'Car.num'=>'required|integer',
                'Car.year'=>'required|integer',
                'Car.month'=>'required|integer',
                'Car.day'=>'required|integer',
            ],[
                'required'=>':attribute为必填项',
                'min'=>':attribute长度不符合要求',
                'integer'=>':attribute必须为整数'
            ],[
                'Car.cliname'=>'客户姓名',
                'Car.clitel'=>'客户电话',
                'Car.clisour'=>'客户来源',
                'Car.cliadd'=>'客户地址',
                'Car.carnum'=>'汽车型号',
                'Car.carcontract'=>'合同号',
                'Car.carturnover'=>'成交价',
                'Car.carconsultant'=>'咨询顾问',
                'Car.num'=>'成交数量',
                'Car.year'=>'成交年份',
                'Car.month'=>'成交月份',
                'Car.day'=>'成交日',
            ]);

            $data = $request->input('Car');
            $car->username = Auth::user()->name;
            $car->cliname = $data['cliname'];
            $car->clitel = $data['clitel'];
            $car->clisour = $data['clisour'];
            $car->cliadd = $data['cliadd'];
            $car->carnum = $data['carnum'];
            $car->carcontract = $data['carcontract'];
            $car->carturnover = $data['carturnover'];
            $car->carconsultant = $data['carconsultant'];
            $car->num = $data['num'];
            $car->year = $data['year'];
            $car->month = $data['month'];
            $car->day = $data['day'];


            if($car->save()){
                return redirect('car/index')->with('success','修改成功-'.$id);
            }
        }

        return view('car.update',[
            'car'=>$car
        ]);
    }

    public function detail($id)
    {
        $car = Car::find($id);

        return view('car.detail',[
            'car'=>$car
        ]);
    }

    public function delete($id)
    {
        $car = Car::find($id);

        if ($car->delete()){
            return redirect('car/index')->with('success','删除成功-'.$id);
        }else{
            return redirect('car/index')->with('error','删除失败-'.$id);
        }
    }

    public function summarize()
    {
        $now = Carbon::now()->toDateString();
        return view('car.summarize',[
            'now'=>$now
        ]);
    }

    public function savesummarize(Request $request)
    {
        $data = $request->input('Summarize');
        $summarize = new Summarize();
        $summarize->username = Auth::user()->name;
        $summarize->date = $data['date'];
        $summarize->title = $data['title'];
        $summarize->content = $data['content'];

        if($summarize->save()) {
            return redirect('car/summarizelist');
        }else{
            return redirect()->back();
        }

    }

    public function summarizelist()
    {
        $summarizes = Summarize::where('username', '=', Auth::user()->name)->paginate(5);
        return view('car.summarizelist',['summarizes'=>$summarizes]);
    }



}
