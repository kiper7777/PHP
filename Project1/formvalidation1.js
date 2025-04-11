// document.getElementById("email").addEventListener("focus", (e) => {
//     document.getElementById("emailMessage").style.visibility = "visible";
//     document.getElementById("emailError").style.visibility = "hidden";
// });

// document.getElementById("email").addEventListener("blur", (e) => {
//     let email = document.getElementById("email").value.trim();
//     let emailError = document.getElementById("emailError");

//     document.getElementById("emailMessage").style.visibility = "hidden";

//     if (email === "") {
//         emailError.innerHTML = "Enter your email";
//         emailError.style.visibility = "visible";
//     } else if (!validateEmail(email)) {
//         emailError.innerHTML = "Enter a valid email address";
//         emailError.style.visibility = "visible";
//     } else {
//         emailError.style.visibility = "hidden";
//     }
// });


// document.getElementById("submit").addEventListener("click", (e) => {
//     e.preventDefault();
//     let email = document.getElementById('email').value.trim();
//     let emailError = document.getElementById("emailError");
//     let isValid = true;

//     let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
//     let emailMatch = emailPattern.test(email);

//     if (!emailMatch) {
//         emailError.innerHTML = "Please enter a valid email address";
//         emailError.style.visibility = "visible";
//         isValid = false;
//     } else {
//         emailError.style.visibility = "hidden";
//     }

//     if (isValid) {
//         alert("Form successfully submitted!");
//     }
//     console.log(email);
//     console.log(emailMatch);
//     console.log(emailPattern);
//     console.log(isValid);
   
// });

// function validateEmail(email) {
//     let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,20}$/;
//     return emailPattern.test(email);
// }