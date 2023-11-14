@extends('layouts.page')

@section('title','login')
@section('content')
    <div>
        <form action="/hotel/login" method="POST">
            <table>
                <tr>
                    <th>お名前</th>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><input type="tel" name="tel"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="ログイン又は登録"></td>
                </tr>
            </table>
        </form>
    </div>
@endsection

@section('footer')
    
@endsection