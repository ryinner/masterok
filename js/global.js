const formsBackground = document.querySelector('#forms-background')
const loginForm = document.querySelector('#login-form')
const registerForm = document.querySelector('#register-form')
const regFormButton = document.querySelector('#regFormButton')
const loginInput = document.querySelector('#login')
const passwordInput = document.querySelector('#password')
const nameInput = document.querySelector('#name')
const regLoginInput = document.querySelector('#reg-login')
const emailInput = document.querySelector('#email')
const regPasswordInput = document.querySelector('#reg-password')
const passwordConfInput = document.querySelector('#password-conf')
const dataConfirmationInput = document.querySelector('#dataConfirmation')
const addOrderBtn = document.querySelector('#addOrderBtn')

if (document.getElementById('header__link_enter') == null) {
    exitButton = document.getElementById('header__link_exit')
} else {
    enterButton = document.getElementById('header__link_enter')
}