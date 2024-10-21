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
    <p>You a new email from {{$details['fname']}}
        @if(!empty($details['lname']))
            {{$details['lname']}}
        @endif
    </p>

    <ul>
        <li><strong>Email: </strong> {{$details['email']}}</li>
        <li>
            <strong>Subject: </strong> 
            @if(!empty($details['subject']))
                {{$details['subject']}}
            @endif
        </li>
        <li><strong>Message: </strong> {{$details['message']}}</li>
    </ul>
</body>
</html>