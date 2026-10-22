@extends('layouts.frontend')

@section('content')

<div id="main">
    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div id="rev_slider" class="rev_slider fullscreenbanner">
                        <ul>
                            @foreach($banners as $banner)
                                @if($banner && $banner->image)
                                    <li data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('storage/' . $banner->image) }}" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                        <img src="{{ asset('storage/' . $banner->image) }}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" />
                                    </li>
                                @endif
                            @endforeach                           
                        </ul>
                        <div class="tp-static-layers">
                            <div class="tp-caption tp-resizeme tp-static-layer tp-static-layer-1" data-x="['left','left','left','left']" 
                                    data-hoffset="['15','15','15','0']" data-y="['middle','middle','middle','top']" 
                                    data-voffset="['-66','-66','-66','100']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                    data-startslide="0" data-endslide="2"
                                    data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;rZ:270;tO:0% 0%;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Follow Us
                            </div>
                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme tp-static-layer" data-x="['left','left','left','left']" 
                                    data-hoffset="['20','20','20','8']" data-y="['middle','middle','middle','top']" data-voffset="['0','0','0','120']"
                                    data-width="1" data-height="60" data-whitespace="nowrap" data-type="shape" data-responsive_offset="on"
                                    data-startslide="0" data-endslide="2"
                                    data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"></div>
                            <div class="tp-caption primary-color-hover tp-static-layer tp-icon" data-x="['left','left','left','left']" 
                                    data-hoffset="['0','0','0','-20']" data-y="['middle','middle','middle','top']" 
                                    data-voffset="['90','90','90','200']" data-width="37" data-height="37"
                                    data-whitespace="nowrap" data-type="button" data-responsive_offset="on"
                                    data-responsive="off" data-startslide="0" data-endslide="2"
                                    data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a href="@setting('facebook_url')" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a>
                            </div>
                            <div class="tp-caption primary-color-hover tp-static-layer tp-icon"
                                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','-20']"
                                    data-y="['middle','middle','middle','top']" data-voffset="['140','140','140','250']"
                                    data-width="37" data-height="37" data-whitespace="nowrap" data-type="button"
                                    data-responsive_offset="on" data-responsive="off" data-startslide="0"
                                    data-endslide="2"
                                    data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a href="@setting('tiktok_url')" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-tiktok"></i></a>
                            </div>
                            <div class="tp-caption primary-color-hover tp-static-layer tp-icon"
                                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','-20']"
                                    data-y="['middle','middle','middle','top']" data-voffset="['190','190','190','300']"
                                    data-width="37" data-height="37" data-whitespace="nowrap" data-type="button"
                                    data-responsive_offset="on" data-responsive="off" data-startslide="0" data-endslide="2"
                                    data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a href="@setting('instagram_url')" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                            <div class="tp-caption primary-color-hover tp-static-layer tp-icon"
                                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','-20']"
                                    data-y="['middle','middle','middle','top']" data-voffset="['240','240','240','350']"
                                    data-width="37" data-height="37" data-whitespace="nowrap" data-type="button"
                                    data-responsive_offset="on" data-responsive="off" data-startslide="0"
                                    data-endslide="2"
                                    data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"><a href="@setting('youtube_url')" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-6 pb-9">
        <div class="container">
            <div class="row">                
                <div class="col-md-6">
                    <div class="floating text-center-sm">
                        <img src="{{ asset('assets/images/studiovision.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center-sm">
                        <h2 class="section-title mb-4">We are a creative drama production company based in Pakistan</h2>
                        <p>
                            Studio Vision Films is a creative production house dedicated to developing compelling stories for television, film and digital platforms. We bring together strong storytelling, distinctive visual language and professional production expertise to create content that connects with audiences and leaves a lasting impression.
                            </p>                        
                        <div class="mt-4"></div>
                        <!-- <a href="javascript:void(0)" target="_self" class="button">Hire us now</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-bg-1 section-cover">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-0">
                    <video controls width="100%">
    <source src="{{ asset('storage/video/Lagay-Aag-Full-Ost.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
</video>
                </div>
                <div class="col-md-6 p-0">
                    <div class="popup-video">
                        <img src="{{ asset('assets/images/film_10.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-9">
        <div class="container-fluid">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-3 mb-4 mb-md-0">
                    <h3 class="section-title">Company Profile</h3>
                    <div class="mb-1"></div>
                    <h1 class="section-title primary-color">Our Identity</h1>
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
                            <h3 class="section-title primary-color">Vision</h3>
                            <div class="border-bottom border-primary my-3"
                                style="width: 40px;">
                            </div>
                            <p>
                                To become a leading creative force in Pakistan’s entertainment 
                                industry by producing distinctive, high-quality and culturally 
                                relevant content that connects local storytelling with contemporary 
                                audiences and global standards.
                            </p>
                            
                        </div>
                        <!-- Mission -->
                        <div class="col-md-6">
                            <h3 class="section-title primary-color">Mission</h3>
                            <div class="border-bottom border-primary my-3"
                                style="width: 40px;">
                            </div>
                            <p>
                                Our mission is to develop and produce compelling television dramas, 
                                films and digital content through strong storytelling, creative 
                                collaboration and efficient production practices.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container-fluid">           
                
            <div class="row bg_black">
                <div class="col-sm-12 p-3">
                    <div class="text-center">
                        <h2 class="section-title color-white">Featured Dramas</h2>
                        </div>
                </div>
                <div class="col-md-6 col-sm-12 p-0">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 p-0">
                            <div class="film-project-featured">
                                <div class="image">
                                    <img src="{{ asset('assets/images/projects/project_1.jpg') }}" alt="" />
                                </div>
                                <div class="info">
                                    <div class="category">
                                        <a href="javascript:void(0)">Drama</a>
                                    </div>
                                    <div class="title">Lagay Aag Iss Muhabbat Ko</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 p-0">
                            <div class="film-project-featured">
                                <div class="image">
                                    <img src="{{ asset('assets/images/projects/project_2.jpg') }}" alt="" />
                                </div>
                                        <div class="info">
                                            <div class="category">
                                                <a href="javascript:void(0)">Drama</a>
                                            </div>
                                            <div class="title">Ye Isqh Samajh Na Ay</div>
    
                                        </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 p-0">
                            <div class="film-project-featured">
                                <div class="image">
                                    <img src="{{ asset('assets/images/projects/project_3.jpg') }}" alt="" />
                                </div>
                                <div class="info">
                                    <div class="category">
                                        <a href="javascript:void(0)">Drama</a>
                                    </div>
                                    <div class="title">ARSH</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 p-0">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 p-0">
                            <div class="film-project-featured">
                                <div class="image">
                                    <img src="{{ asset('assets/images/projects/project_4.jpg') }}" alt="" />
                                </div>
                                <div class="info">
                                    <div class="category">
                                        <a href="javascript:void(0)">Rom-Com</a>
                                    </div>
                                    <div class="title">Chhup Chhup Ke</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 p-0">
                            <div class="film-project-featured">
                                <div class="image">
                                    <img src="{{ asset('assets/images/projects/project_5.jpg') }}" alt="" />
                                </div>
                                <div class="info">
                                    <div class="category">
                                        <a href="javascript:void(0)">Short Film</a>
                                    </div>
                                    <div class="title">The Last Selfie</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 p-0">
                            <div class="film-project-featured">
                                <div class="image">
                                    <img src="{{ asset('assets/images/projects/project_6.jpg') }}" alt="" />
                                </div>
                                <div class="info">
                                    <div class="category">
                                        <a href="javascript:void(0)">Short Film</a>
                                    </div>
                                    <div class="title">Love Impossible</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 m-2 text-center">
                <a href="{{ route('our-projects') }}" target="_self" class="button">View All Projects</a>
            </div>
            </div>
            
            
        </div>
    </div>
    <div class="section pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="section-title text-center">Our Corporate Philosophy</h1>
                </div>
                <!-- Left Column -->
                <div class="col-md-6">
                    <h3 class="section-title primary-color">Philosophy</h3>
                    <p>
                        At Studio Vision Films, we believe powerful stories begin with a clear vision. 
                        Our philosophy is rooted in creating meaningful, visually compelling and 
                        emotionally engaging content that connects with audiences. From the first idea 
                        to the final frame, we combine creativity, strong storytelling and thoughtful 
                        execution to produce work that leaves a lasting impression.
                    </p>
                </div>
                <!-- Right Column -->
                <div class="col-md-6">
                    <h3 class="section-title primary-color">Commitment</h3>
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

    <div class="section section-bg-2 pt-10 pb-10">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="text-center">
                        <h3 class="sub-title primary-color"> Our Photos</h3>
                        <h2 class="section-title white mb-2">Photo Gallery</h2>
                        <p class="gray mb-7">This is our gallery where we show photos of our studio, our people as well as our <br />production process. Have a look and you will better understand us</p>
                    </div>
                    <div class="film-gallery-carousel" id="film-gallery-carousel">
                        <div class="film-gallery-carousel-item">
                            <div class="film-gallery-carousel-item-inner">
                                <img src="{{ asset('assets/images/photos/photo_1.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="film-gallery-carousel-item">
                            <div class="film-gallery-carousel-item-inner">
                                <img src="{{ asset('assets/images/photos/photo_2.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="film-gallery-carousel-item">
                            <div class="film-gallery-carousel-item-inner">
                                <img src="{{ asset('assets/images/photos/photo_3.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="film-gallery-carousel-item">
                            <div class="film-gallery-carousel-item-inner">
                                <img src="{{ asset('assets/images/photos/photo_1.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="film-gallery-carousel-item">
                            <div class="film-gallery-carousel-item-inner">
                                <img src="{{ asset('assets/images/photos/photo_2.jpg') }}" alt="" />
                            </div>
                        </div>
                        <div class="film-gallery-carousel-item">
                            <div class="film-gallery-carousel-item-inner">
                                <img src="{{ asset('assets/images/photos/photo_3.jpg') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection