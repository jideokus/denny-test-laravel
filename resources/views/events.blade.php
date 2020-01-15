@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Events</div>

                <div class="card-body">
                    @foreach($events as $event)
                    <div class="card mb-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$event->name}}</h5>
                            <p class="card-text">
                            <strong>Location: </strong>{{$event->location}}
                            <br>
                            <strong>Date: </strong>{{$event->date->toFormattedDateString()}}
                            </p>
                            
                            <a href="#" class="btn btn-primary">Join</a>
                        </div>
                    </div>
                    @endforeach
                    <div>
                        <a class="btn btn-primary" href="{{ route('create-event') }}">
                            Add event
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
