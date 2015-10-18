<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <title>Interactive Collab - Write better, together</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/HelveticaNeue/font.css">
    <link href="/styles.css" rel="stylesheet" media="screen">
    <link href="responsive.css" rel="stylesheet" media="screen">

    <!-- Dropzone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
</head>

<body id="scroll_top">
<section id="header_area">

    <div class="header_top_area">
        <div class="header_top center">
        </div>
    </div>

    <div class="fix header_bottom_area">
        <div class="header_bottom center">
            <div class="fix logo floatleft">
                <h1>Interactive Collab</h1>
                <p>Write better, together.</p>
            </div>
        </div>
    </div>

</section>
<section id="header_bottom_area"></section>
<section id="content_area">
    <div class="content center">
        <div class="main_menu">
            <nav>
                <ul id="nav2">
                    <li><a href="/">Home</a></li>
                    <li><a href="">Login</a></li>
                    <li><a href="">Register</a></li>
                    <li><a href="/story/create">Create new Story</a></li>
                </ul>
            </nav>
        </div>
        <div class="fix main_content_area">
            <div class="fix home_main_content">

                @yield('content')

                <div class="sidebar floatright">
                    <div class="fix single_sidebar">
                        <h2><span>Search Stories</span></h2>
                        <input type="text" placeholder=""/>
                    </div>
                    <div class="fix single_sidebar">
                        <h2><span>Recent Stories</span></h2>
                        <ul>
                            <li><a href="">Story Title</a></li>
                            <li><a href="">Story Title</a></li>
                            <li><a href="">Story Title</a></li>
                            <li><a href="">Story Title</a></li>
                            <li><a href="">Story Title</a></li>
                        </ul>
                    </div>
                    <div class="fix single_sidebar">
                        <h2><span>Genres</span></h2>
                        <ul>
                            <li><a href="">Action</a>(15)</li>
                            <li><a href="">Adventure</a>(15)</li>
                            <li><a href="">Comedy</a>(15)</li>
                            <li><a href="">Crime</a>(15)</li>
                            <li><a href="">Drama</a>(15)</li>
                            <li><a href="">Fantasy</a>(15)</li>
                            <li><a href="">Historical</a>(15)</li>
                            <li><a href="">Horror/Thriller</a>(15)</li>
                            <li><a href="">Mystery</a>(15)</li>
                            <li><a href="">Philosophical</a>(15)</li>
                            <li><a href="">Political</a>(15)</li>
                            <li><a href="">Romance</a>(15)</li>
                            <li><a href="">Satire</a>(15)</li>
                            <li><a href="">Science Fiction</a>(15)</li>
                        </ul>
                    </div>

                    <div class="fix single_sidebar tags">
                        <h2><span>Tags</span></h2>
                        <a href="">Courage</a>
                        <a href="">Friendship</a>
                        <a href="">Family</a>
                        <a href="">Short story</a>
                        <a href="">Justice</a>
                        <a href="">Betrayal</a>
                        <a href="">Jealousy</a>
                        <a href="">Love</a>
                        <a href="">Prejudice</a>
                        <a href="">Lust</a>
                        <a href="">Young Adults</a>
                        <a href="">Motherhood</a>
                        <a href="">Nature</a>
                        <a href="">Technology</a>
                        <a href="">Fashion</a>
                        <a href="">Design</a>
                        <a href="">Self-Improvement</a>
                        <a href="">Religion</a>
                    </div>
                </div>
            </div>
            <div class="fix scroll_to_top">
                <a href="#scroll_top" class="floatright">Back to Top </a>
            </div>
        </div>
    </div>
    </div>
</section>
        <section id="footer_top_area">
            <div class="fix footer_top center">
                <div class="fix footer_top_container">
                    <div class="fix single_footer_top floatleft">
                        <h2><span>Join</span></h2>
                        <ul>
                            <li><a href="">Register</a></li>
                            <li><a href="">Sign in</a></li>
                        </ul>
                    </div>
                    <div class="fix single_footer_top floatleft">
                        <h2><span>Create</span></h2>
                        <ul>
                            <li><a href="/story/create">Create a new story</a></li>
                        </ul>
                    </div>
                    <div class="fix single_footer_top floatleft">
                        <h2><span>Interact</span></h2>
                        <ul>
                            <li><a href="">Forum</a></li>
                            <li><a href="">Browse stories</a></li>
                            <li><a href="">Read</a></li>
                        </ul>
                    </div>

                    <div class="fix single_footer_top footer_logo floatright">
                        <h1>Interactive Collab</h1>
                        <p>Write better together</p>
                    </div>

                </div>


            </div>
        </section>
        <section id="footer_bottom_area">
            <div class="fix footer_bottom center">
                <div class="fix copyright floatleft">
                </div>
                <div class="fix footer_bottom_text floatright">
                </div>
            </div>
        </section>
        <script src="http://code.jquery.com/jquery.js"></script>
        <!-- Jessor slider Start-->
        <script type="text/javascript" src="js/jssor.core.js"></script>
        <script type="text/javascript" src="js/jssor.utils.js"></script>
        <script type="text/javascript" src="js/jssor.slider.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                var options = {
                    $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                    $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                    $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                    $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                    $ThumbnailNavigatorOptions: {
                        $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                        $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                        $Loop: 2,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
                        $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                        $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                        $DisplayPieces: 6,                              //[Optional] Number of pieces to display, default value is 1
                        $ParkingPosition: 204,                          //[Optional] The offset position to park thumbnail,

                        $ArrowNavigatorOptions: {
                            $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                            $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                            $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                            $Steps: 6                                       //[Optional] Steps to go for each navigation request, default value is 1
                        }
                    }
                };

                var jssor_slider1 = new $JssorSlider$("slider1_container", options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizes
                function ScaleSlider() {
                    var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                    if (parentWidth)
                        jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 980));
                    else
                        window.setTimeout(ScaleSlider, 30);
                }

                ScaleSlider();

                if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                    $(window).bind('resize', ScaleSlider);
                }


                //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
                //    $(window).bind("orientationchange", ScaleSlider);
                //}
                //responsive code end
            });
        </script>
        <!-- Jessor slider End-->
        <script type="text/javascript" src="js/selectnav.min.js"></script>
        <script type="text/javascript">
            selectnav('nav', {
                label: '-Navigation-',
                nested: true,
                indent: '-'
            });
            selectnav('nav2', {
                label: '-Navigation-',
                nested: true,
                indent: '-'
            });


        </script>
        <script type="text/javascript">

            $(function() {
                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>

@yield('scripts.footer')

</body>
</html>