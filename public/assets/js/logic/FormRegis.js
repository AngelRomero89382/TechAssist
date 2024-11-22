/*
 * TechAssist - Sistema de Aprendizaje Interactivo
 * Copyright (c) 2024 TechAssist
 * Autor: Angel Jesús Romero Pérez
 * 
 * Este archivo es parte de TechAssist y está protegido por derechos de autor.
 * Uso no autorizado de este código está prohibido.
 */

let registerErrorModal;
let registerSuccessModal;
let loadingOverlay;
let selectedLevel = '';

document.addEventListener('DOMContentLoaded', () => {
    initModals();
    setupFormListeners();
    setupLevelButtons();
    setupInputValidation();
});

const initModals = () => {
    registerErrorModal = new bootstrap.Modal(document.getElementById('errorModal'));
    registerSuccessModal = new bootstrap.Modal(document.getElementById('registerSuccessModal'));
    loadingOverlay = document.getElementById('loadingOverlay');
};

const setupFormListeners = () => {
    const form = document.getElementById('registerForm');
    if (form) {
        form.addEventListener('submit', validateRegisterForm);
    }
};

const setupLevelButtons = () => {
    document.querySelectorAll('.level-button').forEach(btn => {
        btn.addEventListener('click', () => handleLevelSelection(btn));
        btn.addEventListener('mouseover', () => handleButtonHover(btn));
        btn.addEventListener('mouseout', () => handleButtonOut(btn));
    });
};

const handleLevelSelection = (btn) => {
    const levels = {
        'Principiante': 'basic',
        'Promedio': 'medium',
        'Experto': 'advanced'
    };
    selectLevel(levels[btn.textContent.trim()], btn);
};

const handleButtonHover = (btn) => {
    if (!btn.classList.contains('selected')) {
        const levels = {
            'Principiante': 'basic',
            'Promedio': 'medium',
            'Experto': 'advanced'
        };
        btn.classList.add(`level-${levels[btn.textContent.trim()]}`);
    }
};

const handleButtonOut = (btn) => {
    if (!btn.classList.contains('selected')) {
        btn.classList.remove('level-basic', 'level-medium', 'level-advanced');
    }
};

const setupInputValidation = () => {
    const username = document.getElementById('username');
    const email = document.getElementById('userEmail');

    if (username) {
        username.addEventListener('input', () => {
            username.classList.remove('input-invalid');
            document.getElementById('usernameRegisError').style.display = 'none';
        });
    }

    if (email) {
        email.addEventListener('input', () => {
            email.classList.remove('input-invalid');
            document.getElementById('emailempyRegisError').style.display = 'none';
            document.getElementById('emailRegisError').style.display = 'none';
        });
    }
};

const selectLevel = (level, btn) => {
    selectedLevel = level;
    document.querySelectorAll('.level-button').forEach(button => {
        button.classList.remove('selected', 'level-basic', 'level-medium', 'level-advanced');
    });
    btn.classList.add('selected', `level-${level}`);
};

const validateRegisterForm = async (event) => {
    event.preventDefault();
    let message = '';
    let hasError = false;

    const username = document.getElementById('username');
    const email = document.getElementById('userEmail');
    const emailValue = email.value.trim();
    const domains = ['@gmail.com', '@hotmail.com', '@outlook.com', '@yahoo.com'];

    if (!username.value.trim() && !email.value.trim()) {
        message = 'Por favor complete los campos';
        displayErrors(username, email, true, true);
        hasError = true;
    } else {
        if (!username.value.trim()) {
            message = 'Por favor ingrese su nombre de usuario';
            displayErrors(username, null, true, false);
            hasError = true;
        }

        if (!hasError && (!emailValue || !isValidEmail(emailValue, domains))) {
            message = !emailValue ? 
                'Por favor ingrese su correo electrónico' :
                'Por favor ingrese un correo válido (@gmail.com, @hotmail.com, @outlook.com o @yahoo.com)';
            displayErrors(null, email, false, true);
            hasError = true;
        }
    }

    if (!hasError && !selectedLevel) {
        message = 'Por favor seleccione su nivel de conocimiento';
        hasError = true;
    }

    if (hasError) {
        showRegisterError(message);
        return;
    }

    await processRegistration(username.value.trim(), emailValue);
};

const isValidEmail = (email, domains) => {
    return domains.some(domain => email.toLowerCase().endsWith(domain));
};

const displayErrors = (username, email, showUsernameError, showEmailError) => {
    if (username) {
        username.classList.add('input-invalid');
        document.getElementById('usernameRegisError').style.display = showUsernameError ? 'block' : 'none';
    }
    
    if (email) {
        email.classList.add('input-invalid');
        document.getElementById('emailRegisError').style.display = 'none';
        document.getElementById('emailempyRegisError').style.display = showEmailError ? 'block' : 'none';
    }
};

const processRegistration = async (username, email) => {
    showLoadingOverlay();
    
    // Añadir delay artificial de 5 segundos antes de enviar
    await new Promise(resolve => setTimeout(resolve, 5000));
    
    const formData = new FormData();
    formData.append('username', username);
    formData.append('email', email);
    formData.append('level', selectedLevel);

    try {
        const response = await fetch('./app/controllers/registerController.php', {
            method: 'POST',
            body: formData
        });
        
        const data = await response.json();
        hideLoadingOverlay();

        if (data.error) {
            showRegisterError(data.message || 'Error en el registro');
        } else {
            showRegisterSuccess();
                document.getElementById('registerForm').reset();
                selectedLevel = '';
                document.querySelectorAll('.level-button').forEach(button => {
                    button.classList.remove('selected', 'level-basic', 'level-medium', 'level-advanced');
                });
   
        }
    } catch (error) {
        hideLoadingOverlay();
        showRegisterError('Error de conexión. Por favor intente más tarde.');
    }
};
const showLoadingOverlay = () => loadingOverlay.classList.remove('vanish');
const hideLoadingOverlay = () => loadingOverlay.classList.add('vanish');

const showRegisterError = (message) => {
    console.log('Intentando mostrar error:', message);
    const errorMsg = document.getElementById('errorMsg');
    console.log('Elemento errorMsg encontrado:', errorMsg);
    if (errorMsg) {
        errorMsg.textContent = message;
        console.log('Mensaje establecido, mostrando modal');
        registerErrorModal.show();
    } else {
        console.error('No se encontró el elemento errorMsg');
    }
};

const showRegisterSuccess = () => {
    registerSuccessModal.show();
};

function hideRegisterContainers() {
    document.getElementById('register-shadowLayer').classList.add('vanish');
    registerSuccessModal.hide();
}







const shadowScreen = document.getElementById('register-shadowLayer');
const activate = document.getElementById('register-triggerLayer');
const ExitBtn = document.querySelector('.register-exitTrigger');
const ExitLink = document.getElementById('register-exitTrigger');

function dismissLayer(evt) {
    if (evt) {
        evt.preventDefault();
    }
    shadowScreen.classList.add('vanish');
    activate.classList.remove('highlighted');
}

function ShowLayer(evt) {
    evt.preventDefault();
    shadowScreen.classList.remove('vanish');
    activate.classList.add('highlighted');
}

ExitBtn.addEventListener('click', dismissLayer);
activate.addEventListener('click', ShowLayer);

if (ExitLink) {
    ExitLink.addEventListener('click', dismissLayer);
}












