<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Pending Approval</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            line-height: 1.6;
            color: #555;
        }

        .footer {
            margin-top: 20px;
            padding: 10px 0;
            text-align: center;
            font-size: 0.9em;
            color: #777;
        }

        .button {
            display: inline-block;
            padding: 10px 15px;
            margin-top: 20px;
            color: white;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hello, {{ $manager->name }}</h1>
        <p>Thank you for registering. Your registration request has been sent for approval.</p>
        <p>Please wait until your account is approved by the administrator.</p>
        <a href="{{ route('manager.login') }}" class="button">Go to Login</a>
        <div class="footer">
            <p>Thank you!</p>
            <p>&copy; {{ date('Y') }} Your Company Name</p>
        </div>
    </div>
</body>

</html>
