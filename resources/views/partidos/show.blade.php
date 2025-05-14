@extends('layouts.app')

@section('content')
  <div class="container mx-auto p-4">
    {{-- Título del partido --}}
    <h1 class="text-3xl font-bold mb-4">{{ $partido->name }}</h1>

    <img src="{{ asset('imagenes/' . $partido->logo) }}"
        alt="{{ $partido->name }}"
        class="mb-6 max-w-xs">

    {{-- Contenido HTML dinámico --}}
    <div class="prose">
      {!! $partido->contenido_html !!}
    </div>
  </div>
@endsection
