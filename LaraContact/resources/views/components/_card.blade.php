<div class="col-md-4 medium-margin-top">
    <div style="width:100%;height:35.5rem;" class="card teal">
        <div class="testimonial-card">
            <div style="height: 14rem;" class="view overlay hm-white-slight">
                <a href="view/{!! $card['id'] !!}">
                    <img style="position: relative;float: left;z-index: 1;" src="{!! asset($card['image']) !!}" class="img-responsive center-block">
                    <div class="center-block" style="position: absolute;top: 5rem;left:40%;z-index: 900;">
                        <img  src="https://www.gravatar.com/avatar/{!! $card['avatar'] !!}" class="img-circle img-responsive">
                    </div>
                    <div class="mask waves-effect"></div>
                </a>
            </div>
        </div>
        <div class="card-content white-text text-center">
            <span class="card-title">
                <h3>{!! $card['name'] !!}</h3>
            </span>
            <div class="card-details">
                <h6>{!! $card['title'] !!}</h6>
                <div><i class="fa fa-envelope"></i> <a class="white-text" href="mailto:{!! $card['email'] !!}">{!! $card['email'] !!}</a></div>
                <div><i class="fa fa-map-marker"></i> {!! $card['address'] !!}, {!! $card['city'] !!} - {!! $card['country'] !!}</div>
                <div style="margin-top: 10px;">
                    <span style="padding-left: 5px;"><i class="fa fa-phone"></i> <small> {!! $card['phone_home'] !!}</small></span>
                    <span style="padding-left: 5px;"><i class="fa fa-mobile"></i> <small> {!! $card['mobile'] !!}</small></span>
                    <span style="padding-left: 5px;"><i class="fa fa-building"></i><small> {!! $card['phone_office'] !!}</small></span>
                </div>
            </div>
        </div>
        <div class="card-action text-center">
            <a href="#">
                <a href="edit/{!! $card['id'] !!}" class="btn-floating btn-danger waves-effect waves-light white-text">
                    <i class="fa fa-pencil"></i>
                </a>
            </a>
        </div>
    </div>
</div>