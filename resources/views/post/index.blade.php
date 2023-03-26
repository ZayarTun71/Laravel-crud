<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>index</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h5>Post List</h5>
                <a href="{{ route('posts.create') }}">
                    <button class=".btn btn-primary btn-sm float-end mb-2"><i class="fa-solid fa-plus"></i></button>
                </a>

                {{-- @if (Session('successAlert'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <strong>{{ Session('successAlert') }}</strong>
                        <button class="close" data-dismiss="alert">&times;</button>
                    </div>
                @endif --}}

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $posts)
                            <tr>
                                <td>{{ $posts->id }}</td>
                                <td>{{ $posts->title }}</td>
                                <td>{{ $posts->content }}</td>
                                <td>

                                    <form action="{{url('posts/'.$posts ->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <a href="{{ route('posts.edit',$posts->id) }}">
                                            <button type="button" class="btn btn-success btn-sm"><i
                                                    class="fa-solid fa-pen-to-square"></i></button>
                                        </a>
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')
                                        "><i class="fa-solid fa-trash"></i></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{$posts->links()}} --}}
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
