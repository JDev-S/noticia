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

            <div class="row justify-content-center">
                <!-- Content-->
                <div class="col-8">

                    <!-- Post-->
                    <article class="post">
                        <h5 class="text-center mt-0 mb-5 pb-3 text-uppercase"><b>Get In Touch</b></h5>

                        <p class="text-center">Duis mollis eget augue et lobortis. Nam nunc justo, aliquet sed condimentum vel, faucibus in dolor. Proin eleifend hendrerit rhoncus.</p>

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
                                        <input id="subject" class="form-control" placeholder="Subject" name="subject" type="text">
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
                                    <div class="form-group text-right">
                                        <button name="submit" type="submit" id="submit" class="btn btn-dark">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </article>
                    <!-- Post end-->

                </div>
                <!-- Content end-->

            </div>

        </div>
        <!-- end container -->
    </section>

@stop