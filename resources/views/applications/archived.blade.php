@extends('layouts.main')

@section('title', 'Archived Applications')

@section('content')

{{-- Applications Archived --}}
<div id="machines-container" class="col-md-12">
    <h2>Archived Applications</h2>

    @if(count($machines) > 0)
    <p class="subtitle">See the lastest created applications</p>
    @endif
    @if(count($machines) == 0)
    <p class="subtitle">No applications created</p>
    @endif

    <div id="cards-container" class="row">
        @foreach($machines as $machine)
        <div class="card col-md-3">

            <div class="card-body">
                <p class="card-date">
                    Ultima atualização: {{ date('d/m/Y H:i:s', strtotime($machine->updated_at)) }}
                </p>
                <h5 class="card-title">
                    {{ $machine->cliente }}
                </h5>
                <p class="card-participants">Application Status:
                @if($machine->status == 0)
                    <span style="font-weight: bold;color: red;">Archived</span>
                @endif
                @if($machine->status == 1)
                <span style="font-weight: bold;color: green;">Online</span>
                @endif
                </p>
                <p class="card-participants">Maximum logged users / month: <span style="font-weight: bold;">{{ $machine->maxusers }}</span></p>
                <p class="card-participants">Created by: <span style="font-weight: bold;">{{ $machine->createdby }}</span></p>
                <p class="card-participants">https://{{ $machine->cliente }}.virtual.town</p>
                <a href="/applications/{{ $machine->id }}" class="btn btn-primary">Open Application</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection