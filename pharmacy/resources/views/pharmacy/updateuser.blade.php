<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body> <form style="padding-top: 10%" method="POST" action="{{ url('pharmacy.updateuser',$custermer->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleFormControlInput1">Product name</label>
        <input type="text" class="form-control"  name="Pname" value="{{ $custermer->name }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">email</label>
        <input type="text" class="form-control" name="code"  value="{{ $custermer->email}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">mobile</label>
        <input type="text" class="form-control" name="code"  value="{{ $custermer->mobile}}">
    </div>


    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">update</button>
        </div>


</form>

</body>
</html>
