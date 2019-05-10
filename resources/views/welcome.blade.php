@extends('layouts.app')
@section('content')
    <section class="flat-title-page parallax parallax12 undescription">
        <div class="overlay"></div>
        <div class="container wrap-title-page bg-img ">
            <div class="title-page">
                <h2 class="title font-weight-700"><a href="#">{{config('app.name')}}</a></h2>
            </div>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Courses</a></li>
                </ul>
            </div>
            <img src="png/bg-white.png" alt="bookflare" class="bg-breadcrumbs">
        </div>
    </section> <!-- /.flat-title-page -->

    <div class="content-wrap  courses-grid-v3-page">
        <section class="flat-popular-courses">
            <div class="flat-tabs  style3 ">
                <ul class="tab-title clearfix style3 pd-left-15">
                    <li class="item-title  ">
                        <span class="inner">NEW RELEASES</span>
                    </li>
                    <li class="item-title ">
                        <span class="inner">ART & DESIGN </span>
                    </li>
                    <li class="item-title ">
                        <span class="inner">BUSINESS </span>
                    </li>
                    <li class="item-title ">
                        <span class="inner">IT & SOFTWARE</span>
                    </li>

                    <li class="item-title ">
                        <span class="inner">PORGRAMMING LANGUAGES </span>
                    </li>

                    <li class="item-title ">
                        <span class="inner">WEEKLY SERIES </span>
                    </li>
                </ul>
                <div class="tab-content-wrap">
                    <div class="tab-content">
                        <div class="item-content">
                            <div class="flat-carousel" data-column="4" data-column2="2" data-loop="false"  data-column3="1" data-gap ="0" data-dots="false" data-nav="true">
                                <div class="flat-courses clearfix owl-carousel">
                                    <div class="course  text-2ebd59  Leadership">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-6.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Angular 6 - The Complete Guide</a></h6>
                                                    <p class="teacher"><a href="#">Rosy Janner</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$49.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-2ebd59  Design">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-7.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Complete Java Masterclass</a></h6>
                                                    <p class="teacher"><a href="#">Tom Steven</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$24.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-2ebd59 Leadership">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-8.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">React 16 - The Complete Guide</a></h6>
                                                    <p class="teacher"><a href="#">Mark Henrey</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$89.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-2ebd59 Design">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-9.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Node.js Developer Course</a></h6>
                                                    <p class="teacher"><a href="#">Ana Murphy</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">FREE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-ea0042 Leadership Photography">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-10.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">The Ultimate Drawing Course</a></h6>
                                                    <p class="teacher"><a href="#">Rosy Janner</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$49.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course   text-c100ea Business Leadership Photography">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-11.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Learn Python & Ethical Hacking</a></h6>
                                                    <p class="teacher"><a href="#">Tom Steven</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$24.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-256cff Photography">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-12.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Advanced CSS Flexbox</a></h6>
                                                    <p class="teacher"><a href="#">Mark Henrey</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">FREE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                </div> <!-- /.flat-courses -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="item-content">
                            <div class="flat-carousel" data-column="4" data-column2="2" data-loop="false"  data-column3="1" data-gap ="0" data-dots="false" data-nav="true">
                                <div class="flat-courses clearfix owl-carousel">
                                    <div class="course  text-c100ea Leadership">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-6.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Angular 6 - The Complete Guide</a></h6>
                                                    <p class="teacher"><a href="#">Rosy Janner</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$49.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-ea0042 Design">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-7.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Complete Java Masterclass</a></h6>
                                                    <p class="teacher"><a href="#">Tom Steven</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$24.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-2ebd59 Leadership">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-8.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">React 16 - The Complete Guide</a></h6>
                                                    <p class="teacher"><a href="#">Mark Henrey</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$89.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-2ebd59 Design">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-9.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Node.js Developer Course</a></h6>
                                                    <p class="teacher"><a href="#">Ana Murphy</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">FREE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-ea0042 Leadership Photography">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-10.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">The Ultimate Drawing Course</a></h6>
                                                    <p class="teacher"><a href="#">Rosy Janner</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$49.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course   text-c100ea Business Leadership Photography">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-11.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Learn Python & Ethical Hacking</a></h6>
                                                    <p class="teacher"><a href="#">Tom Steven</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$24.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-256cff Photography">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-12.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Advanced CSS Flexbox</a></h6>
                                                    <p class="teacher"><a href="#">Mark Henrey</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">FREE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                </div> <!-- /.flat-courses -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="item-content">
                            <div class="flat-carousel" data-column="4" data-column2="2" data-loop="false"  data-column3="1" data-gap ="0" data-dots="false" data-nav="true">
                                <div class="flat-courses clearfix owl-carousel">
                                    <div class="course  text-c100ea Leadership">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-6.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Angular 6 - The Complete Guide</a></h6>
                                                    <p class="teacher"><a href="#">Rosy Janner</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$49.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-ea0042 Design">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-7.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Complete Java Masterclass</a></h6>
                                                    <p class="teacher"><a href="#">Tom Steven</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$24.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-2ebd59 Leadership">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-8.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">React 16 - The Complete Guide</a></h6>
                                                    <p class="teacher"><a href="#">Mark Henrey</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$89.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-2ebd59 Design">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-9.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Node.js Developer Course</a></h6>
                                                    <p class="teacher"><a href="#">Ana Murphy</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">FREE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                </div> <!-- /.flat-courses -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="item-content">
                            <div class="flat-carousel" data-column="4" data-column2="2" data-loop="false"  data-column3="1" data-gap ="0" data-dots="false" data-nav="true">
                                <div class="flat-courses clearfix owl-carousel">
                                    <div class="course  text-c100ea Leadership">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-6.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Angular 6 - The Complete Guide</a></h6>
                                                    <p class="teacher"><a href="#">Rosy Janner</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$49.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-ea0042 Design">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-7.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Complete Java Masterclass</a></h6>
                                                    <p class="teacher"><a href="#">Tom Steven</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$24.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-ea0042 Leadership Photography">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-10.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">The Ultimate Drawing Course</a></h6>
                                                    <p class="teacher"><a href="#">Rosy Janner</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$49.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course   text-c100ea Business Leadership Photography">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-11.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Learn Python & Ethical Hacking</a></h6>
                                                    <p class="teacher"><a href="#">Tom Steven</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$24.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-256cff Photography">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-12.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Advanced CSS Flexbox</a></h6>
                                                    <p class="teacher"><a href="#">Mark Henrey</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">FREE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                </div> <!-- /.flat-courses -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="item-content">
                            <div class="flat-carousel" data-column="4" data-column2="2" data-loop="false"  data-column3="1" data-gap ="0" data-dots="false" data-nav="true">
                                <div class="flat-courses clearfix owl-carousel">
                                    <div class="course  text-c100ea Leadership">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-6.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Angular 6 - The Complete Guide</a></h6>
                                                    <p class="teacher"><a href="#">Rosy Janner</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$49.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-ea0042 Design">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-7.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Complete Java Masterclass</a></h6>
                                                    <p class="teacher"><a href="#">Tom Steven</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$24.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-2ebd59 Leadership">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-8.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">React 16 - The Complete Guide</a></h6>
                                                    <p class="teacher"><a href="#">Mark Henrey</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$89.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                </div> <!-- /.flat-courses -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="item-content">
                            <div class="flat-carousel" data-column="4" data-column2="2" data-loop="false"  data-column3="1" data-gap ="0" data-dots="false" data-nav="true">
                                <div class="flat-courses clearfix owl-carousel">
                                    <div class="course  text-c100ea Leadership">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-6.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Angular 6 - The Complete Guide</a></h6>
                                                    <p class="teacher"><a href="#">Rosy Janner</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$49.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-ea0042 Design">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-7.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Complete Java Masterclass</a></h6>
                                                    <p class="teacher"><a href="#">Tom Steven</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$24.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-2ebd59 Leadership">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-8.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">React 16 - The Complete Guide</a></h6>
                                                    <p class="teacher"><a href="#">Mark Henrey</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">$89.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                    <div class="course  text-256cff Photography">
                                        <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                            <div class="course-img img-vline">
                                                <a href="#"><img src="png/courses-gird-v1-12.png" alt="bookflare"></a>
                                                <div class="overlay">
                                                    <span class="vline"></span>
                                                    <span class="vline vline-bottom"></span>
                                                </div>
                                            </div>
                                            <div class="course-content">
                                                <div class="text-wrap border-bt-e6f3ff">
                                                    <h6 class="title"><a href="#">Advanced CSS Flexbox</a></h6>
                                                    <p class="teacher"><a href="#">Mark Henrey</a></p>
                                                    <p class="description">Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
                                                </div>
                                                <div class="wrap-rating-price">
                                                    <div class="wrap-rating">
                                                        <ul class="list star-list">
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <span>5.0  (980)</span>
                                                    </div>
                                                    <span class="price">FREE</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.course -->
                                </div> <!-- /.flat-courses -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.flat-tabs -->
            <div class="wrap-btn flat-text-center">
                <a href="#" class="flat-button btn-all-sourses font-Poppins font-weight-700 border-ra4">BROWSE ALL COURSES</a>
            </div>
        </section> <!-- /.flat-popular-courses -->

        <section class="flat-featured style2">
            <div class="container-fluid">
                <div class="sub-column clearfix">
                    <div class="one-of-two">
                        <div class="textbox">
                            <h3 class="title">Study any topic, anytime. Explore thousands of courses $19.99</h3>
                            <p class="text">Smply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 150 took a galley of type and scrambled it to make a type specimen book.</p>
                            <h6 class="title">Here some of the techniques you will Learn:</h6>
                            <p class="text">Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin elorem quis bibendum auci elit conseo.</p>
                            <ul class="list-skill">
                                <li> Hunting down seams with the Offset filter</li>
                                <li>  Distorting an image with the Glass filter </li>
                                <li>   Using blur and noise to focus attention, simulate motion, and more </li>
                            </ul>
                            <a href="#" class="btn-learning">BROWSE ALL LEARNING PATHS</a>
                        </div>
                    </div>
                    <div class="one-of-two">
                        <div class="wrap-course">
                            <div class="bg-img">
                                <div class="wrap-text">
                                    <p class="over font-Freestyle">Over </p>
                                    <p class="wrap-over"><span class="count  font-Freestyle">20,640</span> <span class="free"> Free Tutorial</span></p>
                                    <span class="end">Ends in 05h 23m 49s</span>
                                    <ul class="wrap-time-view list">
                                        <li class="time">6h 4m</li>
                                        <li class="view">3,387,872 Views</li>
                                    </ul>
                                    <h6 class="title"><a href="#">Node.js Developer Course</a></h6>
                                    <div class="price-wrap">
                                        <span class="sale-price text-white">$19.99 </span>
                                        <span class="price">$199.99</span>
                                    </div>
                                    <div class="wrap-btn clearfix">
                                        <a href="#" class="flat-button btn-buy float-left v2">BUY NOW</a>
                                        <a href="#" class="btn-cart v2">Add To Cart</a>
                                    </div>
                                    <div class="level">
                                        FEATURED
                                    </div>
                                </div>
                                <!-- <img src="images/courses/bg-feature.png" alt="bookflare"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="content-page-fullwidth-wrap clearfix pd-top-45">
            <div class="container-fluid ">
                <div class="sidebar-left">
                    <div class="widget-categories border-f-e6f3ff">
                        <h6 class="title-widget">DEVELOPMENT</h6>
                        <div class="content">
                            <ul>
                                <li><a href="#">Illustration <span>(158)</span></a></li>
                                <li><a href="#">Design Skills <span>(155)</span></a></li>
                                <li><a href="#">Design Techniques <span>(111)</span></a></li>
                                <li><a href="#">Page Layout <span>(95)</span></a></li>
                                <li><a href="#">Projects <span>(64)</span></a></li>
                                <li><a href="#">Drawing <span>(60)</span></a></li>
                                <li><a href="#"> Typography <span>(56)</span></a></li>
                                <li><a href="#">Digital Painting <span>(55)</span></a></li>
                                <li><a href="#">Digital Publishing <span>(45)</span></a></li>
                                <li><a href="#">Design Business <span>(38)</span></a></li>
                                <li><a href="#">+ Show More</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.widget-categories -->
                    <div class="widget-categories border-f-e6f3ff mg-bottom-30">
                        <h6 class="title-widget">SOFTWARE</h6>
                        <div class="content">
                            <ul>
                                <li><a href="#"> Adobe <span>(402)</span></a></li>
                                <li><a href="#">Photoshop <span>(159)</span></a></li>
                                <li><a href="#">Illustrator <span>(143)</span></a></li>
                                <li><a href="#">InDesign <span>(109)</span></a></li>
                                <li><a href="#">Corel <span>(11)</span></a></li>
                                <li><a href="#">Painter <span>(9)</span></a></li>
                                <li><a href="#">Acrobat <span>(8)</span></a></li>
                                <li><a href="#">Open<span> Source (8)</span></a></li>
                                <li><a href="#">Apple <span>(7)</span></a></li>
                                <li><a href="#">Amazon <span>(6)</span></a></li>
                                <li><a href="#">+ Show More</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.widget-categories -->
                    <div class="widget-subscribe flat-text-center">
                        <h4 class="widget-title ">Subscribe Newslatter </h4>
                        <p class="text">Netus et malesuad fames ac tmgest blandi cursus risuar etiam non puam lacus. </p>
                        <p class="over font-Freestyle">Over </p>
                        <p class="wrap-over"><span class="count  font-Freestyle">20,640</span> <span class="free"> Free Tutorial</span></p>
                        <div class="wrap-description">
                            <p class="description">Develop in-demand skills with access to thousands of expert-led courses on business, tech and creative topics.</p>
                        </div>
                        <div class="wrap-form-subscribe">
                            <form>
                                <input type="email" name="email" placeholder="Enter your Email">
                                <button class="flat-button btn-send v2">SEND</button>
                            </form>
                        </div>
                    </div> <!-- /.widget-subscribe -->
                </div> <!-- /.sidebar-left -->
                <div class="content-page pd-left-30 ">
                    <div class="heading clearfix border-f-e6f3ff border-ra4">
                        <div class="taskbar">
                            <ul class="list">
                                <li><span class="color-f3728b font-Poppins font-weight-700"> 1660</span>Courses</li>
                                <li><span class="color-2ebd59 font-Poppins font-weight-700"> 32,060 </span>Video Tutorials</li>
                            </ul>
                        </div>
                        <div class="select-order flat-text-right">
                            <div class="wrap-select">
                                <select class="order-by">
                                    <option>Sort By: release date</option>
                                </select>
                            </div>
                        </div>
                    </div> <!--  /.heading -->
                    <div class="flat-courses style4">
                        <div class="course style4 text-2ebd59 ">
                            <div class="course-border border-f-e6f3ff border-ra4 clear-sub-columns transition-vline">
                                <div class="course-img-box">
                                    <div class="course-img img-vline">
                                        <a href="#"><img src="png/courses-gird-v3-1.png" alt="bookflare"></a>
                                        <div class="overlay">
                                            <span class="vline"></span>
                                            <span class="vline vline-bottom"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <div class="text-wrap border-bt-e6f3ff">
                                        <h6 class="title"><a href="#">jQuery Mo bile for Beginners</a></h6>
                                        <p class="teacher"><a href="#">Ana Murphy</a></p>
                                        <p class="description">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit</p>
                                    </div>
                                    <div class="wrap-rating-price">
                                        <ul class="list meta-rate">
                                            <li>
                                                <ul class="list star-list">
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span></span><span>5.0  (980) </span>
                                            </li>
                                            <li>
                                                <span> Sep 07, 2018</span>
                                            </li>
                                            <li>
                                                Views <span class="color-2ebd59">1,547,932</span>
                                            </li>
                                        </ul>
                                        <span class="price">$49.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course style4 text-ea0042 ">
                            <div class="course-border border-f-e6f3ff border-ra4 clear-sub-columns transition-vline">
                                <div class="course-img-box">
                                    <div class="course-img img-vline">
                                        <a href="#"><img src="png/courses-gird-v3-2.png" alt="bookflare"></a>
                                        <div class="overlay">
                                            <span class="vline"></span>
                                            <span class="vline vline-bottom"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <div class="text-wrap border-bt-e6f3ff">
                                        <h6 class="title"><a href="#">Complete Python Bootcamp</a></h6>
                                        <p class="teacher"><a href="#">Tom Steven</a></p>
                                        <p class="description">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit</p>
                                    </div>
                                    <div class="wrap-rating-price">
                                        <ul class="list meta-rate">
                                            <li>
                                                <ul class="list star-list">
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span></span><span>5.0  (980) </span>
                                            </li>
                                            <li>
                                                <span> Sep 07, 2018</span>
                                            </li>
                                            <li>
                                                Views <span class="color-2ebd59">1,547,932</span>
                                            </li>
                                        </ul>
                                        <span class="price">$14.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course style4 text-c100ea ">
                            <div class="course-border border-f-e6f3ff border-ra4 clear-sub-columns transition-vline">
                                <div class="course-img-box">
                                    <div class="course-img img-vline">
                                        <a href="#"><img src="png/courses-gird-v3-3.png" alt="bookflare"></a>
                                        <div class="overlay">
                                            <span class="vline"></span>
                                            <span class="vline vline-bottom"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <div class="text-wrap border-bt-e6f3ff">
                                        <h6 class="title"><a href="#">Complete Java Masterclass</a></h6>
                                        <p class="teacher"><a href="#">Ana Murphy</a></p>
                                        <p class="description">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit</p>
                                    </div>
                                    <div class="wrap-rating-price">
                                        <ul class="list meta-rate">
                                            <li>
                                                <ul class="list star-list">
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span></span><span>5.0  (980) </span>
                                            </li>
                                            <li>
                                                <span> Sep 07, 2018</span>
                                            </li>
                                            <li>
                                                Views <span class="color-2ebd59">1,547,932</span>
                                            </li>
                                        </ul>
                                        <span class="price">FREE</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course style4 text-256cff ">
                            <div class="course-border border-f-e6f3ff border-ra4 clear-sub-columns transition-vline">
                                <div class="course-img-box">
                                    <div class="course-img img-vline">
                                        <a href="#"><img src="png/courses-gird-v3-4.png" alt="bookflare"></a>
                                        <div class="overlay">
                                            <span class="vline"></span>
                                            <span class="vline vline-bottom"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <div class="text-wrap border-bt-e6f3ff">
                                        <h6 class="title"><a href="#">Learning Python Data Analysis</a></h6>
                                        <p class="teacher"><a href="#">Gilbert J. David</a></p>
                                        <p class="description">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit</p>
                                    </div>
                                    <div class="wrap-rating-price">
                                        <ul class="list meta-rate">
                                            <li>
                                                <ul class="list star-list">
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span></span><span>5.0  (980) </span>
                                            </li>
                                            <li>
                                                <span> Sep 07, 2018</span>
                                            </li>
                                            <li>
                                                Views <span class="color-2ebd59">1,547,932</span>
                                            </li>
                                        </ul>
                                        <span class="price">FREE</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course style4 text-2ebd59 ">
                            <div class="course-border border-f-e6f3ff border-ra4 clear-sub-columns transition-vline">
                                <div class="course-img-box">
                                    <div class="course-img img-vline">
                                        <a href="#"><img src="png/courses-gird-v3-5.png" alt="bookflare"></a>
                                        <div class="overlay">
                                            <span class="vline"></span>
                                            <span class="vline vline-bottom"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <div class="text-wrap border-bt-e6f3ff">
                                        <h6 class="title"><a href="#">Angular 6 - The Complete Guide</a></h6>
                                        <p class="teacher"><a href="#">Charlotte H. Bronk</a></p>
                                        <p class="description">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit</p>
                                    </div>
                                    <div class="wrap-rating-price">
                                        <ul class="list meta-rate">
                                            <li>
                                                <ul class="list star-list">
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span></span><span>5.0  (980) </span>
                                            </li>
                                            <li>
                                                <span> Sep 07, 2018</span>
                                            </li>
                                            <li>
                                                Views <span class="color-2ebd59">1,547,932</span>
                                            </li>
                                        </ul>
                                        <span class="price">$24.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course style4 text-c100ea ">
                            <div class="course-border border-f-e6f3ff border-ra4 clear-sub-columns transition-vline">
                                <div class="course-img-box">
                                    <div class="course-img img-vline">
                                        <a href="#"><img src="png/courses-gird-v3-6.png" alt="bookflare"></a>
                                        <div class="overlay">
                                            <span class="vline"></span>
                                            <span class="vline vline-bottom"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <div class="text-wrap border-bt-e6f3ff">
                                        <h6 class="title"><a href="#">Learn Python & Ethical Hacking</a></h6>
                                        <p class="teacher"><a href="#">Erika P. Sera</a></p>
                                        <p class="description">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit</p>
                                    </div>
                                    <div class="wrap-rating-price">
                                        <ul class="list meta-rate">
                                            <li>
                                                <ul class="list star-list">
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span></span><span>5.0  (980) </span>
                                            </li>
                                            <li>
                                                <span> Sep 07, 2018</span>
                                            </li>
                                            <li>
                                                Views <span class="color-2ebd59">1,547,932</span>
                                            </li>
                                        </ul>
                                        <span class="price">Free</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course style4 text-ea0042 ">
                            <div class="course-border border-f-e6f3ff border-ra4 clear-sub-columns transition-vline">
                                <div class="course-img-box">
                                    <div class="course-img img-vline">
                                        <a href="#"><img src="png/courses-gird-v3-7.png" alt="bookflare"></a>
                                        <div class="overlay">
                                            <span class="vline"></span>
                                            <span class="vline vline-bottom"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <div class="text-wrap border-bt-e6f3ff">
                                        <h6 class="title"><a href="#">Node.js Developer Course</a></h6>
                                        <p class="teacher"><a href="#">Michael R. Ryan</a></p>
                                        <p class="description">Lorem ipsum gravida nibh vel velit auctor aliquetnean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit</p>
                                    </div>
                                    <div class="wrap-rating-price">
                                        <ul class="list meta-rate">
                                            <li>
                                                <ul class="list star-list">
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul>
                                                <span></span><span>5.0  (980) </span>
                                            </li>
                                            <li>
                                                <span> Sep 07, 2018</span>
                                            </li>
                                            <li>
                                                Views <span class="color-2ebd59">1,547,932</span>
                                            </li>
                                        </ul>
                                        <span class="price">$44.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flat-paginations">
                        <ul class="list flat-text-left pagination-wrap">
                            <li class="disabled"><a href="#" class="btn-navs">PRE</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#" class="btn-navs">NEXT</a></li>
                        </ul>
                    </div>
                </div> <!-- /.content-page -->
            </div>
        </div>
    </div> <!-- /.content-wrap  -->
@endsection