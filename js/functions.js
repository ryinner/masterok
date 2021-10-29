// Отправляем запрос
function sendRequest(method, url, body = null, requestHeader = null) {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest()

        xhr.open(method, url)

        if (requestHeader !== null) {
            xhr.setRequestHeader('Content-Type', requestHeader)
        }

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

        xhr.send(body)
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
        if (currentInput.parentNode.nextElementSibling.classList.contains('alert')) {
            currentInput.parentNode.nextElementSibling.classList.add('visible-alert')
        }
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

// Показывает алерт

function showAlert(data, showHiddenBtn = false, orderId = null) {    
    if (showHiddenBtn == true) {
        console.log(orderId)
        hiddenBtn.classList.remove('alert__btn_hidden')
        hiddenBtn.addEventListener('click', ()  => {
            sendRequest('POST', '../removeOrder.php', orderId)
            .then(data => {
                if (data == 'Удаление заявки прошло успешно') {
                    document.getElementById(orderId).remove()
                    showAlert(data)
                } else {
                    showAlert('Что то пошло не так и не туда')
                }
            })
            .catch(err => console.log(err))
        })
    }
    alert.classList.add('alert__body_visible')
    alertText.innerHTML = data
    body.classList.add('body_hide')
}