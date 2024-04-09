@extends('layouts.app')

@section('title', 'Details Project')


@section('content')
  <section>
    <div class="container">
        <a href="{{ route("admin.projects.index") }}" class="btn btn-success my-3"><i class="fa-solid fa-rotate-left me-2"></i>Return to list</a>
        <h1>Details Project</h1>

        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                <h4 class="card-title">Project Name: {{ $project["name_project"] }}</h4>
                </div>
                <div class="card-body">
                  <h6 class="slug-title">Slug title: <i>{{ $project["slug"] }}</i></h6>
                  <p class="card-text my-3"><strong>Description:</strong> {{ $project["description"] }}</p>
                  <a href="{{ route("admin.projects.edit", $project) }}" class="btn btn-primary">Update Project</a>
                </div>   
              </div>
            </div>

        </div>


    </div>
  </section>
@endsection



@section("css")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
