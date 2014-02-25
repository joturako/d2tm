@extends('layouts.master')

@section('content')
   @foreach($players as $player)
   {{HTML::linkAction('PlayerController@getView',$player->name,$player->id)}}
   @endforeach
@stop