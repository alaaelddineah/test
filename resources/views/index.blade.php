@extends('layouts.master')

@section('content')


    <main class="main">
        <!--=============== HOME ===============-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div>
                    <img src="assets/img/home.png" alt="" class="home__img">
                </div>

                <div class="home__data">
                    <div class="home__header">
                        <h1 class="home__title">On ear</h1>
                        <h2 class="home__subtitle">Beats 3</h2>
                    </div>

                    <div class="home__footer">
                        <h3 class="home__title-description">Overview</h3>
                        <p class="home__description">Enjoy award-winning Beats sound with wireless listening freedom and a sleek,
                            streamlined design with comfortable padded earphones, delivering first-rate playback.
                        </p>
                        <a href="#" class="button button--flex">
                                <span class="button--flex">
                                    <i class="ri-shopping-bag-line button__icon"></i></i> Add to Bag
                                </span>
                            <span class="home__price">$299</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== SPONSOR ===============-->
        <section class="sponsor section">
            <div class="sponsor__container container grid">
                <img src="{{asset('assets/img/sponsor1.png')}}" alt="" class="sponsor__img">
                <img src="{{asset('assets/img/sponsor2.png')}}" alt="" class="sponsor__img">
                <img src="{{asset('assets/img/sponsor3.png')}}" alt="" class="sponsor__img">
                <img src="{{asset('assets/img/sponsor4.png')}}" alt="" class="sponsor__img">
            </div>
        </section>

        <!--=============== SPECS ===============-->
        <section class="specs section grid" id="specs">
            <h2 class="section__title section__title-gradient">Specs</h2>

            <div class="specs__container container grid">
                <div class="specs__content grid">
                    <div class="specs__data">
                        <i class="ri-bluetooth-line specs__icon"></i>
                        <h3 class="specs__title">Connection</h3>
                        <span class="specs__subtitle">Bluetooth v5.2</span>
                    </div>

                    <div class="specs__data">
                        <i class="ri-battery-charge-line specs__icon"></i>
                        <h3 class="specs__title">Battery</h3>
                        <span class="specs__subtitle">Duration 40h</span>
                    </div>

                    <div class="specs__data">
                        <i class="ri-plug-line specs__icon"></i>
                        <h3 class="specs__title">Load</h3>
                        <span class="specs__subtitle">Fast charge 4.2-AAC</span>
                    </div>

                    <div class="specs__data">
                        <i class="ri-mic-line specs__icon"></i>
                        <h3 class="specs__title">Microphone</h3>
                        <span class="specs__subtitle">Supports Apple Siri <br> and Google</span>
                    </div>
                </div>

                <div>
                    <img src="assets/img/specs.png" alt="" class="specs__img">
                </div>
            </div>
        </section>

        <!--=============== CASE ===============-->
        <section class="case section grid" id="case">
            <h2 class="section__title section__title-gradient">Case</h2>

            <div class="case__container container grid">
                <div>
                    <img src="assets/img/case.png" alt="" class="case__img">
                </div>

                <div class="case__data">
                    <p class="case__description">With a comfortable and adaptable case so that you can
                        store it whenever you want, and keep your durability forever.
                    </p>
                    <a href="#" class="button button--flex">
                        <i class="ri-information-line button__icon"></i> More info
                    </a>
                </div>
            </div>
        </section>

        <!--=============== DISCOUNT ===============-->
        <section class="discount section">
            <div class="discount__container container grid">
                <div class="discount__animate">
                    <h2 class="discount__title">Immerse yourself in <br> your music</h2>
                    <p class="discount__description">Get it now, up to 50% off.</p>
                    <a href="#" class="button button--flex">
                        <i class="ri-shopping-bag-line button__icon"></i> Shop Now
                    </a>
                </div>

                <img src="assets/img/discount.png" alt="" class="discount__img">
            </div>
        </section>

        <!--=============== PRODUCTS ===============-->
        <section class="products section" id="products">
            <h2 class="section__title section__title-gradient products__line">
                Choose <br> Your Style
            </h2>

            <div class="products__container container grid">
                <article class="products__card">
                    <div class="products__content">
                        <img src="assets/img/product1.png" alt="" class="products__img">

                        <h3 class="products__title">Black</h3>
                        <span class="products__price">$249</span>

                        <button class="button button--flex products__button">
                            <i class="ri-shopping-bag-line button__icon"></i>
                        </button>
                    </div>
                </article>
                <article class="products__card">
                    <div class="products__content">
                        <img src="assets/img/product2.png" alt="" class="products__img">

                        <h3 class="products__title">Red Black</h3>
                        <span class="products__price">$249</span>

                        <button class="button button--flex products__button">
                            <i class="ri-shopping-bag-line button__icon"></i>
                        </button>
                    </div>
                </article>
                <article class="products__card">
                    <div class="products__content">
                        <img src="assets/img/product3.png" alt="" class="products__img">

                        <h3 class="products__title">Night Black</h3>
                        <span class="products__price">$249</span>

                        <button class="button button--flex products__button">
                            <i class="ri-shopping-bag-line button__icon"></i>
                        </button>
                    </div>
                </article>
                <article class="products__card">
                    <div class="products__content">
                        <img src="assets/img/product4.png" alt="" class="products__img">

                        <h3 class="products__title">Blue</h3>
                        <span class="products__price">$249</span>

                        <button class="button button--flex products__button">
                            <i class="ri-shopping-bag-line button__icon"></i>
                        </button>
                    </div>
                </article>

                <article class="products__card">
                    <div class="products__content">
                        <img src="assets/img/product5.png" alt="" class="products__img">

                        <h3 class="products__title">Twilight gray</h3>
                        <span class="products__price">$249</span>

                        <button class="button button--flex products__button">
                            <i class="ri-shopping-bag-line button__icon"></i>
                        </button>
                    </div>
                </article>
            </div>
        </section>
    </main>

    @endsection
