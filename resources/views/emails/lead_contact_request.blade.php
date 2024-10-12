{{-- @php
    dd($contact);
@endphp --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Lead Contact Request</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        p {
            color: #555;
            line-height: 1.6;
            font-size: 16px;
        }

        .contact-info {
            background-color: #f9f9f9;
            border-left: 4px solid #007BFF;
            padding: 10px;
            margin: 20px 0;
            border-radius: 5px;
        }

        .contact-info p {
            margin: 5px 0;
        }

        .contact-info strong {
            color: #007BFF;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        .footer a {
            color: #007BFF;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Lead Contact Request</h1>
        <p>Hello Admin,</p>
        <p>A new lead has submitted a contact request. Here are the details:</p>

        <div class="contact-info">


            <p><strong>Name:</strong> {{ $contact['firstname'] }}</p>
            <p><strong>Last Name:</strong> {{ $contact['lastname'] }}</p>
            <p><strong>Email:</strong> {{ $contact['email'] }}</p>

            <p><strong>Phone:</strong> {{ $contact['phone'] }}</p>
            <p><strong>business_name:</strong> {{ $contact['business_name'] }}</p>
            <p><strong>branches:</strong> {{ $contact['branches'] }}</p>
            <p><strong>Country Name:</strong>


                @php
                    $name = DB::table('countries')
                        ->where('id', $contact['country_id']) // Correctly passing the value as a variable
                        ->pluck('name')
                        ->first();
                @endphp
                {{ $name }}

            </p>


        </div>

        <p>Please check the admin panel for more details or to respond to the lead.</p>

        <div class="footer">
            <p>Thank you,<br>The {{ config('app.name') }} Team</p>
            <p>
                <a href="{{ url('/') }}">Visit Admin Panel</a> |
                <a href="mailto:{{ config('mail.from.address') }}">Contact Support</a>
            </p>
        </div>
    </div>
</body>

</html>
