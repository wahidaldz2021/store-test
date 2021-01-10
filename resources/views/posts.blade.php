<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                    <div class="card-header">All Posts</div>
                    <div class="card-body">
                        @if(Session::has('post_deleted'))
                            <div class="alert alert-success">
                                {{ Session::get('post_deleted') }}
                            </div>
                        @endif
                    </div>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Edit</th>
                                <th scope="col">delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $key => $post)
                                <tr>

                                <td scope="row">{{ $post -> id}}</td>
                                <td>{{ $post -> title}}</td>
                                <td>{{ $post -> body}}</td>
                                <td><a href="single-post/{{ $post -> id}}" class="btn btn-success">Edit</a></td>
                                <td><a href="delete-post/{{ $post -> id}}" class="btn btn-danger">delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
</div>
</body>
</html>
