<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<body>
    <script src="https://www.paypal.com/sdk/js?client-id=AbobDk25HEfyVNSFDpVwUM4bn-AXRPwm0hqO9HqiDEb_6pIGqT8o1KZgwPsaWSw__SJRG8RjbzvqRa8M&currency=CAD"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
    </script>
    <div id="paypal-button-container"></div>

    <script>
    paypal.Buttons().render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
    </script>
</body>
</html>