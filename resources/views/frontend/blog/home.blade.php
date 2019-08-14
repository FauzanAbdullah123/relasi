@extends('layouts.frontend')

@section('title') All Blog @endsection


@section('content')

<!-- start banner Area -->
    @foreach($artikel as $data)
        <div class="single-post">
            <img class="img-fluid" src="{{ asset('assets/img/artikel/'.$data->foto)}}" alt="error" style="height:340px; width:500px; border-radius:2px;">
                <div class="tags">
                    <div class="col-lg-4">
                        <div class="row">    
                            @foreach($data->tag as $t)
                                <a style="color:blue;" href="/blog/tag/{{$t->slug}}">#{{ $t->nama_tag }}, </a>
                            @endforeach
                        </div>
                    </div>
                </div>
        <div class="col-md-8">
            <div class="row">
                <a href="{{ route('detail.blog', $data->slug) }}">
                    <h1>
                        {{ $data->judul }}
                    </h1>
                </a>
            </div>
        </div>
            <p>
                {!! $data->konten !!}
            </p>
        <br><br><br><br>
    @endforeach
    {{$artikel->links()}}
</div>
        @include('frontend.blog.side')					
    </div>
	</div>
</section>
			<!-- End blog-posts Area -->

@endsection
