<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f7f9; color: #333333; }
        
        .email-container { max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05); margin-top: 40px; margin-bottom: 40px; }
        .header { background-color: #ffffff; padding: 30px 20px 10px 20px; text-align: center; }
        .content { padding: 20px 40px 40px 40px; text-align: left; }
        .footer { background-color: #f4f7f9; padding: 20px; text-align: center; font-size: 12px; color: #999999; }
        
        .code-box {
            background-color: #f0f8ff; 
            border: 1px dashed #3498db; 
            border-radius: 6px; 
            padding: 20px; 
            text-align: center; 
            margin: 25px 0;
        }
        .verification-code {
            font-size: 32px; 
            font-weight: 700; 
            color: #3498db; 
            letter-spacing: 4px;
            font-family: 'Courier New', Courier, monospace;
        }
        
        h1 { font-size: 24px; font-weight: bold; margin: 0 0 10px 0; color: #333333; }
        p { font-size: 16px; line-height: 1.6; margin: 0 0 15px 0; color: #555555; }
        a { color: #3498db; text-decoration: none; }
        a:hover { text-decoration: underline; }

        @media screen and (max-width: 600px) {
            .email-container { width: 100% !important; margin-top: 0; border-radius: 0; }
            .content { padding: 20px !important; }
            .verification-code { font-size: 28px; }
        }
    </style>
</head>
<body>

    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" style="padding: 20px 0;">
                
                <table class="email-container" border="0" cellpadding="0" cellspacing="0" width="100%">
                    
                    <tr>
                        <td class="header">
                            <h2 style="margin:0; color: #333;">{{$name}}</h2>
                        </td>
                    </tr>

                    <tr>
                        <td class="content">
                            <h1 style="text-align: center;">验证您的邮箱</h1>
                            <p style="margin-top: 20px;">尊敬的用户：</p>
                            <p>您正在进行注册或登录验证，请在验证页面输入以下验证码以完成操作：</p>
                            
                            <div class="code-box">
                                <span class="verification-code">{{$code}}</span>
                            </div>
                            
                            <p style="font-size: 14px; color: #888;">* 该验证码在 5 分钟内有效。如果您并未请求此验证码，请忽略此邮件。</p>
                            
                            <div style="text-align: center; margin-top: 30px;">
                                <a href="{{$url}}" style="display: inline-block; background-color: #3498db; color: #ffffff; padding: 12px 25px; border-radius: 4px; font-weight: bold;">前往官网</a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="footer">
                            <p>此邮件由系统自动发出，请勿直接回复。</p>
                            <p>&copy; {{ date('Y') }} {{$name}}. All Rights Reserved.</p>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>

</body>
</html>
