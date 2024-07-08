<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Daily </h1>
                <div class="row">
                        <div class="col-md-12">
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                            {{$error}}
                            </div>
                            @endforeach
                            <form method="post" action="saveTask">
                                {{csrf_field()}}
                                <input type="text" class="form-control" name="task" placeholder="Enter your task here">
                            </br>
                            <input type="submit" class="btn btn-primary" value="SAVE">
                            <input type="button" class="btn btn-warning" value="CLEAR">
                    

                            </form>
                        <br>
                        <br>
                            <table class="table table-dark table-striped">
                                <th>ID</th>
                                <th>Task</th>
                                <th>Completed</th>
                                <tr>
                                    <td>1</td>
                                    <td>I have to learn laravel today</td>
                                    <td>Not yet</td>
                                </tr>
                              </table>
                        
                        
                        </div>
                </div>
        </div>
    </div>
</body>
</html>