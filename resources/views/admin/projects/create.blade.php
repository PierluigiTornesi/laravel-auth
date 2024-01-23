@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center">
            Create a new project
        </h2>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        @endif
        <form class="mt-5 " action="{{ route('admin.projects.store')}}" method="POST">
            @csrf
            {{-- title input --}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title')}}">
            </div>
            {{-- description input --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description')}}</textarea>
            </div>

            <button class="btn btn-danger" type="submit">Save</button>
        </form>
    </div>
@endsection