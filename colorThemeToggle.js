document.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');

    setTimeout(() => {
        const theme = localStorage.getItem('theme') || 'light';
        document.documentElement.classList.toggle('light', theme === 'light');
        if (!localStorage.getItem('theme')) {
            localStorage.setItem('theme', theme);
        }
    }, 1);
    if (!localStorage.getItem('theme')) {
        localStorage.setItem('theme', light);
        console.log('Setting initial theme to dark and saving to localStorage');
    }
});

document.getElementById('theme-toggle').addEventListener('click', function() {
    const newTheme = document.documentElement.classList.contains('light') ? 'dark' : 'light';
    document.documentElement.classList.toggle('light', newTheme === 'light');
    localStorage.setItem('theme', newTheme);
    console.log('Theme changed to:', newTheme);
});

window.addEventListener('storage', function(event) {
    if (event.key === 'theme') {
        document.documentElement.classList.toggle('light', event.newValue === 'light');
        console.log('Theme synced across tabs:', event.newValue);
    }
});

