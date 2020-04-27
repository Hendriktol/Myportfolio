@extends('layouts.app')

@section('content')

<header class="extra-small special">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $page->title }}</h1>
                    <p class="gold">Visual identity</p>
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
                <strong class="bold">2018/2019</strong>
            </div>
            <div class="col-md-8 img-container">
                <img src="{{ asset('img/cases/ambions/booklet.png') }}" alt="">
            </div>
        </div>
        <div class="row project-block">
            <div class="col-md-8">
                <strong class="bold">The client</strong>
                <br>
                <p>Ambions is a new organisations that delivers care to the people that can use it the most, from children with disabilities to elderly who just need a little help. Founded by two experienced professionals, who both saw how care should be but also should NOT be done. Care in the Netherlands has suffered the last few years because of additional rules and protocols that get in the way of delivering the actual care people deserve</p>
            </div>
            <div class="col-md-4">
                <strong>The products</strong>
                <br>
                <p>Logo</p>
                <p>Visual system</p>
                <p>Webdesign</p>
            </div>
            <div class="col-md-8">
                <hr>
            </div>
        </div>
        <div class="row project-block">
            <div class="col-md-12">
                <strong class="bold">The Approach</strong>
                <br>
                <p>25seven was a newly formed company that worked with individuals who created from a base of personal interest. Which created a culture that was youthful, and very much driven to improve and grow. Almost aggressively moving towards creating a better future for the company.<br><br>I wanted to reflect the mindset accurately by making the branding feel very assertive through the usage of a very bright and saturated yellow, together with an adaptation of a number in a sans-serif font that had overly exaggerated “crotches” (a tiny technicality in typography)</p>
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
                <p>The style of the visual identity matches the work ethic behind 25seven, and connects seamlessly through the balance of minimalistic typography and a blasting color palette. It allows for easy application and expansion upon this visual language.</p>
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
                        <li><img src="{{ asset('img/cases/ambions/business cards.png') }}" alt=""></li>
                        <li><img src="{{ asset('img/cases/ambions/thumbnail.png') }}" alt=""></li>
                        <li><img src="{{ asset('img/cases/ambions/webdesign.png') }}" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</section>

@endsection