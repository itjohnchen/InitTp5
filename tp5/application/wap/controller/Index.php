<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/7/24
 * Time: 14:55
 */

namespace app\wap\controller;
use think\Controller;
class Index extends Controller
{
    public function index(){
        return view("index");
    }
}