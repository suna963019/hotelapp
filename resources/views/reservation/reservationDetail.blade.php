@extends('layouts.page')

@section('title', 'detail')
@section('content')
    @if ($items != null)
        @foreach ($items->revervationDetails as $item)
            <table>
                <tr>
                    <th>宿泊日数</th>
                    <td>{{ $item->reservation_day }}</td>
                </tr>
                <tr>
                    <th>宿泊料金</th>
                    <td>{{ $item->reservation_price }}</td>
                </tr>
                <tr>
                    <th>部屋タイプ</th>
                    <td>{{ $item->room->roomType->room_type_name }}</td>
                </tr>
                <tr>
                    <th>部屋番号</th>
                    <td>{{ $item->room->room_num }}</td>
                </tr>
            </table>
        @endforeach
    @else
        <p>false</p>
    @endif
@endsection
