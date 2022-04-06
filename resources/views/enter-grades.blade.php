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
        <div class="col col-md-4">
            <label> Midterm Grade </label>
            <input type="number" name="s1_midterms" class="form-control">
        </div>
        <div class="col col-md-4">
            <label> Finals Grade </label>
            <input type="number" name="s1_finals" class="form-control">
        </div>
    </div>
    <div class= "row">
        <Label>Student: <strong>{{ $student_2}}</strong></label>
        <div class="col col-md-4">
            <label> Midterm Grade </label>
            <input type="number" name="s2_midterms" class="form-control">
        </div>
        <div class="col col-md-4">
            <label> Finals Grade </label>
            <input type="number" name="s2_finals" class="form-control">
        </div>
    </div>
    <div class= "row">
        <Label>Student: <strong>{{ $student_3}}</strong></label>
        <div class="col col-md-4">
            <label> Midterm Grade </label>
            <input type="number" name="s3_midterms" class="form-control">
        </div>
        <div class="col col-md-4">
            <label> Finals Grade </label>
            <input type="number" name="s3_finals" class="form-control">
        </div>
    </div>
    <div class= "row">
        <Label>Student: <strong>{{ $student_4}}</strong></label>
        <div class="col col-md-4">
            <label> Midterm Grade </label>
            <input type="number" name="s4_midterms" class="form-control">
        </div>
        <div class="col col-md-4">
            <label> Finals Grade </label>
            <input type="number" name="s4_finals" class="form-control">
        </div>
    </div>
    <div class= "row">
        <Label>Student: <strong>{{ $student_5}}</strong></label>
        <div class="col col-md-4">
            <label> Midterm Grade </label>
            <input type="number" name="s5_midterms" class="form-control">
        </div>
        <div class="col col-md-4">
            <label> Finals Grade </label>
            <input type="number" name="s5_finals" class="form-control">
        </div>
    </div>
    <hr/>
    <div class="row">
        <button class="btn btn-info btn-lg" type="submit">
            Compute Average Grade </button>
    </div>
    </form>
</div>
</body>
</html>