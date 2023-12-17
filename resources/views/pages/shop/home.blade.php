@extends('pages.layouts.index')

@section('title')
<title>Home</title>
@stop

@section('content')
<!-- Slider -->
@include('pages.layouts.slider')
<!-- Banner -->
{{-- @include('components.layouts.front-end.banner') --}}
<section class="bg0 p-t-23 p-b-140">
	<div class="container">
		<div class="p-b-10">
			<h3 class="ltext-103 cl5">
				Product Overview
			</h3>
		</div>

		<div class="flex-w flex-sb-m p-b-52">
			<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
					All Products
				</button>
				@foreach($category as $cat)
				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{$cat->id}}">
					{{$cat->name}}
				</button>
				@endforeach
			</div>
		</div>

		<div class="row isotope-grid">
			@foreach($product as $pr)
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$pr->cat_id}}">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-pic hov-img0">
						<img src="{{url('../')}}/uploads/product/{{$pr->image}}" alt="IMG-PRODUCT">
						<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1 btn-show" data-url="{{route('getinfo',$pr->id)}}">
							Quick View
						</a>
					</div>

					<div class="block2-txt flex-w flex-t p-t-14">
						<div class="block2-txt-child1 flex-col-l ">
							<a href="{{route('product_detail',$pr->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								{{$pr->name}}
							</a>

							<span class="stext-105 cl3">
								{{$pr->price}} VND
							</span>
							<a href="{{route('addCart',['id'=>$pr->id])}}" id="addtoCart" class=" flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
								Add to cart
							</a>
						</div>

						<div class="block2-txt-child2 flex-r p-t-3">
							<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
								<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
								<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
							</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>

		<!-- Load more -->
		{{-- <div class="flex-c-m flex-w w-full p-t-45">
			<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
				Load More
			</a>
		</div> --}}
		@include('pages.layouts.modal')
	</div>
</section>
@stop
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$(".btn-show").click(function(){
			// var id = $(this).attr("data-id");
			var url = $(this).attr("data-url");
			$.ajax({
				// url: "http://localhost/simi/public/getinfor&"+id,
				url: url,
				type: 'GET',
				dataType: 'json',
				success: function(response) {
					console.log(response);
					$("#name-pr").text(response.name);
					$("#img-pr1").attr("data-thumb","{{url('../')}}/uploads/product/"+response.image);
					$("#img-pr2").attr("src","{{url('../')}}/uploads/product/"+response.image);
					$("#img-pr3").attr("href","{{url('../')}}/uploads/product/"+response.image);
					$("#price-pr").text(response.price+" VND");
					var sale_price= response.price-(response.sale_price*response.price/100);
					$("#price-pr-sale").text(sale_price+" VND");
					$("#des-pr").text(response.description);
					

				},
				error: function () {
				}
			})
			
		})
	})
</script>
@stop