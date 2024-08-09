
{{--        <!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>News Edit Form</title>--}}
{{--    <!-- Include Bootstrap CSS -->--}}
{{--    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container mt-5">--}}
{{--    <div class="card shadow mb-4">--}}
{{--        <div class="card-header py-3 d-flex justify-content-between align-items-center">--}}
{{--            <h5 class="m-0 font-weight-bold text-primary">Edit News Item</h5>--}}
{{--            <a href="{{ route('news.index') }}" class="btn btn-secondary">Back to List</a>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <form method="post" enctype="multipart/form-data" action="{{ route('news.update', $news->id) }}">--}}
{{--                @csrf--}}
{{--                @method('PUT')--}}

{{--                @if(Session::has('success'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        {{ Session::get('success') }}--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--                <div class="form-group">--}}
{{--                    <label for="title">Title</label>--}}
{{--                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $news->title) }}" placeholder="Enter title">--}}
{{--                    @error('title')--}}
{{--                    <div class="invalid-feedback">--}}
{{--                        {{ $message }}--}}
{{--                    </div>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="category_id">Category</label>--}}
{{--                    <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">--}}
{{--                        <option value="">Select a category</option>--}}
{{--                        @foreach($categories as $category)--}}
{{--                            <option value="{{ $category->id }}" {{ $news->category_id == $category->id ? 'selected' : '' }}>--}}
{{--                                {{ $category->name }}--}}
{{--                            </option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                    @error('category_id')--}}
{{--                    <div class="invalid-feedback">--}}
{{--                        {{ $message }}--}}
{{--                    </div>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="details">Details</label>--}}
{{--                    <textarea rows="5" class="form-control @error('details') is-invalid @enderror" id="details" name="details" placeholder="Enter details">{{ old('details', $news->details) }}</textarea>--}}
{{--                    @error('details')--}}
{{--                    <div class="invalid-feedback">--}}
{{--                        {{ $message }}--}}
{{--                    </div>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label>Thumbnail</label>--}}
{{--                    <input type="file" name="thumbnail">--}}
{{--                    <span class="text-danger">{{$errors->has('details') ? $errors->first('details') : ''}}</span>--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <button type="submit" class="btn btn-primary">Update</button>--}}
{{--                    <a href="{{ route('news.index') }}" class="btn btn-secondary">Cancel</a>--}}
{{--                </div>--}}
{{--            </form>--}}
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
    <title>News Edit Form</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('backend/plugin/select2/dist/css/select2.min.css')}}" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Edit News Item</h5>
            <a href="{{ route('news.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{ route('news.update', $news->id) }}">
                @csrf
                @method('PUT')

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $news->title) }}" placeholder="Enter title">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control @error('category_id') is-invalid @enderror category_select" id="category_id" name="category_id">
                        <option value="">Select a category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $news->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="details">Details</label>
                    <textarea rows="5" class="form-control @error('details') is-invalid @enderror" id="details" name="details" placeholder="Enter details">{{ old('details', $news->details) }}</textarea>
                    @error('details')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Thumbnail</label>
                    <input type="file" name="thumbnail">
                    <span class="text-danger">{{$errors->has('details') ? $errors->first('details') : ''}}</span>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('news.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{asset('backend/plugin/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('backend/plugin/select2/dist/js/select2.min.js')}}"></script>
<script>
    tinymce.init({
        selector: '#details',
        menubar: false,
        statusbar: false,
        plugins: "powerpaste advcode searchreplace autolink directionality code visualblocks visualchars image link media mediaembed codesample table charmap pagebreak nonbreaking anchor tableofcontents insertdatetime advlist lists checklist wordcount tinymcespellchecker editimage help formatpainter permanentpen charmap linkchecker emoticons advtable export autosave",
        toolbar: "undo redo print spellcheckdialog formatpainter | blocks fontfamily fontsize | bold italic underline forecolor backcolor | link image | alignleft aligncenter alignright alignjustify lineheight | checklist bullist numlist indent outdent | removeformat | code",
        height: "700px",
    });

    $('.category_select').select2();
</script>
</body>
</html>














