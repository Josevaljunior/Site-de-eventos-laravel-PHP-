@extends('layouts.main')
@section('title','Criar Evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
       @csrf
       <div class="form-grup">
           <label for="image">Imagem do evento</label>
          <input type="file" id="image" name="image" class="form-control-file">
       </div>
       <div class="form-grup">
           <label for="title">Evento</label>
           <input type="text" class="form-control" id="tilte" name="title" placeholder="Nome do evento..">
       </div>
       <div class="form-grup">
           <label for="title">Cidade</label>
           <input type="text" class="form-control" id="city" name="city" placeholder="local do evento">
       </div>
       <div class="form-grup">
           <label for="title">O evento é privado?</label>
          <select name="private" id="private" class="form-control">
              <option value="0">Não</option>
              <option value="1">Sim</option>
          </select>
       </div>
       <div class="form-grup">
           <label for="title">Descrição:</label>
          <textarea name="description" id="description"  class="form-control" placeholder="Oque vai acontecer no evento"></textarea>
       </div>
       <div class="form-grup">
           <label for="title">Adicinar itens de infreestrutura:</label>
           <div class="form-group">
               <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
           </div>
           <div class="form-group">
               <input type="checkbox" name="items[]" value="Palco"> Palco
           </div>
           <div class="form-group">
               <input type="checkbox" name="items[]" value="Cerveja gratis"> Cerveja gratis
           </div>
           <div class="form-group">
               <input type="checkbox" name="items[]" value="Open Food"> Open food
           </div>
           <div class="form-group">
               <input type="checkbox" name="items[]" value="Brindes"> Brindes
           </div>
       </div>
       <input type="submit" class="btn btn-primary" value="criar evento">
    </form>

</div>

@endsection
