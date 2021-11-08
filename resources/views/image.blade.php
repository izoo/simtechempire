<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Image Resize Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            Error Occured . <br><br>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if($message= Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>Primary Image:</h3>
                <img src="/images/{{ Session::get('fileName')}}" alt="Primary Image Goes Here">
            </div>
            <div class="col-md-4 offset-md-2">
                <h3>Thumbnail Image</h3>
                <img src="/thumbnails/{{ Session::get('fileName') }}" alt="Thumbnail Image Goes Here">
            </div>
        </div>
        @endif
        <form action="{{route('img-resize')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group row" id="imgField">
                <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="file" name="imgFile" class="form-control" class="imgFile" id="imgFile">
                </div>
                <div class="col-sm-12 col-lg-12 col-md-12">
                <small id="passwordHelp" class="text-danger" style="display:none;">
                    Image Should Be Less Than 2mb.The current image size is <b id="size"></b>MB
                </small>      
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
       

  
        </form>
    </div>
  
</body>
</html>