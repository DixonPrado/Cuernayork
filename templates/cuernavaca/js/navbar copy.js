function openNav() {
  document.getElementById("Sidebar-responsive").style.left = "0";
  //document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("Sidebar-responsive").style.left = "-100%";
  //document.getElementById("main").style.marginLeft= "0";
}
var screenvar = (function(){})();
if(screen.width >= 1024){
  window.onscroll = function() {myFunction()};

  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }
}
if(screen.width < 1024){
    //document.querySelector('.encabezado-header').classList.toggle('nav-mobile');
    window.onscroll = function() {myFunction2()};
    var navbarmobile = document.getElementById("header-content");
    var sticky2 = navbarmobile.offsetTop;

    function myFunction2() {
      if (window.pageYOffset >= sticky2) {
        navbarmobile.classList.add("sticky")
      } else {
        navbarmobile.classList.remove("sticky");
      }
    } 
}