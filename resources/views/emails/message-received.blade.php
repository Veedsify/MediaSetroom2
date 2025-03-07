<!DOCTYPE html>
<html>
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Message Received</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif;">
      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                  <td align="center" style="padding: 40px 0;">
                        <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="border: 1px solid #cccccc;">
                              <!-- Header -->
                                <tr>
                                          <td style="padding: 20px; background-color: #333333; border-bottom: 1px solid #cccccc;">
                                                  <img src="{{ asset('images/logo.png') }}" alt="Media Settroom" style="max-width: 200px; height: auto; margin-bottom: 10px;">
                                                  <h1 style="margin: 0; color: #ffffff; font-family: 'Arial', sans-serif; font-size: 24px;">Message Received</h1>
                                          </td>
                                </tr>

                              <!-- Content -->
                              <tr>
                                    <td style="padding: 20px;">
                                          <p style="margin: 0 0 15px 0; color: #000000;">Dear {{ $name }},</p>
                                          
                                          <p style="margin: 0 0 15px 0; color: #000000;">Thank you for contacting us. We have received your message and will get back to you shortly.</p>                                          
                                          
                                          <p style="margin: 0; color: #000000;">Best regards,<br>{{ config('app.name') }} Team</p>
                                    </td>
                              </tr>

                              <!-- Footer -->
                              <tr>
                                    <td style="padding: 20px; background-color: #ffffff; border-top: 1px solid #cccccc; text-align: center;">
                                          <p style="margin: 0; font-size: 12px; color: #666666;">This is an automated message, please do not reply to this email.</p>
                                    </td>
                              </tr>
                        </table>
                  </td>
            </tr>
      </table>
</body>
</html>
