@extends('client.base')
@section('content')
       <section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title"><b>Blog Saya</b></h3>
                    <div class="divider"></div>
                </div>
            </div>  <!-- Col-md-12 End -->
        </div>
        <div class="row">
             <div class="blog-timeline">
                <div id="owl-blog" class="owl-carousel owl-theme">
                    @foreach($list_artikel as $artikel)
                    <div class="item ">
                        <div class="single_blog">
                            <div class="post_img text-center">
                               <a href="blog-single.html"><img src="images/blog/pic3.jpg" alt="" class="img-responsive"></a>
                            </div>
                            <a href="blog-single.html"><h4>{{$artikel->judul}}</h4></a>
                            <ul class="list-inline">
                                <li>{{$artikel->sumber}}</li>
                            </ul>
                            <p>{{$artikel->artikel}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> <!-- blog Timeline End -->
        </div>
    </div>
</section>
<!-- bLOG End -->

<!-- Testimonial Start -->

<section id="testimonial" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title"><b>Komentar</h3>
                    <div class="divider"></div>
                </div>
            </div>  <!-- Col-md-12 End -->
        </div>
                <div class="row">
                    <div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
                        @foreach($list_komentar as $komentar)
                        <div class="item">
                          <div class="testimonial-thumb">
                            <img class="img-circle" src="{{url('public')}}/images/user.jpg" alt="testimonial" >
                          </div>
                          <div class="testimonial-content">
                            <h3 class="name">{{$komentar->nama}}</h3>
                            <p class="testimonial-text">
                              {{$komentar->komentar}}
                            </p>
                          </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Navigation start -->
                    <div class="customNavigation cyprass-carousel-controller">
                        <a class="prev left">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="next right">
                          <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                    <!-- Navigation ENd -->
                </div>
            </div> <!-- Row End -->
            <div class="container">
            <form action="{{url('admin/komentar')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Komentar</label>
                                <textarea name="komentar" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-dark float-right">Simpan</button>
                        </form>
            </div>
</section>


@endsection