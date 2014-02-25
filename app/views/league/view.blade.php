@extends('layouts.master')

@section('content')
League: {{$league->name}}

Teams:
@foreach($league->teams as $t)
{{$t->name}}
@endforeach
@stop