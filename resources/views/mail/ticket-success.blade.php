<!DOCTYPE html>
<html>
<head>
    <style>
        body, table, td, a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table, td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>
</head>
<body style="background-color: #ffffff; margin: 0 !important; padding: 0 !important;">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#426899" align="center">
            <table border="0" cellpadding="0" cellspacing="0" width="480">
                <tr>
                    <td align="center" valign="top" style="padding: 40px 10px 40px 10px;">
                        <div style="display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 18px;"
                             border="0">Movie Flix
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#426899" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="480">
                <tr>
                    <td bgcolor="#ffffff" align="left" valign="top"
                        style="padding: 30px 30px 20px 30px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;">
                        <h1 style="font-size: 32px; font-weight: 400; margin: 0; text-align: center;">Berhasil</h1>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="480">
                <tr>
                    <td bgcolor="#ffffff" align="left">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td colspan="2"
                                    style="padding-left: 30px; padding-right: 15px; padding-bottom: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                    <p>Terima kasih telah memesan tiket di Movie Flix. Kami sangat menghargai kepercayaan Anda kepada kami dan berharap Anda akan menikmati pengalaman menonton di layanan kami.</p>
                                </td>
                            </tr>
@foreach($status_kursi as $index => $kursi)
    <tr>
        <th align="left" valign="top"
            style="padding-left: 30px; padding-right: 15px; padding-bottom: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px; {{$index > 0 ? 'border-top: 2px solid #dddddd;' : ''}} background-color: {{ $index % 2 == 0 ? '#f4f4f4' : '#ffffff' }}">
            Judul Film
        </th>
        <td align="left" valign="top"
            style="padding-left: 15px; padding-right: 30px; padding-bottom: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px; {{$index > 0 ? 'border-top: 2px solid #dddddd;' : ''}} background-color: {{ $index % 2 == 0 ? '#f4f4f4' : '#ffffff' }}">
            {{$pesanan->film->judul}}
        </td>
    </tr>
    <tr>
        <th align="left" valign="top"
            style="padding-left: 30px; padding-right: 15px; padding-bottom: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px; background-color: {{ $index % 2 == 0 ? '#f4f4f4' : '#ffffff' }}">
            Tanggal
        </th>
        <td align="left" valign="top"
            style="padding-left: 15px; padding-right: 30px; padding-bottom: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px; background-color: {{ $index % 2 == 0 ? '#f4f4f4' : '#ffffff' }}">
            {{$pesanan->film->jadwal_tayang}}
        </td>
    </tr>
    <tr>
        <th align="left" valign="top"
            style="padding-left: 30px; padding-right: 15px; padding-bottom: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px; background-color: {{ $index % 2 == 0 ? '#f4f4f4' : '#ffffff' }}">
            Jam
        </th>
        <td align="left" valign="top"
            style="padding-left: 15px; padding-right: 30px; padding-bottom: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px; background-color: {{ $index % 2 == 0 ? '#f4f4f4' : '#ffffff' }}">
            {{$pesanan->film->jam_tayang}}
        </td>
    </tr>
    <tr>
        <th align="left" valign="top"
            style="padding-left: 30px; padding-right: 15px; padding-bottom: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px; {{$index < count($status_kursi) - 1 ? 'border-bottom: 2px solid #dddddd;' : ''}} background-color: {{ $index % 2 == 0 ? '#f4f4f4' : '#ffffff' }}">
            Nomor Kursi
        </th>
        <td align="left" valign="top"
            style="padding-left: 15px; padding-right: 30px; padding-bottom: 10px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px; {{$index < count($status_kursi) - 1 ? 'border-bottom: 2px solid #dddddd;' : ''}} background-color: {{ $index % 2 == 0 ? '#f4f4f4' : '#ffffff' }}">
            {{$kursi->nomor_kursi}}
        </td>
    </tr>
@endforeach



                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#ffffff" align="center">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td bgcolor="#ffffff" align="center"
                                    style="padding: 30px 30px 30px 30px; border-top: 1px solid #dddddd;">
                                    <table border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <!-- ICON 4 -->
                                            <td align="center" valign="middle"
                                                style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;">
                                                <a target="_blank" href="https://raw.githubusercontent.com/konsav/email-templates/"
                                                   style="text-decoration: none;">
                                                    <img border="0" vspace="0" hspace="0"
                                                         style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block; color: #000000;"
                                                         alt="I" title="Instagram" width="44" height="44"
                                                         src="https://raw.githubusercontent.com/konsav/email-templates/master/images/social-icons/instagram.png">
                                                </a>
                                            </td>
                                            <!-- ICON 3 -->
                                            <td align="center" valign="middle"
                                                style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;">
                                                <a target="_blank" href="https://raw.githubusercontent.com/konsav/email-templates/"
                                                   style="text-decoration: none;">
                                                    <img border="0" vspace="0" hspace="0"
                                                         style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block; color: #000000;"
                                                         alt="G" title="Google Plus" width="44" height="44"
                                                         src="https://raw.githubusercontent.com/konsav/email-templates/master/images/social-icons/googleplus.png">
                                                </a>
                                            </td>
                                            <!-- ICON 2 -->
                                            <td align="center" valign="middle"
                                                style="margin: 0; padding: 0; padding-left: 10px; padding-right: 10px; border-collapse: collapse; border-spacing: 0;">
                                                <a target="_blank" href="https://raw.githubusercontent.com/konsav/email-templates/"
                                                   style="text-decoration: none;">
                                                    <img border="0" vspace="0" hspace="0"
                                                         style="padding: 0; margin: 0; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border: none; display: inline-block; color: #000000;"
                                                         alt="T" title="Twitter" width="44" height="44"
                                                         src="https://raw.githubusercontent.com/konsav/email-templates/master/images/social-icons/twitter.png">
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
