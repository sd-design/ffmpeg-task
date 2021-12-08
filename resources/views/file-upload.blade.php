<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Тестовое задание от MassPers</title>
</head>
<body>
<div class="container">
    <h1 class="display-2 text-center mt-3">Тестовое задание от MassPers</h1>
    <div id="formUpload">
        <form action="/upload" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="row g-3 p-2">
            <div class="col-sm-5">
                <input type="file" class="form-control" name="file_1" placeholder="Image 1" aria-label="Image 1">
            </div>
            <div class="col-sm-1">
                <input type="text" class="form-control" name="num_1" placeholder="Frame #">
            </div>
        </div>
    <div class="row g-3 p-2">
            <div class="col-sm-5">
                <input type="file" class="form-control" name="file_2" placeholder="Image 2" aria-label="Image 2">
            </div>
            <div class="col-sm-1">
                <input type="text" class="form-control" name="num_2" placeholder="Frame #">
            </div>
    </div>
    <div class="row g-3 p-2">
            <div class="col-sm-5">
                <input type="file" class="form-control" name="file_3" placeholder="Image 1" aria-label="Image 1">
            </div>
            <div class="col-sm-1">
                <input type="text" class="form-control" name="num_3" placeholder="Frame #">
            </div>
    </div>
    <div class="row g-3 p-2">
            <div class="col-sm-5">
                <input type="file" class="form-control" name="file_4" placeholder="Image 1" aria-label="Image 1">
            </div>
            <div class="col-sm-1">
                <input type="text" class="form-control" name="num_4" placeholder="Frame #">
            </div>
    </div>
    <div class="row g-3 p-2">
            <div class="col-sm-5">
                <input type="file" class="form-control" name="file_5" placeholder="Image 1" aria-label="Image 1">
            </div>
            <div class="col-sm-1">
                <input type="text" class="form-control" name="num_5" placeholder="Frame #" >
            </div>

            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Отправить</button>
            </div>
        </div>
        </form>
    </div>
</div>
</body>
</html>
