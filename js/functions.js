// Отправляем запрос
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

/*
   VALIDATION 
*/

// Стили при пустом инпуте
function inputStylesChange(currInput) {
    let v = currInput.value
    if (v.length !== 0) {
        currInput.classList.add('not-empty')
    } else {
        currInput.classList.remove('not-empty')
    }
}

// Показывание алертов валидации
function isValidActions(isValid, currentInput) {
    if (!isValid) {
        currentInput.parentNode.nextElementSibling.classList.add('visible-alert')
    } else {
        if (currentInput.parentNode.nextElementSibling.classList.contains('alert')) {
            currentInput.parentNode.nextElementSibling.classList.remove('visible-alert')
        }
    }
}

//Закрываем формы
function closeForms(event) {
    formsBackground.classList.toggle('visible')
    registerForm.classList.remove('visible')
    loginForm.classList.remove('visible')
    body.classList.remove('body_hide')
}