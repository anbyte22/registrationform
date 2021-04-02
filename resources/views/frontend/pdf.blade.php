<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS-->
    <style type="text/css" media="all"></style>
    <link href="{{ asset('public/frontend/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/responsive.css') }}">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
    <!----#Header------>
    <div class="header">
        <div class="e-generate">
            <img src="{{ asset('public/frontend/images/badge.jpg') }}" alt="">
        </div>

        <div class="clearfix"></div>
        <!--#header End--->

        <div class="form-home">
            <div class="container">
                <div class="row">
                    <div class="e-generate borderone">
                        <form action="#">

                            <div class="col-md-4">
                            </div>
                            <div class="col-md-12 middlepart">
                                <div class="visiting">
                                    Visit {{ $data->name }}
                                </div>
                                <div class="vdate">
                                    <label>Visiting Date : </label> 20 - April 2021
                                </div>
                                <div class="vdate">
                                    <label>Time Slot : </label> 12:00 Pm to 2:30 Pm
                                </div>
                                <div class="vdate">
                                    <label>URN No : </label> PBV000150
                                </div>
                                <div class="barcode-right" style="float: right;">

                                    {!! QrCode::size(200)->generate($data->reg_no . ' ' . $data->name . ' ' . $data->company . ' ' . $data->job . ' ' . $data->address . ' ' . $data->city . ' ' . $data->pin . ' ' . $data->state . ' ' . $data->country . ' ' . $data->mobile . ' ' . $data->email . ' ' . $data->website) !!}
                                </div>
                            </div>
                            <div class="logobtm">
                                <ul>
                                    <li>
                                        <a href="#"><img src="{{ asset('public/frontend/images/professional.jpg') }}"
                                                alt=""></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('public/frontend/images/idx.jpg') }}"
                                                alt=""></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-beauty">
                                <a href="#">www.professionalbeauty.com</a>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <!---#plan Strat --->
        <div class="container">
            <div class="row">
                <div class="visitor vist e-generate">
                    Visitor
                </div>

            </div>
        </div>
</body>

</html>
