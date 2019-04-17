<div class="container">
    @if (Session::has('flash_message_news'))
    <div class="row">
      <div class="col">
          <div class="alert alert-success alert-dismissible fade show" role="alert"> 
              {{Session::get('flash_message_news')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      </div>
      
    </div>
    @endif
        <div class="footer">
          <div class="row newsLetter py-5">
              <div class="col-lg-12 mb-4">
                  <div class="h2 default-title text-center white">Learn More</div>
              </div>
                <div class="col-lg-12">
                  
                  <form method="post" action="{{URL::to('/newsletter.html')}}">
                      {{ csrf_field() }}
                      <div class="form-row">
                        <div class="col-md-1 d-col-none"></div>
                          <div class="col-md-4 col-6 mb-2">
                              <input type="text" name="name" class="form-control" required placeholder="Name">
                          </div>
                          <div class="col-md-4 col-6 mb-2">
                              <input type="email" class="form-control" placeholder="Email" required name="email">
                          </div>
                          
                          <div class="col-md-2 mb-2"><button type="submit" class="btn btn-green ">Submit</button></div>
                          <div class="col-md-1 d-col-none"></div>
                      </div>
                  </form>
                  </div>
              </div>
              <div class="row pt-5 pb-2">
                <div class="col text-center">
                  <ul class="list-inline footerLink">
                  <li class="list-inline-item"><a href="/">Home</a></li>
                  <li class="list-inline-item"><a href="/protect-your-green.html">Protect Your Green</a></li>
                  <li class="list-inline-item"><a href="coverages-offered.html">Covergaes Offered</a></li>
                  <li class="list-inline-item"><a href="contact-us.html">Contact</a></li>
                </ul>
                </div>
                
              </div>
              <div class="row">
                <div class="col text-center">
                  <ul class="list-inline footerLink">
                      <li class="list-inline-item"><a href="#"><span><i class="fa fa-lg fa-facebook" aria-hidden="true"></i> </span></a></li>
                      <li class="list-inline-item"><a href="#"><span><i class="fa fa-lg fa-twitter" aria-hidden="true"></i> </span></a></li>
                      <li class="list-inline-item"><a href="#"><span><i class="fa fa-lg fa-youtube" aria-hidden="true"></i> </span></a></li>
                      <li class="list-inline-item"><a href="#"><span><i class="fa fa-lg fa-google" aria-hidden="true"></i> </span></a></li>
                  </ul>
                </div>
              </div>
              <div class="row py-2">
                <div class="col text-center">
                  <p>Copyright © 2019 The Hemp Captive | All rights reserved.</p>
                </div>
              </div>
        </div>
      </div>