<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Submission</title>
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
                    <h3>New Contact Email Received</h3>
                </div>
                <p>Dear Admin,</p>
                <p>You have received a new contact submission. Here are the details:</p>
                <ul>
                    <li><strong>Name:</strong> {{ $name }}</li>
                    <li><strong>Email:</strong> {{ $email }}</li>
                    <li><strong>Phone:</strong> {{ $phone }}</li>
                    <li><strong>Subject:</strong> {{ $subject }}</li>
                    <li><strong>Message:</strong> {{ $customerMessage }}</li>
                </ul>
                <p>You can reply directly to the user by their email address.</p>
            </div>
            <div class="footer">
                <p class="copyText text-center mt-1 mb-1">&copy; {{ date('Y') }} Nexus Movers. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>

