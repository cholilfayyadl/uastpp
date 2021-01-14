 // HEADER NAVIGATION SCRIPT
 window.onscroll = function() {myFunction()};

 var header = document.getElementById("myHeader");
 var sticky = header.offsetTop;

 function myFunction() {
     if (window.pageYOffset > sticky) {
         header.classList.add("sticky");
     } else {
         header.classList.remove("sticky");
     }
 }

 // TOGGLE CLICK MENU RESPONSIVE
 $(".navbar-toggler").click(function(){
     $(this).closest(".navbar").addClass("toggled-navbar");
     if ($(this).next().hasClass("show")) {
         $(this).closest(".navbar").removeClass("toggled-navbar");
         
         console.log($(this).next());
     } else {
         
         $(this).closest(".navbar").addClass("toggled-navbar");
     }
 });
 // END OF HEADER NAVIGATION SCRIPT


 $(".btn-search-global").click(function(){
    $(".searchbox-global").fadeIn(150);
    setTimeout(function(){
        $(".searchbox-global").addClass("visible");
    },10);
    
 });

//  function keyPress (e) {
//     if(e.key === "Escape") {
        
//     }
// }
$(document).keyup(function(e) {
    if (e.key === "Escape") { // escape key maps to keycode `27`
    setTimeout(function(){
        $(".searchbox-global").removeClass("visible");
    },100);
    $(".searchbox-global").fadeOut(400);
   }
});

$(document).ready(function(){
    $(".toggle-menu-profile").click(function(){
        if ($('.menu-profile').hasClass('toggled-profile')) {
            $(".menu-profile").slideToggle();
            $('.menu-profile').removeClass("toggled-profile");
        } else {
            $(".menu-profile").slideToggle();
            $('.menu-profile').addClass("toggled-profile");
        }
       
        
    });
});


