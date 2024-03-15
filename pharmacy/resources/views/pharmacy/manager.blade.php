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
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">Edit</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($details as $data)

            <tr>
                <th scope="row">{{ $data->id }}</th>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->mobile }}</td>

                <td><a href="updateuser">
                    <button>
                        <i class="fa-solid fa-pen-to-square"></i></button>

                </a></td>
                <td>


                    <form  action="{{ url('cutermer/'.$data->id) }}" method="POST">
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
