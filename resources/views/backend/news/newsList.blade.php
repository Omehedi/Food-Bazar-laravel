{{--       <!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>News List</title>--}}
{{--    <!-- Include Bootstrap CSS -->--}}
{{--    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container-fluid mt-5">--}}
{{--    <div class="row mb-4">--}}
{{--        <div class="col-md-6">--}}
{{--            <h1 class="h5 mb-2 text-gray-800 text-primary"></h1>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 text-right">--}}
{{--            <a href="{{ route('news.create') }}" class="btn btn-primary">Add News</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="card shadow mb-4">--}}
{{--        <div class="card-header py-3">--}}
{{--            <h5 class="m-0 font-weight-bold text-primary">News List Table</h5>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <div class="table-responsive">--}}
{{--                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">--}}
{{--                    <thead class="thead-dark">--}}
{{--                    <tr>--}}
{{--                        <th>SL</th>--}}
{{--                        <th>Images</th>--}}
{{--                        <th>Title</th>--}}
{{--                        <th>Details</th>--}}
{{--                        <th>Date</th>--}}
{{--                        <th>Author</th>--}}
{{--                        <th>Action</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($news as $key => $value)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $key + 1 }}</td>--}}
{{--                            <th><img style="width: 50px" src="{{env('STORAGE_PATH')}}/{{$value->thumbnail}}"></th>--}}
{{--                            <td>{{ $value->title }}</td>--}}
{{--                            <td>{{ $value->details }}</td>--}}
{{--                            <td>{{ $value->date }}</td>--}}
{{--                            <td>{{ $value->user_name }}</td>--}}
{{--                            <td>--}}
{{--                                <a href="{{ route('news.edit', $value->id) }}" class="btn btn-warning btn-sm">Edit</a>--}}
{{--                                <a onclick="return confirm('Are you sure you want to delete?')" href="{{ route('news.delete', $value->id) }}" class="btn btn-danger btn-sm">Delete</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!-- Include Bootstrap JS and dependencies -->--}}
{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>--}}
{{--</body>--}}
{{--</html>--}}










        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News List</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-header {
            background-color: #f8f9fc;
        }
        .card-body {
            padding: 2rem;
        }
        .news-thumbnail {
            width: 80px;
            height: auto;
            object-fit: cover;
        }
        .news-details {
            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .table thead th {
            background-color: #343a40;
            color: #ffffff;
        }
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        .btn-sm {
            margin: 0 2px;
            position: relative;
        }
        .btn-sm::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background-color: rgba(0, 123, 255, 0.1);
            border-radius: 0.25rem;
            z-index: -1;
        }
        .btn-warning::before {
            background-color: rgba(255, 193, 7, 0.1);
        }
        .btn-danger::before {
            background-color: rgba(220, 53, 69, 0.1);
        }
    </style>
</head>
<body>
<div class="container-fluid mt-5">
    <div class="row mb-4">
        <div class="col-md-6">
            <h1 class="h3 mb-2 text-primary">News List</h1>
            <p class="text-muted">Manage and review all news articles below.</p>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('news.create') }}" class="btn btn-primary">Add News</a>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">News List Table</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                    <tr>
                        <th>SL</th>
                        <th>Images</th>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Date</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img class="news-thumbnail" src="{{env('STORAGE_PATH')}}/{{$value->thumbnail}}" alt="Thumbnail"></td>
                            <td>{{ $value->title }}</td>
                            <td class="news-details">{{ $value->details }}</td>
                            <td>{{ $value->date }}</td>
                            <td>{{ $value->user_name }}</td>
                            <td>
                                <a href="{{ route('news.edit', $value->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a onclick="return confirm('Are you sure you want to delete?')" href="{{ route('news.delete', $value->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



