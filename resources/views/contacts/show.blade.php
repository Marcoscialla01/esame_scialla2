@extends('contacts.layout')
@section('content')


<div class="card">
  <div class="card-header">guarda utente</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Nome : {{ $contacts->name }}</h5>
        <p class="card-text">Email : {{ $contacts->address }}</p>
        <p class="card-text">Telefono : {{ $contacts->mobile }}</p>
        <p class="card-text">Corso : {{ $contacts->course }}</p>
        <p class="card-text">Scadenza visita medica: {{ $contacts->scadenza }}</p>
        <p class="card-text">Mesi di iscrizione : {{ $contacts->mesi }}</p>
  </div>

    </hr>

  </div>
</div>
