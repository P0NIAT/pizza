@extends('frontend.welcome_dashboard')
@section('content')

<style>
    .menu-img {
        height: 400px;
    }
</style>

<section class="ftco-section" id="menu">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-8 heading-section ftco-animate text-center">
                <h2 class="mb-4">{{ $menu->title }}</h2>
                <a
                    class="block-20 menu-img"
                    style="background-image: url({{ $menu->photo }})"
                >
                </a>
            </div>
            <p class="mt-5 fs-4">
                {{ $menu->content }}
            </p>
        </div>
        <div class="row d-flex">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="menu-entry align-self-stretch">
                            <div class="text py-4 d-block">
                                <div class="meta">
                                    <div><a class="fs-5">{{ $menu->created_at->format('d-M-Y') }}</a></div>
                                    <div><aa class="fs-5">{{ $menu->author }}</a></div>
                                    <div>
                                        <a class="meta-chat fs-5"
                                            ><span class="icon-chat"></span>{{ $menu->id }}</a
                                        >
                                    </div>
                                    <br>
                                    <a href="{{ route('menu.showall') }}" class="btn btn-primary mt-5 fs-5">All Blogs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

{{-- <div class="page-content">
   <h1>{{ $menu->title }}</h1><br>
   <div>

       <img class="menu-img" style="background-image: url({{ $menu->photo }});" alt="menu picture"><br>
   </div>
    {{-- <img src="{{ (!empty($menu->photo)) ? url('upload/admin_images/'.$menu->photo) : url('upload/no_image.jpg') }}" alt="menu picture"><br> --}}
    {{-- <p>{{ $menu->content }}</p><br>
    <h6>Author: {{ $menu->author }}</h6>
</div> --}}


@endsection
