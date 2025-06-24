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



function showEditForm(event) {
  // get the container where button is clicked
  const buttonContainer = event.target.closest('.buttons-admin-wrap');

  // get form overlay inside that container
  const thisFormOverlay = buttonContainer.querySelector('.form-overlay');

  // get all form overlays on the page
  const allFormOverlays = document.querySelectorAll('.form-overlay');

  // loop through all overlays
  allFormOverlays.forEach(function (overlay) {
    // show the one clicked hide the others
    if (overlay === thisFormOverlay) {
      overlay.style.display = 'flex';
    } else {
      overlay.style.display = 'none';
    }
  });
}
function closeEditForm(event) {

  // find the closest form overlay and hide it
  const formOverlay = event.target.closest('.form-overlay');
  if (formOverlay) {
    formOverlay.style.display = 'none';
  }
}


function showAdminButtons(event) {
  // hide all other adminButtons
  document.querySelectorAll('.admin-buttons').forEach(el => {
    if (el !== event.target.nextElementSibling) {
      el.style.display = 'none';
    }
  });

  // toggle the clicked one
  const menu = event.target.nextElementSibling;
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
}

// hide all menus when clicking outside
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

const input = document.getElementById('flight_price');

input.addEventListener('input', () => {
  const value = input.value;
  // use regex to match a number with up to two decimal places
  const regex = /^\d+(\.\d{0,2})?$/;

  if (!regex.test(value)) {
    // if invalid, remove the last character
    input.value = value.slice(0, -1);
window.addEventListener("DOMContentLoaded", () => {
  const dialog = document.querySelector(".dialog");

  if (!dialog) {
    console.warn("Dialog not found.");
    return;
  }

  const dialogTitle = dialog.querySelector(".dialogTitel");
  const dialogText = dialog.querySelector(".dialogText");
  const closeButton = dialog.querySelector(".dialogCloseButton");

  document.querySelectorAll(".photo-grid img").forEach(img => {
    img.addEventListener("click", () => {
      dialogTitle.textContent = img.dataset.title;
      dialogText.textContent = img.dataset.description;
      dialog.showModal();
    });
  });

  closeButton.addEventListener("click", () => {
    dialog.close();
  });
});