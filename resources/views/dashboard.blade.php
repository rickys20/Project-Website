@extends('welcome')
@section('content')
<style>
	@import url(https://fonts.googleapis.com/css?family=Calibri:400,300,700);
	.mt-100 {
		margin-top: 100px
	}

	.product-wrapper,
	.product-img {
		overflow: hidden;
		position: relative
	}

	.mb-45 {
		margin-bottom: 45px
	}

	.product-action {
		bottom: 0px;
		left: 0;
		opacity: 0;
		position: absolute;
		right: 0;
		text-align: center;
		transition: all 0.6s ease 0s
	}

	.product-wrapper {
		border-radius: 10px
	}

	.product-img>span {
		background-color: #fff;
		box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);
		color: #333;
		display: inline-block;
		font-size: 12px;
		font-weight: 500;
		left: 20px;
		letter-spacing: 1px;
		padding: 3px 12px;
		position: absolute;
		text-align: center;
		text-transform: uppercase;
		top: 20px
	}

	.product-action-style {
		background-color: #fff;
		box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);
		display: inline-block;
		padding: 16px 2px 12px
	}

	.product-action-style>a {
		color: #979797;
		line-height: 1;
		padding: 0 21px;
		position: relative
	}

	.product-action-style>a.action-plus {
		font-size: 18px
	}

	.product-wrapper:hover .product-action {
		bottom: 20px;
		opacity: 1
	}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="product-wrapper mb-45 text-center">
                <div class="product-img"> <a href="#" data-abc="true"> <img src="{{ asset('admin/img/sample-1.jpg') }}" width="220" height="300" alt="" style="border-radius: 25px;"> </a> <span class="text-center"><i class="fa fa-rupee"></i> 43,000</span>
                    <div class="product-action">
                        <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"></i> </a> <a href="#"> <i class="fa fa-heart"></i> </a> <a href="#"> <i class="fa fa-shopping-cart"></i> </a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-wrapper mb-45 text-center">
                <div class="product-img"> <a href="#" data-abc="true"> <img src="{{ asset('admin/img/sample-2.jpg') }}" width="220" height="300" alt="" style="border-radius: 25px;"> </a> <span><i class="fa fa-rupee"></i> 41,000</span>
                    <div class="product-action">
                        <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i> </a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-wrapper mb-45 text-center">
                <div class="product-img"> <a href="#" data-abc="true"> <img src="{{ asset('admin/img/sample-3.jpg') }}" width="220" height="300" alt="" style="border-radius: 25px;"> </a> <span><i class="fa fa-rupee"></i> 33,000</span>
                    <div class="product-action">
                        <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i> </a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-wrapper mb-45 text-center">
                <div class="product-img"> <a href="#" data-abc="true"> <img src="{{ asset('admin/img/sample-4.jpg') }}" width="220" height="300" alt="" style="border-radius: 25px;"> </a> <span><i class="fa fa-rupee"></i> 23,000</span>
                    <div class="product-action">
                        <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection