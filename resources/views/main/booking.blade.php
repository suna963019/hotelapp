@extends('layouts.page')

@section('title', 'index')
@section('content')
    @foreach ($rooms as $room)
        <table>
            <tr>
                <th>お部屋のタイプ</th>
                <td>{{ $room->room_type_name }}</td>
            </tr>
            <tr>
                <th>宿泊可能人数</th>
                <td>{{ $room->room_type_num }}</td>
            </tr>
        </table>
        <div class="right">
            <form action="" method="POST">
                <input type="hidden" name="type" value="{{ $room->id }}">
                <input type="submit" value="予約する">
            </form>
        </div>
    @endforeach
@endsection
