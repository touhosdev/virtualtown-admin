@extends('layouts.main')

@section('title', 'Create Application')

@section('content')

<div id="machine-create-container" class="col-md-6 offset-md-3">
    <h1>Create new application</h1>
    <form action="/applications" method="POST">
        @csrf

        <div class="form-group">
            <label for="cliente">Project</label>
            <input type="text" class="form-control" id="cliente" name="cliente">
        </div>
        <div class="form-group">
            <label for="clientesenha">Project password</label>
            <input type="text" class="form-control" id="clientesenha" name="clientesenha" placeholder="Generate Password" readonly="">
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-primary" id="btn" onclick="getPassword()">Generate Password</button>
        </div>        
        <div class="form-group">
            <label for="city">Maximum logged users / month</label>
            <input type="text" class="form-control" id="maxusers" name="maxusers">
        </div>
        <div class="form-group">
            <label for="createdby">Created By</label>
            <input type="text" class="form-control" id="createdby" name="createdby" placeholder="{{ Auth::user()->name }}" value="{{ Auth::user()->name }}" readonly="">
            
        </div>
        <div class="form-group">
            <label for="description">Created At</label>
            <input type="text" class="form-control" id="createdat" name="createat" placeholder="{{ date('d/m/Y', strtotime('now')) }}" value="{{ date('d/m/Y', strtotime('now')) }}" readonly="">
        </div>

        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>
@endsection
