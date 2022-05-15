@include('Header.Navbar')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Albums</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      .container
      {
          /* width:90%; */
          margin:30px auto;
          text-align:center;
      }
      .card
      {
          float: left;
          margin : 5px
      }

  </style>
</head>
<body>

        <div class="container mt-3">
            <h2>Albums</h2>

            @foreach($albums as $album)
            
                <div class="card" style="width:250px">
                    <a href="/albums/{{$album->id}}">
                    <img class="card-img-top" src="/storage/album_covers/{{$album->cover_image}}"  alt="Card image" style="width:100%">
                    </a>
                    <h5>{{$album->name}}</h5>  
                </div>
            
            @endforeach
            
            
        </div>

      

</body>
</html>