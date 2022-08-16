@extends('master.layout')
@section('content')

<!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- main-content-wrap start -->
        <div class="main-content-wrap contact-wrap">


            <div class="contact-form-area section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact-info-wrap">
                                <div class="contact-title mb-30">
                                    <h3>Contact Us</h3>
                                </div>

                                <div class="contact-info-text">
                                    <ul>
                                        <li>
                                            <div class="contact-title">
                                                <i class="fa fa-home"></i>
                                                <h4>Address</h4>
                                            </div>
                                            <p>123 Main Street, Anytown, CA 12345 – USA</p>
                                        </li>
                                        <li>
                                            <div class="contact-title">
                                                <i class="fa fa-envelope-open-o"></i>
                                                <h4>Phone</h4>
                                            </div>
                                            <p>Mobile: (08) 123 456 789<br>
                                        Hotline: 1009 678 456</p>
                                        </li>
                                        <li>
                                            <div class="contact-title">
                                                <i class="fa fa-phone"></i>
                                                <h4>Email</h4>
                                            </div>
                                            <p>yourmail@domain.com<br>
                                        support@roadthemes.com</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 offset-lg-1">
                            <div class="contact-info-wrap">
                                <div class="contact-title mb-30">
                                    <h3>Tell Us Your Message</h3>
                                </div>

                                <div class="contact-us-from-wrap">
                                    <form id="contact-form" class="contact-us-box" action="http://hasthemes.com/file/mail.php" method="post">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="single-input">
                                                    <label> Your Name (required)</label>
                                                    <input name="con_name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-input">
                                                    <label> Your Email (required)</label>
                                                    <input name="con_email" type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-input">
                                                    <label>Subject</label>
                                                    <input name="con_subject" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-input">
                                                    <label>Your Meassage</label>
                                                    <textarea name="con_message" ></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-input">
                                                    <button class="submit-button submit-btn" type="submit">Send</button>
                                                    <p class="form-messege"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- main-content-wrap end -->

@endsection