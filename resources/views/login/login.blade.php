@extends('layouts.page')

@section('title', 'login')
@section('content')
    <h2>ログイン</h2>
    <form action="/hotel/login" method="POST">
        @csrf
        <table>
            <tr>
                <th>メール</th>
                <td><input type="email" name="mail"></td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td><input type="text" name="pass"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="ログイン"></td>
            </tr>
        </table>
    </form>
@endsection
