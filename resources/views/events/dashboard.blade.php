@extends('layouts.main')


@section('content')

<div class="col-md-10 offset-md-1 dasboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dasboard-events-container">
    @if(count($event) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Acoes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($event as $evn)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td><a href="/events/{{ $evn->id }}">{{ $evn->title }}</a></td>
                <td>0</td>
                <td><a href="#">Editar</a>  <a href="#">Excluir</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Voce ainda nao tem eventos, <a href="/events/create">Criar evento</a></p>
    @endif
</div>

@endsection