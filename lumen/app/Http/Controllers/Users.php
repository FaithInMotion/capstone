<?php
namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Users extends BaseController
{
    public function TestMethod ()
    {
        return view('folderforrandomcontroller/controller_function');
    }
}