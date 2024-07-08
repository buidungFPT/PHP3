<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
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
                <td>
                    <a href="{{ route('users.deleteUser',$value->id)}}"   
                    onclick="return confirm('Are you sure you want to delete?');" >
                    XOA</a>
                </td>
               
            </tr>
             @endforeach
        </tbody>
    </table>
</body>

</html>