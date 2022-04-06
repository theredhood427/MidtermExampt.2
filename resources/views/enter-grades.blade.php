<!DOCTYPE html>
<html lang="en">
<head>
    <!-- MetaTags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EnterGrades</title>
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<div class="container-sm">
    <h1> Student Grades </h1>
    <form action="/compute-grades" method="POST">
    <input type="hidden" name="Student_1" value="{{ $student_1 }}">
    <input type="hidden" name="Student_2" value="{{ $student_2 }}">
    <input type="hidden" name="Student_3" value="{{ $student_3 }}">
    <input type="hidden" name="Student_4" value="{{ $student_4 }}">
    <input type="hidden" name="Student_5" value="{{ $student_5 }}">
    @csrf
    <div class= "row">
        <Label>Student: <strong>{{ $student_1}}</strong></label>



</div>
</body>
</html>