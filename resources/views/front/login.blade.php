@extends('layout.master')

@section('content')
<header class="page-header">
    <div class="container">
        <h1>Account</h1>
    </div>
</header>
<main>
    <section class="content-section" data-background="images/section-pattern01.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="membership">
                        <h6>Insert your credentials</h6>
                        @error("loginError")
                            <p class="text-danger m-0">{{ $message }}</p>
                        @enderror
                        <form method="POST" action="{{ route('postLogin') }}">
                            @csrf
                            <div class="form-group">
                                <input name="email" type="text" placeholder="Your E-mail">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger btn-block">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <figure class="side-image">
                        <img src="{{ asset('front/images/side-image02.png') }}" alt="Image">
                    </figure>
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
            <div class="container"> <span>© 2020 Digiflex | Online Movie Streaming</span> <span>Site create by <a href="#">Themezinho</a></span> </div>
        </div>
    </footer>
</main>
@stop