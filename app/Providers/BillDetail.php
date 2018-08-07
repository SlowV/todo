<?php
/**
 * Created by PhpStorm.
 * User: Admins
 * Date: 7/13/2018
 * Time: 2:11 PM
 */

namespace App\Providers;


use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";

    public function product(){
        return $this -> belongsTo('App\Product','id_product','id');
    }

    public function bill(){
        return $this -> belongsTo('App\Bill','id_bill','id');
    }
}