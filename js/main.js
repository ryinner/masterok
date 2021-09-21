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
        currInput.classList.add('not-empty')
    } else {
        currInput.classList.remove('not-empty')
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
    isValid = /^[A-Za-z._]+$/.test(loginInput.value)
    isValidActions(isValid, loginInput)
})

passwordInput.addEventListener("input", function () {
    isValid = /^[A-zА-я0-9,./;'\-=+_|":?><`~*@]{8,}$/.test(passwordInput.value)
    inputStylesChange(passwordInput)
    isValidActions(isValid, passwordInput)
})

nameInput.addEventListener("input", function () {
    isValid = /^[А-Яа-яЁё\s-]+$/.test(nameInput.value)
    inputStylesChange(nameInput)
    isValidActions(isValid, nameInput)
})

regLoginInput.addEventListener("input", function () {
    isValid = /^[A-Za-z._]+$/.test(regLoginInput.value)
    inputStylesChange(regLoginInput)
    isValidActions(isValid, regLoginInput)
})

emailInput.addEventListener("input", function () {
    isValid = /^([A-z0-9_.-]{2,})@([A-z0-9_-]{2,}).([A-z]{2,})/.test(emailInput.value)
    inputStylesChange(emailInput)
    isValidActions(isValid, emailInput)
})

regPasswordInput.addEventListener("input", function () {
    isValid = /^[A-zА-я0-9,./;'\-=+_|":?><`~*@]{8,}$/.test(regPasswordInput.value)
    inputStylesChange(regPasswordInput)
    isValidActions(isValid, regPasswordInput)
})

passwordConfInput.addEventListener("input", function () {
    isValid = (regPasswordInput.value == passwordConfInput.value) ? true : false
    inputStylesChange(passwordConfInput)
    isValidActions(isValid, passwordConfInput)
})



// Child

let wrongDataElem = document.createElement('div');
wrongDataElem.className = "alert";

// Form submit

// registerForm.addEventListener('submit', async (event) => {
//     event.preventDefault()
//     let user = {
//         name: nameInput.value,
//         login: regLoginInput.value,
//         email: emailInput.value,
//         password: regPasswordInput.value,
//         passwordConf: passwordConfInput.value
//     }

//     let response = await fetch('../php/reg.php', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json;'
//         },
//         body: JSON.stringify(user)
//     });

//     let result = await response.json()
//     let repsone = JSON.parse(result)
//     console.log(repsone, typeof repsone)
// })

function sendRequest(method, url, body = null) {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest()

        xhr.open(method, url)

        xhr.responseType = 'json'
        xhr.setRequestHeader('Content-Type', 'application/json')

        xhr.onload = () => {
            if (xhr.status >= 400) {
                reject(xhr.response)
            } else {
                resolve(xhr.response)
            }
        }

        xhr.onerror = () => {
            reject(xhr.response)
        }

        xhr.send(JSON.stringify(body))
    })
}

// Forms submit

registerForm.addEventListener('submit', (event) => {
    event.preventDefault()
    let user = {
        name: nameInput.value,
        login: regLoginInput.value,
        email: emailInput.value,
        password: regPasswordInput.value,
        passwordConf: passwordConfInput.value
    }
    sendRequest('POST', '../php/reg.php', user)
        .then(data => {
            console.log(data)
            return response = data
        })
        .catch(err => console.log(err))
})