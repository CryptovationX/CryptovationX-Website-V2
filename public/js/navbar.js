$(window).scroll(function() {    
    
    var scroll = $(window).scrollTop();

    if (scroll >= 5) {
        $(".navbar-default").css({
            background: '#fff',
            padding: '0'
        });
        $(".navbar-default .navbar-nav>li>a").css('color','#000');
        $(".navbar-brand-mat>img").attr("src","images/Token.png");
        $(".navbar-default .navbar-toggle .icon-bar").css("background-color","#3498db");
        $(".hamline").css("background-color","#3498db");
        $("#controller").css("color","black");
        $("#controller").css("margin-left","20");
        
       
        


        // $(".navbar-default").css('border-bottom','0.5px solid #090c1b');
    } else {
        $(".navbar-default, .navbar-default .navbar-nav>li>a").removeAttr('style');
        $(".navbar-brand-mat>img").attr("src","images/Token3.png");
        $(".navbar-default .navbar-toggle .icon-bar").css("background-color","#fff");
        $(".hamline").css("background-color","white");
        $("#controller").css("color","white");
        $("#controller").css("margin-left","0");
        
      
       
        // $(".navbar-default").css('none');
    }

});

$('button[data-target="#navbar-top-toggle"]').on('click',function() {
    $('.navbar.navbar-default').toggleClass('bg-navbar-toggle');
});

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}