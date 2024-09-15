<!DOCTYPE html>
<html>

<head>
    <title>Contact Form Message</title>
</head>

<body>
    <h1>Contact Form Message</h1>
    <p><strong>Name:</strong> {{ $mailData['name'] }}</p>
    <p><strong>Email:</strong> {{ $mailData['email'] }}</p>
    <p><strong>Subject:</strong> {{ $mailData['subject'] }}</p>
    <p><strong>Message:</strong> {{ $mailData['message'] }}</p>
</body>

</html>
