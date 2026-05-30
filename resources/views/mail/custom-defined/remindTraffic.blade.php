<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Usage Warning</title>
    <style>
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f7f9; color: #333333; }
        
        .email-container { max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05); margin-top: 40px; margin-bottom: 40px; }
        .header { background-color: #ffffff; padding: 30px 20px 10px 20px; text-align: center; border-bottom: 1px solid #eeeeee; }
        .content { padding: 30px 40px 40px 40px; text-align: left; }
        .footer { background-color: #f4f7f9; padding: 20px; text-align: center; font-size: 12px; color: #999999; }
        
        h1 { font-size: 24px; font-weight: bold; margin: 0 0 20px 0; color: #e67e22; text-align: center; }
        h2 { margin: 0; font-size: 20px; color: #333; font-weight: bold; }
        p { font-size: 16px; line-height: 1.6; margin: 0 0 15px 0; color: #555555; }
        
        .traffic-alert-box {
            background-color: #fffaf0;
            border-left: 4px solid #e67e22;
            padding: 20px;
            margin: 25px 0;
            border-radius: 4px;
            font-size: 16px;
            color: #555;
        }
            
        .traffic-alert-box strong {
            color: #d35400;
            font-size: 18px;
            font-family: 'Courier New', Courier, monospace;
        }

        .btn-check {
            display: inline-block;
            background-color: #e67e22;
            color: #ffffff;
            padding: 12px 30px;
            border-radius: 4px;
            font-weight: bold;
            text-decoration: none;
            margin-top: 10px;
        }
        .btn-check:hover { background-color: #d35400; }
        
        @media screen and (max-width: 600px) {
            .email-container { width: 100% !important; margin-top: 0; border-radius: 0; }
            .content { padding: 20px !important; }
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
                            <h1>📊 流量使用预警</h1>
                            
                            <p>尊敬的用户：</p>
                            <p>您的账户流量使用情况如下，请留意：</p>
                            
                            <div class="traffic-alert-box">
                                您本月的套餐流量已使用 <strong>95%</strong>，请合理安排使用，避免提前耗尽。
                            </div>
                            
                            <p style="text-align: center; color: #999; font-size: 13px;">
                                如果流量耗尽，可能会导致服务连接中断。
                            </p>
                            
                            <div style="text-align: center; margin-top: 30px;">
                                <a href="{{$url}}" class="btn-check">查看使用详情 / 购买流量</a>
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
