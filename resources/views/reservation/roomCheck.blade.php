@extends('layouts.page')

@section('title', 'check')
@section('content')
    @if ($items[0]->reservations != null)
        @foreach ($items[0]->reservations as $item)
        
            <table>
                <tr>
                    <th>チェックイン</th>
                    <td>{{ $item->check_in }}</td>
                </tr>
                <tr>
                    <th>チェックアウト</th>
                    <td>{{ $item->check_out }}</td>
                </tr>
            </table>
        @endforeach
    @else
        <p>false</p>
    @endif
@endsection
