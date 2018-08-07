<?php
/**
 * Created by PhpStorm.
 * User: Admins
 * Date: 7/13/2018
 * Time: 2:11 PM
 */

namespace App\Providers;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function product_type(){
        return $this -> belongsTo('App\ProductType', 'id_type', 'id');
    }

    public function bill_detail(){
        return $this -> hasMany('App\BillDetail','id_product','id');
    }
}