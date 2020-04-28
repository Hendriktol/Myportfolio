



@extends('layouts.app')

@section('content')

<header class="extra-small special">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Gorilla Gang</h1>
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
                <p>The imperfection in this style tells the story that the beauty of life isn't just in the perfection of a situation but the fact that we're there to experience it. To remain curious and to keep discovering, even when the road of discovery is rough and unique.</p>
                <hr>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="container">
        <div class="row project-block">
            <div class="col-md-4">
                <strong class="bold">May 2020</strong>
            </div>
            <div class="col-md-8 img-container">
                <img src="{{ asset('img/cases/Gorilla gang/gorilla gang apparel.png') }}" alt="">
            </div>
        </div>
        <div class="row project-block">
            <div class="col-md-4">
                <strong class="bold">The client</strong>
            </div>
            <div class="col-md-8 big">
                <p>Gorilla gang is the community brand created by the Serbian calisthenics influencer Dejan “Stipke” Stipic. The brand includes a collective of influencers that all focus on fitness and calisthenics.</p>
            </div>
        </div>
        <div class="row project-block">
            <div class="col-md-8">
                <strong class="bold">The challenge</strong>
                <br>
                <p>Besides working with the individual influencers both on the branding of their individual endeavors, I was asked to create the graphic that would represent Gorilla gang together with a logo. This would be used in social media content, youtube content and even their new apparel line.</p>
            </div>
            <div class="col-md-4">
                <strong>The products</strong>
                <br>
                <p>Logo</p>
                <p>Motion graphics</p>
                <p>Social media assets</p>
                <p>Website design and development</p>
            </div>
            <div class="col-md-8">
                <hr>
            </div>
        </div>
        <div class="row project-block">
            <div class="col-md-12">
                <strong class="bold">The Approach</strong>
                <br>
                <p>Most of the influencers involved with gorilla gang competed in “street workout competitions” or “calisthenics”. The barebones version of fitness, focusing on bodyweight training and free range of motion exercises. This barebones approach was something I wanted to take into account when creating the text logo<br>for gorilla gang.<br><br>Next to their visuals on for example social media content or apparel they needed something that was easy to connect to, or affiliate with as an outsider. Something that was a little more “clean cut”. We developed a very minimalistic icon that would be the base logo to use for gorilla gang</p>
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
                <p>The result is a very barebones branding that includes both the roughness of working out with the beauty of getting results and the cleanliness of taking care of your body. Many products, pieces of content and even an apparel line were made using this very branding.</p>
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
                        <li><img src="{{ asset('img/cases/Gorilla gang/gorilla strength.png') }}" alt=""></li>
                        <li><img src="{{ asset('img/cases/Gorilla gang/stipke illustration.png') }}" alt=""></li>
                        <li><img src="{{ asset('img/cases/Gorilla gang/thumbnail.png') }}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</section>

@endsection
