


@extends('layouts.app')

@section('content')

<header class="small">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>selected<br>work</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="header-background">
        <div class="geopattern">
            {!! file_get_contents(asset('img/pattern/geopattern.svg')) !!}
        </div>
    </div>
</header>
<section class='dimmed'>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p>Below I've listed some of the favorite things I've worked on. Each project has a page that lists a bit more about the process and why I want to share the project. I hope you enjoy the works, and if you have any questions feel free to send me an email.</p>
                <hr>
            </div>
        </div>
    </div>
    
</section>

<section>
    
    <div class="container pull-up">
        <div class="row">
            <div class="col-md-7">
                <h3>Projects</h3>
            </div>
        </div>
    </div>
    <div class="container projects-container">
        <div class="row">
            <div class="col-md-12 project">
                <div class="project-content">
                    <small>Visual identity</small>
                    <h4>Zorginstelling ambions</h4>
                    <p>The imperfection in this style tells the story that the beauty of life isn't just in the perfection of a situation but the fact that we're there to experience it. To remain curious and to keep discovering, even when the road of discovery is rough and unique.</p>
                    <div class="cta">
                        <a href="/cases/ambions" class="button">Read more</a>
                    </div>
                </div>
                <div class="project-thumbnail">
                    <img src="{{ asset('img/cases/ambions/webdesign.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-12 project">
                <div class="project-content">
                    <small>Visual identity</small>
                    <h4>25seven</h4>
                    <p>Pushing a brand to be able to reach it's full potential, 25seven brings value to brands by creating beautiful content, strategically distributing on social networks and allowing influencers to monetize their platform.</p>
                    <div class="cta">
                        <a href="/cases/25seven" class="button">Read more</a>
                    </div>
                </div>
                <div class="project-thumbnail">
                    <img src="{{ asset('img/cases/25seven/thumbnail.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-12 project">
                <div class="project-content">
                    <small>Visual identity</small>
                    <h4>Gorilla Gang</h4>
                    <p>The imperfection in this style tells the story that the beauty of life isn't just in the perfection of a situation but the fact that we're there to experience it. To remain curious and to keep discovering, even when the road of discovery is rough and unique.</p>
                    <div class="cta">
                        <a href="/cases/gorilla" class="button">Read more</a>
                    </div>
                </div>
                <div class="project-thumbnail">
                    <img src="{{ asset('img/cases/Gorilla gang/thumbnail.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-12 project">
                <div class="project-content">
                    <small>Visual identity</small>
                    <h4>Gaming & Esports</h4>
                    <p>The imperfection in this style tells the story that the beauty of life isn't just in the perfection of a situation but the fact that we're there to experience it. To remain curious and to keep discovering, even when the road of discovery is rough and unique.</p>
                    <div class="cta">
                        <a href="/cases/gaming" class="button">Read more</a>
                    </div>
                </div>
                <div class="project-thumbnail">
                    <img src="{{ asset('img/cases/Gaming/Twitter header - valorant.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
