<head>
        <meta charset="UTF-8">
        <title> AdminLTE 2 with Laravel - @yield('htmlheader_title', 'Your title here') </title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
            
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
            <link href="{{ mix('/css/all.css') }}" rel="stylesheet" type="text/css" />
            <link href="{{ mix('/css/custom.css') }}" rel="stylesheet" type="text/css" />
            <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
        <script>
            //See https://laracasts.com/discuss/channels/vue/use-trans-in-vuejs
            window.trans = @php
                // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
                $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
                $trans = [];
                foreach ($lang_files as $f) {
                    $filename = pathinfo($f)['filename'];
                    $trans[$filename] = trans($filename);
                }
                $trans['adminlte_lang_message'] = trans('adminlte_lang::message');
                echo json_encode($trans);
            @endphp
        </script>
    </head>
    
    <body>
            <div id="app">
                <section id="slider-menu-section">
                    <div id="hero-slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php $files = File::allFiles(public_path() . '/img/slider-images');
                                $count = 0;
                                $sliderCaptions = [
                                    'slider-1.jpg' => [
                                        'caption' => 'Caption 1 <br> for slider 1'
                                    ],
                                    'slider-2.jpg' => [
                                                'caption' => 'Caption 2 <br> for slider 2'
                                    ],
                                    'slider-3.jpg' => [
                                                'caption' => 'Caption 2 <br> for slider 2'
                                    ],
                                ];
                                ?>
                                <?php foreach ($files as $file) : $filename = basename($file); ?>
                                    <div class="item  <?php if($count === 0){ echo "active"; }?>">
                                        <img src="/img/slider-images/<?php echo $filename; ?>">
                                        <div class="slider-caption"><?php echo $sliderCaptions[$filename]['caption']; ?></div>
                                    </div>
                                <?php $count++; ?>
                                <?php endforeach; ?>
                        </div>
                        
                        <div id="main-search">
                            <h1>Book unique homes and experiences all over the world.</h1>
                            <input class="form-control" type="text" placeholder="Search your destination" />
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <div class="top-left logo">
                        <object id="mysvg-logo" fill="white" width="35px" height="35px" type="image/svg+xml" data="/img/air-logo.svg">Your browser does not support SVG</object>                  
                    </div>
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">Become a host</a>
                            <a href="{{ route('login') }}">Help</a>
                            <a href="{{ route('register') }}">Sign up</a>
                            <a href="{{ route('login') }}">Log in</a>
                        @endauth
                    </div>
                </section>
    
                <section id="main-content">
                    <div class="container">
                        <div class="row">
                            <h3>Explore Airbnb</h3>
                        </div>
                        <div class="row margin-row" >
                            <div class="col-md-3">
                                <div class="category-image-holder">
                                    <img src="/img/home-page-images/cat-1.jpeg" />
                                </div>
                                <div class="category-text-holder">
                                    <h4>Homes</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="category-image-holder">
                                    <img src="/img/home-page-images/cat-2.jpeg" />
                                </div>
                                <div class="category-text-holder">
                                    <h4>Experiences</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="category-image-holder">
                                    <img src="/img/home-page-images/cat-3.jpeg" />
                                </div>
                                <div class="category-text-holder">
                                    <h4>Resturants</h4>
                                </div>
                            </div>
                            <div class="col-md-3">
                              
                            </div>
                        </div>
                        <div class="row margin-row">
                                <h3>Introducing Airbnb Plus</h3>
                                <div class="intro-image-holder">
                                    <img src="/img/home-page-images/intro-background.jpg" />
                                </div>
                        </div>
                        <div class="row margin-row">
                                <h3>Homes around the world</h3>
                        </div>
                    </div>
                </section>
            </div>




<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>

</body>
</html>
