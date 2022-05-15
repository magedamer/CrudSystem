<!DOCTYPE html>
<html lang="en">
<head>
  <title>Photos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

           <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0)">Photo show</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            
                            <li class="nav-item">
                            <a class="nav-link" href="/albums/create">Create Album</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

        <div class="container">
            <h2>Upload Photo</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ url('/photos/store') }}" method="post" enctype="multipart/form-data">
                 @csrf   
                 
                <input type="hidden" name="album_id" value="{{ $album_id }}">

                <div class="form-group">
                    <input type="text" name="title"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Photo Name">
                </div>

                 <br>
                <div class="mb-3">
                       <textarea name="description"  class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Photo description"></textarea>
                </div>

                <div>
                    <input name="photo" class="form-control form-control-lg" id="formFileLg" type="file">
                </div>
                
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>

</body>
</html>