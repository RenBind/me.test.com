@extends('layout')
@section('content')
    <h3>my admire people is:</h3>
    @if(count($people)>0)
    <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
            @endforeach
    </ul>
    @endif
@endsection