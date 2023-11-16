@extends('layouts.page')

@section('title','index')
@section('content')
    <div>
        @if ($roomId!=-1)
            <p>予約が完了しました</p>
        @else
            <p>お部屋の空きがありませんでした</p>
        @endif
    </div>
@endsection

@section('footer')
    
@endsection