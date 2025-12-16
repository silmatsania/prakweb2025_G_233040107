// DOM Elements
const timeEl = document.getElementById('time');
const greetingEl = document.getElementById('greeting');
const focusInput = document.getElementById('focus-input');
const focusDisplay = document.getElementById('focus-display');
const focusText = document.getElementById('focus-text');
const deleteFocusBtn = document.getElementById('delete-focus');

// Time & Greeting Logic
function updateTime() {
    const today = new Date();
    let hour = today.getHours();
    const min = today.getMinutes();
    const second = today.getSeconds();

    // Greeting Label
    let greeting = '';
    if (hour < 12) {
        greeting = 'Good Morning';
    } else if (hour < 18) {
        greeting = 'Good Afternoon';
    } else {
        greeting = 'Good Evening';
    }

    // Add Zero Padding
    const showMin = min < 10 ? `0${min}` : min;
    const showHour = hour < 10 ? `0${hour}` : hour;

    // Update Text
    timeEl.innerHTML = `${showHour}:${showMin}`;
    greetingEl.innerText = `${greeting}, Visitor.`;

    setTimeout(updateTime, 1000);
}

// Focus Logic (LocalStorage)
function getFocus() {
    if (localStorage.getItem('focus')) {
        const focus = localStorage.getItem('focus');
        showFocusState(focus);
    } else {
        showInputState();
    }
}

function setFocus(e) {
    if (e.type === 'keypress') {
        if (e.which == 13 || e.keyCode == 13) {
            const focus = e.target.value;
            if (focus.trim() !== "") {
                localStorage.setItem('focus', focus);
                showFocusState(focus);
            }
        }
    }
}

function deleteFocus() {
    localStorage.removeItem('focus');
    focusInput.value = '';
    showInputState();
}

// Helper: Toggle UI States
function showFocusState(text) {
    focusInput.classList.add('hidden');
    focusDisplay.classList.remove('hidden');
    focusText.innerText = text;
}

function showInputState() {
    focusInput.classList.remove('hidden');
    focusDisplay.classList.add('hidden');
    focusInput.focus();
}

// Event Listeners
focusInput.addEventListener('keypress', setFocus);
deleteFocusBtn.addEventListener('click', deleteFocus);

// Initialize
updateTime();
getFocus();
