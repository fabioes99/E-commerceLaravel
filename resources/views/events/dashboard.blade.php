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
                <td>{{count($evn->users)}}</td>
                <td>
                   
                 <a class="btn btn-info edit-btn" href="/events/edit/{{ $evn->id }}">
                    <ion-icon name="create-outline"></ion-icon>Editar</a>  
                <form action="/events/{{ $evn->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger delete-btn">
                        <ion-icon name="trash-outline"></ion-icon>Deletar</button>
                </form>

                </td>
                       
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Voce ainda nao tem eventos, <a href="/events/create">Criar evento</a></p>
    @endif
</div>

<div class="col-md-10 offset-md-1 dasboard-title-container">
    <h1>Eventos que estou participando</h1>
</div>

<div class="col-md-10 offset-md-1 dasboard-title-container">
    @if(count($eventsasparticipants) > 0)
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
            @foreach($eventsasparticipants as $evn)
            <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td><a href="/events/{{ $evn->id }}">{{ $evn->title }}</a></td>
                <td>{{count($evn->users)}}</td>
                <td>
                  <form action="/events/leave/{{ $evn->id }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger delete-btn">
                            <ion-icon name="trash-outline"></ion-icon>Sair do evento</button>
                    </form>
                </td>
                       
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Voce ainda nao esta participando de nenhum evento <a href="/">Veja os eventos disponiveis</a></p>
    @endif
</div>

@endsection