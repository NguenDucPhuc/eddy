@extends('pages.layouts.index')

@section('title')
<title>Shoping Cart</title>
@stop

@section('content')
<!-- breadcrumb -->
<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
		<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
			Home
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>

		<a href="product.html" class="stext-109 cl8 hov-cl1 trans-04">
			Shoping Cart
		</a>

	</div>
</div>


<form class="bg0 p-t-75 p-b-85">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
				<div class="m-l-25 m-r--38 m-lr-0-xl">
					
					<div class="wrap-table-shopping-cart">
						<table class="table-shopping-cart">
							<tr class="table_head">
								<th class="column-1">Product</th>
								<th class="column-2"></th>
								<th class="column-3">Price</th>
								<th class="column-4">Quantity</th>
								<th class="column-5">Total</th>
							</tr>
							@foreach($cart->item as $cc)
							
							<tr class="table_row">
								<form action="{{route('update')}}" method="post">
									@csrf
								<td class="column-1">
									<a href="{{route('delete',$cc['id'])}}">
										<div class="how-itemcart1">
											<img src="{{url('../')}}/uploads/product/{{$cc['image']}}" alt="IMG">
										</div>
									</a>
								</td>
								<td class="column-2">{{$cc['name']}}</td>
								<td class="column-3">{{number_format($cc['price'],0)}}VND</td>
								<td class="column-4">
									<div class="wrap-num-product flex-w m-l-auto m-r-0">
										
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="quantity" value="{{$cc['quantity']}}">
											
											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
											<input type="hidden" name="id" value="{{$cc['id']}}">
										
									</div>

								</td>
								<td class="column-5">{{number_format($cc['price'] * $cc['quantity'],0)}}</td>
								<td>
									{{-- <button type="submit" class="btn btn-warning">
										Update
									</button>
 --}}								</td>
								</form>
							</tr>

							
							@endforeach
							
						</table>
					</div>

					<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
						<div class="flex-w flex-m m-r-20 m-tb-5">
							

							<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
								<a href="{{route('deleteAll')}}">
									Clear Cart
								</a>
							</div>
						</div>

						<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
							<a href="{{route('product')}}">Continuous Shopping</a>
						</div>
						
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
				<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
					<h4 class="mtext-109 cl2 p-b-30">
						Cart Totals
					</h4>

					<div class="flex-w flex-t bor12 p-b-13">
						<div class="size-208">
							<span class="stext-110 cl2">
								Subtotal:
							</span>
						</div>

						<div class="size-209">
							<span class="mtext-110 cl2"> 
								{{number_format($cart->total_price,0)}} VND
							</span>
						</div>
					</div>
					<div class="flex-w flex-t bor12 p-b-13">
						<div class="size-208">
							<span class="stext-110 cl2">
								Shipping:
							</span>
						</div>

						<div class="size-209">
							<span class="mtext-110 cl2"> 
								30,000 VND
							</span>
						</div>
					</div>

					<div class="flex-w flex-t p-t-27 p-b-33">
						<div class="size-208">
							<span class="mtext-101 cl2">
								Total:
							</span>
						</div>

						<div class="size-209 p-t-1">
							<span class="mtext-110 cl2">
								{{number_format($cart->total_price + 30000,0)}} VND
							</span>
						</div>
					</div>
					<div>
						<form method="post" action="{{route('checkout')}}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="form-group">
								<label for="usr">Tên khách hàng:</label>
								<input type="text" class="form-control" id="usr" name="name">
							</div>
							<div class="form-group">
								<label for="em">Email:</label>
								<input type="text" class="form-control" id="em" name="email">
							</div>
							<div class="form-group">
								<label for="number">Số điện thoại:</label>
								<input type="text" class="form-control" id="number" name="phone">
							</div>
							<div class="form-group">
								<label for="ad">Địa chỉ giao hàng:</label>
								<textarea class="form-control" rows="2" id="ad" name="address"></textarea>
							</div>
							<div class="form-group">
								<label for="comment">Ghi chú:</label>
								<textarea class="form-control" rows="5" id="comment" name="note"></textarea>
							</div>

							<button type="submit" class="btn btn-primary btn-lg pull-right" style="margin-left: 10px;width: 100%; padding: 15px">Đặt hàng</button>
						</form>
					</div>

					<div class="flex-c-m stext-101 p-lr-15 trans-04 pointer">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</form>



@stop