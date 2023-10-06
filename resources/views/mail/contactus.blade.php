<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
</head>
<body>
    <p>Hello, </p>
    <p>You a new email from {{$fname}} {{$lname}}</p>

    <ul>
        <li><strong>Subject: </strong> {{ $email}}</li>
        <li><strong>Message: </strong> {{ $information}}</li>
    </ul>
</body>
</html>