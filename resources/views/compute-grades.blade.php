<!DOCTYPE html>
<html lang="en">
<head>
    <!-- MetaTags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Grades</title>
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container-sm">
            <h1>Average Grade of Students</h1>

            <table class="table table-striped table-hover">
            <thread>
                <tr>
                    <th scope="col">Student</th>
                    <th scope="col">Midterms</th>
                    <th scope="col">Finals</th>
                    <th scope="col">Average Grade</th>
                </tr>
            </thread>
            <tbody>
                <tr>
                    <td>{{ $Student_1 }}</td>
                    <td>{{ $s1_midterms }}</td>
                    <td>{{ $s1_finals }}</td>
                    <td>{{ $s1_average }}</td>
                </tr>
                <tr>
                     <td>{{ $Student_2 }}</td>
                    <td>{{ $s2_midterms }}</td>
                    <td>{{ $s2_finals }}</td>
                    <td>{{ $s2_average }}</td>
                </tr>
                <tr>
                     <td>{{ $Student_3 }}</td>
                    <td>{{ $s3_midterms }}</td>
                    <td>{{ $s3_finals }}</td>
                    <td>{{ $s3_average }}</td>
                </tr>
                <tr>
                     <td>{{ $Student_4 }}</td>
                    <td>{{ $s4_midterms }}</td>
                    <td>{{ $s4_finals }}</td>
                    <td>{{ $s4_average }}</td>
                </tr>
                <tr>
                     <td>{{ $Student_5 }}</td>
                    <td>{{ $s5_midterms }}</td>
                    <td>{{ $s5_finals }}</td>
                    <td>{{ $s5_average }}</td>
                </tr>
                </tbody>
                </table>
    </div>
</body>
</html>