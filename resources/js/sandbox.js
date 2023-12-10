const openButton = document.querySelector('.open');
const closeButton = document.querySelector('.close');
const dialog = document.querySelector('dialog');

openButton.addEventListener('click', () => {
    dialog.showModal();
})

closeButton.addEventListener('click', () => {
    dialog.close();
})
