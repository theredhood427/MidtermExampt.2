<!DOCTYPE html>
<html lang="en">
<head>
    <!-- MetaTags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Begin</title>
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<div class="container-sm">
    <h1>Enter name of Students </h1>

    <form action="/enter_Names" method="POST">
        @csrf
        @for ($i=1; $i <= 5; $i++)
        <div class="row">
                <label>Student {{ $i }} Name:</label>
                <input type="text" class="from-control" name="name_{{ $i }}">
        </div>
        @endfor
        <hr/>
        <div class="row">
            <button class="btn btn-info btn-lg">Enter Students</button>
        </div>
    </form>
</div>

</body>
</html>