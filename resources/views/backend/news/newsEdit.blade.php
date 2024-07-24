{{--<div class="container-fluid">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-6 text-left">--}}
{{--            <h1 class="h5 mb-2 text-gray-800">Category Edit</h1>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 text-right mb-2">--}}
{{--            <a href="{{route('cat.list')}}" class="btn btn-primary">Category List</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="card shadow mb-4">--}}
{{--        <div class="card-header py-3">--}}

{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <form method="post" action="{{route('cat.update')}}">--}}
{{--                {{csrf_field()}}--}}

{{--                <span class="text-success">{{Session::has('success') ? Session::get('success') : ''}}</span>--}}

{{--                <input type="hidden" name="id" value="{{$category->id}}">--}}

{{--                <div class="form-group">--}}
{{--                    <label>Category name</label>--}}
{{--                    <input class="form-control" name="category_name" value="{{$category->category_name}}">--}}
{{--                    <span class="text-danger">{{$errors->has('category_name') ? $errors->first('category_name') : ''}}</span>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label>Details</label>--}}
{{--                    <textarea class="form-control" name="details">{{$category->details}}</textarea>--}}
{{--                    <span class="text-danger">{{$errors->has('details') ? $errors->first('details') : ''}}</span>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <button type="submit" class="btn btn-success">Submit</button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}









        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Form</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Create News Item</h5>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('news.store') }}">
                @csrf

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control" id="category_id" name="category_id">
                        <option value="">Select</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="details">Details</label>
                    <textarea rows="5" class="form-control" id="details" name="details"></textarea>
                    @error('details')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
