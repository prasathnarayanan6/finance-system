const spinnerWrapperEl = document.querySelector('.spinner-wrapper');

window.onload = function() {
    spinnerWrapperEl.style.opacity = '0';
    setTimeout(() => {
        spinnerWrapperEl.style.display = 'none';
    }, 200);
};