<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title> {{ $sitesettings->site_name }}</title>
    <meta name="keywords" content=" {{ $sitesettings->keyword }}">
    <meta name="description" content=" {{ $sitesettings->description }}">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="storage/{{ $sitesettings->id }}/{{ $sitesettings->file_name }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesoeet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>

    <!--header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <div class="costum_header">
                <div class="logo"><a href="index.html"><img
                            src="storage/{{ $sitesettings->id }}/{{ $sitesettings->file_name }}"></a></div>
                {{-- <div class="contact_menu">
                    <ul>
                        <li><img src="images/call-icon.png" class="padding_right_10"><a href="#">Call:
                                {{ $sitesettings->phone }}</a></li>
                        <li><img src="images/mail-icon.png" class="padding_right_10"><a
                                href="mailto:{{ $sitesettings->email }}">Email:
                                {{ $sitesettings->email }}</a></li>
                        {{-- <li><img src="images/map-icon.png" class="padding_right_10"><a href="#">Location: lorm
                                ipusm</a></li> 
                </ul>
            </div>
            {{-- <div class="menu_text">
                    <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                            <a href="index.html">Home</a>
                            <a href="services.html">Services</a>
                            <a href="providing.html">Providing</a>
                            <a href="choose.html">Choose</a>
                        </div>
                    </div>
                    <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"
                            class="toggle_menu"></span>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($homeslider as $item)
                        @if ($loop->index === 0)
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="banner_taital">
                                            <h1 class="banner_taital">{{ $item->title }}</h1>
                                            <p class="banner_text">{{ $item->description }}</p>

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div><img src="storage/{{ $item->id }}/{{ $item->file_name }}"
                                                class="banner_img"></div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="banner_taital">
                                            <h1 class="banner_taital">{{ $item->title }}</h1>
                                            <p class="banner_text">{{ $item->description }}</p>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div><img src="storage/{{ $item->id }}/{{ $item->file_name }}"
                                                class="banner_img"></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach



                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section end -->
    <!-- services section start -->
    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital">Our <span style="color: #0c426e">Services</span></h1>

            <div class="services_section_2 layout_padding">
                <div class="row">
                    @foreach ($services as $item)
                        @if ($loop->index === 0)
                            <div class="col-md-4 p-10">
                                <div class="services_box">
                                    <h4 class="express_text">{{ $item->title }}</h4>
                                    <p class="lorem_text pb-2">{{ $item->description }} </p>

                                    <div><img src="storage/{{ $item->id }}/{{ $item->file_name }}"
                                            class="image_1"></div>
                                </div>
                            </div>
                        @elseif ($loop->index === 1)
                            <div class="col-md-4 p-10">
                                <div class="services_box">
                                    <div><img src="storage/{{ $item->id }}/{{ $item->file_name }}"
                                            class="image_1"></div>
                                    <h4 class="express_text">{{ $item->title }}</h4>
                                    <p class="lorem_text ">{{ $item->description }} </p>

                                </div>
                            </div>
                        @elseif ($loop->index === 2)
                            <div class="col-md-4 p-10">
                                <div class="services_box">
                                    <h4 class="express_text">{{ $item->title }}</h4>
                                    <p class="lorem_text pb-2">{{ $item->description }} </p>

                                    <div><img src="storage/{{ $item->id }}/{{ $item->file_name }}"
                                            class="image_1"></div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- services section end -->
    <!-- providing section start -->
    <div class="providing_section layout_padding">
        <div class="container">
            <h1 class="services_taital">We’re Providing Best <span style="color: #0c426e">Quality Service</span></h1>
        </div>
    </div>
    <div class="providing_section_2 layout_padding">
        <div class="container">
            <h2 class="clean_text">{{ $bestquality->title }}</h2>
            <p class="ipsum_text">{{ $bestquality->description }} </p>

        </div>
    </div>
    <!-- providing section end -->
    <!-- choose section start -->
    <div class="choose_section layout_padding">
        <div class="container">
            <h1 class="services_taital">Why <span style="color: #0c426e">Choose Us?</span></h1>
            <div class="choose_section_2 layout_padding">
                <div class="row">
                    @foreach ($whies as $item)
                        <div class="col-md-4">
                            <div class="choose_box">
                                <div class="number_1">
                                    <h4 class="number_text">{{ $loop->iteration }}</h4>
                                    <h4 class="trusted_text">{{ $item->title }}</h4>
                                </div>
                                <p class="dummy_text">{{ $item->description }}</p>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
    <!-- choose section end -->
    <!-- testimonial section start -->
    <div class="testimonial_section layout_padding">
        <div class="container">
            <h1 class="testimonial_taital">Testimonial</h1>

            <div class="testimonial_section_2">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($testimonials as $item)
                            @if ($loop->index === 0)
                                <div class="carousel-item active">
                                    <div class="testimonial_box">
                                        <div class="tectimonial_mail">
                                            <div class="client_image_section">
                                                <img src="storage/{{ $item->id }}/{{ $item->file_name }}"
                                                    class="client_img">
                                            </div>
                                            <div class="client_text_section">
                                                <p class="testimonial_text">{{ $item->testimonial }}</p>
                                                <h4 class="joech_text">{{ $item->customername }}</h4>
                                                <p class="customer_text">{{ $item->type }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="carousel-item ">
                                    <div class="testimonial_box">
                                        <div class="tectimonial_mail">
                                            <div class="client_image_section">
                                                <img src="storage/{{ $item->id }}/{{ $item->file_name }}"
                                                    class="client_img">
                                            </div>
                                            <div class="client_text_section">
                                                <p class="testimonial_text">{{ $item->testimonial }}</p>
                                                <h4 class="joech_text">{{ $item->customername }}</h4>
                                                <p class="customer_text">{{ $item->type }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach


                    </div>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <h2 class="useful_text">Contact Us</h2>
                    <div class="location_text"><img src="images/map-icon1.png"><a href="#"><span
                                class="padding_left_15">{{ $sitesettings->location }}</span></a></div>
                    <div class="location_text"><img src="images/call-icon1.png"><a href="#"><span
                                class="padding_left_15"> {{ $sitesettings->phone }}</span></a></div>
                    <div class="location_text"><img src="images/mail-icon1.png"><a href="#"><span
                                class="padding_left_15">{{ $sitesettings->email }}</span></a></div>
                </div>



            </div>
            <div class="social_icon">
                <div id="social">
                    <a class="facebookBtn smGlobalBtn" href="{{ $sitesettings->facebook }}"></a>
                    <a class="twitterBtn smGlobalBtn" href="#"></a>
                    <a class="instagramBtn smGlobalBtn" href="#"></a>
                    <a class="linkedinBtn smGlobalBtn" href="#"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">{{ $sitesettings->footer_text }}</p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
</body>

</html>
