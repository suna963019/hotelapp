<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register()
    {
        return view('login.register');
    }
    public function registerAction(Request $request)
    {
        $validate = [
            'pass' => ['required', 'confirmed']
        ];
        $message = [
            'name.required' => 'お名前を入力してください。',
            'mail.required' => 'メールを入力してください。',
            'pass.required' => 'パスワードを入力してください。',
            'pass.confirmed' => '入力したパスワードが違います。',
            'pass_confirmation.required' => 'パスワードを再度入力してください。',
        ];
        $this->validate($request, $validate, $message);
        $param = [
            'name'=>$request->name,
            'email'=>$request->mail,
            'password'=>Hash::make($request->pass),
        ];
        $table = new User();
        if (is_null($table->where('email',$request->mail)->first())) {
            return back();
        }
        $table->fill($param)->save();
        Auth::attempt([
            'email' => $request->mail,
            'password'=>$request->pass,
        ]);
        return redirect('/hotel');
    }

    public function login()
    {
        return view('login.login');
    }
    public function loginAction(Request $request)
    {
        $validate = [
            'mail'=>'required',
            'pass' => 'required'
        ];
        $message = [
            'mail.required' => 'お名前を入力してください。',
            'pass.required' => 'パスワードを入力してください。',
        ];
        $this->validate($request, $validate, $message);
        if (Auth::attempt([
            'email' => $request->mail,
            'password'=>$request->pass,
        ])) {
            $mes='ログインに成功しました。';
        }else{
            $mes='ログインに失敗しました。';
            return back();
        }
        return redirect('/hotel');
    }
    public function logout(){
        Auth::logout();
        return redirect('/hotel');
    }
}
