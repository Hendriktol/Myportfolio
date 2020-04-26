


@extends('layouts.app')

@section('content')

<header class="extra-small special">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="header-background no-after">
        <div class="geopattern">
            {!! file_get_contents(asset('img/pattern/geopattern.svg')) !!}
        </div>
    </div>
</header>
<section class='dimmed'>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Preferred contact is done through e-mail.</p>
                <a href="mailto:hendrik.tol@hotmail.com"><i class="fas fa-envelope"></i> hendrik.tol@hotmail.com</a>
                <hr>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="container pull-up">
        <div class="row">
            <div class="col-md-6">
                <h3>Address</h3>
                <br>
                <p>Franklinhage 13<br>
                    8302 WD Emmeloord<br>
                    The netherlands
                </p>
            </div>
            <div class="col-md-6">
                <h3>Socials</h3>
                <br>
                <p>A follow on the following social media would be very much appreciated.</p>
                <br>
                <div class="social-links">
                    <a href="https://twitch.tv/hendriktol" class=""><i class="fab fa-twitch"></i></a>
                    <a href="https://twitch.tv/hendriktol" class=""><i class="fab fa-twitter"></i></a>
                    <a href="https://twitch.tv/hendriktol" class=""><i class="fab fa-youtube"></i></a>
                    <a href="https://twitch.tv/hendriktol" class=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 map-container">
                <div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=100&amp;hl=en&amp;q=Franklinhage%2013+(Hendrik%20Tol)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/draw-radius-circle-map/">Google Maps radius calculator</a></iframe></div><br />
            </div>
        </div>
    </div>
</section>

@endsection