@extends('contacts.layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">PALESTRA DATI UTENTI ABBONATI</div>
                    <div class="card-body">
                        <a href="{{ url('/contact/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Aggiungi nuovo utente
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>Corso</th>
                                        <th>Scadenza visita medica</th>
                                        <th>Mesi di iscrizione</th>
                                        <th>Azioni</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>{{ $item->course }}</td>
                                        <td>{{ $item->scadenza}}</td>
                                        <td>{{ $item->mesi }}</td>

                                        <td>
                                            <a href="{{ url('/contact/' . $item->id) }}" title="View utenti"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Guarda</button></a>
                                            <a href="{{ url('/contact/' . $item->id . '/edit') }}" title="Edit utenti"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifica</button></a>

                                            <form method="POST" action="{{ url('/contact' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Cancella</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
