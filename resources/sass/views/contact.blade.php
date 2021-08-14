@extends('layouts.app')

@section('content')
<div class="wrapper contact-us">

        <!--map area start-->
        <div class="map-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48607.53283806008!2d49.823744!3d40.4094976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d4ee9253a65%3A0x29160f1a81905e71!2zTtOZcmltYW4gTtOZcmltYW5vdg!5e0!3m2!1saz!2s!4v1598639707991!5m2!1saz!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!--map area end-->
        
        <!--contact info are start-->
        <div class="contact-info ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                         <div class="row">
                             <div class="col-lg-12">
                             <form id="contact-form" class="row" action="{{ route('contact.post')}}" method="post">
                                    @csrf
                                     <div class="col-md-6">
                                         <div class="input-box mb-20">
                                             <input name="name" class="info"  placeholder="Name*" type="text">
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="input-box mb-20">
                                             <input name="email" class="info"  placeholder="Email" type="email">
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="input-box mb-20">
                                             <input name="phone" class="info" placeholder="Phone" type="text">
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="input-box mb-20">
                                             <input name="subject" class="info"  placeholder="Subject" type="text">
                                         </div>
                                     </div>
                                     <div class="col-md-12">
                                         <div class="input-box mb-20">
                                             <textarea name="message" class="area-tex"  placeholder="Your Message*"></textarea>
                                         </div>
                                     </div>
                                     <p class="form-messege"></p>
                                     <div class="col-xs-12">
                                         <div class="input-box">
                                             <input name="submit" class="sbumit-btn ml-3" value="Send" type="submit">
                                         </div>
                                     </div>
                                 
                                 </form>
                             </div>
                         </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-footer contact-us contact-us-2">
                            <div class="heading-title text-center mb-50">
                                <h5 class="uppercase">Contact Info</h5> 
                                </div>
                            <ul class="contact-info">
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-phone-paused"></i> </div>
                                    <div class="contact-text">
                                    <p>{{ $info->phone }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-email-open"></i> </div>
                                    <div class="contact-text">
                                        <p><span><a href="#">{{ $info->email }}</a></span></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"> <i class="zmdi zmdi-pin-drop"></i> </div>
                                    <div class="contact-text">
                                        <p>{{ $info->address }}</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="social-icon-wraper mt-25">
                                <div class="social-icon socile-icon-style-1">
                                    <ul>
                                        <li><a href="{{ $contact_informations->facebook }}" title="facebook"><i class="fa fa-facebook"></i></a> </li>
                                        <li><a href="{{ $contact_informations->instagram }}" title="instagram"><i class="fa fa-instagram"></i></a> </li>
                                        <li> <a href="{{ $contact_informations->youtube }}" title="youtube"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                       <div class="pos-rltv">
                            <div class="contact-des">
                            <p>{{ $contact_informations->contact_desc}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact info are end-->  
</div>
@include('sweetalert::alert')

@endsection