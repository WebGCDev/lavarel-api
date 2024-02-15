@extends('layouts.admin')

@section('content')
<button class="btn btn-primary m-2">
          <a class="text-white text-decoration-none" href="{{ route('admin.projects.create')}}">CREATE</a>
</button>

 <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">TITOLO</th>
      <th scope="col">AUTORE</th>
      <th scope="col">LINGUAGGIO</th>
      <th class="text-center" scope="col">LINK PROGETTO</th>
      <th class="text-center" scope="col">INFO PROGETTO</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $project)
    <tr class="align-middle">
      <th scope="row">{{$project->id}}</th>
      <td>{{$project->title}}</td>
      <td>{{$project->title}}</td>
      <td>{{$project->lang}}</td>
      <td class="text-center">
        <button class="btn  btn-secondary">
          <a class="text-white text-decoration-none " href="{{$project->link_github}}"><i class="fa-brands fa-github"></i></a>
        </button>
      </td>
      <td class="text-center d-flex gap-1" >
        <button class="btn btn-info">
          <a class="text-white text-decoration-none" href="{{ route('admin.projects.show', $project->id)}}">INFO</a>
        </button>
        <button class="btn btn-success">
          <a class="text-white text-decoration-none" href="{{ route('admin.projects.edit', $project->id)}}">Edit</a>
        </button>
        <form action="{{route('admin.projects.destroy',$project->id)}}" method="POST">
          @csrf
          @method('DELETE')
        <button class="btn  btn-danger">
        <i class="fa-solid fa-xmark"></i></a>
        </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection