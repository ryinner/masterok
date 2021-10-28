registerForm.addEventListener('click', (event) => {
    event.stopPropagation()
})

loginForm.addEventListener('click', (event) => {
    event.stopPropagation()
})

if (typeof enterButton !== 'undefined') {
    enterButton.addEventListener('click', () => {
        formsBackground.classList.toggle('visible')
        loginForm.classList.add('visible')
        body.classList.add('body_hide')
    })
}

regFormButton.addEventListener('click', () => {
    loginForm.classList.remove('visible')
    registerForm.classList.add('visible')
})

formsBackground.addEventListener('click', (event) => {
    closeForms()
})

// validation

loginInput.addEventListener('input', () => {
    inputStylesChange(loginInput)
    isValid = /^[A-Za-z._]+$/.test(loginInput.value)
    isValidActions(isValid, loginInput)
})

passwordInput.addEventListener('input', () => {
    isValid = /^[A-zА-я0-9,./;'\-=+_|':?><`~*@]{8,72}$/.test(passwordInput.value)
    inputStylesChange(passwordInput)
    isValidActions(isValid, passwordInput)
})

nameInput.addEventListener('input', () => {
    isValid = /^[А-Яа-яЁё\s-]+$/.test(nameInput.value)
    inputStylesChange(nameInput)
    isValidActions(isValid, nameInput)
})

regLoginInput.addEventListener('input', () => {
    isValid = /^[A-Za-z.]+$/.test(regLoginInput.value)
    inputStylesChange(regLoginInput)
    isValidActions(isValid, regLoginInput)
})

emailInput.addEventListener('input', () => {
    isValid = /^([A-z0-9_.-]{2,})@([A-z0-9_-]{2,}).([A-z]{2,})/.test(emailInput.value)
    inputStylesChange(emailInput)
    isValidActions(isValid, emailInput)
})

regPasswordInput.addEventListener('input', () => {
    isValid = /^[A-zА-я0-9,./;'\-=+_|':?><`~*@]{8,}$/.test(regPasswordInput.value)
    inputStylesChange(regPasswordInput)
    isValidActions(isValid, regPasswordInput)
})

passwordConfInput.addEventListener('input', () => {
    isValid = (regPasswordInput.value == passwordConfInput.value) ? true : false
    inputStylesChange(passwordConfInput)
    isValidActions(isValid, passwordConfInput)
})

// Forms submit

registerForm.addEventListener('submit', (event) => {
    event.preventDefault()
    if (registerForm.querySelector('.visible-alert') == null && registerForm.querySelectorAll('.not-empty').length == 5 && dataConfirmationInput.checked == true) {
        let regData = JSON.stringify({
            name: nameInput.value,
            reglogin: regLoginInput.value,
            email: emailInput.value,
            regPassword: regPasswordInput.value,
            passwordConf: passwordConfInput.value
        })
        sendRequest('POST', '../php/reg.php', regData, 'application/json')
            .then(data => {
                if (data == 'Вы успешно зарегистрировались!') {
                    closeForms()
                }
            })
            .catch(err => console.log(err))
    } else {
        alert('Какое то поле не заполнено или нарушена валидация')
    }

})

loginForm.addEventListener('submit', (event) => {
    event.preventDefault()
    if (loginForm.querySelector('.visible-alert') == null && loginForm.querySelectorAll('.not-empty').length == 2) {
        let loginData = JSON.stringify({
            login: loginInput.value,
            password: passwordInput.value
        })
        sendRequest('POST', '../php/auth.php', loginData, 'application/json')
            .then(data => {
                if (data == 'Вы успешно авторизированны!') {
                    location.reload()
                }
            })
            .catch(err => console.log(err))
    } else {
        alert('Какое то поле не заполнено или нарушена валидация')
    }
})