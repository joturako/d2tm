@extends('layouts.master')

@section('content')
Match Info:
League:
{{$match->league->name}}

Team A:
{{$match->team1->name}}

Team B:
{{$match->team2->name}}

@stop