@extends('contacts.layout')
@section('content')

<div class="card">
  <div class="card-header">modifica utenti</div>
  <div class="card-body">

      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>Nome</label></br>
        <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="address" id="address" value="{{$contacts->address}}" class="form-control"></br>
        <label>Telefono</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$contacts->mobile}}" class="form-control"></br>
        <label>Corso</label></br>
        <input type="text" name="course" id="course" value="{{$contacts->course}}" class="form-control"></br>
        <label>Scadenza visita medica</label></br>
        <input type="text" name="scadenza" id="scadenza" value="{{$contacts->scadenza}}" class="form-control"></br>
        <label>Mesi di iscrizione</label></br>
        <input type="text" name="mesi" id="mesi" value="{{$contacts->mesi}}" class="form-control"></br>
        <input type="submit" value="Aggiorna" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
