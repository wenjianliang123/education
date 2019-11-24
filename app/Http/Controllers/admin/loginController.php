<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class loginController extends Controller
{
    public function login()
    {
        return view('login/login');
    }
    public function doLogin(Request $request)
    {
        // echo 1;die;
        $data = $request->input();
        // dd($data);
        $info = DB::table('admin')->where(['admin_name'=>$data['admin_name']])->first();
        $true=json_decode(json_encode($info),1);
        session(['info'=>$info]);
        $dd = time();
        dd($dd);
        // return $info->get()->toArray();
        if($data['admin_name']!=$true['admin_name']){
            echo "<script>alert('请输入正确的用户名');window.history.back(-1);</script>";die;
        }
        if($data['password']!=$true['password']){
            echo "<script>alert('请输入正确的密码');window.history.back(-1);</script>";die;
        }
        return redirect()->action('myshop\goodsController@create');
    }
}
