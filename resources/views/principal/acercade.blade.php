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
                <div class="col-12">

                    <!-- Post-->
                    <article class="post">

                        <h5 class="text-center mt-0 mb-5 pb-3 text-uppercase"><b>About Me</b></h5>
                        <div class="post-preview">
                            <img src="images\blog\blog-1.jpg" alt="" class="img-fluid rounded">
                        </div>

                        <div class="blog-detail-description">
                            <p>Donec eleifend accumsan nibh eu efficitur. Vivamus lacinia ut turpis egestas convallis. Quisque nec accumsan justo. Maecenas auctor in nulla nec tincidunt. Pellentesque rutrum molestie tortor, ut egestas risus commodo a. Praesent a orci nec libero fringilla euismod eu id massa. Nunc eget bibendum odio, sed sodales eros.Vivamus lacinia, mi eu ultrices mattis.</p>

                            <p>Donec eleifend accumsan nibh eu efficitur. Vivamus lacinia ut turpis egestas convallis. Quisque nec accumsan justo. Maecenas auctor in nulla nec tincidunt. Pellentesque rutrum molestie tortor, ut egestas risus commodo a. Praesent a orci nec libero fringilla euismod eu id massa. Nunc eget bibendum odio, sed sodales eros.Vivamus lacinia, mi eu ultrices mattis.</p>

                            <blockquote class="blockquote text-center">
                                <h6 class="mb-0 blockquote-text">Praesent consectetur vel dui sed molestie. Aliquam imperdiet cursus dapibus. Quisque vestibulum blandit tellus, nec volutpat turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</h6>
                                <footer class="blockquote-footer mt-2">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>

                            <p>Quisque nec accumsan justo. Maecenas auctor in nulla nec tincidunt. Pellentesque rutrum molestie tortor, ut egestas risus commodo a. Praesent a orci nec libero fringilla euismod eu id massa. Nunc eget bibendum odio, sed sodales eros.Vivamus lacinia, mi eu ultrices mattis.</p>

                            <ul class="socials list-unstyled mb-0 text-center mt-5">
                                <li><a href="http://facebook.com"><i class="mdi mdi-facebook"></i></a></li>
                                <li><a href="http://twitter.com"><i class="mdi mdi-twitter"></i></a></li>
                                <li><a href="http://instagram.com"><i class="mdi mdi-instagram"></i></a></li>
                                <li><a href="http://pinterest.com"><i class="mdi mdi-pinterest"></i></a></li>
                            </ul>

                        </div>

                    </article>
                    <!-- Post end-->

                </div>
                <!-- Content end-->

            </div>

        </div>
        <!-- end container -->
    </section>
@stop