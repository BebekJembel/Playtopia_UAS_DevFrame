@extends('layouts.frontend')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="mb-5" >
    <div class="container">
        <div class="hero__item set-bg" data-setbg="frontend/img/background.jpg">
            <div class="hero__text" style="text-shadow: -1px 1px 0 #fff;">
                <span style="color: black;">Jual dan Beli</span>
                <h2>Playtopia <br />100% Aman</h2>
                <p>Jual Beli Akun Game Terpercaya</p>
                <a href="/shop" class="primary-btn">Beli Sekarang!</a>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                @foreach($menu_categories as $menu_category)
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ $menu_category->photo->getUrl() }} " style="border-radius: 50%;
 sumber: https://www.posciety.com/cara-membuat-gambar-bulat-melingkar-bundar-html-css/">
                        <h5><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a>
                        </h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
            </div>
        </div>
        <div class="row featured__filter" id="product-list">
        </div>
    </div>
</section>
<!-- Featured Section End -->


@endsection