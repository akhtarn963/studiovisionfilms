@extends('layouts.frontend')

@section('title', 'About Us')
@section('content')

<div id="main">
    <div class="section page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center-sm">
                        <h1 class="title">About Us</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-10 pb-10">
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-3 mb-4 mb-md-0">
                    <h3 class="section-title primary-color">Company Profile</h3>
                </div>
                <!-- Right Column -->
                <div class="col-md-9">
                    <p>
                        Studio Vision Films is a creative production house dedicated to developing 
                        compelling stories for television, film and digital platforms. We bring together 
                        strong storytelling, distinctive visual language and professional production 
                        expertise to create content that connects with audiences and leaves a lasting 
                        impression.
                    </p>
                    <p>
                        From concept development and scripting to production and post-production, 
                        our focus remains on delivering meaningful, engaging and visually powerful 
                        entertainment. We believe every story deserves its own identity — and our 
                        purpose is to transform that vision into memorable screen experiences.
                    </p>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                     <h2 class="section-title primary-color">Founders</h2>
                    <!--<p class="mb-3">Since 2008, we shot more than 50 short formats (commercials, music videos, documentaries and short movies). We set up teams to shape your identity, push your idea and manage the workflow from pre- to post-production.</p>
                    <div class="icon-boxes icon-boxes-small">
                        <div class="icon-boxes-icon">
                            <i class="ion-trophy"></i>
                        </div>
                        <h5 class="icon-boxes-title"> 06 Awards in 2014/2015.</h5>
                        <div class="icon-boxes-content">
                            These awards are both national and international<br /> in 2014/2015
                        </div>
                    </div>
                    <div class="mb-4"></div>
                    <div class="icon-boxes icon-boxes-small">
                        <div class="icon-boxes-icon">
                            <i class="ion-trophy"></i>
                        </div>
                        <h5 class="icon-boxes-title"> 04 Awards in 2016</h5>
                        <div class="icon-boxes-content">
                            These awards are both national and international<br /> in 2016
                        </div>
                    </div> -->
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="film-list-member">
                        <div class="item">
                            <div class="photo">
                                <img src="{{ asset('assets/images/photos/founders.jpg') }}" alt="" />
                            </div>
                            <div class="info">
                                <span class="name">Jasim Abbas</span>
                                <span class="tagline">/ Founder</span>
                            </div>
                        </div>
                        <div class="item" style="margin-top: 20px;">
                            <div class="info">
                                <span class="name">Ali Shahroz</span>
                                <span class="tagline nd-font">/ Co-Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-5 col-sm-12">
                    <h2 class="section-title fz-40 mb-3">Creative Directors</h2>
                    <p class="mb-3">Since 2008, we shot more than 50 short formats (commercials, music videos, documentaries and short movies). We set up teams to shape your identity, push your idea and manage the workflow from pre- to post-production.</p>
                    <div class="icon-boxes icon-boxes-small">
                        <div class="icon-boxes-icon">
                            <i class="ion-trophy"></i>
                        </div>
                        <h5 class="icon-boxes-title"> 06 Awards in 2014/2015.</h5>
                        <div class="icon-boxes-content">
                            These awards are both national and international<br /> in 2014/2015
                        </div>
                    </div>
                    <div class="mb-4"></div>
                    <div class="icon-boxes icon-boxes-small">
                        <div class="icon-boxes-icon">
                            <i class="ion-trophy"></i>
                        </div>
                        <h5 class="icon-boxes-title"> 04 Awards in 2016</h5>
                        <div class="icon-boxes-content">
                            These awards are both national and international<br /> in 2016
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-3 mb-4 mb-md-0">                    
                    <h3 class="section-title primary-color">Our Identity</h3>
                </div>
                <!-- Right Column -->
                <div class="col-md-9">
                    <h3 class="section-title">The name “Studio Vision Films” represents…</h3>
                    <p>
                        The name Studio Vision Films reflects the philosophy at the heart of our company: 
                        every remarkable production begins with a clear creative vision. 
                        “Studio” represents collaboration, craftsmanship and the space where ideas take shape, 
                        while “Vision” represents imagination, direction and the ability to see beyond the ordinary.
                    </p>
                    <p>
                        Together, the name embodies our ambition to turn original ideas into powerful 
                        visual stories — stories that entertain, inspire and resonate with audiences across 
                        generations and platforms.
                    </p>
                    <!-- Vision / Mission -->
                    <div class="row mt-5">
                        <!-- Vision -->
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h3 class="section-title">Vision</h3>
                            <div class="border-bottom border-primary my-3"
                                style="width: 40px;">
                            </div>
                            <p>
                                To become a leading creative force in Pakistan’s entertainment 
                                industry by producing distinctive, high-quality and culturally 
                                relevant content that connects local storytelling with contemporary 
                                audiences and global standards.
                            </p>
                            <p>
                                We aspire to create stories that are remembered not only for their performances, 
                                but for their emotions, visual identity and impact.
                            </p>
                            
                        </div>
                        <!-- Mission -->
                        <div class="col-md-6">
                            <h3 class="section-title">Mission</h3>
                            <div class="border-bottom border-primary my-3"
                                style="width: 40px;">
                            </div>
                            <p>
                                Our mission is to develop and produce compelling television dramas, 
                                films and digital content through strong storytelling, creative 
                                collaboration and efficient production practices.
                            </p>
                            <p>
                                Studio Vision Films is committed to nurturing creative talent, 
                                building long-term partnerships with broadcasters and platforms, 
                                and consistently delivering productions that balance creativity, 
                                commercial appeal and audience engagement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-3 mb-4 mb-md-0">                    
                    <h3 class="primary-color">Our Corporate Philosophy</h3>
                </div>
                <!-- Right Column -->
                <div class="col-md-9">                    
                        <!-- Vision -->
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h3 class="section-title">Philosophy</h3>
                            <div class="border-bottom border-primary my-3"
                                style="width: 40px;">
                            </div>
                            <p>
                                At Studio Vision Films, we believe powerful stories begin with a clear vision. 
                                Our philosophy is rooted in creating meaningful, visually compelling and 
                                emotionally engaging content that connects with audiences. From the first idea 
                                to the final frame, we combine creativity, strong storytelling and thoughtful 
                                execution to produce work that leaves a lasting impression.
                            </p>                            
                        </div>
                        <!-- Mission -->
                        <div class="col-md-6">
                            <h3 class="section-title">Commitment</h3>
                            <div class="border-bottom border-primary my-3"
                                style="width: 40px;">
                            </div>
                            <p>
                                We are committed to delivering quality at every stage of production. 
                                Whether developing television dramas, films, branded content or digital 
                                productions, our team approaches every project with passion, professionalism 
                                and attention to detail. We believe in building long-term relationships through 
                                transparency, collaboration and a constant commitment to raising the creative 
                                standard of every story we tell.
                            </p>
                        </div>
                    </div>
                </div>
            </div>   
            
        </div>
    </div>
    
</div>

@endsection