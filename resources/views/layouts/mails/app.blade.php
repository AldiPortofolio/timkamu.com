<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 10 - 27 can be safely removed. -->

    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
    <style>
        * {
            font-family: "Roboto", sans-serif, Helvetica, Arial, sans-serif;
        }
    </style>
    <![endif]-->

    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
    <!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        a[x-apple-data-detectors],  /* iOS */
        .unstyle-auto-detected-links a,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }
        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }
        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }
        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }

    </style>

    <!-- What it does: Makes background images in 72ppi Outlook render at correct size. -->
    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td-primary:hover,
        .button-a-primary:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        .help-text{
            font-size: 12px;
        }
        /* Media Queries */
        @media screen and (max-width: 550px) {

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }

            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }

            /* What it does: Adjust typography on small screens to improve readability */
            .email-container p {
                font-size: 17px !important;
            }
            h1{
                font-size: 24px !important;
            }
        }

    </style>
    <!-- Progressive Enhancements : END -->

    <style>
        /* attempt at standardized buttons */
        .sb-1 {
            border: 0;
            padding: 8px 25px;
        }
        .sb-red {
            background: rgb(233 30 99);
            color: rgb(255 255 255 / 90%);
        }
        .sb-outline {
            background: none;
            border: 1px solid rgb(255 255 255 / 20%);
            color: rgb(255 255 255 / 90%);
        }
        .sb-red:focus,
        .sb-red:active,
        .sb-red:hover {
            background: rgb(255 0 90);
            color: rgb(255 255 255 / 90%);
        }
        .sb-outline:focus,
        .sb-outline:active,
        .sb-outline:hover {
            background: rgb(255 255 255);
            border: 1px solid rgb(255 255 255);
            color: rgb(0 0 0 / 80%);
        }




        .btn {
            border:0px;
            /*line-height: 20px;*/
            border-radius: 0px;
            transition: all 0.2s ease-in-out !important;
            padding: 6px 22px;
        }
        .btn:focus,
        .btn:active,
        .btn:hover {
            outline: none;
        }
        .btn-primary {
            background: #e91e63;
            color: #ffffffee !important;
        }
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary:hover,
        .btn-primary:not(:disabled):not(.disabled).active, 
        .btn-primary:not(:disabled):not(.disabled):active, 
        .show>.btn-primary.dropdown-toggle {
            background: #ff1f6b;
            color: #ffffffee;
        }
        .btn-blue {
            background: #6543DF;
            color: #ffffffee !important;
        }
        .btn-blue:focus,
        .btn-blue:active,
        .btn-blue:hover,
        .btn-blue:not(:disabled):not(.disabled).active, 
        .btn-blue:not(:disabled):not(.disabled):active, 
        .show>.btn-blue.dropdown-toggle {
            background: #7f5ff1;
            color: #ffffffee;
        }
        .btn-orange {
            background: #ff5722;
            color: #ffffffee !important;
        }
        .btn-orange:focus,
        .btn-orange:active,
        .btn-orange:hover,
        .btn-orange:not(:disabled):not(.disabled).active, 
        .btn-orange:not(:disabled):not(.disabled):active, 
        .show>.btn-orange.dropdown-toggle {
            background: #f3754d;
            color: #ffffffee;
        }

        .btn.round {
            border-radius: 30px;
            padding: 8px 22px 10px 22px;
        }
        .button-icon {
            top: 0;
        }
        .badge-red {
            background: #ff1f6b;
            color: #ffffffee;
        }

        .btn-metro {
            padding: 12px 50px;
            font-weight: 800;
            border: 0px;
            border-radius: 0px;
        }
        .btn-metro.red {
            background: #ff0057;
            color: white;
        }
        .btn-metro.red:hover {
            background: #ff0057;
        }
    </style>

</head>
<!--
	The email background color (#222222) is defined in three places:
	1. body tag: for most email clients
	2. center tag: for Gmail and Inbox mobile apps and web versions of Gmail, GSuite, Inbox, Yahoo, AOL, Libero, Comcast, freenet, Mail.ru, Orange.fr
	3. mso conditional: For Windows 10 Mail
-->
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;">
    <center style="width: 100%; background-color: #ffffff;">
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #e1e1e1;">
            <tr>
                <td>

                    <!-- Visually Hidden Preheader Text : BEGIN -->
                    {{--<div style="display: none; font-size: 1px; line-height: 1px; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">--}}
                        {{--(Optional) This text will appear in the inbox preview, but not the email body. It can be used to supplement the email subject line or even summarize the email's contents. Extended text preheaders (~490 characters) seems like a better UX for anyone using a screenreader or voice-command apps like Siri to dictate the contents of an email. If this text is not included, email clients will automatically populate it using the text (including image alt text) at the start of the email's body.--}}
                    {{--</div>--}}
                    <!-- Visually Hidden Preheader Text : END -->

                    <!-- Create white space after the desired preview text so email clients don’t pull other distracting text into the inbox preview. Extend as necessary. -->
                    <!-- Preview Text Spacing Hack : BEGIN -->

                    <!-- Preview Text Spacing Hack : END -->

                    <!--
                        Set the email width. Defined in two places:
                        1. max-width for all clients except Desktop Windows Outlook, allowing the email to squish on narrow but never go wider than 680px.
                        2. MSO tags for Desktop Windows Outlook enforce a 680px width.
                        Note: The Fluid and Responsive templates have a different width (600px). The hybrid grid is more "fragile", and I've found that 680px is a good width. Change with caution.
                    -->
                    <div style="max-width: 550px; margin: 0 auto; " class="email-container">
                        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="550" style="background-color: #ffffff;">
                            <tr>
                                <td>
                                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                                        <tr>
                                            <td style="background-color: #ffffff;">
                                                <div style="padding-left: 10px; padding-right: 10px; text-align: center;">
                                                    <img src="https://timkamu.com/img/email-header.jpg" width="100%">
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Hero Image, Flush : END -->
                                        <div style="padding-left: 4%;padding-right: 4%">
                                            <br>
                                            @yield('content')
                                        </div>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
