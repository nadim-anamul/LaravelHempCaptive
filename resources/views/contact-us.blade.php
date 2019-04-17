@extends('layouts.app')
@section('content')
<div class="mainContent">
        <div class="container contact-us py-5">
            <div class="row">
                <div class="col text-center">
                    <h1 class="bold white">Protect Your Green From Seed to Sale</h1>
                <h2 class="bold white">Outdor Crop Insurance for hemp</h2>
                </div>
            </div>
        </div>
        <div class="container px-lg-5 pb-5">
            <div class="row">
                <div class="col-lg-12 pt-5">
                    <div class="h2 default-title text-center default-color">Contact-Us</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <address>
                        <h3 class="mt-5 mb-4">Address:</h3>
                        <p><strong>Call</strong> or <strong>Email</strong> for More information on how to Get Protected</p>
                        <ul class="contact-info mt-5 list-group">
                            <li><i class="fa fa-phone fa-lg mr-2 default-color"></i><a title="Call now at 833-420-0020" href="tel:833-420-0020"><strong>833-420-0020</strong></a></li>
                            <li><i class="fa fa-envelope fa-lg mr-2 mt-3 default-color"></i><strong>info@thehempcaptive.com</strong></li>
                        </ul>
                    </address>
                </div>
                <div class="col-md-5">
                    <h3 class="mt-5 mb-4">Contact From:</h3>
                    @if (Session::has('flash_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                            {{Session::get('flash_message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form method="post" action="{{URL::to('/contact-us/submit')}}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="firstName" required placeholder="first name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="lastName" placeholder="last name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="phone" required placeholder="phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" required placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea required type="text" name="message" rows="4" class="form-control md-textarea" placeholder="message"></textarea>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-lg btn-green">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection