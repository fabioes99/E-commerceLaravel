@extends('layouts.main')


@section('content')

<div class="col-md-10 offset-md-1 dasboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dasboard-events-container">
    @if(count($events) > 0)
    @else
    <p>Voce ainda nao tem eventos, <a href="/events/create">Criar evento</a></p>
    @endif
</div>

@endsection