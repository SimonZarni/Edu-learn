<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello {{ $user->name }},</h1>

    @if ($status == 'approved')
        <p>Congratulations! Your application for the course has been <strong>accepted</strong>.</p>
        <p>Thank you for applying, and we look forward to having you in the course!</p>
    @else
        <p>We regret to inform you that your application for the course has been <strong>rejected</strong>.</p>
        <p>Unfortunately, we are unable to proceed with your application for some reason. If you have any questions, feel free to contact us.</p>
    @endif

    <p>Best regards,<br> The Admissions Team</p>
</body>
</html>
