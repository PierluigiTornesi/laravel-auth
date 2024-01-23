@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>Lista dei progetti</h2>

        <table class="table table-striped mt-5">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->title}}</td>
                    <td>
                      <a class="btn btn-success" href="{{route('admin.projects.show', ['project' => $project->slug]) }}">Dettagli</a>
                    </td>
                  </tr>
                @endforeach 
            </tbody>
          </table>
    </div>
@endsection