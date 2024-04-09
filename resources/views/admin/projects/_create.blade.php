@extends('layouts.app')

@section('title', 'Add Project')


@section('content')
  <section>
    <div class="container">
        <a href="{{ route("admin.projects.index") }}" class="btn btn-success my-3"><i class="fa-solid fa-rotate-left me-2"></i>Return to list</a>
        <h1>Add Projects</h1>

        <form action="{{ route("admin.projects.store") }}"
        class="row g-3" method="POST">
        @csrf
        
        <div class="col-12">
            <label for="name_project" class="form-label">Name of the project</label>
            <input type="text" class="form-control" id="name_project" name="name_project">
        </div>

        <div class="col-12">
            <label for="description" class="form-label">Description of the project</label>
            <textarea type="text" class="form-control" id="description" name="description" rows="5"></textarea>
        </div>

        <div class="col-12">
            <button class="btn btn-primary">
            <i class="fa-solid fa-upload me-2"></i>Add Project
            </button>
        </div>
        </form>
    </div>
  </section>
@endsection



@section("css")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
