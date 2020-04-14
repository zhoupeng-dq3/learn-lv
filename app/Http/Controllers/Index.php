<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/16
 * Time: 11:45
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
class Index extends Controller
{
    public function index(){
        $user=DB::table('user')->get();
        Redis::set('id',1);
        $id=Redis::get('id');
        $routes=app('router')->getRoutes();
       // print_r($routes);
        return view('index', ['user' => '41','id'=>$user]);
    }
}