@extends('layouts.master')

@section('content')
Team Info:
{{$team->name}}
Players:
@foreach($team->players as $pl)
{{$pl->name}} - {{$pl->pivot->description}}
@endforeach
Joined Leagues:
@foreach($team->leagues as $lg)
{{$lg->name}}
@endforeach
@stop