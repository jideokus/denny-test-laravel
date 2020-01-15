@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create event</div>

                <div class="card-body">
                    <form method="post" action="/events/submit">
                        @csrf
                        <div class="form-group">
                            <label for="name">Event name</label>
                            <input type="text" class="form-control" id="name" placeholder="Event name here" name="name">
                        </div>
                        <div class="form-group">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" placeholder="Event location here" name="location">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" placeholder="Event date here" name="date">
                        </div>
                        <button type="submit" class="btn btn-primary">Create event</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
