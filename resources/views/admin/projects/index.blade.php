@extends('layouts.app')

@section('title', 'List Projects')


@section('content')
  <section>
    <div class="container">
        <a href="{{ route("admin.projects.create") }}" class="btn btn-success my-3"><i class="fa-solid fa-upload me-2"></i>Aggiungere nuovo progetto</a>
        <h1>List Projects</h1>

        <table class="table table-striped border">
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Project Slug</th>
                    <th>Description</th>
                    <th>Buttons</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $project)
                   <tr>
                       <td>{{ $project["name_project"] }}</td>
                       <td>{{ $project["slug"] }}</td>
                       <td>{{ $project->redDescription(50) }}</td>
                       <th>
                       <a href="{{ route("admin.projects.show", $project) }}" class="btn btn-info my-3"><i class="fa-solid fa-book"></i></a>

                       <a href="{{ route("admin.projects.edit", $project) }}" class="btn btn-warning my-3"><i class="fa-solid fa-pen-to-square"></i></a>

                       <button data-bs-target="#delete-project-{{ $project->id }}-modal"  class="btn btn-danger my-3" type="button" class="btn btn-primary" data-bs-toggle="modal"><i class="fa-solid fa-xmark"></i></button>

                       </th>
                   </tr>
                @empty
                   <tr>
                       <td colspan="100%">
                           <span>Nessun risultato trovato</span>
                       </td>
                   </tr>
                @endforelse
            </tbody>
        </table>

        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
  </section>
@endsection


@section("modal")
@foreach($projects as $project)
  <div class="modal fade" id="delete-project-{{ $project->id }}-modal" data-bs-backdrop="static" 
  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminazione progetto {{ $project->name_project }}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler eliminare il progetto {{ $project->name_project }}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{ route("admin.projects.destroy", $project) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-warning">Elimina</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endforeach
@endsection

@section("css")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
