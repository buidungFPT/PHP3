<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<form action="{{ route('users.updateUsers',$user->id)}}" method="post">
    @csrf
    
  <div class="form-group">
    <label for="">ten</label>
    <input type="text" name="nameUsers" value="{{$user->name}}">
  </div>
  
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="emailUsers" value="{{$user->email}}">
  </div>
  
  <div class="form-group">
    <label for="">phong ban</label>
   <select name="phongbanUser" id="">
    @foreach ($phongBan as $value )
            <option value="{{$value->id}}">{{$value->ten_donvi}}</option>
    @endforeach
   </select>
  </div>
  
  <div class="form-group">
    <label for="">tuoi</label>
    <input type="tuoi" name="tuoiUsers" value="{{$user->tuoi}}">
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>