@extends('contacts.layout')
@section('content')

<div class="card">
  <div class="card-header">nuovi utenti</div>
  <div class="card-body">

      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Nome</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Telefono</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>Corso</label></br>
        <input type="text" name="course" id="course" class="form-control"></br>
        <label>Scadenza visita medica</label></br>
        <input type="text" name="scadenza" id="scadenza" class="form-control"></br>
        <label>Mesi di iscrizione</label></br>
        <input type="text" name="mesi" id="mesi" class="form-control"></br>
        <input type="submit" value="Salva" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
