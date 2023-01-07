@extends('layouts.main')

@section('title', 'HDC Events')

@section('content' )


<div id="search-container" class="col-md-12">
     <h1>Procure um evento</h1>
     <form action="">
          <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
     </form>

</div>

<div id="events-container" class="col-md-12">

<h2>Pr�ximos eventos</h2>
<p>Veja os eventos nos pr�ximos dias</p>
<div id="cards-container" class="row">
     @foreach($events as $event)
     <div class="card col-md-3">
          <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}">
          <div class="card-body">
               <p class="card-date">10.09.2022</p>
               <h5 class="card-title">{{ $event->title }}</h5>
               <p class="card-participants"> X participantes {{ $event->descriptions }}</p>
               <a href="#" clas="btn btn-primary">Saber Mais</a>
          </div>
     </div>
       
     @endforeach
</div>

</div>
       



@endsection