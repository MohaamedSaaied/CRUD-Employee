<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <H1>Update Employee</H1>

    <form action="/update" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $data['id'] }}">
        <input type="string" name="name" value="{{ $data['name'] }}"><br><br>
        <input type="integer" name="salary" value="{{ $data['salary'] }}"><br><br>
        <button type="submit">Update</button><br><br>
    </form>
</body>
</html>