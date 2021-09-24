const sendBtn = document.querySelector("#send-btn");
const form = document.querySelectorAll("form");
const successMsg = document.querySelectorAll(".form-sent-msg");
const fullName = document.querySelector("#name");
const email = document.querySelector("#email");
const message = document.querySelector("#message");
const inputList = [fullName, email, message]; 

function successAlert() {
    for (const elem of inputList) {
        elem.value == ""
    }
    alert("The message has been submitted. We will get back in touch with you soon! Have a great day!");
}

function sendSuccessMessage() {
    for (let i = 0; i < form.length; i += 1){
        form[i].style.display = 'none';
    }

    for (let i = 0; i < successMsg.length; i += 1){
        successMsg[i].style.display = "flex";
    }
}

sendBtn.addEventListener("click", () => {
    if ((fullName.value == "" || fullName.value == null) || (email.value == "" || email.value == null) || (message.value == "" || message.value == null)) {
        return false;
    }
    sendSuccessMessage();
});

// Toggle Responsive Menu 
function toggleMenu() {
    var x = document.querySelector(".nav-bar");
    if (x.className === "nav-bar") {
      x.className += " responsive";
    } else {
      x.className = "nav-bar";
    }
}

// // CHANGE BACKGROUND COLOR ON SCROLL Y

// var navbar = document.querySelector('.nav-bar')

// window.onscroll = function() {
//   if (window.pageYOffset > 0) {
//     navbar.classList.add('scrolled')
//   } else {
//     navbar.classList.remove('scrolled')
//   }
// };

