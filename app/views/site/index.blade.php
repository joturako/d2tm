@extends('layouts.master')

@section('content')
   @foreach($teams as $team)
   {{$team->name}}
   @endforeach
@stop