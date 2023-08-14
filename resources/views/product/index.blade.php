@extends('layout.index')

@section('title')
    Chi tiết sản phẩm
@endsection
@section('content')
    <div class="container">
        <div class="my-4 box-content">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <h3>Think Like a Monk</h3>
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a href="{{ route('category') }}">Sách bán chạy</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Think Like a Monk</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="product-detail">
                        <div class="images">
                            <img src="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/assets/img/300x452/img1.jpg" alt="">
                        </div>
                        <div class="info">
                            <h2></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection