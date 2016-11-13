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
    <div class="row margin-top">
        <ul>
            @for($o =0;$o<10;$o++)
                <li class="col-md-4 medium-margin-top">
                    <div style="width:100%;height:34.5rem;" class="card teal">
                        <div class="card">
                            <div class="view overlay hm-white-slight z-depth-5">
                                <img src="http://mdbootstrap.com/images/reg/reg%20(2).jpg" class="img-responsive" alt="">
                                <a href="#">
                                    <div class="mask waves-effect"></div>
                                </a>
                            </div>
                        </div>
                        <div class="card-content white-text text-center">
                        <span class="card-title">
                            <h3>Adnan Siddiqi</h3>

                        </span>
                            <div class="card-details">
                                <h6>Freelance Consultant</h6>
                            </div>
                        </div>
                        <div class="card-action text-center">
                            <a href="#">
                                <a class="btn-floating btn-danger waves-effect waves-light white-text">M</a>
                            </a>
                        </div>
                    </div>
                </li>
            @endfor
        </ul>
    </div>
@endsection