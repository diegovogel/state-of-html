import './bootstrap';

const closeDialogButtons = document.querySelectorAll('button.close-dialog');
const openDialogButtons = document.querySelectorAll('button[data-target]');

openDialogButtons.forEach(button => {
    button.addEventListener('click', () => {
        const dialog = document.querySelector(button.dataset.target);

        if (dialog.classList.contains('modal')) dialog.showModal();
        else dialog.show();

        if (dialog.classList.contains('toast')) {
            setTimeout(() => {
                dialog.close();
            }, 3000)
        }
    });
});

closeDialogButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        const dialog = event.target.closest('dialog');

        dialog.close();
    });
})
