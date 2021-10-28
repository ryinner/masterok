addOrderForm.addEventListener('submit', (event) => {
    event.preventDefault()
    if (
        addOrderForm.querySelector('.visible-alert') == null &&
        addOrderForm.querySelectorAll('.not-empty').length == 3 &&
        fileInput.files.length !== 0
    ) {
        let orderData = new FormData(addOrderForm)
        sendRequest('POST', '../addOrder.php', orderData)
            .then(data => {
                showAlert(data)
            })
            .catch(err => console.log(err))
    } else {
        showAlert('Какое то поле не заполнено, не прикреплено изображение или нарушена валидация')
    }
})

addressInput.addEventListener('input', () => {
    isValid = /[А-Яа-яЁё\s-]+/.test(addressInput.value)
    inputStylesChange(addressInput)
    isValidActions(isValid, addressInput)
})

descriptionInput.addEventListener('input', () => {
    isValid = /[А-Яа-яЁё\s-]+/.test(descriptionInput.value)
    inputStylesChange(descriptionInput)
    isValidActions(isValid, descriptionInput)
})

maxPriceInput.addEventListener('input', () => {
    isValid = /^[0-9]+/.test(maxPriceInput.value)
    inputStylesChange(maxPriceInput)
    isValidActions(isValid, maxPriceInput)
})