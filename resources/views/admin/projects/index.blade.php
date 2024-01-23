@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>List of projects</h2>

        <div class="text-end">
            <a class="btn btn-success" href="{{ route('admin.projects.create')}}">Create a new project</a>
        </div>

        <table class="table table-striped mt-5">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->title}}</td>
                    <td>
                      <a class="btn btn-success" href="{{route('admin.projects.show', ['project' => $project->slug]) }}">Details</a>
                    </td>
                  </tr>
                @endforeach 
            </tbody>
          </table>
    </div>
@endsection