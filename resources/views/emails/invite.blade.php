<!DOCTYPE html>
<html>

<head>
    <title>Welcome Email</title>
</head>

<body>
    <h1>Welcome</h1>
    <p>You have been invited to JustInvite.</p>
    <p><a href={{ $url }}>Click here to register.</a> or scan the QR code below</p>
    <img src="{{ $qrcode }}">
</body>

</html>