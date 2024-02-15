@extends('layouts.admin')

@section('content')
  <ul >
        {{-- <li>{{$project->type?->title}}  nullish operatore --}}

        <li>Titolo: {{$project->title}}</li>
        <li>Autore: {{$project->author}}</li>
        <li>Categoria: {{$project->type?->title}}</li>
        <li>Data creazione: {{$project->creation_date}}</li>
        <li>Ultimo commit: {{$project->last_update}}</li>
        <li>Linguaggi di programmazione: {{$project->lang}}</li>
        <li>Link: {{$project->link_github}}</li>
        <li>Tecnologie in uso:
          @foreach ($project->technologies as $technology) {{$technology->title}},
          @endforeach
        </li>
        
  </ul>
@endsection