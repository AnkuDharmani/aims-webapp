<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>

<body>

    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1 class="m-0 display-5 text-uppercase text-primary">
                <img src='https://aimsalbertalogistics.com/img/lorry.png' style="margin-right:20px;filter:invert(1); " />Aims Alberta Logistics
            </h1>
        </div>

        <!-- Body -->
        <div class="email-body">
            <h2>Hello {{ $mailData['first_name'] }} {{ $mailData['last_name'] }},</h2>
            <p>Thank you for reaching out to us. We appreciate your communication and are here to assist you with any inquiries regarding your deliveries.</p>
            <p>Our team will review your message and get back to you shortly to discuss the details.</p>
            <p>If you have any additional questions in the meantime, feel free to contact us.</p>

            <p>Best regards,<br>
                AIMS Alberta Team</p>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p>&copy; 2024 AIMS Alberta. All rights reserved.</p>
        </div>
    </div>

</body>

</html>