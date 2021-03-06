@extends('welcome')
@section('contenido')
    <!-- Search input -->
    <div class="search-wrap" id="search-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="search-bar">
                        <form>
                            <input class="search-input" type="search" placeholder="Search">
                        </form>
                        <a href="javascript:void(0);" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">

            <div class="row">
                <!-- Content-->
                <div class="col-lg-8">

                    <!-- Post-->
                    <article class="post">
                        <div class="text-center post-header">
                            <a class="badge badge-custom" href="#" title="">Lifestyle</a>
                            <h2 class="post-title"><a href="standard-post.html" title="">Runaway A Road Adventure</a></h2>
                            <a href="standard-post.html" title="" class="post-date">Augus 12, 2017</a>
                        </div>

                        <div class="post-preview">
                            <div class="link-post">
                                <div class="link-post-content">
                                    <i class="mdi mdi-link-variant"></i>
                                    <h5><a href="#">Themeswale - Bootstrap Themes & Templates</a></h5>
                                    <p>
                                        http://themeswale.com/
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="blog-detail-description">
                            <p>Donec eleifend accumsan nibh eu efficitur. Vivamus lacinia ut turpis egestas convallis. Quisque nec accumsan justo. Maecenas auctor in nulla nec tincidunt. Pellentesque rutrum molestie tortor, ut egestas risus commodo a. Praesent a orci nec libero fringilla euismod eu id massa. Nunc eget bibendum odio, sed sodales eros.Vivamus lacinia, mi eu ultrices mattis.</p>

                            <p>Donec eleifend accumsan nibh eu efficitur. Vivamus lacinia ut turpis egestas convallis. Quisque nec accumsan justo. Maecenas auctor in nulla nec tincidunt. Pellentesque rutrum molestie tortor, ut egestas risus commodo a. Praesent a orci nec libero fringilla euismod eu id massa. Nunc eget bibendum odio, sed sodales eros.Vivamus lacinia, mi eu ultrices mattis.</p>

                            <blockquote class="blockquote text-center">
                                <h6 class="mb-0 blockquote-text">Praesent consectetur vel dui sed molestie. Aliquam imperdiet cursus dapibus. Quisque vestibulum blandit tellus, nec volutpat turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</h6>
                                <footer class="blockquote-footer mt-2">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>

                            <p>Quisque nec accumsan justo. Maecenas auctor in nulla nec tincidunt. Pellentesque rutrum molestie tortor, ut egestas risus commodo a. Praesent a orci nec libero fringilla euismod eu id massa. Nunc eget bibendum odio, sed sodales eros.Vivamus lacinia, mi eu ultrices mattis.</p>

                            <div class="mt-5">
                                <h6>Tags:</h6>
                                <div class="tagcloud">
                                    <a href="#">logo</a>
                                    <a href="#">business</a>
                                    <a href="#">agency</a>
                                </div>
                            </div>

                            <div class="media post-author-box">
                                <img class="d-flex mr-3 rounded-circle" src="images\user\user-5.png" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="">Michelle Durant</a></h4>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>

                                    <ul class="socials list-unstyled mb-0 mt-3">
                                        <li><a href="http://facebook.com"><i class="mdi mdi-facebook"></i></a></li>
                                        <li><a href="http://twitter.com"><i class="mdi mdi-twitter"></i></a></li>
                                        <li><a href="http://instagram.com"><i class="mdi mdi-instagram"></i></a></li>
                                        <li><a href="http://pinterest.com"><i class="mdi mdi-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="mt-5 text-center">
                                <h5 class="page-title-alt"><span>You Might Also Like</span></h5>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <article class="related-post">
                                        <div class="post-preview">
                                            <a href="blog-single.html"><img src="images\blog\blog-2.jpg" alt="" class="img-fluid rounded"></a>
                                        </div>

                                        <div class="post-header">
                                            <h6><a href="single-post2.html" title="">15 Best Healthy and Easy Salad Recipes</a></h6>
                                            <p class="post-date">August 12, 2017</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-4">
                                    <article class="related-post">
                                        <div class="post-preview">
                                            <a href="blog-single.html"><img src="images\blog\blog-3.jpg" alt="" class="img-fluid rounded"></a>
                                        </div>

                                        <div class="post-header">
                                            <h6><a href="single-post2.html" title="">The planet doesn’t need saving. We do.</a></h6>
                                            <p class="post-date">August 17, 2017</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-4">
                                    <article class="related-post">
                                        <div class="post-preview">
                                            <a href="blog-single.html"><img src="images\blog\blog-4.jpg" alt="" class="img-fluid rounded"></a>
                                        </div>

                                        <div class="post-header">
                                            <h6><a href="single-post2.html" title="">Modern City With Amazing Dark Blue Sea</a></h6>
                                            <p class="post-date">August 20, 2017</p>
                                        </div>
                                    </article>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h5 class="page-title-alt"><span>Comments</span></h5>
                            </div>

                            <ul class="media-list list-unstyled">

                                <li class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="images\user\user-5.png" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                        <h4 class="media-heading"><a href="">Michelle Durant</a></h4>
                                        <p class="text-muted post-date">Jun 23, 2017, 11:45 am</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                                    </div>
                                </li>

                                <li class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="images\user\user-2.png" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                        <h4 class="media-heading"><a href="">Ronda Otoole</a></h4>
                                        <p class="text-muted post-date">Jun 23, 2017, 11:45 am</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>

                                        <div class="media">
                                            <img class="d-flex mr-3 rounded-circle" src="images\user\user-3.png" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                                <h4 class="media-heading"><a href="">James Whitley</a></h4>
                                                <p class="text-muted post-date">Jun 23, 2017, 11:45 am</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="images\user\user-4.png" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                        <h4 class="media-heading"><a href="">Kimberly Chretien</a></h4>
                                        <p class="text-muted post-date">Jun 23, 2017, 11:45 am</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                                    </div>
                                </li>

                                <li class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="images\user\user-6.png" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                        <h4 class="media-heading"><a href="">Michelle Durant</a></h4>
                                        <p class="text-muted post-date">Jun 23, 2017, 11:45 am</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                                    </div>
                                </li>

                            </ul>

                            <div class="mt-5">
                                <h5 class="page-title-alt"><span>Leave a reply</span></h5>
                            </div>

                            <form action="#" method="post" class="mt-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input id="author" class="form-control" placeholder="Name*" name="author" type="text" required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input id="email" class="form-control" placeholder="Email*" name="email" type="text" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input id="subject" class="form-control" placeholder="Website" name="subject" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea id="comment" class="form-control" rows="5" placeholder="Your Message*" name="comment" required=""></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button name="submit" type="submit" id="submit" class="btn btn-dark">Post Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </article>
                    <!-- Post end-->

                </div>
                <!-- Content end-->

                <!-- Sidebar-->
                <div class="col-lg-4">
                    <div class="sidebar">

                        <aside class="widget widget_search">
                            <form>
                                <input class="form-control" type="search" placeholder="Search...">
                                <button class="search-button" type="submit"><span class="mdi mdi-magnify"></span></button>
                            </form>
                        </aside>

                        <!-- About widget-->
                        <aside class="widget">
                            <div class="widget-title">About Me</div>

                            <div class="about-widget">
                                <img src="images\photo.jpg" alt="About Me" class="rounded-circle">

                                <p>Quis vero phasellus hac nullam, in quam vitae duis adipiscing mauris leo, laoreet eget at quis, ante vestibulum vivamus vel. Sapien lobortis, eget orci purus amet pede, consectetur neque risus.</p>

                                <a href="#" class="btn-read-more mt-2">Read More <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </aside>

                        <!-- Social widget-->
                        <aside class="widget">
                            <div class="widget-title">Subscribe & Follow</div>

                            <ul class="socials">
                                <li><a href="http://facebook.com"><i class="mdi mdi-facebook"></i></a></li>
                                <li><a href="http://twitter.com"><i class="mdi mdi-twitter"></i></a></li>
                                <li><a href="http://instagram.com"><i class="mdi mdi-instagram"></i></a></li>
                                <li><a href="http://pinterest.com"><i class="mdi mdi-pinterest"></i></a></li>
                            </ul>
                        </aside>

                        <!-- Categories widget-->
                        <aside class="widget widget_categories">
                            <div class="widget-title">Categories</div>
                            <ul>
                                <li><a href="#">Journey</a> <span class="float-right">(40)</span></li>
                                <li><a href="#">Photography</a> <span class="float-right">(11)</span></li>
                                <li><a href="#">Lifestyle</a> <span class="float-right">(09)</span></li>
                                <li><a href="#">Food & Drinks</a> <span class="float-right">(28)</span></li>
                            </ul>
                        </aside>

                        <!-- Recent entries widget-->
                        <aside class="widget widget_recent_entries_custom">
                            <div class="widget-title">Popular Posts</div>
                            <ul>
                                <li class="clearfix">
                                    <div class="wi">
                                        <a href="#"><img src="images\blog\blog-1.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="wb"><a href="#">Beautiful Day With Friends..</a> <span class="post-date">Jun 15, 2017</span></div>
                                </li>
                                <li class="clearfix">
                                    <div class="wi">
                                        <a href="#"><img src="images\blog\blog-2.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="wb"><a href="#">Nature valley with cooling..</a> <span class="post-date">Jun 10, 2017</span></div>
                                </li>
                                <li class="clearfix">
                                    <div class="wi">
                                        <a href="#"><img src="images\blog\blog-3.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="wb"><a href="#">15 Best Healthy and Easy Salad..</a> <span class="post-date">Jun 8, 2017</span></div>
                                </li>
                            </ul>
                        </aside>

                        <!-- Text widget-->
                        <aside class="widget">
                            <div class="widget-title">Text Widget</div>

                            <p class="text-muted text-widget-des">Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. </p>

                        </aside>

                        <!-- Archives widget-->
                        <aside class="widget widget_archive">
                            <div class="widget-title">Archives</div>

                            <ul>
                                <li><a href="#">March 2017</a> <span class="float-right">(32)</span></li>
                                <li><a href="#">April 2017</a> <span class="float-right">(09)</span></li>
                                <li><a href="#">May 2017</a> <span class="float-right">(81)</span></li>
                                <li><a href="#">Jun 2017</a> <span class="float-right">(12)</span></li>
                            </ul>

                        </aside>

                        <!-- Tags widget-->
                        <aside class="widget widget_tag_cloud">
                            <div class="widget-title">Tags</div>
                            <div class="tagcloud">
                                <a href="#">logo</a>
                                <a href="#">business</a>
                                <a href="#">corporate</a>
                                <a href="#">e-commerce</a>
                                <a href="#">agency</a>
                                <a href="#">responsive</a>
                            </div>
                        </aside>
                    </div>
                </div>
                <!-- Sidebar end-->
            </div>

        </div>
        <!-- end container -->
    </section>
@stop