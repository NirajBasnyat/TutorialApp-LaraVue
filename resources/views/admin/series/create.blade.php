@extends('layouts.app')

@section('content')
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
        <div class="container">

            <div class="topbar-left">
                <button class="topbar-toggler">&#9776;</button>
                <a class="topbar-brand" href="index.html">
                    <img class="logo-default" src="{{asset('assets/img/logo.png')}}" alt="logo">
                    <img class="logo-inverse" src="{{asset('assets/img/logo-light.png')}}" alt="logo">
                </a>
            </div>


            <div class="topbar-right">
                <ul class="topbar-nav nav">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Samples <i class="fa fa-caret-down"></i></a>
                        <div class="nav-submenu">
                            <a class="nav-link" href="demo-helpato.html">Helpato</a>
                            <a class="nav-link" href="demo-trello.html">Trello</a>
                            <a class="nav-link" href="demo-gmail.html">Gmail</a>
                            <a class="nav-link" href="demo-skype.html">Skype</a>
                            <a class="nav-link" href="demo-github.html">GitHub</a>
                            <a class="nav-link" href="demo-app.html">Mobile App</a>
                            <a class="nav-link" href="demo-bootstrap.html">Bootstrap</a>
                            <a class="nav-link" href="demo-slack.html">Slack</a>
                            <a class="nav-link" href="demo-zendesk.html">Zendesk</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Headers <i class="fa fa-caret-down"></i></a>
                        <div class="nav-submenu">
                            <a class="nav-link" href="header-color.html">Solid Color</a>
                            <a class="nav-link" href="header-gradient.html">Gradient</a>
                            <a class="nav-link" href="header-particle.html">Particle</a>
                            <a class="nav-link" href="header-typing.html">Typing Text</a>
                            <a class="nav-link" href="header-image.html">Background Image</a>
                            <a class="nav-link" href="header-video.html">Background Video</a>
                            <a class="nav-link" href="header-parallax.html">Parallax</a>
                            <a class="nav-link" href="header-slider.html">Slider</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Blocks <i class="fa fa-caret-down"></i></a>
                        <div class="nav-submenu cols-2">
                            <a class="nav-link" href="block-feature.html">Feature</a>
                            <a class="nav-link" href="block-feature-textual.html">Textual feature</a>
                            <a class="nav-link" href="block-content.html">Content</a>
                            <a class="nav-link" href="block-portfolio.html">Portfolio</a>
                            <a class="nav-link" href="block-pricing.html">Pricing</a>
                            <a class="nav-link" href="block-cta.html">Call to action</a>
                            <a class="nav-link" href="block-testimonial.html">Testimonial</a>
                            <a class="nav-link" href="block-team.html">Team</a>
                            <a class="nav-link" href="block-contact.html">Contact</a>
                            <a class="nav-link" href="block-signup.html">Signup</a>
                            <a class="nav-link" href="block-subscribe.html">Subscribe</a>
                            <a class="nav-link" href="block-partner.html">Partner</a>
                            <a class="nav-link" href="block-topbar.html">Topbar</a>
                            <a class="nav-link" href="block-footer.html">Footer</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog <i class="fa fa-caret-down"></i></a>
                        <div class="nav-submenu">
                            <a class="nav-link" href="blog-classic.html">Layout classic</a>
                            <a class="nav-link" href="blog-grid.html">Layout grid</a>
                            <a class="nav-link" href="blog-list.html">Layout list</a>
                            <a class="nav-link" href="blog-sidebar.html">Layout sidebar</a>
                            <a class="nav-link" href="blog-single.html">Single post</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop <i class="fa fa-caret-down"></i></a>
                        <div class="nav-submenu">
                            <a class="nav-link" href="shop-list.html">Product list</a>
                            <a class="nav-link" href="shop-single.html">Single product</a>
                            <a class="nav-link" href="shop-cart.html">Cart overview</a>
                            <a class="nav-link" href="shop-checkout.html">Checkout</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Pages <i class="fa fa-caret-down"></i></a>
                        <div class="nav-submenu">
                            <a class="nav-link" href="page-how-it-works.html">How it works</a>
                            <a class="nav-link" href="page-pricing.html">Pricing</a>
                            <a class="nav-link active" href="page-portfolio.html">Portfolio</a>
                            <a class="nav-link" href="page-project.html">Project</a>
                            <a class="nav-link" href="page-job.html">Jobs</a>
                            <a class="nav-link" href="page-job-single.html">Job Info</a>
                            <a class="nav-link" href="page-demo.html">Request Demo</a>
                            <a class="nav-link" href="page-press.html">Press</a>
                            <a class="nav-link" href="page-about.html">About</a>
                            <a class="nav-link" href="page-contact.html">Contact</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Extra <i class="fa fa-caret-down"></i></a>
                        <div class="nav-submenu">
                            <a class="nav-link" href="page-login.html">Login</a>
                            <a class="nav-link" href="page-register.html">Register</a>
                            <a class="nav-link" href="page-faq.html">FAQ</a>
                            <a class="nav-link" href="page-coming-soon.html">Coming soon</a>
                            <a class="nav-link" href="page-privacy.html">Privacy Policy</a>
                            <a class="nav-link" href="page-404.html">Error 404</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Doc <i class="fa fa-caret-down"></i></a>
                        <div class="nav-submenu align-right">
                            <a class="nav-link" href="doc-element.html">Elements</a>
                            <a class="nav-link" href="doc-component.html">Components</a>
                            <a class="nav-link" href="doc-section.html">Sections</a>
                            <a class="nav-link" href="doc-card.html">Cards</a>
                            <a class="nav-link" href="doc-typography.html">Typography</a>
                            <a class="nav-link" href="doc-utility.html">Utility Classes</a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <header class="header header-inverse" style="background-color: #c2b2cd;">
        <div class="container text-center">

            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">

                    <h1>Portfolio</h1>
                    <p class="fs-20 opacity-70">You can find several product design by our professional team in this
                        section.</p>

                </div>
            </div>

        </div>
    </header>

    <h3 class="section-info text-center m-3" id="contact-2"><a href="#contact-2">Create Series</a></h3>


    <div class="section">
        <div class="container">

            <div class="row">
                <div class="col-12 col-md-12">

                    <form action="{{route('series.store')}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" name="title"
                                   placeholder="Series Title">
                        </div>

                        <div class="form-group">
                            <input class="form-control form-control-lg" type="file" name="image_url">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control form-control-lg" name="description" rows="4"
                                      placeholder="Add description"></textarea>
                        </div>


                        <button class="btn btn-lg btn-primary btn-block" type="submit">Send Enquiry</button>
                    </form>

                </div>

            </div>


        </div>
    </div>
@endsection
