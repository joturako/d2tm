
@extends('layouts.master')

@section('content')
   @foreach($matches as $match)
   {{HTML::linkAction('MatchController@getView',"Match #{$match->id}",$match->id)}}
   @endforeach
@stop