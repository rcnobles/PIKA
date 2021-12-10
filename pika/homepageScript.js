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


function displayNextImage() {
    x = (x === images.length - 1) ? 0 : x + 1;
    document.getElementById("img").src = images[x];
}

function startTimer() {
    setInterval(displayNextImage, 3000);
}

var images = [], x = -1;
images[0] = "ingredientOne.png";
images[1] = "ingredientTwo.png";
images[2] = "ingredientThree.png";

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('containerSign');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});