@extends('layouts.page')

@section('title', 'index')
@section('content')
    @foreach ($items as $item)
        <table>
            <tr>
                <th>ID</th>
                <td>{{ $item->id }}</td>
            </tr>
            {{-- <tr>
                <th>宿泊日数</th>
                <td>{{ $item->reservation_days }}</td>
            </tr>
            <tr>
                <th>宿泊料金</th>
                <td>{{ $item->reservation_value }}</td>
            </tr> --}}
            <tr>
                <th></th>
                <td>{{ $item->reservation->reservation_num }}</td>
            </tr>
            <tr>
                <th></th>
                <td>{{ $item->room->room_num }}</td>
            </tr>
        </table>
    @endforeach
@endsection
