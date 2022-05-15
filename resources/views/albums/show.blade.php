
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
            .btn
            {
                margin:15px 15px;
            }
        
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
    </style>
</head>
<body>
      
     

     <a href='/' class='btn btn-danger m-r-1em'>Go Back</a>
     <a href='photos/create/{{ $album->id }}' class='btn btn-primary m-r-1em'>Upload Photo to Album</a>
     <hr>

     <div class="container mt-3">

            @foreach($album->photos as $photo)
           
            <div class="card" style="width:300px">
                <a href="/photos/{{$photo->id}}">
                <img class="card-img-top" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"  alt="Card image" style="width:100%">
                </a>
                <h5>{{$photo->title}}</h5>
                <button> <a href='{{ url('/photos/'.$photo->id) }}' class='btn btn-danger m-r-1em'>Delete</a></button> 
            </div>
            @endforeach
            
            
        </div>
    
</body>
</html>

