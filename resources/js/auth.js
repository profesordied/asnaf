// icon
const authToggler = document.getElementById("auth-toggler");
const registerIcon = document.getElementById("register-icon");
const loginIcon = document.getElementById("login-icon");

const goRegisterBtn = document.getElementById("go-register");
const goLoginBtn = document.getElementById("go-login");

goRegisterBtn.addEventListener("click", () => {
    authToggler.checked = true;
    registerIcon.classList.remove("hidden");
    registerIcon.classList.add("block");
    loginIcon.classList.remove("block");
    loginIcon.classList.add("hidden");
});

goLoginBtn.addEventListener("click", () => {
    authToggler.checked = false;
    loginIcon.classList.remove("hidden");
    loginIcon.classList.add("block");
    registerIcon.classList.remove("block");
    registerIcon.classList.add("hidden");
});
