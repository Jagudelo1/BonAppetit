document.querySelector('.campo span').addEventListener('click', e => {
    const passwordInput = document.querySelector('#password');
    if (e.target.classList.contains('show')) {
        e.target.classList.remove('show');
        e.target.textContent = '';
        passwordInput.type = 'text';
    } else {
        e.target.classList.add('show');
        e.target.textContent = '';
        passwordInput.type = 'password';
    }
});


