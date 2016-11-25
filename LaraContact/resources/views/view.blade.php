@extends('layout.master')
@section('content')
    <div class="row">
        <div class="text-center extra-padding-1 col-md-12" style="color: white; height: 300px; background: url('{!! asset('app/'.$contact->cover_photo) !!}')">
            <h1>{!! $contact->title !!}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-1 medium-margin-top">
            <div class="form-group">
                <label for=""><h5>Name:</h5> </label>
                <span class="teal-text">{!! $contact->first_name.' '.$contact->last_name !!}</span>
            </div>
            <div class="form-group">
                <label for=""><h5>Address:</h5> </label>
                <span class="teal-text">{!! $contact->address !!}</span>
            </div>

            <div class="form-group">
                <label for=""><h5>City:</h5> </label>
                <span class="teal-text">{!! $contact->city !!}</span>
            </div>

            <div class="form-group">
                <label for=""><h5>Country:</h5> </label>
                <span class="teal-text">{!! $contact->country !!}</span>
            </div>

            <div class="form-group">
                <label for=""><h5>Email:</h5> </label>
                <span class="teal-text"><a class="teal-text" href="mailto:{!! $contact->email !!} ">{!! $contact->email !!}</a></span>
            </div>
            <div class="form-group">
                <label for=""><h5>Phone <small>(Home)</small>:</h5> </label>
                <span class="teal-text">{!! $contact->home_phone !!}</span>
            </div>
            <div class="form-group">
                <label for=""><h5>Phone <small>(Office)</small>:</h5> </label>
                <span class="teal-text">{!! $contact->office_phone !!}</span>
            </div>
            <div class="form-group">
                <label for=""><h5>Mobile:</h5> </label>
                <span class="teal-text">{!! $contact->mobile !!}</span>
            </div>
            <div class="form-group">
                <a href="/edit/{!! $contact->id !!}" class="btn btn-primary">Edit</a>
                <a id="delete" href="/delete/{!! $contact->id !!}" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
@endsection