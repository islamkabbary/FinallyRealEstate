<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <title>Email</title>
    <style type="text/css">
        body {
            margin: 0;
            background-color: #eee;
            font-family: 'Cairo', sans-serif;
            direction: rtl;
            overflow-x: hidden;
        }

        table {
            border-spacing: 0;
        }

        td {
            padding: 0;
        }

        img {
            border: 0;
        }

        .wrapper {
            width: 100%;
            table-layout: fixed;
            background-color: #F7F7F7;
            padding: 60px 0;
        }

        .main {
            background-color: #fff;
            margin: 0 auto;
            width: 100%;
            max-width: 800px;
            border-spacing: 0;
            color: #4a4a4a;
            border-radius: 5px;
            padding: 15px 0;
            margin-top: 15px;
        }

        .column {
            text-align: center;
            width: 100%;
        }
    </style>
</head>

<body>


    <center class="wrapper">
        <table width="100%">
            <!-- logo  -->
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td>
                                <table class="column">
                                    <tr>
                                        <td>
                                            <a href="#"><img width="100" title="logo"
                                                    src="https://cdn.propriodirect.com/img/logo_fr.svg?v=1692671670"
                                                    alt="logo"></a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table class="main" width="100%">
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td style="text-align: center;padding: 15px;">
                                <p style="font-size: 20px; font-weight: bold;text-decoration: underline;">New Details
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tr style="text-align: center;">
                            <td style="text-align: center;padding: 15px;">
                                <p style="font-size: 20px; font-weight: bold;text-decoration: underline;"><span
                                        style="color: #5b0909">email</span> :
                                    {{ $apartmentDetails->email }}
                                </p>
                            </td>
                        </tr>
                        <tr style="margin-left: 5px;margin-right: 5px">
                            <td style="text-align: start;padding: 15px;">
                                <p style="font-size: 20px; font-weight: bold;text-decoration: underline;"><span
                                        style="color: #5b0909">phone</span> :
                                    {{ $apartmentDetails->phone }}
                                </p>
                            </td>
                            <td style="text-align: end;padding: 15px;">
                                <p style="font-size: 20px; font-weight: bold;text-decoration: underline;"><span
                                        style="color: #5b0909">name</span> :
                                    {{ $apartmentDetails->name }}
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tr style="text-align: center;">
                            <td style="text-align: start;padding: 15px;">
                                <p style="font-size: 20px; font-weight: bold;text-decoration: underline;"><span
                                        style="color: #5b0909">adress</span> :
                                    {{ $apartmentDetails->address }}
                                </p>
                            </td>
                        </tr>
                        <tr style="margin-left: 5px;margin-right: 5px">
                            <td style="text-align: end;padding: 15px;">
                                <p style="font-size: 20px; font-weight: bold;text-decoration: underline;"><span
                                        style="color: #5b0909">bathrooms</span> :
                                    {{ $apartmentDetails->bathrooms }}
                                </p>
                            </td>
                            <td style="text-align: center;padding: 15px;">
                                <p style="font-size: 20px; font-weight: bold;text-decoration: underline;"><span
                                        style="color: #5b0909">bedrooms</span> :
                                    {{ $apartmentDetails->bedrooms }}
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>



            <!-- footer -->
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td style="text-align:center;padding: 20px 0 40px">
                                <div style="font-size: 100%;margin: 0;padding: 0;margin-top: 0">
                                    <p
                                        style="font-size: 14px;margin: 0;padding: 0 24px;color: #ffffff;margin-top: 0;font-weight: bold;line-height: 40px;letter-spacing: 0.1ch;text-transform: uppercase;background-color: #5b0909;border-radius: 5000px;display: inline-block;text-align: center;text-decoration: none;white-space: nowrap;-webkit-text-size-adjust: none">
                                        Go
                                        to Dashboard
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
