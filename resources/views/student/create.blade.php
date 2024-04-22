<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>

    <div class="container mt-4">

        <form action="{{ route('student.store') }}" method="post">
           @csrf
            Name &nbsp &nbsp &nbsp<input type="text" name="stuname" placeholder="Name" required/><br/><br/>

            Weight &nbsp &nbsp<input type="text" name="stuweight" placeholder="Weight" required/><br/><br/>

            <input type="submit" value="Submit" class="btn btn-primary" style="margin-left: 65px;"/>

        </form>

    </div>
    
</body>
</html>