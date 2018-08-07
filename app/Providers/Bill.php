<?php
/**
 * Created by PhpStorm.
 * User: Admins
 * Date: 7/13/2018
 * Time: 2:10 PM
 */

namespace App\Providers;


use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";

    public function bill_detail(){
        return $this ->hasMany('App\BillDetail','id_bill','id');
    }

    public function customer(){
        return $this ->belongsTo('App\Customer','id_customer','id');
    }
}