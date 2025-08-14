{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Animated background */
        body {
            margin: 0;
            min-height: 100vh;
            animation: bgChange 6s infinite alternate;
        }
        @keyframes bgChange {
            0% { background-color: #ffafbd; } /* light pink */
            100% { background-color: #2193b0; } /* teal-blue */
        }

        /* Table styling */
        .table-custom {
            border-radius: 10px;
            overflow: hidden;
        }
        .table-custom thead {
            background-color: #6a11cb; /* purple */
            color: #fff;
        }
        .table-custom tbody tr:nth-child(even) {
            background-color: #f2f2f2; /* light gray */
        }
        .table-custom tbody tr:nth-child(odd) {
            background-color: #eaf4ff; /* light blue */
        }
        .table-custom tbody tr:hover {
            background-color: #ffeaa7; /* soft yellow */
            transition: background-color 0.3s ease;
        }

        /* Button custom colors */
        .btn-add {
            background-color: #ff7e5f;
            border: none;
            color: white;
        }
        .btn-add:hover {
            background-color: #eb6750;
        }
        .btn-view {
            background-color: #2193b0;
            color: white;
        }
        .btn-view:hover {
            background-color: #197a90;
        }
        .btn-delete {
            background-color: #ff4b5c;
            color: white;
        }
        .btn-delete:hover {
            background-color: #e04352;
        }
        .btn-update {
            background-color: #f9d423;
            color: black;
        }
        .btn-update:hover {
            background-color: #e0be1f;
        }
    </style>
</head>
<body>

<div class="container py-4">
    <div class="row mb-3 align-items-center">
        <div class="col">
            <h1 class="text-white">All Users List</h1>
        </div>
        <div class="col text-end">
            <a href="/newuser" class="btn btn-add btn-sm">➕ Add New</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-custom table-bordered align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>City</th>
                    <th>View</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->city }}</td>
                        <td>
                            <a href="{{ route('view.user', $user->id) }}" class="btn btn-view btn-sm">View</a>
                        </td>
                        <td>
                            <a href="{{ route('delete.user', $user->id) }}" class="btn btn-delete btn-sm">Delete</a>
                        </td>
                        <td>
                            <a href="{{ route('update.page', $user->id) }}" class="btn btn-update btn-sm">Update</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html> --}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        nav .w-5{
            display: none;

        }
    </style>

    <style>
        /* Background gradient same as Update User Data */
        body {
            background: radial-gradient(circle at top left, #e0eafc, #cfdef3);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Card container */
        .card-custom {
            background: #ffffff;
            border-radius: 20px;
            border: none;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0px 12px 35px rgba(0, 0, 0, 0.2);
        }

        /* Card header style */
        .card-header {
            background: linear-gradient(90deg, #667eea, #764ba2);
            color: white;
            font-weight: bold;
            font-size: 1.4rem;
            padding: 1rem 1.5rem;
            border-bottom: none;
        }

        /* Table styling */
        .table-custom thead {
            background: linear-gradient(90deg, #43cea2, #185a9d);
            color: white;
        }
        .table-custom tbody tr:nth-child(even) {
            background-color: #f8faff;
        }
        .table-custom tbody tr:nth-child(odd) {
            background-color: #eef3ff;
        }
        .table-custom tbody tr:hover {
            background-color: #e3f2fd;
            transition: background-color 0.3s ease;
        }

        /* Buttons */
        .btn-view {
            background: linear-gradient(90deg, #43cea2, #185a9d);
            color: white;
            border: none;
        }
        .btn-view:hover {
            background: linear-gradient(90deg, #185a9d, #43cea2);
        }
        .btn-delete {
            background: linear-gradient(90deg, #ff4b5c, #ff6a88);
            color: white;
            border: none;
        }
        .btn-delete:hover {
            background: linear-gradient(90deg, #ff6a88, #ff4b5c);
        }
        .btn-update {
            background: linear-gradient(90deg, #f9d423, #ff4e50);
            color: white;
            border: none;
        }
        .btn-update:hover {
            background: linear-gradient(90deg, #ff4e50, #f9d423);
        }
        .btn-add {
            background: linear-gradient(90deg, #43cea2, #185a9d);
            color: white;
            border: none;
        }
        .btn-add:hover {
            background: linear-gradient(90deg, #185a9d, #43cea2);
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="card card-custom">
        <div class="card-header d-flex justify-content-between align-items-center">
    <span>All Users List</span>
    
    <div class="d-flex gap-2">
        <input type="text" id="search" class="form-control form-control-sm" placeholder="Search users...">
        <a href="/newuser" class="btn btn-add btn-sm">➕ Add New</a>
    </div>
</div>

        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-custom table-bordered align-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>City</th>
                            <th>PDF</th>

                            <th>View</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->city }}</td>
                                <td>
                                    <a href="{{ route('view.user', $user->id) }}" class="btn btn-view btn-sm">View</a>
                                </td>
                                <td>
                                    <a href="{{ route('delete.user', $user->id) }}" class="btn btn-delete btn-sm">Delete</a>
                                </td>
                                <td>
                                    <a href="{{ route('update.page', $user->id) }}" class="btn btn-update btn-sm">Update</a>
                                </td>

                                <td>
    @if($user->pdf)
        <a href="{{ asset('storage/' . $user->pdf) }}" target="_blank" class="btn btn-sm btn-secondary">View PDF</a>
    @else
        No PDF
    @endif
</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-5">
                    {{ $data->links('pagination::bootstrap-5') }}

                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#search').on('keyup', function() {
        let query = $(this).val();

        $.ajax({
            url: "{{ route('search.users') }}",
            type: "GET",
            data: {search: query},
            success: function(data) {
                $('tbody').html(data);
            }
        });
    });
});
</script>

</html>
