@extends('layouts.frontend')

@section('title') {{ $artikel->judul }} @endsection

@section('content')

   
    <!-- Start blog-posts Area -->
        <div class="single-post">
            <img class="img-fluid" src="{{ asset('assets/img/artikel/'.$artikel->foto)}}" alt="error" style="height:100%; width:100%">
                <div class="tags">
                    <div class="col-lg-4">
                        <div class="row">    
                            @foreach($artikel->tag as $t)
                                <a style="color:blue;" href="/blog/tag/{{$t->slug}}">#{{ $t->nama_tag }}, </a>
                            @endforeach
                        </div>
                    </div>
                </div>
        <div class="col-lg-4">
            <div class="row">
                <a href="{{ route('detail.blog', $artikel->slug) }}">
                    <h1>
                        {{ $artikel->judul }}
                    </h1>
                </a>
            </div>
        </div>
            <p>
                {!! $artikel->konten !!}
            </p>
        <br><br><br><br>
        <div class="bottom-meta">
            <div class="user-details row align-items-center">
                <div class="comment-wrap col-lg-6">
                    <ul>
                        <li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
                        <li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
                    </ul>
                </div>
                <div class="social-wrap col-lg-6">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
@include('frontend.blog.side')
        				
    </div>	
	</div>
</section>
			<!-- End blog-posts Area -->

@endsection