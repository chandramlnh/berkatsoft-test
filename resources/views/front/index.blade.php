@extends('layout.master')

@section('content')
<header class="page-header">
    <div class="container">
        <h1>Movies</h1>
    </div>
</header>
<main>
    @if($type == "now-playing" || $type == "all")
        <section class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h6>NOW PLAYING</h6>
                        </div>
                    </div>
                    @foreach($nowPlaying["results"] as $value)
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="video-thumb">
                                <figure class="video-image"> <a href="#"><img src="https://image.tmdb.org/t/p/w500{{ $value['poster_path'] }}" alt="Image"></a>
                                    <div class="circle-rate">
                                        <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2"
                                                fill="none" cx="15" cy="15" r="14"></circle>
                                            <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                                stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                        </svg>
                                        <b>{{ $value['vote_average'] }}</b> </div>
                                    <div class="hd">{{ $value["vote_count"] }} <b>Vote</b></div>
                                </figure>
                                <div class="video-content">
                                    <ul class="tags">
                                        @foreach($genre['genres'] as $g)
                                            @foreach($value["genre_ids"] as $v)
                                                @if($v == $g['id'])
                                                    <li>{{ $g["name"] }}</li>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </ul>
                                    <div class="age">{{ $value['release_date'] }}</div>
                                    <h3 class="name"><a href="{{ route("movieDetail", base64_encode($value['id'])) }}">{{ $value['title'] }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if($type == "popular" || $type == "all")
        <section class="content-section" data-background="#f9f5f7">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h6>POPULAR</h6>
                        </div>
                    </div>
                    @foreach($popular["results"] as $value)
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="video-thumb">
                                <figure class="video-image"> <a href="#"><img src="https://image.tmdb.org/t/p/w500{{ $value['backdrop_path'] }}" alt="Image"></a>
                                    <div class="circle-rate">
                                        <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2"
                                                fill="none" cx="15" cy="15" r="14"></circle>
                                            <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                                stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                        </svg>
                                        <b>{{ $value['vote_average'] }}</b> </div>
                                    <div class="hd">{{ $value["vote_count"] }} <b>Vote</b></div>
                                </figure>
                                <div class="video-content">
                                    <ul class="tags">
                                        @foreach($genre['genres'] as $g)
                                            @foreach($value["genre_ids"] as $v)
                                                @if($v == $g['id'])
                                                    <li>{{ $g["name"] }}</li>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </ul>
                                    <div class="age">{{ $value['release_date'] }}</div>
                                    <h3 class="name"><a href="{{ route("movieDetail", base64_encode($value['id'])) }}">{{ $value['title'] }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if($type == "top-rated" || $type == "all")
        <section class="content-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h6>TOP RATED</h6>
                        </div>
                    </div>
                    @foreach($topRated["results"] as $value)
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="video-thumb">
                                <figure class="video-image"> <a href="#"><img src="https://image.tmdb.org/t/p/w500{{ $value['backdrop_path'] }}" alt="Image"></a>
                                    <div class="circle-rate">
                                        <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2"
                                                fill="none" cx="15" cy="15" r="14"></circle>
                                            <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                                stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                        </svg>
                                        <b>{{ $value['vote_average'] }}</b> </div>
                                    <div class="hd">{{ $value["vote_count"] }} <b>Vote</b></div>
                                </figure>
                                <div class="video-content">
                                    <ul class="tags">
                                        @foreach($genre['genres'] as $g)
                                            @foreach($value["genre_ids"] as $v)
                                                @if($v == $g['id'])
                                                    <li>{{ $g["name"] }}</li>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </ul>
                                    <div class="age">{{ $value['release_date'] }}</div>
                                    <h3 class="name"><a href="{{ route("movieDetail", base64_encode($value['id'])) }}">{{ $value['title'] }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if($type == "upcoming" || $type == "all")
        <section class="content-section" data-background="#f9f5f7">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h6>UP COMING</h6>
                        </div>
                    </div>
                    @foreach($upComing["results"] as $value)
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="video-thumb">
                                <figure class="video-image"> <a href="#"><img src="https://image.tmdb.org/t/p/w500{{ $value['backdrop_path'] }}" alt="Image"></a>
                                    <div class="circle-rate">
                                        <svg class="circle-chart" viewBox="0 0 30 30" width="100" height="100"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle class="circle-chart__background" stroke="#2f3439" stroke-width="2"
                                                fill="none" cx="15" cy="15" r="14"></circle>
                                            <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                                stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                        </svg>
                                        <b>{{ $value['vote_average'] }}</b> </div>
                                    <div class="hd">{{ $value["vote_count"] }} <b>Vote</b></div>
                                </figure>
                                <div class="video-content">
                                    <ul class="tags">
                                        @foreach($genre['genres'] as $g)
                                            @foreach($value["genre_ids"] as $v)
                                                @if($v == $g['id'])
                                                    <li>{{ $g["name"] }}</li>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </ul>
                                    <div class="age">{{ $value['release_date'] }}</div>
                                    <h3 class="name"><a href="{{ route("movieDetail", base64_encode($value['id'])) }}">{{ $value['title'] }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5 class="call-us">Questions? <strong>Call 0850-380-6444</strong></h5>
                    <p> Format for custom post types that are not book
                        or you can use else if to <u>specify a second</u> post type the
                        same way as above. </p>
                    <div class="language"> <i class="lni lni-world"></i>
                        <select>
                            <option>English</option>
                            <option>Spanish</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-4">
                    <h6 class="widget-title">DIGIFLEX</h6>
                    <ul class="footer-menu">
                        <li><a href="digiflex.html">Digiflex</a></li>
                        <li><a href="devices.html">Devices</a></li>
                        <li><a href="tips.html">Tips</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h6 class="widget-title">SUPPORT</h6>
                    <ul class="footer-menu">
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="help-center.html">Help Center</a></li>
                        <li><a href="account.html">Account</a></li>
                        <li><a href="support.html">Support <i class="lni lni-question-circle"></i></a></li>
                        <li><a href="media-center.html">Media Center</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h6 class="widget-title">POLICIES</h6>
                    <ul class="footer-menu">
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms-agreement.html">Terms & Agreement</a></li>
                        <li><a href="legal-notices.html">Legal Notices</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
            <div class="container"> <span>© 2020 Digiflex | Online Movie Streaming</span> <span>Site create by <a
                        href="#">Themezinho</a></span> </div>
        </div>
    </footer>
</main>
@stop