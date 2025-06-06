function showSidebar() {
    const sidebar = document.querySelector(".header-sidebar")
    sidebar.style.display = "flex"
}
function hideSidebar() {
    const sidebar = document.querySelector(".header-sidebar")
    sidebar.style.display = "none"
}

/* learn how it works */
 function showOptions() {
    document.location.href='contact.php';
window.addEventListener("DOMContentLoaded", function () {
  var currentPath = window.location.pathname.split("/").pop(); // g et current file name
  var header = document.getElementById("admin-side-bar");
  var btns = header.getElementsByClassName("btn");

  for (var i = 0; i < btns.length; i++) {
    var btnPath = btns[i].getAttribute("href").split("/").pop();
    if (btnPath === currentPath) {
      btns[i].classList.add("active");
    }
  }
});


window.addEventListener("DOMContentLoaded", function () {
  var currentPath = window.location.pathname.split("/").pop(); // get current file name
  var header = document.getElementById("header");
  var btns = header.getElementsByClassName("header-btn");

  for (var i = 0; i < btns.length; i++) {
    var btnPath = btns[i].getAttribute("href").split("/").pop();
    if (btnPath === currentPath) {
      btns[i].classList.add("active");
    }
  }
});

 }