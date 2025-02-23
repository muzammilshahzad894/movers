<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Confirmation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .bg-danger {
        background-color: #fff !important;
    }
    th {
        color: white;
    }
    td {
        color: black;
        font-weight: 500;
    }
    .footer {
        font-size: 12px;
        color: white;
        padding-left: 20px;
    }
    .header, .footer {
        width: 100%;
        text-align: left;
        background-color: #010c29;
        padding: 10px 0;
    }
</style>
<body>
    <div class="container my-4">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <img src="{{ asset('frontend-assets/img/logo/logo.png') }}" alt="logo"
                 style="height: 50px; width: 100px;" />
            </div>
            <div class="card-body">
                <div style="display: flex; justify-content: center; width: 100%; margin-bottom: 20px;">
                    <h3>Thank You for Contacting Us</h3>
                </div>
                <p>Thank you for reaching out to us. We have received your message and will get back to you shortly.</p>
                <p><strong>Details of your submission:</strong></p>
                <ul>
                    <li><strong>Name:</strong> {{ $name }}</li>
                    <li><strong>Email:</strong> {{ $email }}</li>
                    <li><strong>Phone:</strong> {{ $phone }}</li>
                    <li><strong>Subject:</strong> {{ $subject }}</li>
                    <li><strong>Message:</strong> {{ $customerMessage }}</li>
                </ul>
                <p>Feel free to reply to this email if you have any additional questions.</p>
            </div>
            <div class="footer">
                <p class="copyText text-center mt-1 mb-1">&copy; {{ date('Y') }} Nexus Movers. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>

