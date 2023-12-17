<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên sản phẩm</th>
				<th>Giá</th>
				<th>Số lượng</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cart->item as $cc)
			<tr>
				<td>1</td>
				<td>{{$cc['name']}}</td>
				<td>{{$cc['price']}}</td>
				<td>{{$cc['quantity']}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>