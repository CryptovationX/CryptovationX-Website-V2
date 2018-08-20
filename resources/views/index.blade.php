<!DOCTYPE html>
<html lang="en">
<head>
    <!--   
    
 ██████╗██████╗ ██╗   ██╗██████╗ ████████╗ ██████╗ ██╗   ██╗ █████╗ ████████╗██╗ ██████╗ ███╗   ██╗██╗  ██╗
██╔════╝██╔══██╗╚██╗ ██╔╝██╔══██╗╚══██╔══╝██╔═══██╗██║   ██║██╔══██╗╚══██╔══╝██║██╔═══██╗████╗  ██║╚██╗██╔╝
██║     ██████╔╝ ╚████╔╝ ██████╔╝   ██║   ██║   ██║██║   ██║███████║   ██║   ██║██║   ██║██╔██╗ ██║ ╚███╔╝ 
██║     ██╔══██╗  ╚██╔╝  ██╔═══╝    ██║   ██║   ██║╚██╗ ██╔╝██╔══██║   ██║   ██║██║   ██║██║╚██╗██║ ██╔██╗ 
╚██████╗██║  ██║   ██║   ██║        ██║   ╚██████╔╝ ╚████╔╝ ██║  ██║   ██║   ██║╚██████╔╝██║ ╚████║██╔╝ ██╗
 ╚═════╝╚═╝  ╚═╝   ╚═╝   ╚═╝        ╚═╝    ╚═════╝   ╚═══╝  ╚═╝  ╚═╝   ╚═╝   ╚═╝ ╚═════╝ ╚═╝  ╚═══╝╚═╝  ╚═╝ 
 
 If you're reading, we're hiring.
 https://www.CryptovationX.io/careers
 
 -->

    @include ('page.meta')

    @include ('page.script')

  </head>
    <body class="royal_preloader background-white" data-spy="scroll" data-target=".navbar" data-offset="70">

    <div id="royal_preloader"></div>
    @include ('layout.navbar')
    @include ('page.header')
    @include ('page.vision')
    @include ('page.project')

    <section class="background-apple section-padding-top">
    @include ('page.table')
    @include ('page.robot')
    </section>

    <section class="background2 section-padding-top">
    @include ('page.howitworks')
    @include ('page.blog')
    </section>

    <section class="background-arbi-r">
    @include ('page.timeline')
    @include ('page.token')
    </section>

    <section class="background-specto-l section-padding-top">
    @include ('page.press')
    @include ('page.partner')
    </section>

    <section class="background-broca-r ">
    @include ('page.team_main')
    @include ('page.advisor')
    </section>

    @include ('page.teammore')
    <a href="https://t.me/joinchat/H2POp0-8T_X5FYBq_qfS6A" target="_blank">
        <i id="telegram" class="fab fa-telegram-plane fix-contact"></i>
    </a>
    @include ('layout.footer')

    
    
</body>
</html>

