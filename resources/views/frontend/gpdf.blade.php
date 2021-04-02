<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css" media="all"></style>
</head>

<body>
    <!----#Header------>
    <div style="background: #ffffff; padding: 30px 0px; lor: #321321;">
        <div style="width: 640px; margin: 0px auto; border-radius: 0px; margin:0 auto;">
            <img style="vertical-align: middle; width: 100%;" src="{{ asset('public/frontend/images/badge.jpg') }}"
                alt="">
        </div>

        <div style="clear:both"></div>
        <!--#header End--->

        <div style=" width: 640px; border-radius: 0px; margin: 0 auto;">
            <div style="width: 640px; border-radius: 0px; margin: 0 auto; border: 1px solid #eee;">
                <form action="#">
                    <div
                        style="position: relative; width: 100%; min-height: 1px; padding-right: 15px; float: left;  padding-left: 15px">
                        <div style="font-size: 18px; color: #321321; padding-bottom: 15px; font-weight: 800;">
                            Visit {{ $data->name }}
                        </div>
                        <div style="color: #321321; padding: 5px 0; font-size: 16px; font-weight: 600;">
                            <label style="display: inline-block;">Visiting Date : </label> 20 - April 2021
                        </div>
                        <div style="color: #321321; padding: 5px 0; font-size: 16px; font-weight: 600;">
                            <label style="display: inline-block;">Time Slot : </label> 12:00 Pm to 2:30 Pm
                        </div>
                        <div style="color: #321321; padding: 5px 0; font-size: 16px; font-weight: 600;">
                            <label style="display: inline-block;">URN No : </label> {{ $data->reg_no }}
                        </div>
                        <div style="width: 34%; float: right;">
                            <img style="margin-top: -48px;  width:84%"
                                src="{{ asset('storage/app/public/') }}/{{ $data->qrcode }}" alt="">

                        </div>
                    </div>
                    <div style="width: 100%; float: left; padding: 15px 15px;">
                        <ul style="list-style: none; padding: 0px 45px;">
                            <li style="display: inline; width: 50%; float: left;"><a href="#"><img
                                        style="vertical-align: middle; width: 100%"
                                        src="{{ asset('public/frontend/images/professional.jpg') }}" alt=""></a>
                            </li>
                            <li style="display: inline; width: 50%; float: left;"><a href="#"><img
                                        style="vertical-align: middle; width: 100%"
                                        src="{{ asset('public/frontend/images/idx.jpg') }}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div style="text-align: center;">
                        <a style="padding: 15px; color: #321321; font-size: 16px; width: 100%; float: left;"
                            href="#">www.professionalbeauty.com</a>
                    </div>
                </form>
                <div style="clear:both"></div>
            </div>
        </div>

        <!---#plan Strat --->
        <div
            style="width: 640px; border-radius: 0px; background: #ff0066; text-align: center; padding: 20px 0px;     margin: 0 auto;  color: #ffff;  font-size: 16px;  font-weight: 600; text-transform: capitalize;">
            Visitor <span></span>

        </div>


</body>

</html>
