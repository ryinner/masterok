/**
 * название функции
 *
 * @param {number} first - первое число
 * @returns {number}
 */

registerForm.addEventListener("click", function (event) {
    event.stopPropagation()
})

loginForm.addEventListener("click", function (event) {
    event.stopPropagation()
})

enterButton.addEventListener("click", function () {
    formsBackground.classList.toggle('visible')
    loginForm.classList.add('visible')
})

regFormButton.addEventListener("click", function () {
    loginForm.classList.remove("visible")
    registerForm.classList.add('visible')
})

formsBackground.addEventListener("click", function (event) {
    formsBackground.classList.toggle('visible')
    registerForm.classList.remove('visible')
    loginForm.classList.remove('visible')
    event.stopPropagation()
})

// Validation

function inputStylesChange(currInput) {
    let v = currInput.value
    if (v.length !== 0) {
        currInput.classList.add('valid')
    } else {
        currInput.classList.remove('valid')
    }
}

function isValidActions(isValid, currentInput) {
    if (!isValid) {
        currentInput.parentNode.nextElementSibling.classList.add('visible-alert')
    } else {
        if (currentInput.parentNode.nextElementSibling.classList.contains('alert')) {
            currentInput.parentNode.nextElementSibling.classList.remove('visible-alert')
        }
    }
}

loginInput.addEventListener("input", function () {
    inputStylesChange(loginInput)
    let isValid = /^[A-Za-z._]+$/.test(loginInput.value)
    isValidActions(isValid, loginInput)
})

passwordInput.addEventListener("input", function () {
    inputStylesChange(passwordInput)
    // isValidActions(isValid, passwordInput) когда буит регистрация
})

nameInput.addEventListener("input", function () {
    let isValid = /^[А-Яа-яЁё\s-]+$/.test(nameInput.value)
    inputStylesChange(nameInput)
    isValidActions(isValid, nameInput)
})

regLoginInput.addEventListener("input", function () {
    let isValid = /^[A-Za-z._]+$/.test(regLoginInput.value)
    inputStylesChange(regLoginInput)
    isValidActions(isValid, regLoginInput)
})

emailInput.addEventListener("input", function () {
    let isValid = /^([A-z0-9_.-]{2,})@([A-z0-9_-]{2,}).([A-z]{2,})/.test(emailInput.value)
    inputStylesChange(emailInput)
    isValidActions(isValid, emailInput)
})

regPasswordInput.addEventListener("input", function () {
    inputStylesChange(regPasswordInput)
    // isValidActions(isValid, loginInput) когда буит регистрация
})

passwordConfInput.addEventListener("input", function () {
    inputStylesChange(passwordConfInput)
    // isValidActions(isValid, loginInput) когда буит регистрация
    // проверка на совпадение с другим паролем
})

// Child

let wrongDataElem = document.createElement('div');
wrongDataElem.className = "alert";

// Form submit

registerForm.addEventListener('submit', async (event) => {
    event.preventDefault()
    let user = {
        name: nameInput.value,
        login: regLoginInput.value,
        email: emailInput.value,
        password: regPasswordInput.value,
        passwordConf: passwordConfInput.value
    }

    let response = await fetch('../php/reg.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;'
        },
        body: JSON.stringify(user)
    });

    let result = await response.json();
    console.log(result);
})