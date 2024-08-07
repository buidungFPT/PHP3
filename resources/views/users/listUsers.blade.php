<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <a href="{{ route ('users.addUsers')}}"> Them moi  </a>
      
    <h3>Danh sach sinh vien </h3>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name </td>
                <td>Email</td>
                <td>tuoi</td>
                <td>Phong ban</td>
                <td>Hang dong </td>
            </tr>
        </thead>
        <tbody>
             
           @foreach($listUsers as $value)
            <tr>
                <td> {{$value->id}} </td>
                <td> {{$value->name}} </td>
                <td> {{$value->email}} </td>
                <td> {{$value->tuoi}} </td>
                <td> {{$value->ten_donvi}} </td>
                <td >
                    <a href="{{ route('users.deleteUser',$value->id)}}" class="btn btn-danger"  
                    onclick="return confirm('Are you sure you want to delete?');" >
                    XOA</a>

                <a href="{{ route('users.editUsers',$value->id)}}" class="btn btn-success" > SUA</a>
                </td>
               
            </tr>
             @endforeach
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>