@extends('pages.layouts.index')

@section('title')
<title>Check out</title>
@stop

@section('content')
<div class="col-xs-12">
					<div class="row">
						<div class="col-xs-12">
							<div class="clearfix">
								<div class="pull-left tableTools-container"></div>
							</div>
							<div style="text-align: center;"><h1>VUI LÒNG XÁC NHẬN THÔNG TIN ĐƠN HÀNG</h1><br></div>	
							<div style="font-size: 16px; font-weight: 600">
							<table>
								<tr>
									<td width="200px">Tên khách hàng</td>
									<td width="300px">: {{$TenKh}}</td>
									<td width="200px">Số điện thoại</td>
									<td>: {{$DtKh}}</td>
								</tr>		
								<tr>
									<td>Địa chỉ</td>
									<td>: {{$DcKh}}</td>
									<td>Chi chú</td>
									<td>: {{$GcKh}}</td>									
								</tr>																		
								<tr>
									<td colspan="2" style="padding-top: 10px; padding-bottom: 10px;">Danh sách sản phẩm đã đặt :</td>
								</tr>										
							</table>

							</div>
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">STT</th>
										<th scope="col">Tên sản phẩm</th>
										<th scope="col">Giá thành</th>
										<th scope="col">Số lượng</th>
										<th scope="col">Thành tiền</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($giohang as $gh)
									<tr>
										<th scope="row">{{$gh->id}}</th>
										<td>{{$gh->name}}</td>
										<td>{{number_format($gh->price,0)}}</td>
										<form method="post" action="{{asset('capnhat')}}/{{$gh->id}}" id="capnhat{{$gh->id}}">
										<input type="hidden" name="id" value="{{$gh->id}}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<td >{{$gh->quantity}}</td>
										<td>{{number_format($gh->price * $gh->quantity,0)}}</td>
										</form>
									</tr>
									@endforeach
									<tr>
										<th scope="row" colspan="4">Số tiền cần thanh toán</th>
										<td><a style="font-size:20px; color: red; font-weight: 600">{{number_format($tongtien,0)}}</a></td>
										</form>
									</tr>
								</tbody>
							</table>
							<form method="post" action="{{asset('xacnhan')}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="TenKh" value="{{$TenKh}}">
								<input type="hidden" name="DtKh" value="{{$DtKh}}">
								<input type="hidden" name="DcKh" value="{{$DcKh}}">
								<input type="hidden" name="GcKh" value="{{$GcKh}}">
								<input type="hidden" name="TongTien" value="{{$tongtien}}">
							<div class="text-center">
							<button type="submit" class="btn btn-primary btn-lg" style="padding: 20px;">XÁC NHẬN ĐƠN HÀNG</button>	
							</div>
							</form>
						</div>
					</div>
				</div>

@stop