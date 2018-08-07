<?php
/**
 * Created by PhpStorm.
 * User: Admins
 * Date: 7/13/2018
 * Time: 2:55 PM
 */

namespace App\Http\Controllers;


class PageController extends \Illuminate\Routing\Controller
{
    function getIndex(){
        return view('page.trangchu');
    }

    function getProductType(){
        return view('page.loaisp');
    }
}