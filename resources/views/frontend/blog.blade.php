@extends('frontend.welcome_dashboard')
@section('content')

<section class="ftco-section" id="blog">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-8 heading-section ftco-animate text-center">
                <h2 class="mb-4">All blog posts</h2>
                <p>
                    Calling all pizza enthusiasts and aspiring home chefs! Discover the secrets, techniques, and mouthwatering recipes in our blog as we explore the wonderful world of pizzas.
                </p>
            </div>
        </div>
        <div class="row d-flex">
            @for ($i = 0; $i < count($blogs); $i++)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a
                                href="{{ route('blog.show',$blogs[$i]->id) }}"
                            ><img class="blogs-img" src="{{ url('upload/blog_images/'. $blogs[$i]->photo) }}" alt="blog main image">
                            </a>
                            <div class="text py-4 d-block">
                                <div class="meta">
                                    <div><a>{{ $blogs[$i]->created_at->format('d-M-Y') }}</a></div>
                                    <div><a>{{ $blogs[$i]->author }}</a></div>
                                    <div>
                                        <a class="meta-chat"
                                            ><span class="icon-chat"></span>{{ $blogs[$i]->id }}</a
                                        >
                                    </div>
                                </div>
                                <h3 class="heading mt-2">
                                    <a href="{{ route('blog.show',$blogs[$i]->id) }}">{{ $blogs[$i]->title }}</a>
                                </h3>
                                <p class="hide-content-vertical">
                                    {{ $blogs[$i]->intro }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
</section>

@endsection
