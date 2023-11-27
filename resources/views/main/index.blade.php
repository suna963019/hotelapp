@extends('layouts.page')

@section('title', 'index')
@section('content')
    <div>
        <h2>お部屋の種類から探す。</h2>
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
                <tr>
                    <th></th>
                    <td>
                        <form action="/hotel/booking/type" method="GET">
                            @csrf
                            <input type="hidden" name="id" value="{{ $room->id }}">
                            <input type="submit" value="予約する">
                        </form>
                    </td>
                </tr>
            </table>
        @endforeach
    </div>
    {{-- <div>
    <h2>予約日時から探す。</h2>
    <form action="/hotel/booking/date" method="POST">
        <input type="date" name="date">
        <input type="submit" value="決定">
    </form>
</div> --}}
@endsection

@section('footer')

@endsection
