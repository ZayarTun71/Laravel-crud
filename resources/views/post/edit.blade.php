<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Create</title>
    <style>
        * {
            margin-top: 10px;
        }

        button {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h5>Edit Post</h5>
                <form action="{{route('posts.update',$post->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title"
                            class="form-control @error('title') is-invalid @enderror"
                            value="{{ $post->title ?? old('title') }}" placeholder="Enter...">
                        @error('title')
                            <div class="" invalid-feedback>{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea type="text" name="content" id="content" class="form-control @error('content') is-invalid @enderror"
                            placeholder="Enter...">{{ $post->content ?? old('content') }}</textarea>
                        @error('content')
                            <div class="" invalid-feedback>{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Edit</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
