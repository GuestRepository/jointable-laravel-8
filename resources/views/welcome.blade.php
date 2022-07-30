

 <br>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-danger">Join table</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Category name</th>
                            <th>Product Description</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $pro)
                        <tr>
                            <td> {{$pro->name}} </td>
                            <td>{{$pro->description}}</td>
                            <td> {{$pro->image}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>