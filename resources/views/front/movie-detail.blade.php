@extends('layout.master')

@section('content')
<header class="page-header">
    <div class="container">
        <h1>Detail</h1>
    </div>
</header>
<main>
    <section class="content-section" data-background="#ffffff">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="movie-info-box">
                        <a href="/" class="btn btn-danger"><i class="lni lni-chevron-left"></i> BACK</a>
                        <h2 class="name">{{ $detail["original_title"] }}</h2>
                        <ul class="features">
                            <li>
                                <div class="rate">
                                    <svg class="circle-chart" viewBox="0 0 30 30" width="40" height="40"
                                        fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="circle-chart__background" stroke="#eee" stroke-width="2"
                                            fill="none" cx="15" cy="15" r="14">
                                        </circle>
                                        <circle class="circle-chart__circle" stroke="#4eb04b" stroke-width="2"
                                            stroke-dasharray="50,100" cx="15" cy="15" r="14"></circle>
                                    </svg>
                                    <b>{{ round($detail["vote_average"], 1) }}</b> IMDB SCORE </div>
                            </li>
                            <li>
                                <div class="hd">{{ round($detail["vote_count"], 1) }} <b>Vote</b></div>
                            </li>
                            <li>
                                <div class="year">{{ date('Y', strtotime($detail["release_date"])) }}</div>
                            </li>
                            <li>
                                <div class="tags">
                                    @foreach($detail["genres"] as $genre)
                                        {{ $genre["name"] }}
                                        @if(next($detail["genres"]))
                                        {{ ", " }}
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        </ul>
                        <p class="description">{{ $detail["overview"] }}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="movie-side-info-box">
                        <figure><img src="https://image.tmdb.org/t/p/w500{{ $detail['poster_path'] }}" alt="Image">
                        </figure>
                        <table class="table table-transparent">
                            <tr>
                                <td class="text-nowrap"><strong>Initial release</strong></td>
                                <td>{{ $detail['release_date'] }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap"><strong>Status</strong></td>
                                <td>{{ $detail["status"] }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap"><strong>Tagline</strong></td>
                                <td>{{ $detail["tagline"] }}</td>
                            </tr>
                            <tr>
                                <td class="text-nowrap"><strong>Production</strong></td>
                                <td>
                                    @foreach($detail["production_companies"] as $prodComp)
                                        {{ $prodComp["name"] }}
                                        @if(next($detail["production_companies"]))
                                        {{ ", " }}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
            <div class="container"> <span>© 2020 Digiflex | Online Movie Streaming</span> <span>Site
                    create by <a href="#">Themezinho</a></span> </div>
        </div>
    </footer>
</main>
@stop