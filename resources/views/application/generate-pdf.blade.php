<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>

    <style>
        body {
            font-family:sans-serif;
            background: #f3f4f6;
        }

        .page {
            width: 100%;
            background: #ffffff;
            border: 1px solid #ccc;
            position: relative;
        }

        /* WATERMARK */
        .watermark {
            position: absolute;
            top: 280px;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0.3;
            z-index: 0;
        }

        .watermark img {
            width: 350px;
            height: auto;
        }

        /* HEADER */
       .header {
    background: #003366;
    color: #fff;
    padding: 20px 15px;
    position: relative;
    height: 120px;
}

.absolute-title {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-size: 22px;
    font-weight: bold;
    line-height: 1.3;
    letter-spacing: 1px;
}


        .header-table {
            width: 100%;
            border-collapse: collapse;
        }

        .logo-box {
            width: 70px;
            padding: 5px;
        }

        .logo {
            width: 60px;
            height: auto;
        }

        .photo-box {
            width: 90px;
            height: 90px;
            border: 2px dashed #fff;
            text-align: center;
            vertical-align: middle;
        }

        .photo {
            width: 90px;
            height: auto;
        }



        .tag {
            font-size: 13px;
        }

        /* SECTION */
        .section-title {
            text-align: center;
            font-size: 18px;
            color: #242e45;
            margin: 20px 0;
            font-weight: bold;
            position: relative;
            z-index: 1;
        }

        /* FORM */
        .form-table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 10px 20px;
            position: relative;
            z-index: 1;
        }

        .form-table td {
            width: 50%;
            padding: 10px;
            font-size: 13px;
        }

        .label {
            font-weight: bold;
        }

        .line {
            border-bottom: 1px solid #333;
            height: 18px;
        }

        .divider {
            border-bottom: 20px solid  #003366;
            margin: 15px 10px;
            position: relative;
            z-index: 1;

        }
    </style>
</head>

<body>

<div class="page">

    <!-- WATERMARK -->
    <div class="watermark">
        <img src="{{ public_path('images/logo.png') }}">
    </div>

    <!-- HEADER -->
   <div class="header">
    <table class="header-table">
        <tr>
            <td class="logo-box" width="20%">
                <img src="{{ public_path('images/logo.png') }}" class="logo">
            </td>

            <td width="60%">
                 <strong>Choxy Dee<br> Academy</strong><br>
            <small>Strive For Excellency</small>
            </td>

            <td class="photo-box" width="20%">
                <img src="{{ public_path('images/logo.png') }}" class="photo">
            </td>
        </tr>
    </table>

    <!-- PERFECTLY CENTERED TITLE -->
    <div class="absolute-title">
        REGISTRATION<br>
        FORM
    </div>
</div>


    <div class="section-title">STUDENT INFORMATION</div>

    @foreach ($application as $app)

    <table class="form-table">
        <tr>
            <td>
                <span class="label">Full Name:</span> {{ $app->name }}
                <div class="line"></div>
            </td>
            <td>
                <span class="label">Date of Birth:</span> {{ \Carbon\Carbon::parse($app->date_of_birth)->format('d M Y') }}

                <div class="line"></div>
            </td>
        </tr>

        <tr>
            <td>
                <span class="label">Gender:</span> {{ $app->gender }}
                <div class="line"></div>
            </td>
            <td>
                <span class="label">Previous School:</span> {{ $app->previous_school }}
                <div class="line"></div>
            </td>
        </tr>

        <tr>
            <td>
                <span class="label">Guardian:</span> {{ $app->guardian_name }}
                <div class="line"></div>
            </td>
            <td>
                <span class="label">Phone:</span> {{ $app->phone }}
                <div class="line"></div>
            </td>
        </tr>

        <tr>
            <td>
                <span class="label">Email:</span> {{ $app->email }}
                <div class="line"></div>
            </td>
            <td>
                <span class="label">Results:</span> {{ $app->results }}
                <div class="line"></div>
            </td>
        </tr>

        <tr>
            <td>
                <span class="label">Address:</span> {{ $app->address }}
                <div class="line"></div>
            </td>
            <td>
                <span class="label">Additional Info:</span> {{ $app->additional_information }}
                <div class="line"></div>
            </td>
        </tr>
    </table>

    <div class="divider"></div>

    @endforeach

</div>

</body>
</html>
