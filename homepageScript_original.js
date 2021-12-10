const nav = document.querySelector('.nav')
window.addEventListener('scroll', fixNav)

function fixNav() {
    if(window.scrollY > nav.offsetHeight + 110) {
        nav.classList.add('active')
    }
    else {
        nav.classList.remove('active')
    }
}


const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('containerSign');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});