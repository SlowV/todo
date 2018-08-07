<?php
/**
 * Created by PhpStorm.
 * User: Admins
 * Date: 7/13/2018
 * Time: 2:08 PM
 */

namespace App\Providers;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";

    public function bill(){
        return $this ->hasMany('App\Bill','id_customer','id');
    }
}