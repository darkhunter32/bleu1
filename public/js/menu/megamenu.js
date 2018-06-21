/*global $ */
$(document).ready(function () {

    "use strict";

    $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
    //Checks if li has sub (ul) and adds class for toggle icon - just an UI


    $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
    //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

    $(".menu > #bottom_menu").before("<a href=\"#\" class=\"menu-mobile\"></a>");

    //Adds menu-mobile class (for mobile toggle menu) before the normal menu
    //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
    //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
    //Done this way so it can be used with wordpress without any trouble

    $(".menu > ul > li").hover(
        function (e) {
            if ($(window).width() > 1000) {
                $(this).children("ul").slideDown(300);
                e.preventDefault();
            }
        }, function (e) {
            if ($(window).width() > 1000) {
                $(this).children("ul").slideUp(50);
                e.preventDefault();
            }
        }
    );
    //If width is more than 943px dropdowns are displayed on hover

    $(".menu > ul > li").click(function(e) {
        if ($(window).width() < 1000) {
            
          $(this).children("ul").fadeToggle(150);
          var sub=0;
          $('.menu-dropdown-icon').each(function() {
            sub += $(this).height();
          });
          var n = $(".show-on-mobile").height()+sub-$(this).offset().top-50;
         // alert($(this).offset().top);
          $( ".show-on-mobile" ).scrollTop(n);
          
        }
    });
    //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

    $(".menu-mobile").click(function (e) {
        
        $(".menu > #bottom_menu").toggleClass('show-on-mobile');
        var o = $(".show-on-mobile").height();
         //alert(n);
          
       //$('#bottom_menu').css("display","block");
       $('#bottom_menu').css("margin-top","116px");
       $( ".show-on-mobile" ).scrollTop(o);
        e.preventDefault();
    });
    //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

});
