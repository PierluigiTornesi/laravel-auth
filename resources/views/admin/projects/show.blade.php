@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>{{ $project->title}}</h2>

        <div class="mt-4 w-50">
            <p>
                <strong>Description : </strong>{{ $project->description}}
            </p>
        </div>

        <div class="mt-4 w-50">
            <p>
                <strong>Slug : </strong>{{ $project->slug}}
            </p>
        </div>
    </div>
@endsection