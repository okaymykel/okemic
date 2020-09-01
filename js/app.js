

const nav = document.querySelector('#nav');
const title = document.querySelectorAll('.title');
const watch_tv = document.querySelector('.watch_tv');
const effect = document.querySelector('.effect');
const container = document.querySelector('.container');

// change background on scroll
window.onscroll = changeBackground
function changeBackground(  ) {
    if (window.pageYOffset > 0) {
        const currentColor = effect.style.backgroundColor;        
        nav.style.background = currentColor  ? currentColor : '#000';  
        moon.style.color = nav.style.background == 'rgb(255, 255, 255)' ? '#000' : '#fff';
     
        nav.style.color = moon.style.color;
    } else {
        nav.style.background = 'transparent';
        moon.style.color = '#fff';
        
        nav.style.color = '#fff';
    }
    
}

const titleArr = Array.from(title);
function changeTitleSyle(value) {
    titleArr.map(item => item.style.color = value)
}


// switch back color
const moon = document.querySelector('#moon');
function handleClickEvent() {

    nav.style.background = 'transaparent';
    
    if (effect.style.backgroundColor == 'rgb(255, 255, 255)') {
        effect.style.backgroundColor = '#111418';
        watch_tv.style.backgroundImage =  "linear-gradient(to right top, rgba(0, 0, 0, 0.1), #000), url('images/ae2f001213e74f45eac9ef1e142f321391587ac2-shutterstock_274681841.jpg')";
        
        changeTitleSyle('#fff');
        
        if (window.pageYOffset > 0) {
            nav.style.background = nav.style.background  ? '#000' : nav.style.background;
            moon.style.color = '#fff';
            nav.style.color = '#fff';
        }
        
    } else {
    
        effect.style.backgroundColor = '#fff';
        watch_tv.style.backgroundImage =  "linear-gradient(to right top, rgba(255,30,72, .65), #ED867D), url('images/ae2f001213e74f45eac9ef1e142f321391587ac2-shutterstock_274681841.jpg')";
        
        changeTitleSyle('#000');
        
        if (window.pageYOffset > 0) {
            nav.style.background = nav.style.background  ? '#fff' : nav.style.background;
            moon.style.color = '#000'
            nav.style.color = '#000';
        }
    }

}

moon.addEventListener('click', handleClickEvent);

// Copyright
const copyright = document.querySelector('.copyright');
const date = new Date();
copyright.innerHTML = `Copyright @ ${date.getFullYear()} nvivo.tv`;
