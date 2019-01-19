<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $table = 'car';
    //允许批量赋值
    protected $fillable = ['username','cliname','clitel','clisour','cliadd','carnum','carcontract','carturnover','carconsultant','num','year','month','day','date','week'];

    public $timestamps = true;

    public function getDateFormat()
    {
        return time();
    }

    public function asDateTime($value)
    {
        return $value;
    }


    public function freshTimestamp()
    {
        return time();
    }

    public function fromDateTime($value)
    {
        return $value;
    }

    protected function asDate($value)
    {
        return $value;
    }
}