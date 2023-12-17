@extends('admin.layout.index')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div class="row">
	<div class="col-xs-12">

		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header row">
			<div class="col-md-10">
				Danh sách người dùng
			</div>			
		{{-- 	<div class="col-md-2">
				<a class="btn btn-success radius" href="add" style="margin: 10px">
					<i class="ace-icon fa fa-search-plus "> Thêm mới</i>
				</a>
			</div> --}}
			
		</div>
		<div>

			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Họ và tên</th>
						<th>Email</th>
						<th class="hidden-480">Quyền</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>	
					@foreach($user as $u)
					<tr>
						<td>{{++$i}}</td>
						<td> {{ $u->name }} </td>
						<td> {{ $u->email }} </td>
						<td> 
							@if($u->role==2 )
							<span class="label label-sm label-success">Admin</span>
							@else
							<span class="label label-sm label-danger">User</span>
							@endif
							
						</td>
						<td>
							<div class="hidden-sm hidden-xs action-buttons">
								{{-- //// --}}
								{{-- <a class="blue btn-show" data-url="{{route('admin.user.getinfor',$u->id)}}" data-toggle="modal" data-target="#myModal"><i class="ace-icon fa fa-eye bigger-130"></i></a> --}}
								{{-- //// --}}
								<a class="green" href="edit&{{$u->id}}">
									<i class="ace-icon fa fa-pencil bigger-130"></i>
								</a>
								<a class=" red" href="{{route('admin.user.delete',$u->id)}}"  onclick="return confirm('Bạn có chắc muốn xóa {{$u->name_user}}?')">
									<i class="fa fa-trash-o hover bigger-130"></i>
								</a>
								

							</div>
						</td>
					</tr>
					@endforeach						
				</tbody>
			</table>
			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title"><b>Thông tin chi tiết</b></h4>
						</div>
						<div class="modal-body row">

							<div class="profile-picture col-md-4" >
								<img id="avatar" class="editable img-responsive editable-click editable-empty"  alt="" >
							</div>
							<div class="col-md-offset-1 col-md-7">		
								<table class="table table-hover">
									<tr>
										<td><b>Họ và tên:</b></td>
										<td id="hoten"></td>
									</tr>
									<tr>
										<td><b>Ngày Sinh:</b></td>
										<td id="ngaysinh"></td>
									</tr>
									<tr>
										<td><b>Giới tính:</b></td>
										<td id="gioitinh"></td>
									</tr>
									<tr>
										<td><b>Địa Chỉ:</b></td>
										<td id="diachi"></td>
									</tr>
									<tr>
										<td><b>Email:</b></td>
										<td id="email"></td>
									</tr>
									<tr>
										<td><b>Số Điện thoại:</b></td>
										<td id="sdt"></td>
									</tr>
								</table>	
							</div>												
						</div>
						<div class="modal-footer">
							<a href="edit&{{$u->id}}">
								<button type="button" class="btn btn-success" >Chỉnh sửa</button>
							</a>
							<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		$(".btn-show").click(function(){
			// var id = $(this).attr("data-id");
			var url = $(this).attr("data-url");
			$.ajax({
				url: url,
				type: 'GET',
				dataType: 'json',
				success: function(response) {
					console.log(url);
					console.log(response);
					$("#hoten").text(response.name);
					$("#avatar").attr("src","../../../uploads/avt/"+response.avatar);
					$("#ngaysinh").text(response.birthday);
					$("#gioitinh").text(response.gender);
					$("#diachi").text(response.address);
					$("#email").text(response.email);
					$("#sdt").text(response.phone);
				},
				error: function () {
				}
			})
			
		})
	})
</script>
@endsection
@section('script')
<script type="text/javascript">
	jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [

					null, null,null,null,
					{ "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,

					//,
					//"sScrollY": "200px",
					//"bPaginate": false,

					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element

					//"iDisplayLength": 50


					select: {
						style: 'multi'
					}
				} );

				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});

				////

				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );




				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});



				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});

				

				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/


			})
		</script>
		@endsection
