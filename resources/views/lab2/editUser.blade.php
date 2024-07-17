<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="mt-5 ">
<h1 class="text-center mt-5">TRANG THEM SAN PHAM </h1>
<form action="{{ route('product.updateUser',$product->id ) }}" method="post">
    @csrf
    
  <div class="form-group">
    <label for="">name</label>
    <input type="text" name="nameproduct" value="{{$product->name}}">
  </div>
  
  <div class="form-group">
    <label for="">price</label>
    <input type="text" name="priceproduct"  value="{{$product->price}}">
  </div>
  
  <div class="form-group">
    <label for="">category</label>
   <select name="categoryproduct" id="">
    @foreach ($category as $value )
            <option value="{{$value->id}}">{{$value->name_dm}}</option>
    @endforeach
   </select>
  </div>
  
  <div class="form-group">
    <label for="">view</label>
    <input type="tuoi" name="viewproduct"  value="{{$product->view}}" >
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>