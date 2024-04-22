<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>

    <div class="container mt-4">

        <table class="table-bordered">
           
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Weight</th>
                </tr>

            </thead>

            <tbody>
                @foreach ($student as $stud)
                    
                
                <tr>
                    <td>{{$stud->name}}</td>
                    <td>{{$stud->weight}}</td>
                </tr>

                @endforeach
            </tbody>

        </table>

    </div>
    
</body>
</html>