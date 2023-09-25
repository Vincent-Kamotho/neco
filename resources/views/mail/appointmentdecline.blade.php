<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <link rel="icon" href="{{asset('assets/frontend/images/neco-logo.png')}}" type="image/x-icon">
    <title>Appointment Request Declination</title>
</head>
<body>
    <p>Hello {{$appointment->names}},</p>
    <p>Your appointment request has been declined. You are adviced to select a different date or contact our office.</p>
    <p>Apologies for any inconvenience.</p>
</body>
</html>