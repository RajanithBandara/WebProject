const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;

function toggleTheme() {
  const pagedefault_dark = document.getElementById('page-dark');
  const pagedefault_light = document.getElementById('page-light');
  if (prefersDarkMode) {
    pagedefault_dark.disabled = false;
    pagedefault_light.disabled = true; 
  } else {
    pagedefault_dark.disabled = true;
    pagedefault_light.disabled = false; 
  }
}

toggleTheme();

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', toggleTheme);
