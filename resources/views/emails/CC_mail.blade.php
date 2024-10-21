<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AIMS Alberta Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background-color: #8ead1d;
            padding: 20px;
            text-align: center;
        }

        .email-header img {
            max-width: 50px;
            vertical-align: middle;
            filter: invert(1);
        }

        .email-header h1 {
            display: inline-block;
            color: #ffffff;
            font-size: 24px;
            margin-left: 10px;
            vertical-align: middle;
        }

        .email-body {
            padding: 20px;
            color: #333333;
        }

        .email-body h2 {
            color: #000;
        }

        .email-body p {
            line-height: 1.6;
        }

        .email-footer {
            background-color: #8ead1d;
            color: #ffffff;
            text-align: center;
            padding: 10px;
            font-size: 12px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: #ffffff;
            background-color: #8ead1d;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        @media (max-width: 600px) {
            .email-header h1 {
                font-size: 20px;
            }

            .email-body {
                padding: 15px;
            }
        }
    </style>

</head>

<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <img src="https://aimsalbertalogistics.com/truck.png" style="filter: invert(1);" />
            <h1 class="m-0 display-5 text-uppercase text-primary"> Aims Alberta Logistics </h1>
        </div>


        <!-- Header -->
        <h2>New Team Join Request</h2>
        <p>Dear Admin,</p>
        <p>We have received a new request from an individual who wants to join the AIMS Alberta team.</p>
        <p>Here are the details of the applicant:</p>
        <ul>
            <li><strong>First Name:</strong> {{ $mailData['first_name'] }}</li>
            <li><strong>Last Name:</strong> {{ $mailData['last_name'] }}</li>
            <li><strong>Phone:</strong> {{ $mailData['phone'] }}</li>
        </ul>

        <p>Please review the application and take the necessary steps.</p>

        <p>Best regards,<br>
            AIMS Alberta Team</p>
    </div>

</body>

</html>