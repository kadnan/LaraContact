@extends('layout.master')
@section('content')
    <div class="row margin-top">
        <form class="col-md-8 col-md-offset-4" method="post" enctype="multipart/form-data">
            <img width="100" height="100" src="{!! asset('app/covers/08947a20911b12bf9518c9101ee8a993.jpeg') !!}" alt="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row">
                <div class="input-field col-md-6">
                    <input placeholder="(e.g: Administrator, Freelancer)" id="" type="text" class="validate">
                    <label for="">Title</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-6">
                    <input name="first_name" id="" type="text" class="validate">
                    <label for="">First Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-6">
                    <input name="last_name" id="" type="text" class="validate">
                    <label for="icon_telephone">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-6">
                    <input name="address" id="" type="text" class="validate">
                    <label for="icon_telephone">Address</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-6">
                    <input name="city" id="" type="text" class="validate">
                    <label for="icon_telephone">City</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-6">
                    <input name="country" id="" type="text" class="validate">
                    <label for="icon_telephone">Country</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-6">
                    <input name="email" type="email" class="validate">
                    <label for="email" data-error="Invalid Email" data-success="OK" for="">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-6">
                    <input name="home_phone" required pattern="\d{2,3}[\-]\d{2,3}[\-]\d{7,8}" placeholder="Enter in format(92-21-34567898)" id="" type="text" class="validate">
                    <label  data-error="Invalid Format" data-success="OK" for="icon_telephone">Home Phone</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-6">
                    <input name="office_phone" required pattern="\d{2,3}[\-]\d{2,3}[\-]\w{6,15}" placeholder="Enter in format(92-21-34567898)" id="icon_telephone" type="text" class="validate">
                    <label  data-error="Invalid Format" data-success="OK" for="icon_telephone">Office Phone</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-6">
                    <input name="mobile" placeholder="(e.g: 92-300-12345678)" required pattern="\d{2,3}[\-]\d{2,4}[\-]\d{7,9}" placeholder="Enter in format(92-300-34567898)" id="icon_telephone" type="text" class="validate">
                    <label  data-error="Invalid Format" data-success="OK" for="icon_telephone">Mobile</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col-md-6">
                    <div>
                        <label for="">Select background cover photo
                            <input name="cover_photo" type="file" class="form-control teal">
                        </label>
                    </div>

                </div>
            </div>
            <div class="row large-margin-top">
                <div class="input-field col-md-6">
                    <input type="submit" value="Submit" class="form-control teal">
                </div>
            </div>
        </form>
    </div>
@endsection