<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container" style="margin-top:20px">
    <div class="row">
        <div class="col-md-12">
        <h2>Add product</h2>
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
     {{session::get('success')}}
     <p style="color:green">product added succeffully</p>j
</div>
@endif



        <form method="post" action ="{{url('save-product')}}">
            @csrf
            <div class="md-3">

              <label class="form-lebel">product-name</label>
              <input type="text" class="form-control" name="libelle" placeholder="Entrer le nom du produit" value="{{old('libelle')}}"><br>
              @error('libelle')
              <div class="alert alert-danger" style="color:red">
                {{$message}}
              </div>
              @enderror


            </div>
            <div class="md-3">
              <label class="form-lebel">Description</label>
              <input type="text" class="form-control" name="description" placeholder="Decrire le produit"><br>
              @error('libelle')
              <div class="alert alert-danger" style="color:red">
                {{$message}}
              </div>
              @enderror

             <div class="md-3">
              <label class="form-lebel">Quantite in stock</label>
              <input type="text" class="form-control" name="qnt" placeholder="Entrer la quantite"><br>
              @error('libelle')
              <div class="alert alert-danger" style="color:red">
                {{$message}}
              </div>
              @enderror

            </div>
            <div class="md-3">
              <label class="form-lebel">price</label>
              <input type="text" class="form-control" name="price" placeholder="Entrer prix du produit"><br>
              @error('libelle')
              <div class="alert alert-danger" style="color:red">
                {{$message}}
              </div>
              @enderror
<!--
              <div class="md-3">
              <label class="form-lebel">image</label>
              <input type="file" class="form-control" name="image" placeholder="selectioner une image"><br> -->


           <button type="submit" class="btn btn-primary">submit</button>
           <a href="{{url('list')}}" class="btn btn-danger">Back</a>
        </form>

        </div>
    </div>
  </div>
</body>
</html>
