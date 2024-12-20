/*!

*/

// smooth scroll
$(document).ready(function(){
    $(".navbar .nav-link").on('click', function(event) {

        if (this.hash !== "") {

            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 700, function(){
                window.location.hash = hash;
            });
        } 
    });
});

// add blur to header 

const blurNavbar = () =>{
  const navbar = document.getElementById('navbar')
  //when the scroll is greater than 50 viewport height, add blur-navbar class to navbar
  //this.scrollY >= 50 ? navbar.classList.add('blur-navbar') : navbar.classList.remove('blur-navbar')
  if(this.scrollY >= 50){
    navbar.classList.add('blur-navbar')
    navbar.classList.remove('bg-white')
  }else{
    navbar.classList.remove('blur-navbar')
    navbar.classList.add('bg-white')
  }
}
window.addEventListener('scroll', blurNavbar)


// protfolio filters
$(window).on("load", function() {
    var t = $(".portfolio-container");
    t.isotope({
        filter: ".all",
        animationOptions: {
            duration: 750,
            easing: "linear",
            queue: !1
        }
    }), $(".filters a").click(function() {
        $(".filters .active").removeClass("active"), $(this).addClass("active");
        var i = $(this).attr("data-filter");
        return t.isotope({
            filter: i,
            animationOptions: {
                duration: 750,
                easing: "linear",
                queue: !1
            }
        }), !1
    });
});


// modify header height in blog 

  document.addEventListener('DOMContentLoaded', function() {
    // Get the header element and the page title element
    const singlePageClass = document.getElementById('page-title');
    const header = document.getElementById('header')

    // Check if the page-title element exists and has the specific class
    if (singlePageClass && singlePageClass.classList.contains('page-title')) {
        // If it's a sigle post page, change the class of a specific element
        header.classList.add('blog-header')
        header.classList.remove('header')
    }
});