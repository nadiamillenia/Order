
<!-- create.blade.php -->  
 
<!DOCTYPE html>  <html>  
    <head>  
        <meta charset="utf-8">  
        <title>Order Products</title>  
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>  
    <body>  
    <div class="container">  <h2>Penambahan Produk</h2><br/>  
    
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div><br />
    @endif
    @if (\Session::has('success'))
    <div class="alert alert-success">
    <p>{{ \Session::get('success') }}</p>
    </div><br />
    @endif

    <form method="post" action="{{url('v1')}}">
        {{csrf_field()}}
    <div class="row">  
    <div class="col-md-4"></div>  
    <div class="form-group col-md-4">  
    <label for="nameProduct">Nama Barang:</label> 
    <input type="text" class="form-control" name="nameProduct">  
    </div>  
    </div>  
    <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
    <label for="stok">Jumlah Barang:</label>
    <input type="text" class="form-control" name="stok">
    </div>
    </div>
    </div>
    <div class="row">  
    <div class="col-md-4"></div>  
    <div class="form-group col-md-4">  
    <label for="price">Harga:</label>  
    <input type="text" class="form-control" name="price">  
    </div>  
    </div>  
    </div>  
    <div class="row">  
    <div class="col-md-4"></div>  <div class="form-group col-md-4">  
    <button  type="submit"  class="btn  btn-success"  style="margin-  left:38px">Tambahkan Produk</button>  
    </div>  
    </div>  
     
    </form>  
    </div>  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>  
    </html>