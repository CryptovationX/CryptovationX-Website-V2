<!DOCTYPE html>
<html lang="en">
<head>
    @include ('page.meta')
    @include ('page.script')
  </head>
<body>
    @include ('layout.navbar')
    @include ('page.header')
    @include ('page.robot')
    @include ('page.howitworks')
    @include ('page.blog')
    @include ('page.timeline')
    @include ('page.press')
    @include ('page.partner')
    @include ('page.team_main')
    <div class="text-center">
        <a class="btn-x-x" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                More Team
        </a>
    </div>
    <div class="collapse" id="collapseExample">
        <div class="container">
            @include ('page.team_tech')
            @include ('page.team_ai')
            @include ('page.team_business')
            @include ('page.team_marketing')
        </div>
    </div>
    @include ('page.advisor')
    <a href="https://t.me/joinchat/H2POp0-8T_X5FYBq_qfS6A" target="_blank">
        <i id="telegram" class="fab fa-telegram-plane fix-contact"></i>
    </a>
    @include ('layout.footer')

    
    
</body>
</html>

