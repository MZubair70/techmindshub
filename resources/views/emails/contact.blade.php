<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background-color: #f4f4f4;">
    <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #f4f4f4; padding: 20px;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" border="0" cellspacing="0" cellpadding="0" style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #3b82f6; padding: 20px; text-align: center; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                            <h1 style="color: #ffffff; font-size: 24px; margin: 0;">New Contact Form Submission</h1>
                            <p style="color: #ffffff; font-size: 16px; margin: 5px 0 0;">From {{ config('app.name') }}</p>
                        </td>
                    </tr>
                    <!-- Body -->
                    <tr>
                        <td style="padding: 30px;">
                            <h2 style="color: #1f2937; font-size: 20px; margin: 0 0 20px;">Hello,</h2>
                            <p style="color: #4b5563; font-size: 16px; line-height: 1.5; margin: 0 0 20px;">
                                You have received a new inquiry from <strong>{{ $data['name'] }}</strong>.
                            </p>
                            <table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color: #f9fafb; border-radius: 6px; padding: 20px; margin-bottom: 20px;">
                                <tr>
                                    <td>
                                        <h3 style="color: #1f2937; font-size: 18px; margin: 0 0 10px;">Contact Details</h3>
                                        <p style="color: #4b5563; font-size: 16px; margin: 0 0 10px;">
                                            <strong>Name:</strong> {{ $data['name'] }}
                                        </p>
                                        <p style="color: #4b5563; font-size: 16px; margin: 0;">
                                            <strong>Email:</strong> <a href="mailto:{{ $data['email'] }}" style="color: #3b82f6; text-decoration: none;">{{ $data['email'] }}</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            <h3 style="color: #1f2937; font-size: 18px; margin: 0 0 10px;">Message</h3>
                            <p style="color: #4b5563; font-size: 16px; line-height: 1.5; margin: 0 0 20px; background-color: #f9fafb; border-radius: 6px; padding: 15px;">
                                {{ $data['message'] }}
                            </p>
                            <p style="color: #4b5563; font-size: 16px; margin: 0 0 20px;">
                                <span style="font-size: 20px;">📎</span> The resume file is attached with this email.
                            </p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f9fafb; padding: 20px; text-align: center; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                            {{-- <p style="color: #4b5563; font-size: 14px; margin: 0 0 10px;">
                                Thanks,<br>
                                <strong>{{ config('app.name') }} Team</strong>
                            </p> --}}
                            <p style="color: #6b7280; font-size: 12px; margin: 0;">
                                &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                            </p>
                            <p style="color: #6b7280; font-size: 12px; margin: 10px 0 0;">
                                <a href="mailto:writeme@bscje.com" style="color: #3b82f6; text-decoration: none;">Contact Us</a> | 
                                <a href="{{ config('app.url') }}" style="color: #3b82f6; text-decoration: none;">Visit Website</a>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- Responsive Media Queries -->
    <style>
        @media only screen and (max-width: 600px) {
            table[width="600"] {
                width: 100% !important;
            }
            td[style*="padding"] {
                padding: 15px !important;
            }
            h1 {
                font-size: 20px !important;
            }
            h2, h3 {
                font-size: 16px !important;
            }
            p {
                font-size: 14px !important;
            }
        }
    </style>
</body>
</html>