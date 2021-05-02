<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ArquiSoft</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
    <link href='https://fonts.googleapis.com/css?family=Hind:400,500,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body>
<div class="layout">

    <div class="loader">
        <div class="loader-brand"><img alt="" class="img-responsive center-block"
                                       src="{{ url('images/tacticas1.png') }}"></div>
    </div>

    <header id="top" class="navbar js-navbar-affix">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#home" class="brand js-target-scroll">
                    <span class="text-primary">Ar</span>qui<span class="text-primary">So</span>ft
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="#home" class="js-target-scroll">Tácticas</a>
                    </li>
                    <li>
                        <a href="#criterios" class="js-target-scroll">Criterios</a>
                    </li>
                    <li>
                        <a href="#contact" class="js-target-scroll">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <main id="home" class="main">

        <div class="rev_slider_wrapper">
            <div id="rev_slider" class="rev_slider fullscreenbanner" data-version="5.0.7">
                <ul>

                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-fstransition="fade"
                        data-fsmasterspeed="1000">

                        <img
                            src="{{ url('images/Slide1.jpg') }}"
                            alt=""
                            data-lazyload="img/slider/slide1.jpg" data-bgposition="center top" data-kenburns="on"
                            data-duration="20000" data-ease="Power1.easeOut" data-scalestart="120" data-scaleend="100"
                            class="rev-slidebg" data-no-retina>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-80','-80','-80,'-80']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                             data-elementdelay="0.05"
                             style="z-index: 5; font-size:23px;  text-transform:uppercase; letter-spacing:0.9em; font-weight: 300;">
                            Tácticas de Arquitectura Web
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['0','0','0','0']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1300" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on"
                             style="z-index: 6; font-size: 90px; text-transform:uppercase; letter-spacing:0.15em; font-weight: 700;">
                            ARQUI SOFT
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['90','90','90','90']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" style="z-index: 7; font-size:18px; color: #DDD;">Lo más importante no
                            es programar,<br> es aplicar las mejores
                            tácticas.
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['190','190','190','190']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                             data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#request"
                                                                                                     class="btn btn-hvr-white hvr-pulse-grow"
                                                                                                     data-toggle="modal">Empieza
                                aquí</a>
                        </div>
                    </li>

                    <li data-transition="zoomout" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut"
                        data-masterspeed="2000">

                        <img src="{{ url('images/Slide2.jpg') }}" alt="" data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg">

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-50','-50','-50','-50']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                             style="z-index: 6; font-size:80px; line-height: 1; text-transform:uppercase;
                             letter-spacing:0.1em; font-weight: 700; color: #0b0b0b">
                            Usabilidad
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['30','30','30','30']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" style="z-index: 7; font-size:18px; color: #0b0b0b; font-weight:500;">Cualquier tonto puede
                            hacer algo complejo; Se necesita un <br> genio
                            para hacer algo simple. -Albert Einstein
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['130','130','130','130']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                             data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#usabilidad"
                                                                                                     class="btn btn-hvr-white hvr-pulse-grow"
                                                                                                     >Más
                                información</a>
                        </div>
                    </li>

                    <li data-transition="zoomout" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut"
                        data-masterspeed="2000">

                        <img src="{{ url('images/Slide3.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-50','-50','-50','-50']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                             style="z-index: 6; font-size:60px; line-height: 1; text-transform:uppercase; letter-spacing:0.05em; font-weight: 700;">
                            Seguridad
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['30','30','30','30']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" style="z-index: 7; font-size:18px; color: #DDD;">Confidencialidad,
                            Integridad y Disponibilidad.
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['130','130','130','130']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                             data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#seguridad"
                                                                                                     class="btn btn-hvr-white hvr-pulse-grow"
                                                                                                     >Más
                                información</a>
                        </div>
                    </li>

                    <li data-transition="zoomout" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut"
                        data-masterspeed="2000">

                        <img src="{{ url('images/Slide4.png') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-50','-50','-50','-50']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                             style="z-index: 6; font-size:60px; line-height: 1; text-transform:uppercase; letter-spacing:0.05em; font-weight: 700;">
                            Modificabilidad
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['30','30','30','30']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" style="z-index: 7; font-size:18px; color: #DDD;">Adaptar o perecer,
                            ahora como siempre, es
                            <br> el imperativo inexorable de la naturaleza. -HG Wells
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['130','130','130','130']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                             data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#modificabilidad"
                                                                                                     class="btn btn-hvr-white hvr-pulse-grow"
                                                                                                     >Más
                                información</a>
                        </div>
                    </li>

                    <li data-transition="zoomout" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut"
                        data-masterspeed="2000">

                        <img src="{{ url('images/Slide5.jpeg') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-50','-50','-50','-50']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                             style="z-index: 6; font-size:60px; line-height: 1; text-transform:uppercase;
                             letter-spacing:0.05em; font-weight: 700; color: #0b0b0b;">
                            Disponibilidad
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['30','30','30','30']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" style="z-index: 7; font-size:18px; color: #0b0b0b;">El noventa por ciento
                            de la vida está apareciendo.
                            <br>-Woody Allen
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['130','130','130','130']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                             data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#disponibilidad"
                                                                                                     class="btn btn-hvr-white hvr-pulse-grow"
                                                                                                     >Más
                                información</a>
                        </div>
                    </li>

                    <li data-transition="zoomout" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut"
                        data-masterspeed="2000">

                        <img src="{{ url('images/Slide6.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-50','-50','-50','-50']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                             style="z-index: 6; font-size:60px; line-height: 1; text-transform:uppercase;
                             letter-spacing:0.05em; font-weight: 700; color: #0b0b0b;">
                            Testeabilidad
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['30','30','30','30']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" style="z-index: 7; font-size:18px; color: #0b0b0b;">La prueba conduce al
                            fracaso, y el fracaso lleva a la comprensión
                            <br>-Burt Rutan
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['130','130','130','130']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                             data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#testeabilidad"
                                                                                                     class="btn btn-hvr-white hvr-pulse-grow"
                                                                                                     >Más
                                información</a>
                        </div>
                    </li>

                    <li data-transition="zoomout" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut"
                        data-masterspeed="2000">

                        <img src="{{ url('images/Slide7.png') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-50','-50','-50','-50']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                             style="z-index: 6; font-size:60px; line-height: 1; text-transform:uppercase;
                             letter-spacing:0.05em; font-weight: 700; color: #0b0b0b;">
                            Rendimiento
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['30','30','30','30']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" style="z-index: 7; font-size:18px; color: #0b0b0b;">Una onza de
                            rendimiento vale libras de promesas
                            <br>-Mae West
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['130','130','130','130']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                             data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#rendimiento"
                                                                                                     class="btn btn-hvr-white hvr-pulse-grow"
                                                                                                     >Más
                                información</a>
                        </div>
                    </li>

                    <li data-transition="zoomout" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut"
                        data-masterspeed="2000">

                        <img src="{{ url('images/Slide8.png') }}" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-50','-50','-50','-50']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                             style="z-index: 6; font-size:60px; line-height: 1; text-transform:uppercase;
                              letter-spacing:0.05em; font-weight: 700; color: #0b0b0b;">
                            Interoperabilidad
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['30','30','30','30']" data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" style="z-index: 7; font-size:18px; color: #317298; font-weight: 500">Descubrimiento y
                            manejo de la respuesta
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['130','130','130','130']" data-width="none" data-height="none"
                             data-whitespace="nowrap" data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                             data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#interoperabilidad"
                                                                                                     class="btn btn-hvr-white hvr-pulse-grow"
                                                                                                     >Más
                                información</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <div class="content">

        <section id="usabilidad" class="services text-center section pb-0">
            <div class="container">
                <div class="row">
                    <header class="col-md-8 col-md-offset-2">
                        <h2 class="section-title">Usabilidad</h2>
                        <div class="spacer spacer-primary">
                            <div class="line">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <p>La usabilidad se relaciona con lo fácil que es para el usuario realizar
                            una tarea deseada y el tipo de asistencia al usuario que proporciona el
                            sistema. <br> La usabilidad comprende las siguientes áreas: </p>
                    </header>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">Funciones del Sistema <br> de aprendizaje</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Si el usuario no está
                                familiarizado con un sistema en particular o con un aspecto en
                                particular, ¿qué puede hacer el sistema para facilitar la tarea de
                                aprender? Esto podría incluir proporcionar características de ayuda.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">Uso eficiente de un <br> Sistema</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">¿Qué puede hacer el sistema para que el
                                usuario sea más eficiente en su operación? Esto podría incluir la
                                capacidad para que el usuario redirija el sistema después de emitir un
                                comando.Por ejemplo, el usuario puede desear suspender una tarea,
                                realizar varias operaciones y luego reanudar esa tarea.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">Minimizar el impacto de los <br>errores</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">¿Qué puede hacer el sistema
                                para que un error de usuario tenga un impacto mínimo? Por ejemplo,
                                el usuario puede desear cancelar un comando emitido incorrectamente.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">Adaptar el sistema a las <br>necesidades del Usuario</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">¿Cómo puede el
                                usuario (o el propio sistema) adaptarse para facilitar la tarea del
                                usuario? Por ejemplo, el sistema puede completar automáticamente las
                                URL basadas en las entradas anteriores de un usuario.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">Incremento de la confianza y Satisfacción</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">.¿Qué hace el sistema para
                                dar al usuario la confianza de que se está tomando la acción
                                correcta? Por ejemplo, proporcionar comentarios que indiquen que el
                                sistema está realizando una tarea de larga duración y la medida en que
                                se completa la tarea aumentará la confianza del usuario en el sistema.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">más información</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">La facilidad de uso tiene que ver con lo fácil que es
                                para el usuario realizar una tarea deseada, así como el tipo de soporte que le brinda el
                                sistema al usuario.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="seguridad" class="services text-center section pb-0">
            <div class="container">
                <div class="row">
                    <header class="col-md-8 col-md-offset-2">
                        <h2 class="section-title">Seguridad</h2>
                        <div class="spacer spacer-primary">
                            <div class="line">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <p>La seguridad es una medida de la capacidad del sistema para proteger los datos y la
                            información de accesos no autorizados a la vez que proporciona acceso a personas y sistemas
                            autorizados. Una acción contra un sistema informático con intención de dañar se llama
                            ataque.</p>
                    </header>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">Confidencialidad</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Es la propiedad de que los datos o servicios están
                                protegidos contra el acceso no autorizado. Por ejemplo, un pirata
                                informático no puede acceder a sus declaraciones de impuestos sobre la
                                renta en una computadora del gobierno.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">Integridad</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Es la propiedad de que los datos o servicios no están
                                sujetos a manipulación no autorizada. Por ejemplo, su calificación no
                                ha cambiado desde que su instructor la asignó.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">Disponibilidad</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Es la propiedad de que el sistema estará
                                disponible para uso legítimo. Por ejemplo, un ataque de denegación de
                                servicio no le impedirá pedir un libro de una librería en línea.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">Autenticación</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Verifica las identidades de las partes en una
                                transacción y verifica si son realmente quienes dicen ser. Por ejemplo,
                                cuando recibe un correo electrónico que pretende provenir de un
                                banco, la autenticación garantiza que realmente proviene del banco.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">El NO rechazo</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Garantiza que el remitente de un mensaje no puede
                                negar más tarde haber enviado el mensaje y que el destinatario no
                                puede negar haber recibido el mensaje. Por ejemplo, no puede denegar
                                el pedido de algo desde Internet, o el comerciante no puede negarse a
                                recibir su pedido.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">La autorización</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Otorga a un usuario los privilegios para realizar una
                                tarea. Por ejemplo, un sistema bancario en línea autoriza a un usuario
                                legítimo a acceder a su cuenta.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="modificabilidad" class="services text-center section pb-0">
            <div class="container">
                <div class="row">
                    <header class="col-md-8 col-md-offset-2">
                        <h2 class="section-title">Modificabilidad</h2>
                        <div class="spacer spacer-primary">
                            <div class="line">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <p>La modificabilidad tiene que ver con el cambio, y nuestro interés en él
                            se centra en el costo y el riesgo de realizar cambios. Para planificar la
                            modificabilidad, un arquitecto debe considerar cuatro preguntas:</p>
                    </header>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">¿Qué puede cambiar?</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Un cambio puede ocurrir en cualquier parte del sistema. Las
                                funciones,
                                la plataforma (El hardware, El SO, el Middleware), el entorno en el que opera el
                                sistema, su rendimiento,
                                su confiabilidad e incluso sus futuras modificaciones.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">¿Cuál es la probabilidad del cambio?</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Uno no puede planificar un
                                sistema para todos los cambios potenciales; el sistema nunca se haría, o
                                si se hiciera, sería demasiado caro y probablemente sufriría problemas
                                de atributos de calidad en otras dimensiones. Aunque cualquier
                                cosa puede cambiar, el arquitecto tiene que tomar las decisiones
                                difíciles sobre qué cambios son probables y, por lo tanto, qué cambios
                                se deben respaldar y cuáles no.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">¿Cuándo se hace el cambio?</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Más comúnmente en el
                                pasado, se hizo un cambio al código fuente. Es decir, un desarrollador
                                tuvo que hacer el cambio, que se probó y luego se implementó en una
                                nueva versión.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">¿Quién hace el cambio?</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Un desarrollador y un Usuario final pueden realizar un cambio,
                                obviamente con diferente alcance, el usuario tiene unos permisos y el desarrollador
                                otros.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">¿Cuál es el costo del cambio?</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Hacer un sistema más modificable implica dos tipos de costos:
                                <br> - El costo de introducir los mecanismos para hacer que el sistema sea más
                                modificable.
                                <br> - El costo de realizar la modificación utilizando los mecanismos.
                            </p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">más información<br></h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Por ejemplo, el mecanismo más simple para hacer un cambio es
                                esperar a que llegue una solicitud de cambio, luego cambiar el código
                                fuente para acomodar la solicitud. El costo de introducir el mecanismo
                                es cero; El costo de ejercerlo es el costo de cambiar el código fuente y
                                revalidar el sistema.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="disponibilidad" class="services text-center section pb-0">
            <div class="container">
                <div class="row">
                    <header class="col-md-8 col-md-offset-2">
                        <h2 class="section-title">Disponibilidad</h2>
                        <div class="spacer spacer-primary">
                            <div class="line">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <p>Se refiere a una propiedad de software que está allí y lista para llevar a cabo su tarea
                            cuando la necesita. Esta es una perspectiva amplia y abarca lo que normalmente se llama
                            confiabilidad
                            (aunque puede abarcar consideraciones adicionales como el tiempo de
                            inactividad debido al mantenimiento periódico).</p>
                    </header>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">Planificación para el fracaso</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Al diseñar un sistema de alta disponibilidad o crítico para la
                                seguridad, es
                                tentador decir que la falla no es una opción. Es una frase pegadiza, pero es una
                                pésima filosofía de diseño. De hecho, el fracaso no es solo una opción, es casi
                                inevitable.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">Análisis de riesgo</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Catastrófico: Este tipo de falla puede causar un accidente. Esta
                                falla representa la pérdida de la función crítica requerida para volar y aterrizar de
                                manera segura.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">Disponibilidad General</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Fuente de estímulo. Diferenciamos entre orígenes internos y
                                externos
                                de fallas o fallas porque la respuesta deseada del sistema puede ser
                                diferente.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">Detectar fallas</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Heartbeat: es un mecanismo de detección de fallas que emplea un
                                intercambio periódico de mensajes entre un monitor del sistema y un
                                proceso que se está monitoreando.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">Monitoreo de la condición</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Implica verificar las condiciones en un
                                proceso o dispositivo, o validar las suposiciones hechas durante el
                                diseño. Al monitorear las condiciones, esta táctica evita que un sistema
                                produzca un comportamiento defectuoso.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">Recuperación de las fallas</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">La reconfiguración intenta recuperarse de las fallas de los
                                componentes al reasignar responsabilidades a los recursos
                                (potencialmente restringidos) que dejaron de funcionar, mientras se
                                mantiene la mayor funcionalidad posible.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="testeabilidad" class="services text-center section pb-0">
            <div class="container">
                <div class="row">
                    <header class="col-md-8 col-md-offset-2">
                        <h2 class="section-title">Testeabilidad</h2>
                        <div class="spacer spacer-primary">
                            <div class="line">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <p>Específicamente, la capacidad de
                            prueba se refiere a la probabilidad, asumiendo que el software tiene al
                            menos una falla, que fallará en su próxima ejecución de
                            prueba.Intuitivamente, un sistema es comprobable si &quot;abandona&quot; sus
                            fallas fácilmente.</p>
                    </header>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">Fuente de estímulo</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Las pruebas son realizadas por probadores de
                                unidades, probadores de integración o probadores de sistemas (en el
                                lado de la organización en desarrollo), o probadores de aceptación y
                                usuarios finales (por el lado del cliente).La fuente podría ser humana o
                                un probador automatizado.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">Estímulo</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Se ejecuta un conjunto de pruebas debido a la finalización
                                de un incremento de codificación como una capa de clase o un servicio,
                                la integración completa de un subsistema, la implementación completa
                                de todo el sistema o la entrega del sistema al cliente.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">Artefacto</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Una unidad de código (correspondiente a un módulo en la
                                arquitectura), un subsistema o todo el sistema es el artefacto que se
                                está probando.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">Medio ambiente</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">La prueba puede realizarse en el momento del
                                desarrollo, en el momento de la compilación, en el momento del
                                despliegue o mientras el sistema se está ejecutando (tal vez en uso de
                                rutina).El entorno también puede incluir el arnés de prueba o los
                                entornos de prueba en uso.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">Respuesta</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">El sistema se puede controlar para realizar las pruebas
                                deseadas y se pueden observar los resultados de la prueba.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">Medida de respuesta</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Las medidas de respuesta están destinadas a
                                representar la facilidad con la que un sistema en prueba &quot;abandona&quot;
                                sus fallas.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="rendimiento" class="services text-center section pb-0">
            <div class="container">
                <div class="row">
                    <header class="col-md-8 col-md-offset-2">
                        <h2 class="section-title">Rendimiento</h2>
                        <div class="spacer spacer-primary">
                            <div class="line">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <p>Se trata del tiempo y la capacidad del sistema de
                            software para cumplir con los requisitos de tiempo.Cuando ocurren
                            eventos (interrupciones, mensajes, solicitudes de usuarios u otros
                            sistemas, o eventos de reloj que marcan el paso del tiempo), el sistema,
                            o algún elemento del sistema, debe responder a ellos a tiempo.</p>
                    </header>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">Tiempo de procesamiento</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">se trata del tiempo y la capacidad del sistema de
                                software para cumplir con los requisitos de tiempo.Cuando ocurren
                                eventos (interrupciones, mensajes, solicitudes de usuarios u otros
                                sistemas, o eventos de reloj que marcan el paso del tiempo), el sistema,
                                o algún elemento del sistema, debe responder a ellos a tiempo.Los recursos pueden ser
                                de Hardware o Software</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">Tiempo bloqueado</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Se puede bloquear un cálculo debido a la disputa
                                por algún recurso necesario, porque el recurso no está disponible o
                                porque el cálculo depende del resultado de otros cálculos que aún no
                                están disponibles.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">Contienda por los recursos</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Muchos recursos solo pueden ser
                                utilizados por un solo cliente a la vez. Esto significa que otros clientes
                                deben esperar para acceder a esos recursos.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">Disponibilidad de recursos</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Incluso en ausencia de contención, el
                                cálculo no puede continuar si un recurso no está disponible.La falta de
                                disponibilidad puede deberse a que el recurso está fuera de línea o por
                                una falla del componente o por algún otro motivo.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">Dependencia de otros cálculos</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Un cálculo puede tener que esperar
                                porque debe sincronizarse con los resultados de otro cálculo o porque
                                está esperando los resultados de un cálculo que inició.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">Controlar la demanda de recursos</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Esta táctica opera en el lado de la
                                demanda para producir una menor demanda de los recursos que
                                tendrán que atender los eventos.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="interoperabilidad" class="services text-center section pb-0">
            <div class="container">
                <div class="row">
                    <header class="col-md-8 col-md-offset-2">
                        <h2 class="section-title">Interoperabilidad</h2>
                        <div class="spacer spacer-primary">
                            <div class="line">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <p>Un sistema no puede ser interoperable
                            de forma aislada. Cualquier discusión sobre la interoperabilidad de un
                            sistema debe identificar con quién, con qué y bajo qué circunstancias,
                            por lo tanto, la necesidad de incluir el contexto.</p>
                    </header>
                </div>
            </div>
            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">Tiempo de procesamiento</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">se trata del tiempo y la capacidad del sistema de
                                software para cumplir con los requisitos de tiempo.Cuando ocurren
                                eventos (interrupciones, mensajes, solicitudes de usuarios u otros
                                sistemas, o eventos de reloj que marcan el paso del tiempo), el sistema,
                                o algún elemento del sistema, debe responder a ellos a tiempo.Los recursos pueden ser
                                de Hardware o Software</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">Descubrir el servicio</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Puede haber múltiples niveles de
                                direccionamiento indirecto en este proceso de ubicación, es decir, una
                                ubicación conocida apunta a otra ubicación que a su vez puede ser
                                Buscó el servicio.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">Gestionar interfaces</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">Orchestrate es una táctica que utiliza un mecanismo de
                                control para coordinar, gestionar y secuenciar la invocación de
                                servicios particulares (que podrían ignorarse entre sí).</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="container">
                    <div class="row row-columns">
                        <div class="service-column column col-md-4 wow fadeInUp">
<span class="icon-circle">
<i class="fa fa-magic"></i>
</span>
                            <h3 class="entry">Interfaz a medida</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">La interfaz Tailor es una táctica que agrega o
                                elimina capacidades a una interfaz.Se pueden agregar capacidades
                                como traducción, adición de búferes o suavizado de datos.Las
                                capacidades también pueden ser eliminadas.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.2s">
<span class="icon-circle">
<i class="fa fa-fire"></i>
</span>
                            <h3 class="entry">Escenario</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">El escenario general de interoperabilidad proporciona los
                                detalles de
                                estos diferentes casos.En cualquier caso de interoperabilidad, el
                                objetivo es intercambiar información intencionalmente o rechazar la
                                solicitud de intercambio de información.</p>
                        </div>
                        <div class="service-column column col-md-4 wow fadeInUp" data-wow-delay="0.4s">
<span class="icon-circle">
<i class="fa fa-flask"></i>
</span>
                            <h3 class="entry">más información</h3>
                            <div class="spacer">
                                <div class="line">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                            <p class="small text-muted">La interoperabilidad, como dijimos, se trata de dos o más
                                sistemas que
                                intercambian información a través de interfaces.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="criterios" class="about section pb-0">
            <div class="container">
                <div class="row">
                    <header class="text-center col-md-8 col-md-offset-2">
                        <h2 class="section-title">Criterios de Calidad</h2>
                        <div class="spacer spacer-primary">
                            <div class="line">
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                        <p>Son las herramientas de las cuales hacemos uso para garantizar la medida en que un producto o
                            servicio satisface los requerimientos de una función dada.</p>
                    </header>
                </div>
            </div>
        </section>

        <section id="contact" class="contact text-white masked section">
            <div class="container">
                <header class="text-center col-md-8 col-md-offset-2">
                    <h2 class="text-white section-title">Contáctanos</h2>
                    <div class="spacer spacer-primary">
                        <div class="line">
                            <div class="dot"></div>
                            <div class="dot"></div>
                            <div class="dot"></div>
                        </div>
                    </div>
                </header>
            </div>
            <div class="section-content">
                <div class="container rel-1">
                    <div class="row row-columns">
                        <div class="column col-md-4 col-md-push-8">
                            <div class="contact-row">
                                <div class="media-left">
<span class="icon-circle-3">
<i class="fa fa-map-marker"></i>
</span>
                                </div>
                                <div class="media-right">
                                    <h4 class="text-white icon-title">Dirección</h4>
                                    <p>Centro de Electricidad, Electrónica y Telecomunicaciones. <br>
                                        Cra 30 # 17B - 25 Sur</p>
                                </div>
                            </div>
                            <div class="contact-row">
                                <div class="media-left">
<span class="icon-circle-3">
<i class="fa fa-envelope"></i>
</span>
                                </div>
                                <div class="media-right">
                                    <h4 class="text-white icon-title">Correo Electrónico</h4>
                                    <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                          data-cfemail="721b1c111d151c1b061d061a171f1732151f131b1e5c111d1f">[email&#160;protected]</a><br>
                                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                           data-cfemail="2a584f5c454b4d4f4449536a53455f584e45474b434404494547">[email&#160;protected]</a>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-row">
                                <div class="media-left">
<span class="icon-circle-3">
<i class="fa fa-phone"></i>
</span>
                                </div>
                                <div class="media-right">
                                    <h4 class="text-white icon-title">Teléfono</h4>
                                    <p>(+57) 320-654-3856<br>
                                        (+1) 367-30-39</p>
                                </div>
                            </div>
                        </div>
                        <div class="column col-md-8 col-md-pull-4">
                            <form class="js-ajax-form">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-white" name="name"
                                           placeholder="Escribe aquí tu nombre favorito!">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-white" name="email" required
                                           placeholder="Correo electrónico *">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form-control-white" name="message" required
                                              placeholder="Escribe aquí tus sugerencias y felicitaciones *"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-b-white wow swing">Enviar Mensaje</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="footer text-white">
            <div class="footer-bottom">
                <div class="container">
                    <div class="copy">
                        © 2021 Laura Camila. Todos los derechos reservados para <a
                            href="https://github.com/LauraCamilaPaez"
                            target="_blank">Merlin</a>
                    </div>
                    <div class="social">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                        <a href="#" class="fa fa-youtube-play"></a>
                        <a href="#" class="fa fa-google-plus"></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<div id="request" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="Close">&times;</span>
                <h2 class="modal-title">Comienza a aprender con nosotros</h2>
            </div>
            <div class="modal-body text-center">
                <form class="form-request js-ajax-form">
                    <div class="row-fields row">
                        <div class="form-group col-field col-sm-6">
                            <input type="text" class="form-control form-control-white" name="name" required
                                   placeholder="Escribe aquí tu nombre *">
                        </div>
                        <div class="form-group col-field col-sm-6">
                            <input type="email" class="form-control form-control-white" name="email" required
                                   placeholder="Escribe aquí tu correo *">
                        </div>
                        <div class="form-group col-field col-sm-12">
                            <textarea class="form-control form-control-white" rows="3" name="message"
                                      placeholder="Escribe aquí que temas te gustaría aprender "></textarea>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-hvr-white hvr-pulse-grow" data-text-hover="Submit">
                                Enviar Mensaje
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="success" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></span>
                <h2 class="modal-title">Thank you</h2>
                <p class="modal-subtitle">Your message is successfully sent...</p>
            </div>
        </div>
    </div>
</div>

<div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></span>
                <h2 class="modal-title">Lo sentimos</h2>
                <p class="modal-subtitle">Algo salio mal</p>
            </div>
        </div>
    </div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<script src="{{ url('js/app.js') }}"></script>
<script>
    if (typeof $.fn.revolution !== 'undefined') {

        $("#rev_slider").revolution({
            sliderType: "standard",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 7000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 767,
                    style: "custom",
                    hide_onmobile: true,
                    hide_onleave: true,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 40,
                    space: 8,
                    tmp: '<span class="tp-bullet-inner"></span>'
                }
            },
            viewPort: {
                enable: true,
                outof: "pause",
                visible_area: "80%"
            },
            responsiveLevels: [1240, 1024, 778, 480],
            gridwidth: [800],
            gridheight: [600],
            lazyType: "none",
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    }
</script>
</body>
</html>
