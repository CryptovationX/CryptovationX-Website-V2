<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Demystifying Email Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body style=" background:#f0f0f0 ; margin: 0; padding: 0; font-family: 'Open Sans';">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr><td style="padding: 40px 30px 40px 30px;"></td></tr>
        <tr>
            <td align="center" >
                <img src="https://s3-ap-southeast-1.amazonaws.com/cryptovationx/public/CryptovationX_Header.jpg" width=100% style="display: block;" />
            </td>
        </tr>
        <tr>
            <td bgcolor="#fff" style="padding: 40px 30px 40px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td style="padding: 0 0 10px 0; font-size:20px;">
                            CXA Airdrop Deposit
                        </td>
                    </tr>
                    <tr><td><hr></td></tr>
                    <tr>
                        <td style="padding: 5px 0 10px 0; font-size:14px;">
                                <p>Dear {{ $info->lastname ." ".$info->firstname }},</p>            
                                <p>Congratulations! Your KYC verification has been successful. We deposited your CXA tokens to your account already. Please click the link below to access to your account.</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                                <div class="row"><a href={{"https://v2.cryptovationx.io/firstsignon/". $info->pic_passport}} style="background-color: rgb(238, 130, 91);
                                    border: none;
                                    color: white;
                                    padding: 7px 32px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;
                                    margin: 4px 2px;
                                    cursor: pointer;
                                    font-family: 'Open Sans', sans-serif;
                                    border-radius: 4px;"><span>Login</span></a></div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0 0 0; font-size:14px;">
                                <p>If you have any question about logging in, please do not hesitate to contact us. Thank you again for your great support.</p>
                                <p>Best regards, <br>
                                     Pondet Ananchai <br>
                                        CEO, CryptovationX  <br>
                                        </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#fff" style="padding: 20px 30px 30px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                            <hr>
                        <td width="75%" style="font-size:12px;">
                            &reg; Vistra Corporate Services Centre, Wickhams Cay II, Road Town, <br/>Tortola, VG1110, British Virgin Islands
                            <br/> x@cryptovationx.io | CryptovationX.io
                        </td>
                        <td align="right">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                        <td>
                                                <a href="https://medium.com/cryptovationx" style="color:grey; margin: 0 10px;" target="_blank">
                                                    <i class="fab fa-medium-m social-icons-dark-hover"></i>
                                                </a>
                                        </td>
                                    <td>
                                        <a href="https://www.facebook.com/cryptovation.co/"style="color:grey;margin: 0 10px;" target="_blank">
                                            <span class="fab fa-facebook-f social-icons-dark-hover"></span>
                                        </a>
                                    </td>
                                    
                                    
                                    <td>
                                            <a href="https://t.me/joinchat/H2POp0-8T_X5FYBq_qfS6A" style="color:grey;margin: 0 10px;" target="_blank">
                                                <i class="fab fa-telegram-plane social-icons-dark-hover"></i>
                                                </a>
                                    </td>
                                    <td>
                                    <a href="https://twitter.com/CryptovationX?lang=en" style="color:grey;margin: 0 10px;" target="_blank">
                                        <span class="fab fa-twitter social-icons-dark-hover"></span>
                                    </a>
                                     </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr><td style="padding: 40px 30px 40px 30px;"></td></tr>
    </table>
</body>

</html>