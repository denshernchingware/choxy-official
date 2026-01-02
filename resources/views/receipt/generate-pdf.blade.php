<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Choxy Dee Academy - Official Receipt</title>

    <style>
        @page {
            size: A4 portrait;
            margin: 15mm;
        }

        body {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #333;
        }

        .receipt {
            width: 100%;
            border: 1px solid #ddd;
        }

        /* Header */
        .header {
            background-color: #003366;
            color: #fff;
            padding: 30px;
            text-align: center;
        }

        .header img {
            width: 90px;
            margin-bottom: 10px;
            border: 3px solid #FFB400;
        }

        .school-name {
            font-size: 28px;
            font-weight: bold;
            margin: 5px 0;
        }

        .tagline {
            font-size: 16px;
        }

        .receipt-no {
            margin-top: 15px;
            background-color: #FFB400;
            color: #003366;
            padding: 8px 20px;
            display: inline-block;
            font-weight: bold;
        }

        /* Content */
        .content {
            padding: 30px;
        }

        /* Info table */
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
            background-color: #f0f7ff;
        }

        .info-table td {
            padding: 12px;
            vertical-align: top;
        }

        .info-table strong {
            color: #003366;
            display: block;
            margin-bottom: 4px;
        }

        .amount-words {
            font-weight: bold;
            color: #003366;
            text-transform: uppercase;
        }

        /* Items table */
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .items-table th {
            background-color: #003366;
            color: #fff;
            padding: 12px;
            text-align: left;
        }

        .items-table th:last-child,
        .items-table td:last-child {
            text-align: right;
        }

        .items-table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        .total-row td {
            background-color: #FFB400;
            color: #003366;
            font-weight: bold;
            font-size: 16px;
        }

        /* Signature */
        .signature {
            margin-top: 50px;
            text-align: right;
        }

        .signature-line {
            border-top: 2px solid #003366;
            width: 220px;
            margin-left: auto;
            margin-bottom: 6px;
        }

        .signature-text {
            font-weight: bold;
            color: #003366;
        }

        /* Footer */
        .note {
            margin-top: 40px;
            text-align: center;
            font-style: italic;
            font-size: 13px;
            color: #666;
        }
       .signature {
    margin-top: 50px;
    text-align: right;
}

.signature-name {
    font-family: "Times-Roman", Times, serif;
    font-size: 26px;
    font-style: italic;
    letter-spacing: 1px;
    margin-bottom: 6px;
    transform: rotate(-5deg); /* DomPDF supports small rotations */
}

.signature-line {
    border-top: 2px solid #003366;
    width: 220px;
    margin-left: auto;
    margin-bottom: 5px;
}

.signature-text {
    font-size: 13px;
    font-weight: bold;
    color: #003366;
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
        .amt-cl{
            color: #666;
        }


    </style>
</head>

<body>
    <div class="watermark">
        <img src="{{ public_path('images/logo.png') }}">
    </div>
<div class="receipt">

    <!-- Header -->
    <div class="header">
        <img src="{{ public_path('images/logo.png') }}" alt="Choxy Dee Academy Logo">
        <div class="school-name">CHOXY DEE ACADEMY</div>
        <div class="tagline">STRIVING FOR EXCELLENCE</div>
        <div class="receipt-no">RECEIPT NO. {{ $receipt->receipt_number }}</div>
    </div>

    <!-- Content -->
    <div class="content">

        <!-- Info -->
        <table class="info-table">
            <tr>
                <td width="50%">
                    <strong>Contact Details</strong>
                    +263 775 746 617<br>
                    +263 719 746 617<br>
                    info@choxydee.ac.zw
                </td>
                <td width="50%">
                    <strong>Date</strong>
                    {{ \Carbon\Carbon::parse($receipt->receipt_date)->format('d F Y') }}
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Received From</strong>
                    {{ $receipt->student_name }}
                </td>
                <td class="amount-words">
                    <strong>Amount in Words</strong>
                    <span class="amt-cl"> {{ strtoupper($receipt->amount_words) }} </span>
                </td>
            </tr>
        </table>

        <!-- Items -->
        <table class="items-table">
            <thead>
            <tr>
                <th>Payment For</th>
                <th>Amount (USD)</th>
            </tr>
            </thead>
            <tbody>
            @foreach($receipt->items as $item)
                <tr>
                    <td>{{ $item->description }}</td>
                    <td>{{ number_format($item->amount, 2) }}</td>
                </tr>
            @endforeach
            <tr class="total-row">
                <td>TOTAL</td>
                <td>{{ number_format($receipt->total, 2) }}</td>
            </tr>
            </tbody>
        </table>

        <!-- Signature -->
       <div class="signature">
          <div class="signature-name">

    </div>


    <div class="signature-line"></div>
    <div class="signature-text">Authorized Signature</div>
</div>


        <!-- Note -->
        <div class="note">
            Thank you for your payment.<br>
            This is a computer-generated receipt.
        </div>

    </div>
</div>
</body>
</html>
