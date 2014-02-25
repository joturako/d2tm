@extends('layouts.master')

@section('content')
   @foreach($leagues as $league)
   {{HTML::linkAction('LeagueController@getView',$league->name,$league->id)}}
   @endforeach
@stop