<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css" media="all"></style>
</head>

<body>
    <table style="width: 50%;" align="center">
        <tr>
            <td colspan="2"><img style="vertical-align: middle; width: 202%;"
                    src="{{ asset('public/frontend/images/badge.jpg') }}" alt=""></td>

        </tr>
        <tr>
            <td style="vertical-align:top;font-size: 18px; color: #321321; padding-bottom: 130px; font-weight: 800;">
                Visit : {{ $data->name }}<br><br> URN No : {{ $data->reg_no }}</td>
            <td style="float: right;margin-top: 12px;">
                <img style="float: right;margin-top: 12px;width:50%;"
                    src="{{ asset('storage/app') }}{{ $data->qrcode }}" alt="">

            </td>
        </tr>
        <tr>
            <td><img style="vertical-align: middle; width: 100%"
                    src="{{ asset('public/frontend/images/professional.jpg') }}" alt=""></td>
            <td><img style="vertical-align: middle; width: 100%" src="{{ asset('public/frontend/images/idx.jpg') }}"
                    alt=""></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;padding: 15px; color: #321321; font-size: 16px; width: 100%;">
                www.professionalbeauty.com</td>
        </tr>
        <tr>
            <td colspan="2"
                style="width: 640px; border-radius: 0px; background: #ff0066; text-align: center; padding: 20px 0px;     margin: 0 auto;  color: #ffff;  font-size: 16px;  font-weight: 600; text-transform: capitalize;">
                Visitor</td>
        </tr>
    </table>
</body>

</html>
