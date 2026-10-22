@extends('layouts.frontend')

@section('content')

<div id="main">
    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div id="rev_slider" class="rev_slider fullscreenbanner">
                        <ul>
                            <li data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('assets/images/slider/slider_1.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                <img src="{{ asset('assets/images/slider/slider_1.jpg') }}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" />
                                <div class="tp-caption mon-140-700 tp-resizeme" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                        data-responsive_offset="on" 
                                        data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]">Film<br/> + Video
                                </div>
                                <div class="tp-caption mon-100-700 tp-resizeme"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['180','180','180','180']"
                                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                        data-responsive_offset="on"
                                        data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Productions
                                </div>
                                <div class="tp-caption btn-01 rev-btn"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['300','300','300','300']"
                                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                        data-responsive_offset="on" data-responsive="off"
                                        data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+8490","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[15,15,15,15]"
                                        data-paddingright="[30,30,30,30]" data-paddingbottom="[15,15,15,15]"
                                        data-paddingleft="[30,30,30,30]">Hire Us Now
                                </div>
                            </li>
                            <li data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('assets/images/slider/slider_2.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                <img src="{{ asset('assets/images/slider/slider_2.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" />
                                <div class="tp-caption tp-resizeme mer-34-400"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-46','-46','-46','-46']"
                                        data-fontsize="['34','34','34','24']" data-width="none" data-height="none"
                                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                        data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']"
                                        data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]">We are creative film studio
                                </div>
                                <div class="tp-caption tp-resizeme mon-64-700"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']"
                                        data-fontsize="['64','64','50','30']" data-lineheight="['64','64','50','30']"
                                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                        data-responsive_offset="on"
                                        data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">We are Studio Vision Films
                                </div>
                            </li>
                            <li data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{ asset('assets/images/slider/slider_3.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                <img src="{{ asset('assets/images/slider/slider_3.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" />
                                <div class="tp-caption tp-resizeme mer-34-400"
                                        data-x="['center','center','center','center']" data-hoffset="['-1','-1','-1','0']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-46']"
                                        data-fontsize="['34','34','34','24']" data-width="none" data-height="none"
                                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                        data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Let’s make
                                </div>
                                <div class="tp-caption tp-resizeme mon-64-700"
                                        data-x="['center','center','center','center']" data-hoffset="['-10','-10','-4','-1']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','8','8']"
                                        data-fontsize="['64','64','50','30']" data-lineheight="['64','64','50','30']"
                                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                        data-responsive_offset="on"
                                        data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">Great Thing Together!
                                </div>
                                <div class="tp-caption tp-resizeme lat-16-400"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['116','116','116','116']"
                                        data-width="['856','856','571','324']" data-height="none" data-whitespace="normal"
                                        data-type="text" data-responsive_offset="on"
                                        data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                        data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        We are a creative drama production company based in Pakistan.
                                        Working with a network of diverse professionals, we believe in the importance of strong visual communication.
                                </div>
                                <div class="tp-caption btn-01 rev-btn"
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','4']"
                                        data-y="['middle','middle','middle','middle']" data-voffset="['222','222','222','273']"
                                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                        data-responsive_offset="on" data-responsive="off"
                                        data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[15,15,15,15]"
                                        data-paddingright="[30,30,30,30]" data-paddingbottom="[15,15,15,15]" data-paddingleft="[30,30,30,30]">Hire us now
                                </div>
                            </li>
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
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a href="@setting('facebook_url')" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="tp-caption primary-color-hover tp-static-layer tp-icon"
                                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','-20']"
                                    data-y="['middle','middle','middle','top']" data-voffset="['140','140','140','250']"
                                    data-width="37" data-height="37" data-whitespace="nowrap" data-type="button"
                                    data-responsive_offset="on" data-responsive="off" data-startslide="0"
                                    data-endslide="2"
                                    data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a href="@setting('twitter_url')" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a>
                            </div>
                            <div class="tp-caption primary-color-hover tp-static-layer tp-icon"
                                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','-20']"
                                    data-y="['middle','middle','middle','top']" data-voffset="['190','190','190','300']"
                                    data-width="37" data-height="37" data-whitespace="nowrap" data-type="button"
                                    data-responsive_offset="on" data-responsive="off" data-startslide="0" data-endslide="2"
                                    data-frames='[{"delay":0,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"><a href="@setting('instagram_url')" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
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
                                    data-paddingleft="[0,0,0,0]"><a href="@setting('youtube_url')" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-12 pb-9">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="logo-carousel" data-auto-play="true" data-desktop="4" data-laptop="3" data-tablet="2" data-mobile="2">
                        <div class="logo-item">
                            <img src="{{ asset('assets/images/logo/logo_1.png') }}" alt="" />
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/images/logo/logo_2.png') }}" alt="" />
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/images/logo/logo_3.png') }}" alt="" />
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/images/logo/logo_4.png') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="mt-8"></div>
                </div>
                <div class="col-md-6">
                    <div class="floating text-center-sm">
                        <img src="{{ asset('assets/images/studiovision.jpg') }}" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center-sm">
                        <h2 class="section-title mb-4">We are a creative drama production company based in Pakistan</h2>
                        <p>
                            We are a creative drama production company hungry for quality in aesthetics. To create modern recognizable stuff we are working with a strong network of experienced professionals. We set up teams to shape your identity, push your idea and manage the workflow from pre- to post-production.
                        </p>
                        <div class="mt-4"></div>
                        <a href="javascript:void(0)" target="_self" class="button">Hire us now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-bg-1 section-cover">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 p-0">
                    <div class="popup-video">
                        <a href="javascript:void(0)" class="md-trigger" data-modal="modal-1">
                            <img src="{{ asset('assets/images/film_1.jpg') }}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-4 pl-9 pr-9">
                    <div class="mt-12 hidden-xs"></div>
                    <div class="text-center-xs">
                        <h2 class="section-title fz-56 mb-4">A selection of some recent awards</h2>
                        <div class="film-button">
                            <i class="ion-android-arrow-forward"></i>
                            <a href="javascript:void(0)" target="_self">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-12 pb-9">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h3 class="sub-title primary-color"> Our Best Projects</h3>
                        <h2 class="section-title mb-2">Featured Dramas</h2>
                        <p>Have a look at our best dramas which are high in quality and receive positive responses <br />from audience. You are gonna have these great dramas as well.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12 p-0">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 p-0">
                            <div class="film-project-featured">
                                <div class="image">
                                    <img src="{{ asset('assets/images/projects/project_1.jpg') }}" alt="" />
                                </div>
                                <div class="info">
                                    <div class="category">
                                        <a href="javascript:void(0)">Serial Film</a>
                                    </div>
                                    <div class="title">This Last Laugh</div>
                                    <div class="more"><a href="javascript:void(0)">View more</a></div>
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
                                        <a href="javascript:void(0)">Anthology Film</a>, 
                                        <a href="javascript:void(0)">Serial Film</a>
                                    </div>
                                    <div class="title">This Last Laugh</div>
                                    <div class="more"><a href="javascript:void(0)">View more</a></div>
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
                                        <a href="javascript:void(0)">Feature-Length Film</a>
                                    </div>
                                    <div class="title">Alaska is a Drag</div>
                                    <div class="more"><a href="javascript:void(0)">View more</a></div>
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
                                        <a href="javascript:void(0)">Short Film</a>
                                    </div>
                                    <div class="title">Raising Bertie Up</div>
                                    <div class="more"><a href="javascript:void(0)">View more</a></div>
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
                                    <div class="title">Kicks</div>
                                    <div class="more"><a href="javascript:void(0)">View more</a></div>
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
                                        <a href="javascript:void(0)">Anthology Film</a>, 
                                        <a href="javascript:void(0)">Serial Film</a>
                                    </div>
                                    <div class="title">The Secret Scripture</div>
                                    <div class="more"><a href="javascript:void(0)">View more</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-bg-1 section-cover pt-10 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <h2 class="section-title mb-2 text-center-sm">We are a creative drama production company</h2>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="pt-2 text-center-sm">
                        <a href="javascript:void(0)" target="_self" class="button-2 mb-1">Learn more</a>&nbsp;&nbsp;
                        <a href="javascript:void(0)" target="_self" class="button">Hire us now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-14 pb-8">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <h3 class="sub-title primary-color"> Filmming Services</h3>
                        <h2 class="section-title mb-2">Explore Services</h2>
                        <p class="mb-4">Doloremque, ad. Vero veniam dicta aliquid blanditiis ullam quibusdam, accusamus, <br />eius quia molestias nihil temporibus nam praesentium odit repellat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-boxes icon-boxes-bg text-center">
                        <div class="icon-boxes-icon" data-bg-image="{{ asset('assets/images/icon-boxes/icon_bg_1.png') }}">
                            <i class="ns-tripod"></i>
                        </div>
                        <div class="icon-boxes-inner">
                            <h5 class="icon-boxes-title">FILMING SERVICES</h5>
                            <div class="icon-boxes-content">
                                We can film your project whether it is a commercial advertise, a short film or a document film. We have expertise in these fields.
                            </div>
                            <div class="icon-boxes-link">
                                <a href="javascript:void(0)"><span class="ion-android-arrow-forward"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-boxes icon-boxes-bg text-center">
                        <div class="icon-boxes-icon" data-bg-image="{{ asset('assets/images/icon-boxes/icon_bg_2.png') }}">
                            <i class="ns-seats"></i>
                        </div>
                        <div class="icon-boxes-inner">
                            <h5 class="icon-boxes-title">WORKSHOPS &amp; PRIVATE TUITION</h5>
                            <div class="icon-boxes-content">
                                Some workshops have invited us to come lecturing. We also offer private tuitions for absolute beginners or mid-level producers who need more advice.
                            </div>
                            <div class="icon-boxes-link">
                                <a href="javascript:void(0)"><span class="ion-android-arrow-forward"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-boxes icon-boxes-bg text-center">
                        <div class="icon-boxes-icon" data-bg-image="{{ asset('assets/images/icon-boxes/icon_bg_3.png') }}">
                            <i class="ns-video-camera"></i>
                        </div>
                        <div class="icon-boxes-inner">
                            <h5 class="icon-boxes-title">Equipment hire</h5>
                            <div class="icon-boxes-content">
                                Sometimes we don’t use our equipment so you can hire them for your filming. Check our schedule and contact if it suits your time.
                            </div>
                            <div class="icon-boxes-link">
                                <a href="javascript:void(0)"><span class="ion-android-arrow-forward"></span></a>
                            </div>
                        </div>
                    </div>
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
    <div class="section hidden-xs mtn-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/line.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pt-7 pb-8">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="testimonial-carousel style-1" data-auto-play="true" data-desktop="1" data-laptop="1" data-tablet="1" data-mobile="1">
                        <div class="item">
                            <div class="photo">
                                <img src="{{ asset('assets/images/avatar/avatar_1.png') }}" alt="" />
                            </div>
                            <h4 class="title">The best film studio</h4>
                            <div class="text">
                                They all are witnesses. If you or your organization have a story to tell, an idea to share or word to spread, the Studio Vision Films can help you bring it to life. They can assist with narrative exploration, director contacts and production strategies.
                            </div>
                            <div class="info">
                                <div class="author">
                                    <span class="name">Jerry Hansen</span> 
                                    <span class="tagline">Actor</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="photo">
                                <img src="{{ asset('assets/images/avatar/avatar_2.png') }}" alt="" />
                            </div>
                            <h4 class="title">The best film studio</h4>
                            <div class="text">
                                They all are witnesses. If you or your organization have a story to tell, an idea to share or word to spread, the Studio Vision Films can help you bring it to life. They can assist with narrative exploration, director contacts and production strategies.
                            </div>
                            <div class="info">
                                <div class="author">
                                    <span class="name">Jerry Hansen</span> 
                                    <span class="tagline">Actor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section pb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <hr class="mb-5" />
                    <div class="logo-carousel" data-auto-play="true" data-desktop="5" data-laptop="3" data-tablet="3" data-mobile="2">
                        <div class="logo-item">
                            <img src="{{ asset('assets/images/logo/logo_5.jpg') }}" alt="" />
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/images/logo/logo_6.jpg') }}" alt="" />
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/images/logo/logo_7.jpg') }}" alt="" />
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/images/logo/logo_8.jpg') }}" alt="" />
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/images/logo/logo_9.jpg') }}" alt="" />
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('assets/images/logo/logo_10.jpg') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section bg-light pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center mb-7">
                        <h3 class="sub-title primary-color"> Our Blog</h3>
                        <h2 class="section-title mb-2">News &amp; Blog Update</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="blog-item style-1">
                        <div class="blog-item-inner">
                            <div class="blog-thumbnail">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('assets/images/blog/blog_1.jpg') }}" alt="" /> 
                                </a>
                            </div>
                            <div class="blog-info">
                                <span class="blog-info-date">
                                    <span class="posted-on">January 25, 2017</span>
                                </span>
                                <a href="javascript:void(0)" class="blog-info-title">
                                    The Story of Ferguson through the Eyes of the People Who Lived it 
                                </a>
                                <div class="blog-info-meta">
                                    <div class="meta">
                                        <span class="view">132 Views</span>
                                        <span class="like"><a href="javascript:void(0)" class="like-btn">2 Likes</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-item style-1">
                        <div class="blog-item-inner">
                            <div class="blog-thumbnail">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('assets/images/blog/blog_2.jpg') }}" alt="" /> 
                                </a>
                            </div>
                            <div class="blog-info">
                                <span class="blog-info-date">
                                    <span class="posted-on">January 25, 2017</span>
                                </span>
                                <a href="javascript:void(0)" class="blog-info-title">
                                    “Communication Is Where a Film Lives and Dies”: Director Zoe Lister-Jones 
                                </a>
                                <div class="blog-info-meta">
                                    <div class="meta">
                                        <span class="view">114 Views</span>
                                        <span class="like"><a href="javascript:void(0)" class="like-btn">0 Like</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="blog-item style-1">
                        <div class="blog-item-inner">
                            <div class="blog-thumbnail">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('assets/images/blog/blog_3.jpg') }}" alt="" /> 
                                </a>
                            </div>
                            <div class="blog-info">
                                <span class="blog-info-date">
                                    <span class="posted-on">January 25, 2017</span>
                                </span>
                                <a href="javascript:void(0)" class="blog-info-title">
                                    Profound Communication Only Happens When There Is Persistence
                                </a>
                                <div class="blog-info-meta">
                                    <div class="meta">
                                        <span class="view">91 Views</span>
                                        <span class="like"><a href="javascript:void(0)" class="like-btn">1 Like</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center mt-4">
                        <a href="javascript:void(0)" class="button-2">Go To Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-bg-3 section-cover footer-newsletter style-1 pt-11 pb-8">
        <div class="container">
            <div class="row">
                <div class="col-md-1">&nbsp;</div>
                <div class="col-md-4">
                    <div class="footer-newsletter-left">Subscribe to our Newsletter</div>
                </div>
                <div class="col-md-6">
                    <div class="footer-newsletter-right">
                        <form method="POST" action="javascript:void(0)">
                            @csrf
                            <div class="form-fields">
                                <div class="form">
                                    <input type="email" name="email" placeholder="Enter your e-mail" /> 
                                    <input type="submit" value="Submit" />
                                </div>
                                <p class="note">Note* : Spectators are our passion. Creation is our core.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection