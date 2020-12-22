const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");
loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "carolina gomez manzano" && password === "1234") {
        window.location.href = "http://www.veronicamarquez23.com/vidrioTemplado/interfaz.html";
    } else{
        loginErrorMsg.style.opacity = 1;
    }
})