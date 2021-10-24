const formsBackground = document.querySelector('#forms-background')
const loginForm = document.querySelector('#login-form')
const registerForm = document.querySelector('#register-form')
const addOrderForm = document.querySelector('#add-order-form')
const regFormButton = document.querySelector('#regFormButton')
const loginInput = document.querySelector('#login')
const passwordInput = document.querySelector('#password')
const nameInput = document.querySelector('#name')
const regLoginInput = document.querySelector('#reg-login')
const emailInput = document.querySelector('#email')
const regPasswordInput = document.querySelector('#reg-password')
const passwordConfInput = document.querySelector('#password-conf')
const dataConfirmationInput = document.querySelector('#dataConfirmation')
const cabinetButton = document.querySelector('#cabinetButton')
const body = document.querySelector('#body')
const addressInput = document.querySelector('#address')
const descriptionInput = document.querySelector('#description')
const categoryInput = document.querySelector('#category')
const maxPriceInput = document.querySelector('#max_price')
const fileInput = document.querySelector('#uploadFile')

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
                if (data == 'Вы успешно вышли из аккаунта!') {
                    location.replace('/index.php')
                }
            })
            .catch(err => console.log(err))
    })
}