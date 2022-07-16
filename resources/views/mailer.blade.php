

<html>
<head>
    <title>Contact Form</title>
</head>
<body style="background-color: #000; padding:30px 50px">
    <h1 style="color:#000;background-color: #ddd; font-size:25px;text-transform:uppercase;">
   From: {{$details['name'] }}
    </h1>
    <p style="font-size:14px;text-align:left;color:#000;text-transform:uppercase;">
     {{ $details['subject'] }}<br>
    <ul style="list-style-position:inside; font-size:14px;text-align:left;color:#000;">
        <li>Name :{{ $details['name'] }}</li>
        <li>Email:{{ $details['email'] }}</li>
        <li>Message:{{ $details['message'] }}</li>
    </ul>
    </p>
    <p style="font-size:14px;text-align:left;color:#000;">I will appreciate your feedback.</p>
</body>
</html>