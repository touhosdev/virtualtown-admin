@extends('layouts.main')

@section('title', 'Create Application')

@section('content')

<div id="machine-create-container" class="col-md-6 offset-md-3">
    <h1>Add new user</h1>
    <form action="/applications/registerNewUser" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="password">User password</label>
            <input type="text" class="form-control" id="clientesenha" name="password" placeholder="Generate Password" readonly="">
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-primary" id="btn" onclick="getPassword()">Generate Password</button>
        </div>        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>

        <input type="submit" class="btn btn-primary" value="Add User">
    </form>
</div>
@endsection
