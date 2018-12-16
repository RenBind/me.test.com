@extends('layout')
@section('content')
   <h1>亲爱的{{$username}},2019年您的运气如何？</h1>
   <h1>{{ $lucky->description }}</h1>
@stop