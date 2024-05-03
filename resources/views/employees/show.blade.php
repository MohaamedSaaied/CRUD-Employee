<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View</title>
</head>
<body>
    <table border="2" >

        <tr>

            <td>ID</td>
            <td>Name</td>
            <td>Salary</td>
            <td>Operations</td>
    
        </tr>

    @foreach ($employees as $item )

            <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['salary'] }}</td>
                        <td><a href={{ 'delete/'.$item['id'] }}>Delete</a>
                        <a href={{ 'edit/'.$item['id'] }}>Update</a></td>
                        
            </tr>
            
    @endforeach


    </table>
</body>
</html>