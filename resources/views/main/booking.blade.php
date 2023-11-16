@extends('layouts.page')

@section('title', 'index')
@section('content')

    <form action="/hotel/booking" method="POST">
        @csrf
        <input type="hidden" name="id" value="1">
        <input type="hidden" name="type" value="{{$room->id}}">
        <table>
            <tr>
                <th>お部屋のタイプ</th>
                <td>{{ $room->room_type_name }}</td>
            </tr>
            <tr>
                <th>大人</th>
                <td><input type="number" name="adults" value="0" min="0"></td>
            </tr>
            <tr>
                <th>子供</th>
                <td><input type="number" name="children" value="0" min="0"></td>
            </tr>
            <tr>
                <th>チェックイン</th>
                <td><input type="date" name="check_in"></td>
            </tr>
            <tr>
                <th>チェックアウト</th>
                <td><input type="date" name="check_out"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="予約する"></td>
            </tr>
        </table>
    </form>
@endsection
