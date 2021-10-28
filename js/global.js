const formsBackground = document.getElementById('forms-background')
const loginForm = document.getElementById('login-form')
const registerForm = document.getElementById('register-form')
const addOrderForm = document.getElementById('add-order-form')
const regFormButton = document.getElementById('regFormButton')
const loginInput = document.getElementById('login')
const passwordInput = document.getElementById('password')
const nameInput = document.getElementById('name')
const regLoginInput = document.getElementById('reg-login')
const emailInput = document.getElementById('email')
const regPasswordInput = document.getElementById('reg-password')
const passwordConfInput = document.getElementById('password-conf')
const dataConfirmationInput = document.getElementById('dataConfirmation')
const cabinetButton = document.getElementById('cabinetButton')
const body = document.getElementById('body')
const addressInput = document.getElementById('address')
const descriptionInput = document.getElementById('description')
const categoryInput = document.getElementById('category')
const maxPriceInput = document.getElementById('max_price')
const fileInput = document.getElementById('uploadFile')
const alert = document.getElementById('alert__body')
const alertText = document.getElementById('alert__text')
const alertBtn = document.getElementById('alert__btn')

if (document.getElementById('header__link_enter') == null) {
    exitButton = document.getElementById('header__link_exit')
} else {
    enterButton = document.getElementById('header__link_enter')
}

// exit button

if (typeof exitButton !== 'undefined') {
    exitButton.addEventListener('click', () => {
        sendRequest('get', '/php/logout.php')
            .then(data => {
                showAlert(data)
                if (data == 'Вы успешно вышли из аккаунта!') {
                    setTimeout(() => {
                        location.replace('/index.php')
                    }, 2500);
                }
            })
            .catch(err => console.log(err))
    })
}

alertBtn.addEventListener('click', () => {
    alert.classList.remove('alert__body_visible')
})