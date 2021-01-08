window.addEventListener('load', () => {
    let urlPathName = window.location.href.split('=');
    if (urlPathName === '""' || urlPathName === 'index') {
       urlPathName[1] = 'home';
    }
 
   const menuButton = document.querySelector(`#${urlPathName[1]}`);
   menuButton.classList.add('actual');
});


