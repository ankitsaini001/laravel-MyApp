<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechByteChronicals - Contact Us</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }
        .email-header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .email-header p {
            margin: 10px 0 0 0;
            font-size: 14px;
            opacity: 0.9;
        }
        .email-body {
            padding: 40px 30px;
            color: #333333;
            line-height: 1.6;
        }
        .email-body p {
            margin: 0 0 15px 0;
            font-size: 16px;
        }
        .greeting {
            font-size: 18px;
            font-weight: 600;
            color: #667eea;
            margin-bottom: 20px;
        }
        .message-content {
            background-color: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 20px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .signature {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #e9ecef;
        }
        .signature p {
            margin: 5px 0;
        }
        .team-name {
            font-weight: 600;
            color: #667eea;
        }
        .email-footer {
            background-color: #2d3748;
            color: #ffffff;
            padding: 25px 30px;
            text-align: center;
            font-size: 13px;
        }
        .email-footer p {
            margin: 5px 0;
            opacity: 0.8;
        }
        .email-footer a {
            color: #667eea;
            text-decoration: none;
        }
        .divider {
            height: 1px;
            background-color: #e9ecef;
            margin: 20px 0;
        }
        .icon {
            display: inline-block;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>TechByteChronicals</h1>
            <p>Contact Form Confirmation</p>
        </div>

        <!-- Body -->
        <div class="email-body">
            <p class="greeting">Dear {{ $recipientName ?? 'Valued User' }},</p>
            
            <div class="message-content">
                <p><strong>Thank you for reaching out to us!</strong></p>
                <p>We have successfully received your message and our team will review it carefully. You can expect to hear back from us within 24-48 business hours.</p>
            </div>

            <p>We appreciate you taking the time to contact TechByteChronicals. Your feedback and inquiries are important to us, and we're committed to providing you with the best possible support.</p>

            <div class="divider"></div>

            <div class="signature">
                <p>Warm regards,</p>
                <p class="team-name">The TechByteChronicals Team</p>
                <p style="font-size: 14px; color: #6c757d; margin-top: 10px;">
                    <span class="icon">📧</span> Support Team
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p><strong>TechByteChronicals</strong></p>
            <p>This is an automated message. Please do not reply directly to this email.</p>
            <p style="margin-top: 15px;">
                © {{ date('Y') }} TechByteChronicals. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
