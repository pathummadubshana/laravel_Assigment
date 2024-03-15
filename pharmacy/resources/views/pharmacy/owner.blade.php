<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex p-2 justify-content-center">

        <form style="padding-top: 10%" method="POST" action="{{ url('cutermer') }}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Full name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Full name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Mobile</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="mobile" placeholder="Mobile Number">
            </div>


            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>


        </form>
        <form style="padding-top: 10%" method="POST" action="{{ url('product') }}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Product name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="Pname" placeholder="product name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Product code</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="code" placeholder="code">
            </div>


            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>


        </form>


    </div>

</body>

</html>
