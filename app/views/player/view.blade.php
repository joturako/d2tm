@extends('layouts.master')

@section('content')
Player Info:
{{$player->name}}
Players:
@foreach($player->teams as $team)
{{$team->name}} - {{$team->pivot->description}}
@endforeach

@stop