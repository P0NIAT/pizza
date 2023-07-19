<footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <p>
                        Welcome to our Italian pizza restaurant, where every slice is a taste of Italy. Step into a lively and inviting space that captures the essence of a traditional pizzeria in the heart of Italy.
                    </p>
                    <ul
                        class="ftco-footer-social list-unstyled float-md-left float-lft mt-5"
                    >
                        <li class="ftco-animate">
                            <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F"><span class="icon-twitter"></span></a>
                        </li>
                        <li class="ftco-animate">
                            <a href="https://www.facebook.com/home.php"><span class="icon-facebook"></span></a>
                        </li>
                        <li class="ftco-animate">
                            <a href="https://www.instagram.com/"><span class="icon-instagram"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            @php
                use App\Models\Blog;
                $blogs = Blog::all();
            @endphp
            <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Recent Blogs</h2>
                    @for ($i = 0; $i < count($blogs); $i++)
                    @if (count($blogs)-2 <= $i)
                    <div class="block-21 mb-4 d-flex">
                        <a
                            href="{{ route('blog.show',$blogs[$i]->id) }}"
                            class="blog-img mr-4"
                            style="background-image: url()"
                        ><img class="blog-img" src="{{ url('upload/blog_images/'. $blogs[$i]->photo) }}" alt="blog main image"></a>
                        <div class="text">
                            <h3 class="heading">
                                <a href="{{ route('blog.show',$blogs[$i]->id) }}">{{ $blogs[$i]->title }}</a
                                >
                            </h3>
                            <div class="meta">
                                <div>
                                    <a><span class="icon-calendar"></span>{{ $blogs[$i]->created_at->format('d-M-Y') }}</a
                                    >
                                </div>
                                <div>
                                    <a><span class="icon-person"></span> {{ $blogs[$i]->author }}</a>
                                </div>
                                <div>
                                    <a><span class="icon-chat"></span> {{ $blogs[$i]->id }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endfor
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a class="py-2 d-block">Cooked</a></li>
                        <li><a class="py-2 d-block">Deliver</a></li>
                        <li><a class="py-2 d-block">Quality Foods</a></li>
                        <li><a class="py-2 d-block">Mixed</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li>
                                <span class="icon icon-map-marker"></span
                                ><span class="text"
                                    >98A Queens Cres, London NW5 4DY, United Kingdom</span
                                >
                            </li>
                            <li>
                                <a><span class="icon icon-phone"></span
                                    ><span class="text">+44 7878 924703</span></a
                                >
                            </li>
                            <li>
                                <a><span class="icon icon-envelope"></span
                                    ><span class="text">poniat.ap@gmail.com</span></a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>

                    <a href="#" target="_blank">Pizza Italiano</a>
                </p>
            </div>
        </div>
    </div>
</footer>
