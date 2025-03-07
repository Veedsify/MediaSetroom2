<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>New Message Notification</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 0; background-color: #f4f4f4;">
      <table cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; margin: 20px auto; background: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            <tr>
                  <td style="padding: 20px;">
                        <table width="100%">
                              <tr>
                                    <td style="text-align: center; padding: 20px 0;">
                                            <img src="{{ asset('images/logo.png') }}" alt="MediaSetroom" style="max-width: 200px; height: auto; margin-bottom: 15px;">
                                            <h1 style="color: #007bff; margin: 0; font-size: 24px;">MediaSetroom</h1>
                                            <p style="color: #666; margin: 10px 0 0 0; font-size: 16px;">New Message Received</p>
                                    </td>
                              </tr>
                              <tr>
                                    <td style="padding: 20px;">
                                          <p style="margin-bottom: 20px;">A new message has been received from the contact form:</p>
                                          
                                          <table width="100%" style="border-collapse: collapse;">
                                                <tr>
                                                      <td style="padding: 10px; border-bottom: 1px solid #eee;"><strong>Name:</strong></td>
                                                      <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $data['name'] }}</td>
                                                </tr>
                                                <tr>
                                                      <td style="padding: 10px; border-bottom: 1px solid #eee;"><strong>Email:</strong></td>
                                                      <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $data['email'] }}</td>
                                                </tr>
                                                <tr>
                                                      <td style="padding: 10px; border-bottom: 1px solid #eee;"><strong>Phone:</strong></td>
                                                      <td style="padding: 10px; border-bottom: 1px solid #eee;">{{ $data['phone'] }}</td>
                                                </tr>
                                                <tr>
                                                      <td style="padding: 10px;" colspan="2">
                                                            <strong>Message:</strong><br>
                                                            <p style="margin-top: 10px; white-space: pre-line;">{{ $data['message'] }}</p>
                                                      </td>
                                                </tr>
                                          </table>
                                    </td>
                              </tr>
                              <tr>
                                    <td style="text-align: center; padding: 20px; background-color: #f8f9fa; color: #6c757d;">
                                          <p style="margin: 0;">This is an automated notification. Please do not reply to this email.</p>
                                    </td>
                              </tr>
                        </table>
                  </td>
            </tr>
      </table>
</body>
</html>
