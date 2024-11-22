/*
 * TechAssist - Sistema de Aprendizaje Interactivo
 * Copyright (c) 2024 TechAssist
 * Autor: Angel Jesús Romero Pérez
 * 
 * Este archivo es parte de TechAssist y está protegido por derechos de autor.
 * Uso no autorizado de este código está prohibido.
 */


const shadowScreen_2 = document.getElementById('login-shadowLayer');
const activate_2 = document.getElementById('login-triggerLayer');
const ExitBtn_2 = document.querySelector('.login-exitTrigger');
const ExitLink_2 = document.getElementById('login-exitTrigger');

function dismissLayer_2(evt) {
    if (evt) {
        evt.preventDefault();
    }
    shadowScreen_2.classList.add('vanish');
    activate_2.classList.remove('highlighted');
}

function ShowLayer_2(evt) {
    evt.preventDefault();
    shadowScreen_2.classList.remove('vanish');
    activate_2.classList.add('highlighted');
}

ExitBtn_2.addEventListener('click', dismissLayer_2);
activate_2.addEventListener('click', ShowLayer_2);

if (ExitLink_2) {
    ExitLink_2.addEventListener('click', dismissLayer_2);
}


/* Login Lógica */

let loginSuccessModal;
let loginErrorModal;
let rememberPreference = false;

document.addEventListener('DOMContentLoaded', function () {
    // Inicializar todos los modales
    loginSuccessModal = new bootstrap.Modal(document.getElementById('loginSuccessModal'));
    loginErrorModal = new bootstrap.Modal(document.getElementById('loginErrorModal'));

    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', validateLoginForm);
    }

    const loginEmail = document.getElementById('loginEmail');
    const loginUsername = document.getElementById('loginUsername');

    if (loginEmail) {
        loginEmail.addEventListener('input', () => {
            loginEmail.classList.remove('input-invalid');
            document.getElementById('emailemptyLoginError').style.display = 'none';
            document.getElementById('emailLoginError').style.display = 'none';

        });
    }

    if (loginUsername) {
        loginUsername.addEventListener('input', () => {
            loginUsername.classList.remove('input-invalid');
            document.getElementById('usernameLoginError').style.display = 'none';
        });
    }

    // Event listeners para los modales
    document.getElementById('loginSuccessModal').addEventListener('hidden.bs.modal', function () {
        continueLoginProcess();
    });


});

function validateLoginForm(event) {
    event.preventDefault();
    const email = document.getElementById('loginEmail');
    const username = document.getElementById('loginUsername');
    const remember = document.getElementById('rememberLogin');
    let message = '';
    let hasError = false;

    // Validaciones de campos vacíos y formato...
    if (!username.value.trim() && !email.value.trim()) {
        campos = 1;
    } else {
        campos = 0;
    }

    if (campos == 1) {
        email.classList.add('input-invalid');
        username.classList.add('input-invalid');
        document.getElementById('emailemptyLoginError').style.display = 'block';
        document.getElementById('usernameLoginError').style.display = 'block';
        message = 'Por favor complete los campos';
        hasError = true;
    }

    if (!username.value.trim() && campos == 0) {
        username.classList.add('input-invalid');
        document.getElementById('usernameLoginError').style.display = 'block';
        message = 'Por favor ingrese su nombre de usuario';
        hasError = true;
    }

    if (!email.value.trim() && campos == 0) {
        email.classList.add('input-invalid');
        document.getElementById('emailemptyLoginError').style.display = 'block';
        message = 'Por favor ingrese su correo electrónico';
        hasError = true;
    }

    const emailRegex = /@(gmail|hotmail|outlook|yahoo)\.com$/i;
    if (!hasError && !emailRegex.test(email.value.trim())) {
        email.classList.add('input-invalid');
        document.getElementById('emailLoginError').style.display = 'block';
        hasError = true;
        message = 'Por favor ingrese un correo válido (@gmail.com, @hotmail.com, @outlook.com o @yahoo.com)';
    }

    if (hasError) {
        showLoginError(message);
        return;
    }

    startLoginProcess();
}


function startLoginProcess() {
    const loadingOverlay = document.getElementById('loadingOverlay');
    const email = document.getElementById('loginEmail').value.trim();
    const username = document.getElementById('loginUsername').value.trim();
    const remember = document.getElementById('rememberLogin').checked;
    
    loadingOverlay.classList.remove('vanish');
    
    const formData = new FormData();
    formData.append('email', email);
    formData.append('username', username);
    formData.append('remember', remember);

    setTimeout(() => {
    
    fetch('app/controllers/loginController.php', {
        method: 'POST',
        body: formData,
        credentials: 'same-origin'
    })

    .then(response => response.json())
    .then(data => {
        loadingOverlay.classList.add('vanish');

        if (data.error) {
            document.getElementById('loginErrorMsg').textContent = data.message;
            loginErrorModal.show();
        } else {
            loginSuccessModal.show();
            completeLogin()
        }
    })


    .catch(error => {
        loadingOverlay.classList.add('vanish');
        document.getElementById('loginErrorMsg').textContent = 
            'Error de conexión. Por favor intente más tarde.';
        loginErrorModal.show();
    });
}, 2000);
}



function continueLoginProcess() {
    const remember = document.getElementById('rememberLogin');
    const loadingOverlay = document.getElementById('loadingOverlay');
    
    loadingOverlay.classList.remove('vanish');

    setTimeout(() => {
        if (remember.checked || rememberPreference) {
            completeLogin();
        } else {
            loadingOverlay.classList.add('vanish');
            rememberModal.show();
        }
    }, 4000);
}


function resetForm() {
    // Limpiar los campos del formulario
    const email = document.getElementById('loginEmail');
    const username = document.getElementById('loginUsername');
    const remember = document.getElementById('rememberLogin');
    
    email.value = '';
    username.value = '';
    remember.checked = false;
    
    // Remover clases de error
    email.classList.remove('input-invalid');
    username.classList.remove('input-invalid');
    
    // Ocultar mensajes de error
    document.getElementById('emailLoginError').style.display = 'none';
    document.getElementById('emailemptyLoginError').style.display = 'none';
    document.getElementById('usernameLoginError').style.display = 'none';
    
    // Enfocar el primer campo
    email.focus();
}


function completeLogin() {
    const loadingOverlay = document.getElementById('loadingOverlay');
    loadingOverlay.classList.remove('vanish');
    
    setTimeout(() => {
        window.location.href = './app/views/dashboard.php';
    }, 5000);
}

function showLoginError(message) {
    document.getElementById('loginErrorMsg').textContent = message;
    loginErrorModal.show();
}