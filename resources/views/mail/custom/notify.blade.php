<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
    <style>
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f7f9; color: #333333; }
        
        .email-container { max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05); margin-top: 40px; margin-bottom: 40px; }
        .header { background-color: #ffffff; padding: 30px 20px 10px 20px; text-align: center; border-bottom: 3px solid #3498db; }
        .content { padding: 30px 40px 40px 40px; text-align: left; }
        .footer { background-color: #f4f7f9; padding: 20px; text-align: center; font-size: 12px; color: #999999; }
        
        h1 { font-size: 22px; font-weight: bold; margin: 0 0 20px 0; color: #333333; text-align: center;}
        h2 { margin: 0; font-size: 24px; color: #333; }
        p { font-size: 16px; line-height: 1.6; margin: 0 0 15px 0; color: #555555; }
        
        .notification-body {
            background-color: #f9f9f9;
            border-left: 4px solid #3498db;
            padding: 20px;
            margin: 20px 0;
            font-size: 15px;
            line-height: 1.8;
            color: #444;
            border-radius: 4px;
        }

        .btn-primary {
            display: inline-block;
            background-color: #3498db;
            color: #ffffff;
            padding: 12px 25px;
            border-radius: 4px;
            font-weight: bold;
            text-decoration: none;
            margin-top: 10px;
        }
        
        @media screen and (max-width: 600px) {
            .email-container { width: 100% !important; margin-top: 0; border-radius: 0; }
            .content { padding: 20px !important; }
            .notification-body { padding: 15px; }
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
                            <h2>{{$name}}</h2>
                        </td>
                    </tr>

                    <tr>
                        <td class="content">
                            <h1>站点公告</h1>
                            <p>尊敬的用户：</p>
                            
                            <div class="notification-body">
                                {!! nl2br($content) !!}
                            </div>
                            
                            <p style="margin-top: 30px; text-align: center;">
                                <a href="{{$url}}" class="btn-primary">访问官网查看详情</a>
                            </p>
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
