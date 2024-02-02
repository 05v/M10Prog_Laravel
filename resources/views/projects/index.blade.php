@extends('layouts.app')

@section('title', 'Project Lijst')

@section('content')
    <h1>Project Lijst</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <h2>{{ $project->titel }}</h2>
                <p>{{ $project->description }}</p>
            </li>
        @endforeach
    </ul>
@endsection
