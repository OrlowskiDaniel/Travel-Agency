function showSidebar() {
    const sidebar = document.querySelector(".header-sidebar")
    sidebar.style.display = "flex"
}
function hideSidebar() {
    const sidebar = document.querySelector(".header-sidebar")
    sidebar.style.display = "none"
}

function showAddFormFlight() {
    const sidebar = document.querySelector(".form-overlay-add")
    sidebar.style.display = "flex"
}
function hideAddFormFlight() {
    const sidebar = document.querySelector(".form-overlay-add")
    sidebar.style.display = "none"
}

function showAddFormHotel() {
    const sidebar = document.querySelector(".form-overlay-add")
    sidebar.style.display = "flex"
}
function hideAddFormHotel() {
    const sidebar = document.querySelector(".form-overlay-add")
    sidebar.style.display = "none"
}



function showFlightOptions(id) {
    document.querySelectorAll('.flight-options-overlay').forEach(opt => opt.classList.remove('show'));
    const overlay = document.getElementById('flightOptions-' + id);
    if (overlay) overlay.classList.add('show');
}

function hideFlightOptions() {
    document.querySelectorAll('.flight-options-overlay').forEach(opt => opt.classList.remove('show'));
}

function overlayClick(event) {
    if (event.target.classList.contains('flight-options-overlay')) {
        hideFlightOptions();
    }
}
function showAdminButtons(event) {
  // Hide all other adminButtons
  document.querySelectorAll('.admin-buttons').forEach(el => {
    if (el !== event.target.nextElementSibling) {
      el.style.display = 'none';
    }
  });

  // Toggle the clicked one
  const menu = event.target.nextElementSibling;
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }

  // Prevent event from bubbling to document
  event.stopPropagation();
}

// Hide all menus when clicking outside
document.addEventListener('click', function(e) {
  if (!e.target.closest('.buttons-admin-wrap')) {
    document.querySelectorAll('.admin-buttons').forEach(el => el.style.display = 'none');
  }
});


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



/* learn how it works, flights search onclick */
 function showFlightOptions() {
    const sidebar = document.querySelector(".flight-options")
    sidebar.style.display = "flex"
 }