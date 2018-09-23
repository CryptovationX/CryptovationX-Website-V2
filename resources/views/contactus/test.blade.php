<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("partials.head")
    <title>CryptovationX | @yield('title')</title>
    @yield('style')
</head>

<body class="royal_preloader " data-spy="scroll" data-target=".navbar" data-offset="70">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZ5ZCBM" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="royal_preloader"></div>



    <div id="particles-js"></div>

    @include("layouts.balance_navbar")

    @yield("content")

    @include("partials.scripts")


    <style>
        {}
    </style>

    <br><br><br><br><br>

    <div class="bg c_margin">
        <div class="container">
            <div class="row">
                <div class="col-12 announcement_row">
                    <!-- Trigger/Open The Modal -->
                    <span id="announcement_myBtn"><i class="fas fa-bullhorn"></i>&nbsp; Announcing the Arbot (2.0 beta)</span>

                </div>
                <!-- The Modal -->
            </div>
            <!-- The Balance Modal -->
            <div id="balance_myModal" class="balance_modal">
                <!-- Modal content -->

            </div>
        </div>


        <!-- Begin MailChimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup {
                background: #fff;
                clear: left;
                font: 14px Helvetica, Arial, sans-serif;
            }

            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>

        <div id="mc_embed_signup" style="background:#f8f8ff;">
            <form action="https://facebook.us19.list-manage.com/subscribe/post?u=62f8ff3dcf0567a5268410529&amp;id=9d6f528da9"
                method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank"
                novalidate>
                <div id="mc_embed_signup_scroll">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-8">
                                <form name="sentMessage" id="contactForm" novalidate>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mce-FNAME">First Name <span class="asterisk">*</span>
                                                </label>
                                                <input class="form-control" type="text" value="" name="FNAME" class="required"
                                                    id="mce-FNAME" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mce-LNAME">Last Name <span class="asterisk">*</span>
                                                </label>
                                                <input class="form-control" type="text" value="" name="LNAME" class="required"
                                                    id="mce-LNAME">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mce-EMAIL">Email Address <span class="asterisk">*</span>
                                                </label>
                                                <input class="form-control" type="email" value="" name="EMAIL" class="required email"
                                                    id="mce-EMAIL" required>
                                                <span class="required-dot invalid-input"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mce-MMERGE4">Country <span class="asterisk">*</span>
                                                </label>
                                                <input class="form-control" type="text" value="" name="MMERGE4" class="required"
                                                    id="mce-MMERGE4" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mce-MMERGE3">Company </label>
                                                <input class="form-control" type="text" value="" name="MMERGE3" class=""
                                                    id="mce-MMERGE3">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="mce-MMERGE5">Message </label>
                                                <textarea rows="5" class="form-control" name="MMERGE5" class="" id="mce-MMERGE5"></textarea>
                                            </div>

                                            <div class="text-center"><button type="submit" name="subscribe"
                                                    id="mc-embedded-subscribe" class="button btn" disabled>Contact us</button>
                                            </div>
                                        </div>

                                        <script>
                                            
                                        </script>
                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                                name="b_62f8ff3dcf0567a5268410529_9d6f528da9" tabindex="-1" value=""></div>



                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>



    </div>

    @include("partials.footer")


</body>

</html>