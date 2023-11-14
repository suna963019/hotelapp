@extends('layouts.page')

@section('title','index')
@section('content')
    <div>
        @if ($check)
            <p>{{$roomId}}</p>
        @else
            <p>miss</p>
        @endif
    </div>
@endsection

@section('footer')
    
@endsection