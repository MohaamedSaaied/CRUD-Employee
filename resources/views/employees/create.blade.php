<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>
<body>
    <h1>Add Employee</h1>
    <form action = "/store" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <table>
        <tr>
        <td>ID</td>
        <td><input type='integer' name='id' /></td>
        <tr>
        <td>Name</td>
        <td><input type="string" name='name'/></td>
        </tr>
        <tr>
        <td>Salary</td>
         <td><input type="integer" name='salary'/></td>
        </tr>
        <tr>
        <td colspan = '2'>
        <input type = 'submit' value = "Add Employee"/>
        </td>
        </tr>
        </table>
</body>
</html>