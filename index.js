const menu = document.querySelector('.menu');
const navigation = document.querySelector('.nav_navigation');
const display = document.querySelector('.display');

const toggleNavBar = () => {
    if (navigation.classList.contains('display')) {
        navigation.classList.remove('display');
    } else {
        navigation.classList.add('display');
    }
}

document.addEventListener('click', toggleNavBar);