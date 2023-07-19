@extends('frontend.welcome_dashboard')
@section('content')


<section
    class="home-slider owl-carousel img"
    style="background-image: url({{ asset('frontend/images/bg_1.jpg') }})"
    >
    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
            <div
                class="row slider-text align-items-center"
                data-scrollax-parent="true"
            >
                <div class="col-md-6 col-sm-12 ftco-animate">
                    <span class="subheading">Delicious</span>
                    <h1 class="mb-4">Italian Cuizine</h1>
                    <p class="mb-4 mb-md-5">
                        Step into a lively and inviting space that captures the essence of a traditional pizzeria in the heart of Italy.
                    </p>
                    <p>
                        <a href="{{ route('pizzas.order') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3"
                            >Order Now</a
                        >
                        <a
                            href="#menu"
                            class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"
                            >View Menu</a
                        >
                    </p>
                </div>
                <div class="col-md-6 ftco-animate">
                    <img src="{{ asset('frontend/images/bg_1.png') }}" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
            <div
                class="row slider-text align-items-center"
                data-scrollax-parent="true"
            >
                <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
                    <span class="subheading">Crunchy</span>
                    <h1 class="mb-4">Italian Pizza</h1>
                    <p class="mb-4 mb-md-5">
                        Our menu features an array of mouthwatering pizzas, handcrafted with love and attention to detail.
                    </p>
                    <p>
                        <a href="{{ route('pizzas.order') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3"
                            >Order Now</a
                        >
                        <a
                            href="#menu"
                            class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"
                            >View Menu</a
                        >
                    </p>
                </div>
                <div class="col-md-6 ftco-animate">
                    <img src="{{ asset('frontend/images/bg_2.png') }}" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image: url({{ asset('frontend/images/bg_3.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div
                class="row slider-text justify-content-center align-items-center"
                data-scrollax-parent="true"
            >
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Welcome</span>
                    <h1 class="mb-4">We cooked your desired Pizza Recipe</h1>
                    <p class="mb-4 mb-md-5">
                        From classic Margherita to unique and innovative toppings, each pizza is baked to perfection.
                    </p>
                    <p>
                        <a href="{{ route('pizzas.order') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3"
                            >Order Now</a
                        >
                        <a
                            href="#menu"
                            class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"
                            >View Menu</a
                        >
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>+44 7878 924703</h3>
                            <p>Call us and reserve a table.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>98A Queens Cres,</h3>
                            <p>London NW5 4DY, UK</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Open Monday-Friday</h3>
                            <p>8:00am - 9:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-md-flex pl-md-5 p-4 align-items-center">
                <ul class="social-icon">
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
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div
        class="one-half img"
        style="background-image: url({{ asset('frontend/images/about.jpg') }})"

    ></div>
    <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate">
            <h2 class="mb-4">
                Welcome to <span class="flaticon-pizza">Pizza</span> A Restaurant
            </h2>
        </div>
        <div>
            <p>
                Welcome to our Italian pizza restaurant, where every slice is a taste of Italy. Step into a lively and inviting space that captures the essence of a traditional pizzeria in the heart of Italy. Our menu features an array of mouthwatering pizzas, handcrafted with love and attention to detail. From classic Margherita to unique and innovative toppings, each pizza is baked to perfection in our wood-fired oven, ensuring a crispy crust and flavors that transport you to the streets of Naples. Whether you prefer a thin and crispy base or a fluffy deep-dish delight, our pizza section is a haven for pizza lovers seeking an authentic Italian experience.
            </p>
        </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Our Services</h2>
                <p>
                    From classic Margherita to unique and innovative toppings, each pizza is baked to perfection in our wood-fired oven, ensuring a crispy crust and flavors that transport you to the streets of London.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div
                        class="icon d-flex justify-content-center align-items-center mb-5"
                    >
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Healthy Foods</h3>
                        <p>
                            At our restaurant, we take pride in serving a variety of delicious and nutritious dishes made with fresh, high-quality ingredients to ensure a healthy dining experience.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div
                        class="icon d-flex justify-content-center align-items-center mb-5"
                    >
                        <span class="flaticon-bicycle"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Fastest Delivery</h3>
                        <p>
                            We guarantee the fastest delivery service in our restaurant, ensuring that your order arrives promptly and conveniently at your doorstep.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div
                        class="icon d-flex justify-content-center align-items-center mb-5"
                    >
                        <span class="flaticon-pizza-1"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Original Recipes</h3>
                        <p>
                            In our restaurant, we pride ourselves on offering a unique culinary experience with our extensive menu of original recipes crafted with passion and creativity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" id="menu">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Pizza Menu</h2>
                <p>Indulge in an authentic taste of Italy with our delectable pizza menu, featuring a tantalizing array of traditional and innovative flavors.
                </p>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        <div class="row no-gutters d-flex justify-content-center">

            @foreach ($menus as $menu)
            <div class="col-lg-5 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a href="{{ route('pizzas.order') }}" class="img">
                        <img class="blogs-img" src="{{ url('upload/menu_images/'. $menu->photo) }}" alt="blog main image">
                    </a>
                    <div class="text p-4">
                        <h3>{{ $menu->name }}</h3>
                        <p>
                            @foreach ( $menu->ingredients as $ingredient)
                                <span>· {{ $ingredient}}</span>
                            @endforeach
                        </p>
                        <p class="price">
                            <span>£{{ $menu->price }}</span>
                            <a href="{{ route('pizzas.order') }}" class="ml-2 btn btn-white btn-outline-white"
                            >Order</a
                            >
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- <div class="col-lg-5 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a  href="{{ route('pizzas.order') }}"
                        class="img"
                        style="background-image: url({{ asset('upload/menu_images/'. $menu->photo) }})"
                    ></a>
                    <div class="text p-4">
                        <h3>CALABRIA</h3>
                        <p>
                            Tomato Sauce · Mozzarella · Mascarpone · Nduja Spicy Sausage · Rocket
                        </p>
                        <p class="price">
                            <span>£14.90</span>
                            <a href="{{ route('pizzas.order') }}" class="ml-2 btn btn-white btn-outline-white"
                                >Order</a
                            >
                        </p>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-lg-5 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a  href="{{ route('pizzas.order') }}"
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-5.jpg') }})"
                    ></a>
                    <div class="text p-4">
                        <h3>FIORENTINA</h3>
                        <p>
                            Tomato Sauce · Mozzarella · Parmesan · Egg · Fresh Spinach
                        </p>
                        <p class="price">
                            <span>£12.90</span>
                            <a href="{{ route('pizzas.order') }}" class="ml-2 btn btn-white btn-outline-white"
                                >Order</a
                            >
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a  href="{{ route('pizzas.order') }}"
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-3.jpg') }})"
                    ></a>
                    <div class="text p-4">
                        <h3>GIARDINO</h3>
                        <p>
                            Tomato Sauce · Vegan Mozzarella · Mixed Peppers · Mushrooms · Double Basil
                        </p>
                        <p class="price">
                            <span>£12.90</span>
                            <a href="{{ route('pizzas.order') }}" class="ml-2 btn btn-white btn-outline-white"
                                >Order</a
                            >
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-5 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a  href="{{ route('pizzas.order') }}"
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-6.jpg') }})"
                    ></a>
                    <div class="text p-4">
                        <h3>MARGHERITA</h3>
                        <p>
                            Tomato Sauce · Mozzarella · Basil
                        </p>
                        <p class="price">
                            <span>£9.90</span>
                            <a href="{{ route('pizzas.order') }}" class="ml-2 btn btn-white btn-outline-white"
                                >Order</a
                            >
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a  href="{{ route('pizzas.order') }}"
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-2.jpg') }})"
                    ></a>
                    <div class="text p-4">
                        <h3>PEPPERONI</h3>
                        <p>
                            Tomato Sauce · Mozzarella · Double Pepperoni
                        </p>
                        <p class="price">
                            <span>£11.90</span>
                            <a href="{{ route('pizzas.order') }}" class="ml-2 btn btn-white btn-outline-white"
                                >Order</a
                            >
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-flex ftco-animate">
            <div class="services-wrap d-flex">
                <a
                    class="img"
                    style="background-image: url({{ asset('frontend/images/pizza-8.jpg') }})"
                ></a>
                <div class="text p-4">
                    <h3>POLLO</h3>
                    <p>
                        Tomato Sauce · Mozzarella · Chicken · Mixed Peppers · Thyme
                    </p>
                    <p class="price">
                        <span>£14.90</span>
                        <a href="{{ route('pizzas.order') }}" class="ml-2 btn btn-white btn-outline-white"
                            >Order</a
                        >
                    </p>
                </div>

            </div>
            </div>
            <div class="col-lg-5 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a  href="{{ route('pizzas.order') }}"
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-7.jpg') }})"
                    ></a>
                    <div class="text p-4">
                        <h3>TROPICALI</h3>
                        <p>
                            Tomato Sauce · Mozzarella · Ham · Pineapple · Oregano
                        </p>
                        <p class="price">
                            <span>£14.90</span>
                            <a href="{{ route('pizzas.order') }}" class="ml-2 btn btn-white btn-outline-white"
                                >Order</a
                            >
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-5 d-flex ftco-animate">
                <div class="services-wrap d-flex">
                    <a
                        href="{{ route('pizzas.order') }}"
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-4.jpg') }})"
                    ></a>
                    <div class="text p-4">
                        <h3>REGINA</h3>
                        <p>
                            Tomato Sauce · Mozzarella · Parmesan · Ham · Mushrooms · Black Olives
                        </p>
                        <p class="price">
                            <span>£14.90</span>
                            <a href="{{ route('pizzas.order') }}" class="ml-2 btn btn-white btn-outline-white"
                                >Order</a
                            >
                        </p>
                    </div>

                </div>
            </div>  --}}
        </div>
    </div>
</section>

{{-- <section class="ftco-section" id="order">
    <div class="container-wrap">
        <div class="row d-flex justify-content-center mb-5 pb-3 mt-5 pt-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">15" Pizza Menu</h2>
                <p class="flip">
                    <span class="deg1"></span><span class="deg2"></span
                    ><span class="deg3"></span>
                </p>
                <p class="mt-5">
                    We cook our seasonal menu with carefully sourced British produce and exceptional Italian ingredients.
                </p>
            </div>
        </div>
        <div class="row no-gutters d-flex">
            <div class="col-md-6">
                <div class="pricing-entry d-flex ftco-animate">
                    <div
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-1.jpg') }})"
                    ></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Italian Pizza</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>
                                A small river named Duden flows by their place and supplies
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-2.jpg') }})"
                    ></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Hawaiian Pizza</span></h3>
                            <span class="price">$29.00</span>
                        </div>
                        <div class="d-block">
                            <p>
                                A small river named Duden flows by their place and supplies
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-3.jpg') }})"
                    ></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Greek Pizza</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>
                                A small river named Duden flows by their place and supplies
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-4.jpg') }})"
                    ></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Bacon Crispy Thins</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>
                                A small river named Duden flows by their place and supplies
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="pricing-entry d-flex ftco-animate">
                    <div
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-5.jpg') }})"
                    ></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Hawaiian Special</span></h3>
                            <span class="price">$49.91</span>
                        </div>
                        <div class="d-block">
                            <p>
                                A small river named Duden flows by their place and supplies
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-6.jpg') }})"
                    ></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Ultimate Overload</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>
                                A small river named Duden flows by their place and supplies
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-7.jpg') }})"
                    ></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Bacon Pizza</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>
                                A small river named Duden flows by their place and supplies
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pricing-entry d-flex ftco-animate">
                    <div
                        class="img"
                        style="background-image: url({{ asset('frontend/images/pizza-8.jpg') }})"
                    ></div>
                    <div class="desc pl-3">
                        <div class="d-flex text align-items-center">
                            <h3><span>Ham &amp; Pineapple</span></h3>
                            <span class="price">$20.00</span>
                        </div>
                        <div class="d-block">
                            <p>
                                A small river named Duden flows by their place and supplies
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> --}}


    <section class="ftco-gallery" id="about">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 ftco-animate">
                <a
                    class="gallery img d-flex align-items-center"
                    style="background-image: url({{ asset('frontend/images/gallery-1.jpg') }})"
                >
                    <div
                        class="icon mb-4 d-flex align-items-center justify-content-center"
                    >
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a
                    class="gallery img d-flex align-items-center"
                    style="background-image: url({{ asset('frontend/images/gallery-2.jpg') }})"
                >
                    <div
                        class="icon mb-4 d-flex align-items-center justify-content-center"
                    >
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a
                    class="gallery img d-flex align-items-center"
                    style="background-image: url({{ asset('frontend/images/gallery-3.jpg') }})"
                >
                    <div
                        class="icon mb-4 d-flex align-items-center justify-content-center"
                    >
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a
                    class="gallery img d-flex align-items-center"
                    style="background-image: url({{ asset('frontend/images/gallery-4.jpg') }})"
                >
                    <div
                        class="icon mb-4 d-flex align-items-center justify-content-center"
                    >
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section
    class="ftco-counter ftco-bg-dark img"
    id="section-counter"
    style="background-image: url({{ asset('frontend/images/bg_2.jpg') }})"
    data-stellar-background-ratio="0.5"
    >
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div
                        class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate"
                    >
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon">
                                    <span class="flaticon-pizza-1"></span>
                                </div>
                                <strong class="number" data-number="100">0</strong>
                                <span>Pizza Branches</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate"
                    >
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-medal"></span></div>
                                <strong class="number" data-number="85">0</strong>
                                <span>Number of Awards</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate"
                    >
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-laugh"></span></div>
                                <strong class="number" data-number="10567">0</strong>
                                <span>Happy Customer</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate"
                    >
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-chef"></span></div>
                                <strong class="number" data-number="900">0</strong>
                                <span>Staff</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="ftco-menu">
    <div class="container-fluid">
        <div class="row d-md-flex">
            <div
                class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0"
                style="background-image: url({{ asset('frontend/images/about.jpg') }})"

            ></div>
            <div class="col-lg-8 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div
                            class="nav ftco-animate nav-pills"
                            id="v-pills-tab"
                            role="tablist"
                            aria-orientation="vertical"
                        >
                            <a
                                class="nav-link active"
                                id="v-pills-1-tab"
                                data-toggle="pill"
                                href="#v-pills-1"
                                role="tab"
                                aria-controls="v-pills-1"
                                aria-selected="true"
                                >Pizza</a
                            >

                            <a
                                class="nav-link"
                                id="v-pills-2-tab"
                                data-toggle="pill"
                                href="#v-pills-2"
                                role="tab"
                                aria-controls="v-pills-2"
                                aria-selected="false"
                                >Drinks</a
                            >

                            <a
                                class="nav-link"
                                id="v-pills-3-tab"
                                data-toggle="pill"
                                href="#v-pills-3"
                                role="tab"
                                aria-controls="v-pills-3"
                                aria-selected="false"
                                >Burgers</a
                            >

                            <a
                                class="nav-link"
                                id="v-pills-4-tab"
                                data-toggle="pill"
                                href="#v-pills-4"
                                role="tab"
                                aria-controls="v-pills-4"
                                aria-selected="false"
                                >Pasta</a
                            >
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="tab-content ftco-animate" id="v-pills-tabContent">
                            <div
                                class="tab-pane fade show active"
                                id="v-pills-1"
                                role="tabpanel"
                                aria-labelledby="v-pills-1-tab"
                            >
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a
                                                href="#"
                                                class="menu-img img mb-4"
                                                style="background-image: url({{ asset('frontend/images/pizza-1.jpg') }})"

                                            ></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>
                                                    Far far away, behind the word mountains, far from
                                                    the countries Vokalia and Consonantia.
                                                </p>
                                                <p class="price"><span>£12.90</span></p>
                                                <p>
                                                    <a
                                                        href="#"
                                                        class="btn btn-white btn-outline-white"
                                                        >Add to cart</a
                                                    >
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a
                                                href="#"
                                                class="menu-img img mb-4"
                                                style="background-image: url({{ asset('frontend/images/pizza-2.jpg') }})"
                                            ></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>
                                                    Far far away, behind the word mountains, far from
                                                    the countries Vokalia and Consonantia.
                                                </p>
                                                <p class="price"><span>£12.90</span></p>
                                                <p>
                                                    <a
                                                        href="#"
                                                        class="btn btn-white btn-outline-white"
                                                        >Add to cart</a
                                                    >
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a
                                                href="#"
                                                class="menu-img img mb-4"
                                                style="background-image: url({{ asset('frontend/images/pizza-3.jpg') }})"
                                            ></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>
                                                    Far far away, behind the word mountains, far from
                                                    the countries Vokalia and Consonantia.
                                                </p>
                                                <p class="price"><span>£12.90</span></p>
                                                <p>
                                                    <a
                                                        href="#"
                                                        class="btn btn-white btn-outline-white"
                                                        >Add to cart</a
                                                    >
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="tab-pane fade"
                                id="v-pills-2"
                                role="tabpanel"
                                aria-labelledby="v-pills-2-tab"
                             >
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a
                                                href="#"
                                                class="menu-img img mb-4"
                                                style="background-image: url({{ asset('frontend/images/drink-1.jpg') }})"
                                            ></a>
                                            <div class="text">
                                                <h3><a href="#">Lemonade Juice</a></h3>
                                                <p>
                                                    Far far away, behind the word mountains, far from
                                                    the countries Vokalia and Consonantia.
                                                </p>
                                                <p class="price"><span>£12.90</span></p>
                                                <p>
                                                    <a
                                                        href="#"
                                                        class="btn btn-white btn-outline-white"
                                                        >Add to cart</a
                                                    >
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a
                                                href="#"
                                                class="menu-img img mb-4"
                                                style="background-image: url({{ asset('frontend/images/drink-2.jpg') }})"
                                            ></a>
                                            <div class="text">
                                                <h3><a href="#">Pineapple Juice</a></h3>
                                                <p>
                                                    Far far away, behind the word mountains, far from
                                                    the countries Vokalia and Consonantia.
                                                </p>
                                                <p class="price"><span>£12.90</span></p>
                                                <p>
                                                    <a
                                                        href="#"
                                                        class="btn btn-white btn-outline-white"
                                                        >Add to cart</a
                                                    >
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a
                                                href="#"
                                                class="menu-img img mb-4"
                                                style="background-image: url({{ asset('frontend/images/drink-3.jpg') }})"
                                            ></a>
                                            <div class="text">
                                                <h3><a href="#">Soda Drinks</a></h3>
                                                <p>
                                                    Far far away, behind the word mountains, far from
                                                    the countries Vokalia and Consonantia.
                                                </p>
                                                <p class="price"><span>£12.90</span></p>
                                                <p>
                                                    <a
                                                        href="#"
                                                        class="btn btn-white btn-outline-white"
                                                        >Add to cart</a
                                                    >
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="tab-pane fade"
                                id="v-pills-3"
                                role="tabpanel"
                                aria-labelledby="v-pills-3-tab"
                                >
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a
                                                href="#"
                                                class="menu-img img mb-4"
                                                style="background-image: url({{ asset('frontend/images/burger-1.jpg') }})"
                                            ></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>
                                                    Far far away, behind the word mountains, far from
                                                    the countries Vokalia and Consonantia.
                                                </p>
                                                <p class="price"><span>£12.90</span></p>
                                                <p>
                                                    <a
                                                        href="#"
                                                        class="btn btn-white btn-outline-white"
                                                        >Add to cart</a
                                                    >
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a
                                                href="#"
                                                class="menu-img img mb-4"
                                                style="background-image: url({{ asset('frontend/images/burger-2.jpg') }})"
                                            ></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>
                                                    Far far away, behind the word mountains, far from
                                                    the countries Vokalia and Consonantia.
                                                </p>
                                                <p class="price"><span>£12.90</span></p>
                                                <p>
                                                    <a
                                                        href="#"
                                                        class="btn btn-white btn-outline-white"
                                                        >Add to cart</a
                                                    >
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a
                                                href="#"
                                                class="menu-img img mb-4"
                                                style="background-image: url({{ asset('frontend/images/burger-3.jpg') }})"
                                            ></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>
                                                    Far far away, behind the word mountains, far from
                                                    the countries Vokalia and Consonantia.
                                                </p>
                                                <p class="price"><span>£12.90</span></p>
                                                <p>
                                                    <a
                                                        href="#"
                                                        class="btn btn-white btn-outline-white"
                                                        >Add to cart</a
                                                    >
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="tab-pane fade"
                                id="v-pills-4"
                                role="tabpanel"
                                aria-labelledby="v-pills-4-tab"
                                >
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a
                                                href="#"
                                                class="menu-img img mb-4"
                                                style="background-image: url({{ asset('frontend/images/pasta-1.jpg') }})"
                                            ></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>
                                                    Far far away, behind the word mountains, far from
                                                    the countries Vokalia and Consonantia.
                                                </p>
                                                <p class="price"><span>£12.90</span></p>
                                                <p>
                                                    <a
                                                        href="#"
                                                        class="btn btn-white btn-outline-white"
                                                        >Add to cart</a
                                                    >
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a
                                                href="#"
                                                class="menu-img img mb-4"
                                                style="background-image: url({{ asset('frontend/images/pasta-2.jpg') }})"
                                            ></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>
                                                    Far far away, behind the word mountains, far from
                                                    the countries Vokalia and Consonantia.
                                                </p>
                                                <p class="price"><span>£12.90</span></p>
                                                <p>
                                                    <a
                                                        href="#"
                                                        class="btn btn-white btn-outline-white"
                                                        >Add to cart</a
                                                    >
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a
                                                href="#"
                                                class="menu-img img mb-4"
                                                style="background-image: url({{ asset('frontend/images/pasta-3.jpg') }})"
                                            ></a>
                                            <div class="text">
                                                <h3><a href="#">Itallian Pizza</a></h3>
                                                <p>
                                                    Far far away, behind the word mountains, far from
                                                    the countries Vokalia and Consonantia.
                                                </p>
                                                <p class="price"><span>£12.90</span></p>
                                                <p>
                                                    <a
                                                        href="#"
                                                        class="btn btn-white btn-outline-white"
                                                        >Add to cart</a
                                                    >
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="ftco-section" id="blog">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-8 heading-section ftco-animate text-center">
                <h2 class="mb-4">Recent from blog</h2>
                <p>
                    Calling all pizza enthusiasts and aspiring home chefs! Discover the secrets, techniques, and mouthwatering recipes in our blog as we explore the wonderful world of pizzas.
                </p>
            </div>
        </div>
        <div class="row d-flex">
            @for ($i = 0; $i < count($blogs); $i++)
                @if (count($blogs)-3 <= $i)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <a
                                href="{{ route('blog.show',$blogs[$i]->id) }}"
                                class="block-20"
                                style="background-image: url({{ $blogs[$i]->photo }})"
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
                    @endif
                    @endfor
                </div>
            </div>
</section>

<section class="ftco-appointment" id="contact">
    <div class="overlay"></div>
    <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
            <div class="col-md-6 appointment ftco-animate">
                <div class="d-flex justify-content-end align-self-stretch"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2480.9899768510863!2d-0.15583600321044921!3d51.5500828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761bcd07b75867%3A0xd6f1af46219885e4!2sLondon%20Pizza!5e0!3m2!1sen!2str!4v1688396990245!5m2!1sen!2str" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
            <div class="col-md-6 appointment ftco-animate">
                <h3 class="mb-3">Contact Us</h3>
                <form action="#" class="appointment-form">
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="First Name"
                            />
                        </div>
                    </div>
                    <div class="d-me-flex">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Last Name"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea
                            name=""
                            id=""
                            cols="30"
                            rows="3"
                            class="form-control"
                            placeholder="Message"
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <input
                            type="submit"
                            value="Send"
                            class="btn btn-primary py-3 px-4"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
