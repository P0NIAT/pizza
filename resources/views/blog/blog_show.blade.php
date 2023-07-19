@extends('frontend.welcome_dashboard')
@section('content')

<section class="ftco-section" id="blog">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-8 heading-section ftco-animate text-center">
                <h2 class="mb-4">{{ $blog->title }}</h2>
                <a
                    class="block-20 blog-img"
                    style="background-image: {{ url('upload/blog_images/'. $blog->photo) }}"
                ><img class="blog-img" src="{{ url('upload/blog_images/'. $blog->photo) }}" alt="blog main image">
                </a>
            </div>
            <p class="mt-5 fs-5">
                {{ $blog->intro }}
            </p>
            <p class="mt-3 fs-4">
                {!! $blog->content !!}
            </p>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <div class="text py-4 d-block">
                        <div class="meta">
                            <div><a class="fs-5">{{ $blog->created_at->format('d-M-Y') }}</a></div>
                            <div><aa class="fs-5">{{ $blog->author }}</a></div>
                            <div>
                                <a class="meta-chat fs-5"
                                    ><span class="icon-chat"></span>{{ $blog->id }}</a
                                >
                            </div>
                            <br>
                            <a href="{{ route('blog.showall') }}" class="btn btn-primary mt-5 fs-5">All Blogs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
