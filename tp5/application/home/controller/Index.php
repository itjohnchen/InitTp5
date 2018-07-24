<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/7/24
 * Time: 10:23
 */

namespace app\home\controller;
use think\Controller;

class Index extends Controller
{
    public function index(){
        return view("index");
    }
}