@extends('layouts.app')

@section('title', 'Project Details')

@section('content')
    <h2>{{ $project->titel }}</h2>
    <p>{{ $project->description }}</p>
@endsection
