<form class="form-horizontal" method="post" action="">
    @csrf
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">用户名称</label>

        <div class="col-sm-5">
            <input type="text" name="Car[username]" value=" {{ Auth::user()->name }}" class="form-control" id="username">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger"></p>
        </div>
    </div>


    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">客户姓名</label>

        <div class="col-sm-5">
            <input type="text" name="Car[cliname]" value="{{old('Car')['cliname'] ? old('Car')['cliname']:(isset($car->cliname) ? $car->cliname : '') }}"
                   class="form-control" id="cliname" placeholder="请输入客户姓名">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Car.cliname')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">客户电话</label>

        <div class="col-sm-5">
            <input type="text" name="Car[clitel]" value="{{old('Car')['clitel'] ? old('Car')['clitel']:(isset($car->clitel) ? $car->clitel : '') }}"
                   class="form-control" id="clitel" placeholder="请输入客户电话">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Car.clitel')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">客户来源</label>

        <div class="col-sm-5">
            <input type="text" name="Car[clisour]" value="{{old('Car')['clisour'] ? old('Car')['clisour']:(isset($car->clisour) ? $car->clisour : '') }}"
                   class="form-control" id="clisour" placeholder="请输入客户来源">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Car.clisour')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">客户地址</label>

        <div class="col-sm-5">
            <input type="text" name="Car[cliadd]" value="{{old('Car')['cliadd'] ? old('Car')['cliadd']:(isset($car->cliadd) ? $car->cliadd : '') }}"
                   class="form-control" id="cliadd" placeholder="请输入客户地址">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Car.cliadd')}}</p>
        </div>
    </div>



    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">车辆型号</label>

        <div class="col-sm-5">
            <input type="text" name="Car[carnum]" value="{{old('Car')['carnum'] ? old('Car')['carnum']:(isset($car->carnum) ? $car->carnum : '') }}"
                   class="form-control" id="carnum" placeholder="请输入车辆型号">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Car.carnum')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">成交数量</label>

        <div class="col-sm-5">
            <input type="text" name="Car[num]" value="{{old('Car')['num'] ? old('Car')['num']:(isset($car->num) ? $car->num : '') }}"
                   class="form-control" id="num" placeholder="请输入成交数量">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Car.num')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">合同号</label>

        <div class="col-sm-5">
            <input type="text" name="Car[carcontract]" value="{{old('Car')['carcontract'] ? old('Car')['carcontract']:(isset($car->carcontract) ? $car->carcontract : '') }}"
                   class="form-control" id="carcontract" placeholder="请输入合同号">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Car.carcontract')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">成交价</label>

        <div class="col-sm-5">
            <input type="text" name="Car[carturnover]" value="{{old('Car')['carturnover'] ? old('Car')['carturnover']:(isset($car->carturnover) ? $car->carturnover : '') }}"
                   class="form-control" id="carturnover" placeholder="请输入成交价">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Car.carturnover')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">销售顾问</label>

        <div class="col-sm-5">
            <input type="text" name="Car[carconsultant]" value="{{old('Car')['carconsultant'] ? old('Car')['carconsultant']:(isset($car->carconsultant) ? $car->carconsultant : '') }}"
                   class="form-control" id="carcousultant" placeholder="请输入销售顾问">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Car.carconsultant')}}</p>
        </div>
    </div>



    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">成交年份</label>

        <div class="col-sm-5">
            <input type="text" name="Car[year]" value="{{old('Car')['year'] ? old('Car')['year']:(isset($car->year) ? $car->year : '') }}"
                   class="form-control" id="year" placeholder="请输入成交年份">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Car.year')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">成交月份</label>

        <div class="col-sm-5">
            <input type="text" name="Car[month]" value="{{old('Car')['month'] ? old('Car')['month']:(isset($car->month) ? $car->month : '') }}"
                   class="form-control" id="month" placeholder="请输入成交月份">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Car.month')}}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">成交日</label>

        <div class="col-sm-5">
            <input type="text" name="Car[day]" value="{{old('Car')['day'] ? old('Car')['day']:(isset($car->day) ? $car->day : '') }}"
                   class="form-control" id="day" placeholder="请输入成交日">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{$errors->first('Car.day')}}</p>
        </div>
    </div>



    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </div>
</form>