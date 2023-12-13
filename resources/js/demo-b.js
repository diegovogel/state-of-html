console.log('demo-b.js')

const closeDialogButtons = document.querySelectorAll('button.close-dialog');
const openDialogButtons = document.querySelectorAll('button[data-target]');

// For each open button, make it open the dialog specified by `data-target`.
openDialogButtons.forEach(button => {
    button.addEventListener('click', () => {
        // `data-target` is set to a CSS selector.
        const dialog = document.querySelector(button.dataset.target);

        if (dialog.classList.contains('modal')) {
            dialog.showModal();
        } else {
            dialog.show();
        }

        if (dialog.classList.contains('toast')) {
            setTimeout(() => {
                dialog.close();
            }, 3000)
        }
    });
});

// Each close button is inside a dialog. When the close button is clicked, close that dialog.
closeDialogButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        const dialog = event.target.closest('dialog');

        dialog.close();
    });
})
