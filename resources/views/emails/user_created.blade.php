<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Created</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .email-header {
            background-color: #007bff;
            padding: 20px;
            color: white;
            text-align: center;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }

        .email-body {
            padding: 30px;
        }

        .email-body p {
            margin-bottom: 20px;
            font-size: 16px;
            line-height: 1.6;
            color: #343a40;
        }

        .email-body strong {
            color: #007bff;
        }

        .email-footer {
            padding: 20px;
            background-color: #f8f9fa;
            text-align: center;
            font-size: 14px;
            color: #6c757d;
        }

        .email-footer p {
            margin: 0;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            color: white !important;
            text-decoration: none;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Welcome to Our Platform, {{ $userName }}!</h1>
        </div>
        <div class="email-body">
            <p>We are excited to let you know that your account has been successfully created. You can now log in using
                the credentials provided below:</p>

            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Password:</strong> {{ $password }}</p>

            <p>For your security, we recommend that you change your password after your first login.</p>

            <p>
                <a href="{{ url('/login') }}" class="btn-primary">Login Now</a>
            </p>
        </div>
        <div class="email-footer">
            <p>Thank you for choosing us!</p>
        </div>
    </div>
</body>

</html>
