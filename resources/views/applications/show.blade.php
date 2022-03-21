@extends('layouts.main')

@section('title', 'Viewing Application')

@section('content')

<div id="machine-create-container" class="col-md-6 offset-md-3">
    <h1>Viewing the <span style="color:#2599c0; margin-bottom: 20px">{{ $machine->cliente }}</span> application</h1>
    <form action="/applications/editApplications" method="POST">
        @csrf

        <div class="form-group">
            <label for="cliente">Project</label>
            <input type="text" class="form-control" id="cliente" name="cliente" placeholder="{{ $machine->cliente }}" value="{{ $machine->cliente }}">
        </div>
        <div class="form-group">
            <label for="clientesenha">Project password</label>
            <input type="text" class="form-control" id="clientesenha" name="clientesenha" placeholder="{{ $machine->clientesenha }}" value="{{ $machine->clientesenha }}" readonly="">
        </div>     
        <div class="form-group">
            <label for="city">Maximum logged users / month</label>
            <input type="text" class="form-control" id="maxusers" name="maxusers" placeholder="{{ $machine->maxusers }}" value="{{ $machine->maxusers }}">
        </div>
        <div class="form-group">
            <label for="createdby">URL</label>
            <input type="text" class="form-control" id="url" name="url" placeholder="https://{{ $machine->cliente }}.virtual.town" value="https://{{ $machine->cliente }}.virtual.town" readonly="">
        </div>
        <div class="form-group">
            <label for="createdby">URL Alias</label>
            <input type="text" class="form-control" id="urlalias" name="urlalias" placeholder="https://{{ $machine->cliente }}.com.br" value="https://{{ $machine->cliente }}.com.br" readonly="">
        </div>
        <div class="form-group">
            <label for="createdby">URL Api</label>
            <input type="text" class="form-control" id="urlapi" name="urlapi" placeholder="https://api.{{ $machine->cliente }}.virtual.town" value="https://api.{{ $machine->cliente }}.virtual.town" readonly="">
        </div>
        <div class="form-group">
            <label for="createdby">Created By</label>
            <input type="text" class="form-control" id="createdby" name="createdby" placeholder="{{ $machine->createdby }}" value="{{ $machine->createdby }}" readonly="">
        </div>
        <div class="form-group">
            <label for="description">Created At</label>
            <input type="text" class="form-control" id="createdat" name="createat" placeholder="{{ date('d/m/Y H:i:s', strtotime($machine->created_at)) }}" value="{{ date('d/m/Y H:i:s', strtotime($machine->created_at)) }}" readonly="">
        </div>

        <input type="submit" class="btn btn-primary" value="Edit Application">
        <button type="button" class="btn btn-primary" disabled>Pause Application</button>
        <button type="button" class="btn btn-primary">Archive Application</button>
    </form>
</div>
@endsection
