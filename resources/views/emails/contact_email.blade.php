<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Confirmation</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f4f4f4">
        <tr>
            <td align="center" style="padding: 20px 0;">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" style="border-radius: 8px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
                    <!-- Header -->
                    <tr>
                        <td bgcolor="#010c29" style="padding: 20px; text-align: center; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                            <img src="{{ asset('frontend-assets/img/logo/logo-light.png') }}" alt="Nexus Movers" style="max-width: 120px;">
                        </td>
                    </tr>
                    <!-- Body -->
                    <tr>
                        <td style="padding: 30px; color: #333333;">
                            <h2 style="color: #010c29; text-align: center;">Thank You for Contacting Us!</h2>
                            <p style="font-size: 16px; line-height: 1.6; text-align: center;">
                                We appreciate your message and will get back to you as soon as possible.
                            </p>
                            <p style="font-size: 16px; font-weight: bold; margin-top: 20px;">Your Submission Details:</p>
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="10" border="0" style="background-color: #f8f8f8; border-radius: 8px;">
                                <tr>
                                    <td style="font-weight: bold;">Name:</td>
                                    <td>{{ $name }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Email:</td>
                                    <td>{{ $email }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Phone:</td>
                                    <td>{{ $phone }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Subject:</td>
                                    <td>{{ $subject }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Message:</td>
                                    <td>{{ $customerMessage }}</td>
                                </tr>
                            </table>
                            <p style="font-size: 16px; margin-top: 20px;">
                                If you have any further questions, feel free to reply to this email.
                            </p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td bgcolor="#010c29" style="padding: 15px; text-align: center; color: #ffffff; font-size: 14px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                            &copy; {{ date('Y') }} Nexus Movers. All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
