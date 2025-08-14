{{-- <h1>User Details</h1>

@foreach ( $data as  $id=>$user )
<h3>ID : {{$user->id}}</h3>
<h3>Name : {{$user->name}}</h3>
<h3>Age : {{$user->age}}</h3>
<h3>Mobile : {{$user->phone}}</h3>
<h3>City : {{$user->city}}</h3>


@endforeach --}}
{{--  below code using chatgpt  --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <style>
         body{
    /* background: linear-gradient(135deg, #2575fc 0%, #6a11cb 100%); */
    background: #6a11cb;
    color: white;
 }
 .custom-card {
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: white;
 }
</style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">User Details</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($data as $user)
            <div class="col">
                <div class="card h-100 shadow-sm border-0 custom-card">
                    <div class="card-body">
                        <h5 class="card-title">ID: {{$user->id}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Name: {{$user->name}}</h6>
                        <p class="card-text mb-1"><strong>Age:</strong> {{$user->age}}</p>
                        <p class="card-text mb-1"><strong>Mobile:</strong> {{$user->phone}}</p>
                        <p class="card-text mb-1"><strong>City:</strong> {{$user->city}}</p>
                    </div>
            
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoY9+H0e+1RW5r8a4vL0KqTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <style>
        /* Background gradient same as Update User page */
        body {
            background: radial-gradient(circle at top left, #e0eafc, #cfdef3);
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
        }

        /* Card style similar to Update User */
        .custom-card {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            border-radius: 20px;
            padding: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 280px;
            border: none;
        }
        .custom-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 12px 30px rgba(0, 0, 0, 0.15);
        }

        /* Card text styles */
        .card-title {
            font-weight: bold;
            font-size: 1.4rem;
            color: #fff;
        }
        .card-subtitle {
            color: rgba(255, 255, 255, 0.85) !important;
            font-size: 1rem;
        }
        .card-text strong {
            color: #ffeb3b;
        }

        /* Increase card width */
        .col {
            flex: 0 0 auto;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4 fw-bold text-dark">User Details</h1>
        <div class="row justify-content-center g-4">
            @foreach ($data as $user)
            <div class="col">
                <div class="card shadow-sm custom-card">
                    <div class="card-body">
                        <h5 class="card-title"> <strong> ID: </strong>{{$user->id}}</h5>
          
                        <p class="card-text mb-2"><strong>Name:</strong> {{$user->name}}</p>

                        <p class="card-text mb-2"><strong>Age:</strong> {{$user->age}}</p>
                        <p class="card-text mb-2"><strong>Mobile:</strong> {{$user->phone}}</p>
                        <p class="card-text mb-0"><strong>City:</strong> {{$user->city}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoY9+H0e+1RW5r8a4vL0KqTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>
</body>
</html>
