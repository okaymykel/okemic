const menu = document.querySelector('.menu');
const navigation = document.querySelector('.nav_navigation');

const toggleNavBar = (e) => {
    let display = navigation.style.display;
    navigation.style.display = display === 'none' || display === '' ? 'flex' : 'none';
}

document.addEventListener('click', toggleNavBar);