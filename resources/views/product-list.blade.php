<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD des produits</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<link rel="stylesheet" href="/css/product-list.css">
</head>
<body>

<div class="container" style="margin-top:20px">
    <div class ="row">
         <div>
            <h2 >product list</h2>
            <div style="margin-right:5px ;float:right">
                <a href="{{url('add-products')}}" class="fa fa-plus" style="text-decoration:none;margin-top:600px:margin-left:20px" >Add a Product</a>
            </div>
            <table class="tbl">
                <thead><tr>


                   <th style="padding:20px">libelle</th>
                   <th style="padding:20px">Description</th>
                   <th style="padding:20px">qnt</th>
                   <th style="padding:20px">price</th>
                   <th style="padding:2px">Action</th>
                </tr></thead>
              <tbody>

                @foreach($data as $Ad)
                <tr>


                    <td style="padding:20px">{{$Ad->libelle}}</td>
                    <td style="padding:20px">{{$Ad->description}}</td>
                    <td style="padding:20px"> {{$Ad->qnt}} </td>
                    <td style="padding:20px"> {{$Ad->price}} </td>
                    <td style="padding:20px"><a href ="{{url('edit-products/'.$Ad->id)}}" class="fa fa-edit" style="text-decoration:none"></a>
                    <td><a href ="{{url('delet-products')}}" class="fa fa-trash" style="text-decoration:none"></a></td>
               </tr>

              @endforeach
              </tbody>
            </table>
        <div>
    </div>
</div>

</body>
</html>
