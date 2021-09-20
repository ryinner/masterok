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

const requirments = new Map([
    [loginInput, 'Только английские буквы, точка и нижнее подчеркивание. <br> Поле должно быть заполнено'],
    [regLoginInput, 'Только английские буквы, точка и нижнее подчеркивание. <br> Поле должно быть заполнено'],
    [passwordInput, 'Поле должно быть заполнено, минимальное количество символов - 8'],
    [nameInput, 'Только русские буквы, пробел и дефис. <br> Поле должно быть заполнено'],
    [emailInput, 'Формат адреса электронной почты: <br> xx-xx_x.x@xxx.xxx, дефис и нижнее подчеркивание разрешены в первых двух разрешены до символа точки после символа "@", точка только до символа "@". Поле должно быть заполнено'],
    [passwordConfInput, 'Пароли должны совпадать. <br> Поле должно быть заполнено'],
])

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
        changeInnerHTML(requirments, currentInput)
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

function changeInnerHTML(requirments, key) {
    wrongDataElem.innerHTML = requirments.get(key)
}

// Form submit

registerForm.addEventListener('submit', function (event) {
    event.preventDefault()
    let user = {
        name: nameInput.value,
        login: regLoginInput.value,
        email: emailInput.value,
        password: regPasswordInput.value,
        passwordConf: passwordConfInput.value,
    }
      
    let response = await fetch('../php/reg.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(user)
    });
    
    let result = await response.json();
    alert(result.message);
})

