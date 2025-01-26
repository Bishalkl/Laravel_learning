<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>All Students Data</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>All Students List</h1>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                    </tr>
                     @foreach ($data as $id => $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->age}}</td>
                            <td>{{$student->city}}</td>
                            <td><a href="{{route('view.students', $student->id)}}" class="btn btn-primary btn-sm">View</a></td>
                        </tr>
                     @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>
