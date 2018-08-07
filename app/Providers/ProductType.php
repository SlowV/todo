<?php
/**
 * Created by PhpStorm.
 * User: Admins
 * Date: 7/13/2018
 * Time: 2:11 PM
 */

namespace App\Providers;


use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'type_products';

    public function product(){
        return $this -> hasMany('App\Product','id_type','id');
    }

}