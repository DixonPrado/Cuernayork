function openNav() {
  document.getElementById("Sidebar-responsive").style.left = "0";
}

function closeNav() {
  document.getElementById("Sidebar-responsive").style.left = "-100%";

}
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