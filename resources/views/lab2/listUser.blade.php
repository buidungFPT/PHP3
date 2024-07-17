<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>


<body>
               <h1 class="text-center mt-5">DANH SACH PRODUCT</h1>
               <form action="{{route('product.searchProduct')}}">
                    <input type="text" name="search" id="">
                    <button class="btn btn-success">tim</button>
            <a href="{{ route ('product.addUser')}}" class="btn btn-success" > Them moi </a>
    <div class="text-center">
    <table class="table">
    
        
        <thead >
            <tr>
                <td>ID</td>
                <td>Name </td>
                <td>category</td>
                <td>price</td>
                <td>view</td>
                <td>Hang dong </td>
                <td>
                
                </td>
            </tr>

        </thead>


        <tbody>

            @foreach($listUser as $value)
            <tr>
                <td> {{$value->id}} </td>
                <td> {{$value->name}} </td>
                <td> {{$value->name_dm}} </td>
                <td> {{$value->price}} </td>
                <td> {{$value->view}} </td>

                <td>
                    <a href="{{ route('product.deleteUser',$value->id)}}" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete?');">
                        XOA</a>

                    <a href="{{ route('product.editUser',$value->id)}}" class="btn btn-success"> SUA</a>
                </td>
         
            </tr>
            @endforeach
        </tbody>

    </table>
    </div>
    </form>

</body>


</html>