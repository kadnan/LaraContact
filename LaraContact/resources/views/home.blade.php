@extends('layout.master')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="row margin-top">
        <div class="col-md-11 col-md-offset-1">
            <a class="extra-padding-1 teal-text" href="#">A</a>
            <a class="extra-padding-1 teal-text" href="#">B</a>
            <a class="extra-padding-1 teal-text" href="#">C</a>
            <a class="extra-padding-1 teal-text" href="#">D</a>
            <a class="extra-padding-1 teal-text" href="#">E</a>
            <a class="extra-padding-1 teal-text" href="#">F</a>
            <a class="extra-padding-1 teal-text" href="#">G</a>
            <a class="extra-padding-1 teal-text" href="#">H</a>
            <a class="extra-padding-1 teal-text" href="#">I</a>
            <a class="extra-padding-1 teal-text" href="#">J</a>
            <a class="extra-padding-1 teal-text" href="#">K</a>
            <a class="extra-padding-1 teal-text" href="#">L</a>
            <a class="extra-padding-1 teal-text" href="#">M</a>
            <a class="extra-padding-1 teal-text" href="#">N</a>
            <a class="extra-padding-1 teal-text" href="#">O</a>
            <a class="extra-padding-1 teal-text" href="#">P</a>
            <a class="extra-padding-1 teal-text" href="#">Q</a>
            <a class="extra-padding-1 teal-text" href="#">R</a>
            <a class="extra-padding-1 teal-text" href="#">S</a>
            <a class="extra-padding-1 teal-text" href="#">T</a>
            <a class="extra-padding-1 teal-text" href="#">U</a>
            <a class="extra-padding-1 teal-text" href="#">V</a>
            <a class="extra-padding-1 teal-text" href="#">W</a>
            <a class="extra-padding-1 teal-text" href="#">X</a>
            <a class="extra-padding-1 teal-text" href="#">Y</a>
            <a class="extra-padding-1 teal-text" href="#">Z</a>
        </div>
    </div>
    <div class="row margin-top text-center visible-xs">
        <div class="col-md-6 col-md-offset-5">
            <a title="Add New Contact" class="btn-floating btn-large teal z-depth-2">
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>
    <div class="row margin-top text-center  hidden-xs">
        <div class="col-md-2 col-md-offset-10">
            <a title="Add New Contact" class="btn-floating btn-large teal z-depth-2">
                <i class="fa fa-plus"></i>
            </a>
        </div>
    </div>
        @each('components._card', $cards, 'card')
    </div>
@endsection
