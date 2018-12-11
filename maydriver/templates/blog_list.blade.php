@extends(_get_frontend_layout_path('frontend'))
@section('content')
    <header class="childhead" style="background-image:  url({{ asset('images/backgrounds/footer-v2.jpg') }}) ">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 my-auto text-center text-white">
                    <div class="weltext">
                        <h1 class="align-items-center">一路有我，安全出行</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="ptb ptb-sm-80">
        <div class="container">
            <div class="row">
                <!-- Post Item -->
                <div class="col-md-8 offset-md-2 blog-post-hr">
                    @foreach($posts as $key=>$post)
                    <div class="blog-post mb-30">
                        @if(isset($post->feature_image)&& $post->feature_image!=="")
                        <div class="post-media">
                            <div class="item">
                                <img src="{{ asset($post->feature_image) }}" alt="" />
                            </div>
                        </div>
                        @endif
                        <div class="post-meta"><span>{{ $post->updated_at->format('Y-m-d') }}</span></div>
                        <div class="post-header">
                            <h4><a href="{{ url('/page'.$post->uri) }}">{{ $post->title }}</a></h4>
                        </div>
                        <div class="post-entry">
                            {!! $post->teasing !!}
                        </div>
                        <div class="post-more-link pull-right"><a href="{{ url('/page'.$post->uri) }}">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
                    </div>

                    <hr />
                    @endforeach
                    {{ $posts->links() }}
                </div>
                <!-- End Post Item -->

            </div>
        </div>
    </section>


    @include(_get_frontend_theme_path('pages.elements.contact'))


@endsection