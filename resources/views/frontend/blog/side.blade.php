<div class="col-md-4 sidebar">
    @section('search')
        <div class="single-widget search-widget">
            <form class="example" action="{{ route('all.blog') }}" style="margin:auto;max-width:300px">
                <input type="text" placeholder="Search Posts" name="cari">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    @endsection

            @section('kategori')
            <ul>
                @foreach($kategori as $data)
                <li><a href="/blog/kategori/{{ $data->slug }}" class="justify-content-between align-items-center d-flex"><h6>{{ $data->nama_kategori }}</h6> <span>{{ $data->Artikel->count() }}</span></a></li>
                @endforeach
            </ul>
            @endsection

            @section('recent')
                @foreach($recent as $data)
                        <img class="img" style="width:150px;" src="{{ asset('assets/img/artikel/'.$data->foto) }}" alt="">
                    <div class="recent-details">
                        <a href="/blog/{{ $data->slug }}">
                            <h6>
                                {{ $data->judul }}
                            </h6>
                        </a>
                        <p>
                            {{ $data->created_at->diffForHumans() }}
                        </p><hr>
                    </div>
                @endforeach
            @endsection

            @section('tag')
                <ul>
                @foreach($tag as $data)
                    @if($data->Artikel->count() > 0)
                        <li><a href="/blog/tag/{{ $data->slug }}">{{ $data->nama_tag }}</a></li>
                    @endif
                @endforeach
                </ul>
            @endsection
        </div>

    </div>

