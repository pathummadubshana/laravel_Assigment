<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="d-flex p-3">
        <table class="table table-bordered table-ligh">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product name</th>
                    <th scope="col">code</th>
                    <th scope="col">Edit</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($display as $product)

            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->code }}</td>

                <td><a href="updateproduct">
                    <button>
                        <i class="fa-solid fa-pen-to-square"></i></button>

                </a></td>
                <td>


                    <form  action="{{ url('product/'.$product->id) }}" method="POST">
                    @csrf
                    @method("DELETE")

                    <button ><i class="fa-regular fa-trash-can"></i></button>

                </form>
            </td>



            </tr>

            @endforeach
        </tbody>

        </table>
        </div>
</body>
</html>
