document.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');

    // Retrieve the current theme from localStorage or set it to dark as default
    let theme = localStorage.getItem('theme') || 'dark';
    console.log('Theme from localStorage or default:', theme);

    // Apply the current theme by adding or removing the 'dark' class appropriately
    document.documentElement.classList.toggle('light', theme === 'light');
    console.log(`Applying ${theme} theme`);

    // Save the default theme to localStorage if it was not previously set
    if (!localStorage.getItem('theme')) {
        localStorage.setItem('theme', theme);
        console.log('Setting initial theme to dark and saving to localStorage');
    }
});

document.getElementById('theme-toggle').addEventListener('click', function() {
    const newTheme = document.documentElement.classList.contains('light') ? 'dark' : 'light';
    document.documentElement.classList.toggle('light', newTheme === 'light');
    localStorage.setItem('theme', newTheme);
});

window.addEventListener('storage', function(event) {
    if (event.key === 'theme') {
        document.documentElement.classList.toggle('light', event.newValue === 'light');
    }
});

