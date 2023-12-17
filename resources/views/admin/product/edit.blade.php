@extends('admin.layout.index')

@section('content')
<div class="page-header">
	<h1>
		Sửa
	</h1>
	
	<div class="">
		<a class="white" href="danhsach">
			<i class="ace-icon fa fa-undo bigger-110">  &nbsp;Trở về danh sách &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;</i>
		</a>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			{{ csrf_field() }}		
			<div class="space-4"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tên Sản Phẩm </label>
				
				<div class="col-sm-9">
					<input type="text" id="name" name="name"  value=" {{$product->name}}" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="images"> Ảnh </label>
				<div  class="col-sm-1">
					<img src="../../../uploads/product/{{ $product->image}}" width="100%" style="border: 1px solid" alt="">
				</div>
				<div class="col-sm-3">
					
					<input type="file" id="imgInp" name="images" class="col-xs-10 col-sm-5" />
				</div>
				<div  class="col-sm-1">
					<img id='img-upload'  width="100%" style="border: 1px solid" alt="">
				</div>
			</div>

			<div class="space-4"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mô tả </label>

				<div class="col-sm-9">
					<textarea type="text" id="description" name="description" class="col-xs-10 col-sm-5" >{{$product->description}}</textarea>
				</div>
			</div>
			<div class="space-4"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="category"> Danh mục sản phẩm </label>
				<div class="col-sm-9">
					<select class="col-xs-10 col-sm-5 " name="category" >
						@foreach($category as $cat)
						<option value="{{$cat->id}}"> {{$cat->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Giá </label>

				<div class="col-sm-9">
					<input type="text" id="price" name="price"  value=" {{$product->price}} " class="col-xs-10 col-sm-5" />
				</div>
			</div>	
			
			<div class="space-4"></div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Giảm Giá </label>

				<div class="col-sm-9">
					<input type="text" id="sale_of" name="sale_of" value=" {{$product->sale_price}}" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="space-4"></div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="status" > Trạng thái </label>

				<div class="col-sm-9">
					<label>
						<input name="status" id="status" class="ace ace-switch ace-switch-6" type="checkbox"  value="1" @if($product->status==1)
						checked="true" 						
						@endif />
						<span class="lbl" for="status"></span>
					</label>
				</div>
			</div>



			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit" name="addNew">
						<i class="ace-icon fa fa-check bigger-110"></i>
						Submit
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="reset">
						<i class="ace-icon fa fa-undo bigger-110"></i>
						Reset
					</button>

					&nbsp; &nbsp; &nbsp;
					<button class="btn" type="button">
						<i class="ace-icon fa fa-undo bigger-110"></i>

						<a href="list">Trở về danh sách</a>
					</button>
				</div>
			</div>

			
		</form>
	</div><!-- /.col -->
</div>
@endsection