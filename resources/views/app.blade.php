<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Interactive IT Solutions">
        <meta name="keywords" content="interactiveIt, interactive, cheese machine it">
        <meta name="author" content="Aayush Rijal">
        <title>Interactive IT Solutions</title>
        <link href="{{asset('css/main.css')}}"  rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="device-notification">
        <a class="device-notification--logo" href="#0">
            <img src="{{asset('images/logo.png')}}" alt="Global">
            <p>Interactive IT Solutions</p>
        </a>
        <p class="device-notification--message">Interactive IT Solutions</p>
    </div>
    <div class="perspective effect-rotate-left">
    <div class="container"><div class="outer-nav--return"></div>
        <div id="viewport" class="l-viewport">
        <div class="l-wrapper">
            <header class="header">
            <a class="header--logo" href="#0">
                <img src="{{asset('images/logo.png')}}" alt="Global">
                <p>Interactive IT Solutions</p>
            </a>
            <button class="header--cta cta">Hire Us</button>
            <div class="header--nav-toggle">
                <span></span>
            </div>
            </header>
            <nav class="l-side-nav">
            <ul class="side-nav">
                <li class="is-active"><span>Home</span></li>
                <li><span>Products</span></li>
                <li><span>About</span></li>
                <li><span>Contact</span></li>
                <li><span>Hire Us</span></li>                
            </ul>
            </nav>
            <ul class="l-main-content main-content">
            <li class="l-section section section--is-active">
                <div class="intro">
                <div class="intro--banner">
                    <h1>{{ $content_1 }}</h1>
                    <button class="cta">Hire Us
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                        <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                    </g>
                    </svg>
                    <span class="btn-background"></span>
                    </button>
                    <img src="{{asset('images/introduction-visual.png')}}" alt="Welcome">
                </div>
                <div class="intro--options">
                    <div>
                    <h3>{{ $content_2 }}</h3>
                    <p>{{ $content_3 }}</p>
                    </div>
                    <div>
                    <h3>{{ $content_4 }}</h3>
                    <p>{{ $content_5 }}</p>
                    </div>
                    <div>
                    <h3>{{ $content_6 }}</h3>
                    <p>{{ $content_7 }}</p>
                    </div>
                </div>
                </div>
            </li>
            <li class="l-section section">
                <div class="work">
                <h2>Our Products</h2>
                <div class="work--lockup">
                    <ul class="slider">
                    <li class="slider--item slider--item-left">
                        <a href="#0">
                        <div class="slider--item-image">
                            <img src="{{asset('images/img1.png')}}" alt="iPad POS System">
                        </div>
                        <p class="slider--item-title">iPad POS System</p>
                        <p class="slider--item-description">{{ $content_8 }}</p>
                        </a>
                    </li>
                    <li class="slider--item slider--item-center">
                        <a href="#0">
                        <div class="slider--item-image">
                            <img src="{{asset('images/img2.jpg')}}" alt="iPad Digital Menus">
                        </div>
                        <p class="slider--item-title">iPad Digital Menus</p>
                        <p class="slider--item-description">{{ $content_9 }}</p>
                        </a>
                    </li>
                    <li class="slider--item slider--item-right">
                        <a href="#0">
                        <div class="slider--item-image">
                            <img src="{{asset('images/img3.jpg')}}" alt="iPad Self Order Kiosks">
                        </div>
                        <p class="slider--item-title">iPad Self Order Kiosks</p>
                        <p class="slider--item-description">{{ $content_10 }}</p>
                        </a>
                    </li>
                    </ul>
                    <div class="slider--prev">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                        <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                        c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                        c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z"/>
                    </g>
                    </svg>
                    </div>
                    <div class="slider--next">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                    <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                        <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                    </g>
                    </svg>
                    </div>
                </div>
                </div>
            </li>
            <li class="l-section section">
                <div class="about">
                <div class="about--banner">
                    <h2>{{ $content_11 }}</h2>
                    <a href="#0">{{ $content_12 }}
                    <span>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                        <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                        <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                        </g>
                        </svg>
                    </span>
                    </a>
                    <img src="{{asset('images/about-visual.png')}}" alt="About Us">
                </div>
                <div class="about--options">
                    <a href="#0">
                    <h3>{{ $content_13 }}</h3>
                    </a>
                    <a href="#0">
                    <h3>{{ $content_14 }}</h3>
                    </a>
                    <a href="#0">
                    <h3>{{ $content_15 }}</h3>
                    </a>
                </div>
                </div>
            </li>
            <li class="l-section section">
                <div class="contact">
                    <div class="contact--lockup">
                        <div  id="map" class="contact-map">
                        </div>
                        <div class="modal">
                            <div class="modal--information">
                                <p>Basantapur, Kathmandu, Nepal</p>
                                <a href="mailto:devil.dewzone@gmail.com">devil.dewzone@gmail.com</a>
                                <p>+977 1 4225212</p>
                            </div>
                            <ul class="modal--options">
                            <li><a href="mailto:devil.dewzone@gmail.com">Contact Us</a></li>
                            <li><a href="https://www.instagram.com/cheesemachineofficial/">Instagram</a></li>
                                <li><a href="https://www.facebook.com/pg/CheeseMachinee/about/?ref=page_internal">Facebook</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="l-section section">
                <div class="hire">
                <h2>You want us to do</h2>
                <form class="work-request" action="{{ route('postmanService')}}" method="GET">
                    {{ csrf_field() }}
                    <div class="work-request--options">
                    <span class="options-a">
                        <input id="opt-1" type="checkbox" value="{{ $content_16 }}" name="option1">
                        <label for="opt-1">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                        <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                            <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                        </g>
                        </svg>
                        {{ $content_16 }}
                        </label>
                        <input id="opt-2" type="checkbox" value="{{ $content_17 }}" name="option2">
                        <label for="opt-2">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                        <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                            <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                        </g>
                        </svg>
                        {{ $content_17 }}
                        </label>
                        <input id="opt-3" type="checkbox" value="{{ $content_18 }}" name="option3">
                        <label for="opt-3">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                        <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                            <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                        </g>
                        </svg>
                        {{ $content_18 }}
                        </label>
                    </span>
                    <span class="options-b">
                        <input id="opt-4" type="checkbox" value="{{ $content_19 }}" name="option4">
                        <label for="opt-4">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                        <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                            <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                        </g>
                        </svg>
                        {{ $content_19 }}
                        </label>
                        <input id="opt-5" type="checkbox" value="{{ $content_20 }}" name="option5">
                        <label for="opt-5">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                        <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                            <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                        </g>
                        </svg>
                        {{ $content_20 }}
                        </label>
                        <input id="opt-6" type="checkbox" value="{{ $content_21 }}" name="option6">
                        <label for="opt-6">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                        <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                            <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                        </g>
                        </svg>
                        {{ $content_21 }}
                        </label>
                    </span>
                    </div>
                    <div class="work-request--information">
                    <div class="information-name">
                        <input id="name" type="text" spellcheck="false" name="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="information-email">
                        <input id="email" type="email" spellcheck="false" name="email">
                        <label for="email">Email</label>
                    </div>
                    </div>
                    <input type="submit" value="Send Request">
                </form>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </div>
    <ul class="outer-nav">
        <li class="is-active">Home</li>
        <li>Products</li>
        <li>About</li>
        <li>Contact</li>
        <li>Hire Us</li>
        
    </ul>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
    <script src="{{asset('js/functions-min.js')}}"></script>
    <script>
        function initMap() {
            var interactiveItLocation = {lat: 27.7036864, lng: 85.3075725};
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: interactiveItLocation,
            scaleControl: false,
            scrollwheel: false,
            });
            var marker = new google.maps.Marker({
            position: interactiveItLocation,
            map: map
            });
        }
        </script>
        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_API_KEY')}}&callback=initMap">
    </script>
    </body>
</html>
