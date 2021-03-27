<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
</head>

<body>
    <div style="width: 600px; margin: 0 auto;'">
        <div style="padding:10px; ">
            <h3 style="color: #321321; font-size: 18px; font-weight: 600; font-family: sans-serif; padding:5px 0px;">
                Namaskar {{ $email->name }},</h3>
            <p style="color: #321321; font-size: 14px; font-weight: 500; font-family: sans-serif; padding:5px 0px;">
                Thank you for booking your slot to visit AAHAR 2021 on 06 April 2021.</p>
            <p style="color: #321321; font-size: 14px; font-weight: 500; font-family: sans-serif; padding:5px 0px;">
                Please carry your e-ticket for event access onsite @Pragati Maidan, New Delhi (Entry gates 4 - Bhairon
                road & 10 - Metro Station) </p>
            <h4 style="color: #321321; font-size: 16px; font-weight: 600; font-family: sans-serif; padding:5px 0px;">
                Booking details:</h4>
            <p style="color: #321321; font-size: 14px; font-weight: 500; font-family: sans-serif; padding:5px 0px;">
                Date: {!! substr($email['created_at'], 0, 10) !!}</p>
            <p style="color: #321321; font-size: 14px; font-weight: 500; font-family: sans-serif; padding:5px 0px;">Slot
                Time: {!! substr($email['created_at'], 11) !!}</p>
            <p style="color: #321321; font-size: 14px; font-weight: 500; font-family: sans-serif; padding:5px 0px;">
                E-pass: {{ $email->reg_no }}</p>
            <h3 style="color: #321321; font-size: 18px; font-weight: 600; font-family: sans-serif; padding:5px 0px;">
                What to expect at our physical event?</h3>
            <p style="color: #321321; font-size: 14px; font-weight: 500; font-family: sans-serif; padding:5px 20px;">•
                All health and precautionary measures have been taken to ensure your safety while networking. This
                includes sanitizer stations, temperature checks, social distancing, and mandatory masks inside the hall.
                Please expect some waiting time to
                enter the event.</p>
            <p style="color: #321321; font-size: 14px; font-weight: 500; font-family: sans-serif; padding:5px 20px;">•
                Only registered visitors will be allowed in the event hall according to the time in your pre-booked
                slot.</p>
            <p
                style="color: #321321; font-size: 14px; font-weight: 500; font-family: sans-serif; padding:5px 20px 5px;">
                • Do carry this email with you on your phone/print when you visit the event.</p>
            <p style="color: #321321; font-size: 14px; font-weight: 500; font-family: sans-serif; padding:5px 0px;">We
                are excited to be hosting you soon!</p>
            <p style="color: #321321; font-size: 14px; font-weight: 500; font-family: sans-serif; padding:5px 0px;">
                Regards,</p>
            <p style="color: #321321; font-size: 14px; font-weight: 500; font-family: sans-serif; padding:5px 0px;">
                AAHAR 2021 Registration Team</p>
            <p style="color: #321321; font-size: 12px; font-weight: 500; font-family: sans-serif; padding:5px 0px;">Any
                queries related to the online registration kindly contact us on 9321768928 | 8291435096 | 9321968928 |
                9967078928</p>

        </div>
    </div>
</body>

</html>
