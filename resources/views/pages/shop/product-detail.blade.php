@extends('pages.layouts.index')

@section('title')
<title>Product Details</title>
@stop

@section('content')


<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-7 p-b-30">
				<div class="p-l-25 p-r-30 p-lr-0-lg">
					<div class="wrap-slick3 flex-sb flex-w">
						<div class="wrap-slick3-dots"></div>
						<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

						<div class="slick3 gallery-lb">
							<div class="item-slick3" data-thumb="{{url('../')}}/uploads/product/{{$pr->image}}">
								<div class="wrap-pic-w pos-relative">
									<img src="{{url('../')}}/uploads/product/{{$pr->image}}" alt="IMG-PRODUCT">

									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{url('../')}}/uploads/product/{{$pr->image}}">
										<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-5 p-b-30">
				<div class="p-r-50 p-t-5 p-lr-0-lg">
					<h4 class="mtext-105 cl2 js-name-detail p-b-14">
						{{$pr->name}}
					</h4>

					<span class="mtext-106 cl2">
						{{$pr->price}}
					</span>

					<p class="stext-102 cl3 p-t-23">
						{{$pr->description}}
					</p>

						<div class="flex-w flex-r-m p-b-10">
							<div class="size-204 flex-w flex-m respon6-next">
								<div class="wrap-num-product flex-w m-r-20 m-tb-10">
									<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
										<i class="fs-16 zmdi zmdi-minus"></i>
									</div>

									<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

									<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
										<i class="fs-16 zmdi zmdi-plus"></i>
									</div>
								</div>

								<a href="{{route('addCart',['id'=>$pr->id])}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
									Add to cart
								</a >
							</div>
						</div>	
					</div>

					<!--  -->
					{{-- <div class="flex-w flex-m p-l-100 p-t-40 respon7">
						
						<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
							<i class="fa fa-google-plus"></i>
						</a>
					</div> --}}
				</div>
			</div>
		</div>

	</div>

	<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
		<span class="stext-107 cl6 p-lr-25">
			Categories: {{$pr->category->name}}
		</span>
	</div>
</section>


<!-- Related Products -->
<section class="sec-relate-product bg0 p-t-45 p-b-105">
	<div class="container">
		<div class="p-b-45">
			<h3 class="ltext-106 cl5 txt-center">
				Related Products
			</h3>
		</div>

		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">
				@foreach($rltv as $pr)
				<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="{{url('../')}}/uploads/product/{{$pr->image}}" alt="IMG-PRODUCT">

							{{-- <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" id="btn-show" data-id="{{$pr->id}}" >
								Quick View
							</a> --}}
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="{{route('product_detail',$pr->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									{{$pr->name}}
								</a>

								<span class="stext-105 cl3">
									{{$pr->price}} VND
								</span>
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
		</div>
	</div>
</section>
@stop
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$("#btn-show").click(function(){
			arlert('djhfkdsf')
			var id = $(this).attr("data-id");
			$.ajax({
				url: "http://localhost/simi/public/getinfor&"+id,
				type: 'GET',
				dataType: 'json',
				success: function(response) {
					$("#name-pr").text(response.name);
					$("#img-pr1").attr("data-thumb","{{url('../')}}/uploads/product/"+response.image);
					$("#img-pr2").attr("src","{{url('../')}}/uploads/product/"+response.image);
					$("#img-pr3").attr("href","{{url('../')}}/uploads/product/"+response.image);
					$("#price-pr").text(response.price+"VND");
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