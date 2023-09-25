<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment Request Approval</title>
</head>
<body>
    <p>Hello {{$appointment->names}},</p>
    <p>Your appointment request has been approved and is scheduled to take place at {{$appointment->date}}, in our offices</p>
    <p>starting from {{$appointment->time}}.</p>
    <p>See you then.</p>
</body>
</html>