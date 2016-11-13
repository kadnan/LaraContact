@extends('layout.master')
@section('content')
    <div class="hidden">
        <a class="btn btn-default waves-effect waves-light">Default</a>
        <a class="btn btn-primary waves-effect waves-light">Primary</a>
        <a class="btn btn-success waves-effect waves-light">Success</a>
        <a class="btn btn-info waves-effect waves-light">Info</a>
        <a class="btn btn-warning waves-effect waves-light">Warning</a>
        <a class="btn btn-danger waves-effect waves-light">Danger</a>
        <a class="btn btn-link">Link</a>
    </div>

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
        @each('components._card', $cards, 'card')
    </div>
@endsection
