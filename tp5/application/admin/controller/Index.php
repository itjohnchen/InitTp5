<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/7/24
 * Time: 10:05
 */

namespace app\admin\controller;

use think\Controller;

class Index extends Controller
{
    public function index(){
        $host_url = $_SERVER['HTTP_HOST'];
        $count = 20;
        $Page = new think\Paginator();
        $Page -> show();
        $this -> assign("host",$host_url);
        return view("index");
    }
}