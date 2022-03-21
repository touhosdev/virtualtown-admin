@extends('layouts.main')

@section('title', 'List Applications')

@section('content')

{{-- Registered Users --}}
<div id="machines-container" class="col-md-12">


    <h2>Registered Users</h2>


    @if(count($users) > 0)
    <p class="subtitle">See all users</p>
    @endif
    @if(count($users) == 0)
    <p class="subtitle">No users created</p>
    @endif

    <div class="d-flex justify-content-start" style="padding-bottom: 10px;">
        <a href="/applications/newUser" class="btn btn-primary">Register New User</a>
    </div>

    <div id="cards-container" class="row">
        @foreach($users as $user)
        <div class="card col-md-3">

            <div class="card-body">
                <p class="card-date">
                    Ultima atualização: {{ date('d/m/Y H:i:s', strtotime($user->updated_at)) }}
                </p>
                <h5 class="card-title">
                    {{ $user->name }}
                </h5>
                <p class="card-participants">Email: <span style="font-weight: bold;">{{ $user->email }}</span></p>
                <p class="card-participants">Criado em: {{ date('d/m/Y H:i:s', strtotime($user->created_at)) }}</p>
                <a href="#" class="btn btn-primary" disabled>Open User</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection