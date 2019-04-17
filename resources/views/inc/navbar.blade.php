<header>
    <div class="container px-lg-5 px-3">
        <div class="row">
            <div class="col">
                <div class="call-to-action text-lg-right">Call Us <a class="default-color" href="tel:123-456-7890"><span><i class="fa fa-phone" aria-hidden="true"></i> </span> 123-456-7890</a></div>
            </div>
        </div>
    </div>
    <div class="container pt-3 px-lg-5 px-3 pb-1">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg transparent-bg static-nav navbar-light ">
        
                    <a title="Hemp Captive" class="navbar-brand" href="/">
                        <img title="Hemp Captive" src="./images/logo.png" alt="Hemp Captive">
                    </a>
                    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse mt-lg-3" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                                <a title="Hemp Captive" class="nav-link " href="/">Home</a>
                            </li>
                            <li class="nav-item {{Request::is('protect-your-green.html') ? 'active' : ''}}">
                                <a class="nav-link" href="/protect-your-green.html">Protect Your Green</a>
                            </li>
                            <li class="nav-item {{Request::is('coverages-offered.html') ? 'active' : ''}}">
                                <a class="nav-link" href="/coverages-offered.html">Coverages Offered</a>
                            </li>
                            <li class="nav-item {{Request::is('contact-us.html') ? 'active' : ''}}">
                                <a class="nav-link " href="/contact-us.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>   
        </div>   
    </div>
    
</header>