@extends('layouts.main')

@section('title', 'HDC Events')

@section('content' )
       <h1>Hello world</h1>

       @if ( 5 < 10)
            <p>teste</p>
       @endif
       {{ $nome }}

@endsection