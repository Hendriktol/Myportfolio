

@extends('layouts.app')

@section('content')

<header class="small">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>About<br>me</h1>
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
                <p>Some stories deserve to be heared, and some stories are presented in a way that makes it very unlikely for someone to ever hear about the story. I'm here to package your story in a way that supports and facilitates the message.</p>
                <hr>
            </div>
        </div>
    </div>
    
</section>

<section>
    <div class="container">
        <div class="row">
            <span class="spacer"></span>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <strong>My story</strong>
                <p>I'm primarily lead by intuition, which has influenced my life in many ways, from spontaneously moving out of my parents house, to three months later leaving to work in Germany.<br><br>But in order to tell the story properly we need to take it back a bit further. In school I was heavily into the gaming scene, more specifically the Call of Duty scene, one of the scenes that brought forth the most prominent brands in esports today. Although I noticed very early on that gameplay wasn't going to be a positive asset to my carreer in gaming. I noticed that my brother was playing around with a piece of software called Cinema 4d. Which back then was the primary tool to making cool looking graphics for<br>your YouTube channel.<br><br>Heavily confused, but also curious and driven I finally fired up my first version of adobe photoshop at 11, I was cheered on by a stable of trojan horses that came with the download, but I was ready to start learning. And the rest is history.</p>
            </div>
        </div>
    </div>
    
    
    <div class="section-background">
        <div class="dutch-map">
            {!! file_get_contents(asset('img/pattern/netherlands.svg')) !!}
        </div>
    </div>
</section>

@endsection