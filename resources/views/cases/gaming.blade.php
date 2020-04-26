





@extends('layouts.app')

@section('content')

<header class="extra-small special">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Esports & Gaming</h1>
                    <br><br><br><br><br><br>

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
<section class='dimmed negative-margin'>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p>I originally started creating graphics that were affiliated with the gaming community and the esports/gaming influencer scene. Lately I’ve been actively creating more designs targeted towards this community that keeps me in it’s grasp.</p>
                <hr>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="container">
        <div class="row project-block">
            <div class="col-md-4">
                <strong class="bold">Valorant</strong>
            </div>
            <div class="col-md-8 img-container">
                <video allowFulscreen="false" controls="false" autoplay loop muted src="{{ asset('img/cases/Gaming/Valorant hendriktol.mp4') }}">
                    <source src="{{ asset('img/cases/Gaming/Valorant hendriktol.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
        <div class="row project-block">
            <div class="col-md-4">
                <strong class="bold">The client</strong>
            </div>
            <div class="col-md-8 big">
                <p>This project is basically a collection of works that I created either out of personal interest or that connect to the gaming and esports scene</p>
            </div>
        </div>
        <div class="row project-block">
            <div class="col-md-12">
                <strong class="bold">The Approach</strong>
                <br>
                <p>The approach here is to engage with a scene that I love to be involved in. And to create within a space that feels so familiar.</p>
            </div>
            <div class="col-md-8">
                <hr>
            </div>
        </div>
        <div class="row project-block">
            <div class="col-md-4">
                <strong class="bold">The result</strong>
            </div>
            <div class="col-md-8">
                <p>The result is a bunch of graphics that reflect what it can be like to work from pure interest. Often resulting in work that leaves that leaves a very positive impression on people.</p>
            </div>
            <div class="col-md-8">
                <hr>
            </div>
        </div>
    </div>
    <div class="slider-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="rslides">
                        <li><img src="{{ asset('img/cases/Gaming/Twitter header - valorant.png') }}" alt=""></li>
                        <li><img src="{{ asset('img/cases/Gaming/livestream visuals.png') }}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</section>

@endsection
