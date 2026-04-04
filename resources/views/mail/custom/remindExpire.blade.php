<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Expiry Warning</title>
    <style>
        /* 基础重置 */
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f7f9; color: #333333; }
        
        /* 容器样式 */
        .email-container { max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05); margin-top: 40px; margin-bottom: 40px; }
        .header { background-color: #ffffff; padding: 30px 20px 10px 20px; text-align: center; border-bottom: 1px solid #eeeeee; }
        .content { padding: 30px 40px 40px 40px; text-align: left; }
        .footer { background-color: #f4f7f9; padding: 20px; text-align: center; font-size: 12px; color: #999999; }
        
        /* 文本样式 */
        h1 { font-size: 24px; font-weight: bold; margin: 0 0 20px 0; color: #e74c3c; text-align: center; } /* 使用红色标题引起注意 */
        h2 { margin: 0; font-size: 20px; color: #333; font-weight: bold; }
        p { font-size: 16px; line-height: 1.6; margin: 0 0 15px 0; color: #555555; }
        
        /* 提醒框 */
        .alert-box {
            background-color: #fff8f6;
            border: 1px solid #fadbd8;
            border-radius: 6px;
            padding: 20px;
            margin: 20px 0;
            text-align: center;
        }
        .highlight-time {
            font-size: 24px;
            font-weight: bold;
            color: #e74c3c;
        }

        /* 按钮样式 */
        .btn-renew {
            display: inline-block;
            background-color: #e74c3c; /* 红色按钮表示紧急/重要 */
            color: #ffffff;
            padding: 12px 30px;
            border-radius: 4px;
            font-weight: bold;
            text-decoration: none;
            margin-top: 10px;
        }
        .btn-renew:hover { background-color: #c0392b; }
        
        /* 移动端适配 */
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
                            <h1>⚠️ 订阅即将到期</h1>
                            
                            <p>尊敬的用户：</p>
                            <p>我们注意到您的订阅套餐即将结束，为了确保您的服务不被中断，请留意以下信息：</p>
                            
                            <div class="alert-box">
                                <p style="margin-bottom: 5px;">距离服务停止还有</p>
                                <span class="highlight-time">24 小时</span>
                            </div>
                            
                            <p style="text-align: center; color: #777; font-size: 14px;">
                                请及时续费以维持服务的正常使用。
                            </p>
                            
                            <div style="text-align: center; margin-top: 30px;">
                                <a href="{{$url}}" class="btn-renew">立即续费</a>
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
