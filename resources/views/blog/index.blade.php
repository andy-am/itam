@extends('layout.master')

@section('content')


        <section id="page-breadcrumb">
            <div class="vertical-center sun">
                <div class="container">
                    <div class="row">
                        <div class="action">
                            <div class="col-sm-12">
                                <h1 class="title">Blog</h1>
                                <p>Blog with right sidebar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--/#action-->
        <section id="blog" class="padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-7">
                        <div class="row">

                            @foreach($blogs as $blog)

                                <div class="col-md-6 col-sm-12 blog-padding-right">
                                    <div class="single-blog two-column">
                                        <div class="post-thumb">
                                            <a href="blogdetails.html"><img src="images/blog/timeline/4.jpg" class="img-responsive" alt=""></a>
                                            <div class="post-overlay">
                                                <span class="uppercase"><a href="#">{{ date("d" ,strtotime($blog->created_at)) }} <br><small>{{ date("M" ,strtotime($blog->created_at)) }}</small></a></span>
                                            </div>
                                        </div>
                                        <div class="post-content overflow">
                                            <h2 class="post-title bold"><a href="blogdetails.html">{{ $blog->slug }}</a></h2>
                                            <h3 class="post-author"><a href="#">Admin</a></h3>
                                            <p>{{ $blog->text }}</p>
                                            <a href="#" class="read-more">Detail{{--View More--}}</a>
                                            <div class="post-bottom overflow">
                                                <ul class="nav nav-justified post-nav">
                                                    <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                                    <li><a href="#"><i class="fa fa-heart"></i>Love</a></li>
                                                    <li><a href="#"><i class="fa fa-comments"></i>Comments</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>



                        <div class="blog-pagination">
                            <ul class="pagination">
                                {{--<li><a href="#">left</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#">9</a></li>
                                <li><a href="#">right</a></li>--}}
                                {!! $blogs->links() !!}
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-5">
                        <div class="sidebar blog-sidebar">
                            <div class="sidebar-item  recent">
                                <h3>Comments</h3>
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#"><img src="images/portfolio/project1.jpg" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                        <p>posted on  07 March 2014</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#"><img src="images/portfolio/project2.jpg" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                        <p>posted on  07 March 2014</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <a href="#"><img src="images/portfolio/project3.jpg" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>
                                        <p>posted on  07 March 2014</p>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-item tag-cloud">
                                <h3>Tag Cloud</h3>
                                <ul class="nav nav-pills">
                                    <li><a href="#">Corporate</a></li>
                                    <li><a href="#">Joomla</a></li>
                                    <li><a href="#">Abstract</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Product</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-item popular">
                                <h3>Latest Photos</h3>
                                <ul class="gallery">
                                    <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/portfolio/popular2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/portfolio/popular3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/portfolio/popular4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/portfolio/popular5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/portfolio/popular1.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection