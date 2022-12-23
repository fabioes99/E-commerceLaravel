@extends('layouts.main')

@section('title', 'Produto')

@section('content' )
      
@if($id == null)
  <p>Nenhum produto encontrado</p>
@else
  <p>Exibindo produto id: {{ $id }}</p>
@endif
@endsection