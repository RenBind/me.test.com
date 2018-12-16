@extends('layout')
@section('content')
    <div class = 'main'>
        <form action="/check" method="post">
            {{ csrf_field() }}
            <label>输入名字：</label>
            <input type="text" name="username"/>
            <input type="submit" value="提交"/>
        </form>
    </div>
    @stop