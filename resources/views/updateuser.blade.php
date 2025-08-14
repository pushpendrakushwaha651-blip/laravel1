
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <style>
        /* Card hover animation */
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
        }

        /* Background gradient */
        body {
            background: linear-gradient(120deg, #ffecd2, #fcb69f);
            min-height: 100vh;
        }
    </style>
</head>
<body>


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card card-hover shadow-lg">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0">Update User Data</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.user',$data->id)}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="form-lable">Name</label>
                                <input type="text" value="{{$data->name}}" class="form-control" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="form-lable">Age</label>
                                <input type="text" value="{{$data->age}}" class="form-control" name="userage">
                            </div>
                            <div class="mb-3">
                                <label for="form-lable">Email</label>
                                <input type="text" value="{{$data->email}}" class="form-control" name="useremail">
                            </div>
                            <div class="mb-3">
                                <label for="form-lable">Address </label>
                                <input type="text" value="{{$data->address}}" class="form-control" name="useraddress">
                            </div>
                            <div class="mb-3">
                                <label for="form-lable">City</label>
                                <input type="text" value="{{$data->city}}" class="form-control" name="usercity">
                            </div>
                            <div class="mb-3">
                                <label for="form-lable">Mobile No </label>
                                <input type="text" value="{{$data->phone}}" class="form-control" name="userphone">
                            </div>

                            <button type="submit" class="btn btn-success w-100">Update</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <style>
        /* Background gradient */
        body {
            background: radial-gradient(circle at top left, #e0eafc, #cfdef3);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Card style */
        .card-hover {
            background: #ffffff;
            border: none;
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0px 12px 30px rgba(0, 0, 0, 0.15);
        }

        /* Header style */
        .card-header {
            background: linear-gradient(90deg, #667eea, #764ba2);
            color: #fff;
            font-weight: bold;
            letter-spacing: 1px;
            text-align: center;
            padding: 1.2rem;
        }

        /* Input fields */
        .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #764ba2;
            box-shadow: 0 0 8px rgba(118, 75, 162, 0.3);
        }

        /* Labels */
        label {
            font-weight: 600;
            margin-bottom: 0.3rem;
            color: #444;
        }

        /* Button style */
        .btn-custom {
            background: linear-gradient(90deg, #43cea2, #185a9d);
            color: white;
            border: none;
            padding: 0.7rem;
            font-weight: 600;
            border-radius: 12px;
            transition: background 0.3s ease;
        }
        .btn-custom:hover {
            background: linear-gradient(90deg, #185a9d, #43cea2);
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card card-hover shadow-lg">
                    <div class="card-header">
                        <h4 class="mb-0">Update User Data</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{route('update.user',$data->id)}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" value="{{$data->name}}" class="form-control" name="username">
                            </div>
                            <div class="mb-3">
                                <label>Age</label>
                                <input type="text" value="{{$data->age}}" class="form-control" name="userage">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" value="{{$data->email}}" class="form-control" name="useremail">
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" value="{{$data->address}}" class="form-control" name="useraddress">
                            </div>
                            <div class="mb-3">
                                <label>City</label>
                                <input type="text" value="{{$data->city}}" class="form-control" name="usercity">
                            </div>
                            <div class="mb-3">
                                <label>Mobile No</label>
                                <input type="text" value="{{$data->phone}}" class="form-control" name="userphone">
                            </div>

                            <button type="submit" class="btn btn-custom w-100">Update</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>

