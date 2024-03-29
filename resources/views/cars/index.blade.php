<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <h1>Car List</h1>
    <form action="/add">
        @csrf
        <div class="field">
            <div class="control">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </div>
    </form>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Company</th>
            <th>Model</th>
            <th>Price</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($cars as $car)
            <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->car_company}}</td>
                <td>{{$car->model}}</td>
                <td>{{$car->price}}</td>
                <td><a href="{{action('CarsController@edit', $car->id)}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('CarsController@destroy', $car->id)}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$cars->links()}}
</div>
</body>
</html>
