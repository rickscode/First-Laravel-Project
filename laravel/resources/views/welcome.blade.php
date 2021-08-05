@extends('layouts.master')

@section('content')
<h1>Hello Daisy</h1>
<p>{{ 2 == 2 ? "How are you" : "Wrong"}}</p>
@for($i = 0; $i < 5; $i++)
<p>{{$i+1}} .Count</p>
@endfor
@endsection