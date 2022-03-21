@extends('layouts.main')

@section('title', 'VirtualTown - Admin')

@section('content')


@if(count($users) == 0)
<div id="machine-create-container" class="col-md-6 offset-md-3">
    <h1>First Access</h1>
    <form action="/FirstAcess" method="POST">
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
@else
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/imgs/search.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
@endif


@endsection