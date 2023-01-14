@extends('layouts.main')

@section('title', 'Editando'. $event->title)

@section('content' )

<div id="event-create-container" class="col-sm-5 offset-sm-3" >
  <h1>Edite o seu evento</h1>
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method("PUT")
  <div  class="mb-3" style=" display: inline-block; ">
    <label for="image" class="form-label">Imagem do evento:</label>
    <input type="file" id="image" name="image" class="form-control-file">
    <img class="img-preview" src="/img/events/{{$event->image}}" alt="{{ $event->title }}" >
   </div>

   <div  class="mb-3">
    <label for="title" class="form-label">Evento:</label>
    <input type="text" name="title" id="title" value="{{$event->title}}" class="form-control" placeholder="Nome do evento">
   </div>

   <div  class="mb-3">
    <label for="city" class="form-label">Cidade:</label>
    <input type="text" name="city" id="city" value="{{$event->city}}" class="form-control" placeholder="Cidade do evento">
   </div>

   <div   class="mb-3">
      <label for="private">O evento &eacute; privado?</label>
      <select name="private" id="private" class="form-control" >
        <option value="0" >N&atilde;o</option>
        <option value="1" {{ $event->private == 1 ? "selected" : ""}} >Sim</option>
      </select>
    </div>

   <div class="mb-3">
    <label for="descriptions" class="form-label">Descri&ccedil;ao:</label>
    <textarea name="descriptions" id="descriptions" class="form-control" placeholder="Digite a descri&ccedil;&atilde;o do evento aqui!">{{$event->descriptions}}</textarea>
   </div>


    <div class='col-mb-3' style="margin-bottom:10px;">
      <label for="date" class="form-label">Data do evento:</label>
        <input type="text" class="form-control" id="date" name="date" value="{{$event->date->format('Y/m/d')}}"/>
    </div>

   <div class="mb-3">
    <label for="" class="form-label">Adicione infos de infraestrutura:</label>
    <div class="form-check">
      <input class="form-check-input" id="item1" type="checkbox" name="items[]" value="Cadeiras">
      <label class="form-check-label" for="item1">
       Cadeiras
      </label>
    </div>
  
    <div class="form-check">
      <input class="form-check-input" id="item2" type="checkbox" name="items[]" value="Palco">
      <label class="form-check-label" for="item2">
       Palco
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" id="item3" type="checkbox" name="items[]" value="Cerveja Gratis">
      <label class="form-check-label" for="item3">
      Cerveja Gratis
      </label>
    </div>
    
    <div class="form-check">
      <input class="form-check-input" id="item4" type="checkbox" name="items[]" value="Open Food">
      <label class="form-check-label" for="item4">
      Open Food
      </label>
    </div>


   </div>

   <input type="submit" class="btn btn-primary" value="Criar Evento" class="mb-3">
  </form>
</div>


@endsection