@extends('layouts.master')

@section('content')
   @foreach($teams as $team)
   {{HTML::linkAction('TeamController@getView',$team->name,$team->id)}}
   @endforeach
@stop