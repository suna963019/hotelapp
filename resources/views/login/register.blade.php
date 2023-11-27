@extends('layouts.page')

@section('title', 'register')
@section('content')

    <form action="/hotel/register" method="POST">
        @csrf
        <table>
            <tr>
                <th>お名前</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>email</th>
                <td><input type="email" name="mail"></td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td><input type="text" name="pass"></td>
            </tr>
            <tr>
                <th>パスワード<br>（再入力）</th>
                <td><input type="text" name="pass_confirmation"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="登録"></td>
            </tr>
        </table>
    </form>
@endsection
