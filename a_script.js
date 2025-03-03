var x = document.getElementById('login');
var y = document.getElementById('register');
var z = document.getElementById('btn');

function register() {
    x.style.left = '-400px';
    y.style.left = '50px';
    z.style.left = '110px';
}

function login() {
    x.style.left = '50px';
    y.style.left = '450px';
    z.style.left = '0px';
}

var modal = document.getElementById('login-form');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

const toggleBtn = document.querySelector(".toggle__btn");
const toggleBtnIcon = document.querySelector(".toggle__btn i");
const menu = document.querySelector(".nav__links");

toggleBtn.onclick = function () {
    menu.classList.toggle("open");
    const isOpen = menu.classList.contains("open");
    toggleBtnIcon.classList = isOpen ? "ri-close-line" : "ri-menu-line";
};



function showSuccessAlert(event) {
    // Prevent the default form submission
    event.preventDefault();
    
    // Display the success alert
    document.getElementById('success-alert').style.display = 'block';
    
    // Optionally, you can redirect the user or perform other actions here
    // window.location.href = 'welcome.html';
    
    return false; // Prevent the form from submitting normally
}