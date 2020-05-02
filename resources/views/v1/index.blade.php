<!-- index.blade.php -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Katalog Barang</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<br />
@if (\Session::has('success'))
<div class="alert alert-success">
<p>{{ \Session::get('success') }}</p>
</div><br />
@endif
<form method="GET" action="{{ action('ProductController@cari') }}">
<input type="text" class="form-control" name="keyword" placeholder="Masukkan Nama Barang">
<button type ="submit" class="btn btn-secondary">Cari</button>
</form>
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Nama Barang</th>
<th>Harga</th>
<th> Jumlah Barang</th>
<th colspan="3" align="center">Action</th>
</tr>
</thead>
<tbody>

@foreach($products as $product)
<tr>
<td>{{$product['idProduct']}}</td>
<td>{{$product['nameProduct']}}</td>
<td align="left">{{number_format($product['price'],0)}}</td>
<td align="center">{{$product['stok']}}</td>
<td><a href="{{action('ProductController@show', $product['idProduct'])}}"
class="btn btn-success">Detail</a></td>
<td><a href="{{action('ProductController@edit', $product['idProduct'])}}"
class="btn btn-warning">Ubah</a></td>
<td>
<form action="{{action('ProductController@destroy',
$product['idProduct'])}}" method="post">
{{csrf_field()}}
<input name="_method" type="hidden" value="DELETE">
<button class="btn btn-danger" type="submit">Hapus</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
{{ $products->Links() }}
</div>
<div align="center">
<a href="{{action('ProductController@create')}}"
class="btn btn-primary">Tambah Products Baru</a>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>