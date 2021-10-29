addCategoryForm.addEventListener('submit', (event) => {
    event.preventDefault()
    if (addCategoryForm.querySelectorAll('.not-empty').length == 1) {
        let category = addCategoryInput.value
        sendRequest('POST', '/php/addCategory.php', category)
            .then(data => {
                showAlert(data)
            })
            .catch(err => console.log(err))
    } else {
        showAlert('Какое то поле не заполнено')
    }
})

removeCategoryForm.addEventListener('submit', (event) => {
    event.preventDefault()
    let category = removeCategoryInput.value
    sendRequest('POST', '/php/removeCategory.php', category)
        .then(data => {
            showAlert(data)
        })
        .catch(err => console.log(err))
})


const addCategoryInput = document.getElementById('addCategory')
addCategoryInput.addEventListener('input', () => {
    inputStylesChange(addCategoryInput)
})

const removeCategoryInput = document.getElementById('removeCategory')
removeCategoryInput.addEventListener('input', () => {
    inputStylesChange(removeCategoryInput)
})