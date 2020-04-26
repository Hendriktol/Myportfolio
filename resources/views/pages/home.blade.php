
@extends('layouts.app')

@section('content')

<header>
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Hendrik<br>Tol</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="header-background">
        <div class="portrait">
            <img src="{{  asset('img/portrait/portrait.png')  }}" alt="">
        </div>
        <div class="geopattern">
            {!! file_get_contents(asset('img/pattern/geopattern.svg')) !!}
        </div>
    </div>
</header>
<section class='dimmed'>
    <div class="section-seperator">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>About me</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <p>Some stories deserve to be heared, and some stories are presented in a way that makes it very unlikely for someone to ever hear about the story. I'm here to package your story in a way that supports and facilitates the message.</p>
                <hr>
            </div>
        </div>
    </div>
    
    <div class="bottom-cta">
        <div class="container">
            <div class="row reverse">
                <div class="col-element">
                    <a href="/about" class="button">Read more</a>
                </div>
            </div>
        </div>
    </div>
    
</section>

<section class="port-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Selected Works</h2>
            </div>
        </div>
    </div>
    <div class="port-section-visuals">
        <div class="port-graphics-pattern">
            {!! file_get_contents(asset('img/pattern/geopattern.svg')) !!}
        </div>
        <div class="dutch-map">
            {!! file_get_contents(asset('img/pattern/netherlands.svg')) !!}
        </div>
    </div>
</section>

<section class="post-port-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 case case-primary">
                <div class="case-image">
                    <img src="{{ asset('img/cases/ambions/webdesign.png') }}" alt="">
                </div>
                <div class="case-content">
                    <i>Visual identity</i>
                    <h4>Zorginstelling ambions</h4>
                    <br>
                    <p>The imperfection in this style tells the story that the beauty of life isn't just in the perfection of a situation but the fact that we're there to experience it. To remain curious and to keep discovering, even when the road of discovery is rough and unique.</p>
                    <div class="cta">
                        <a href="/cases/ambions" class="button">Read more</a>
                    </div>
                </div>
            </div>
            <div class="secondary-cases">
                <a href='cases/25seven' class="case">
                    <div class="case-thumbnail">
                        <div class="tag new">
                            <p>New</p>
                        </div>
                        <img src="{{ asset('img/cases/25seven/thumbnail.png') }}" alt="">
                    </div>
                </a>
                <a href='cases/gorilla' class="case">
                    <div class="case-thumbnail">
                        <div class="tag new">
                            <p>New</p>
                        </div>
                        <img src="{{ asset('img/cases/GOrilla gang/thumbnail.png') }}" alt="">
                    </div>
                </a>
                <a href='cases/gaming' class="case">
                    <div class="case-thumbnail">
                        <div class="tag new">
                            <p>New</p>
                        </div>
                        <img src="{{ asset('img/cases/Gaming/Twitter header - valorant.png') }}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection