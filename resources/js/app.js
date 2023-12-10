import './bootstrap';

const regularDialog = document.querySelector('dialog.regular');
const modalDialog = document.querySelector('dialog.modal');
const openRegularDialog = document.querySelector('.open-regular-dialog');
const openModalDialog = document.querySelector('.open-modal-dialog');
const closeDialogButtons = document.querySelectorAll('button.close-dialog');

openRegularDialog.addEventListener('click', () => {
    regularDialog.show();
})

openModalDialog.addEventListener('click', () => {
    modalDialog.showModal();
})

closeDialogButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        const dialog = event.target.closest('dialog');

        dialog.close();
    });
})
