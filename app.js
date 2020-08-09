

const nav = document.querySelector('#nav');
const title = document.querySelectorAll('.title');
const effect = document.querySelector('.effect');
const container = document.querySelector('.container');

// change background on scroll
document.onwheel = changeBackground
function changeBackground(event) {
    // console.log(container.scrollHeight)
    // console.log('Top', container.scrollTop)
    // console.log('Client', container.clientHeight)
    // console.log('scroll to', container.scroll())

    console.log(event.deltaY)
    if (event.deltaY >= 0   ) {
        const currentColor = effect.style.backgroundColor;        
        nav.style.background = currentColor  ? currentColor : '#000';  
        // moon.style.color = currentColor  ? '#000' : '#fff';  
        moon.style.color = nav.style.background == 'rgb(255, 255, 255)' ? '#000' : '#fff';
        // if (nav.style.background == 'rgb(255, 255, 255)') {
            // moon.style.color = '#000'
        // }
        // if (nav.style.background == 'rgb(0, 0, 0)') {
        //     moon.style.color = '#fff'
        // }
        
        nav.style.color = moon.style.color;
    } else {
        nav.style.background = 'transparent';
        moon.style.color = '#fff';
        
        nav.style.color = '#fff';
    }
    
    // if (nav.style.background == 'rgb(255, 255, 255)') {
    //     moon.style.color = '#000'
    //     nav.style.color = '#000';
    // } else {
    //     moon.style.color = '#fff'
    //     nav.style.color = '#fff';
    
    // }
}

const titleArr = Array.from(title);
function changeTitleSyle(value) {
    titleArr.map(item => item.style.color = value)
}


// switch back color
const moon = document.querySelector('#moon');
function handleClickEvent() {

    // if (!nav.style.background) {
    //     return
    // }
    nav.style.background = 'transaparent';
    
    if (nav.style.background && effect.style.backgroundColor == 'rgb(255, 255, 255)') {
        console.log('dghddggdg')
        effect.style.backgroundColor = '#111418';
        // if (nav.style.background == 'transparent') {
            // nav.style.background = '#000';
            // }
            // title.style.color = '#fff';
            changeTitleSyle('#fff');
        if (!nav.style.background) {
                return
            }
        nav.style.background = nav.style.background  ? '#000' : nav.style.background;
        moon.style.color = '#fff';
        // return;
        nav.style.color = '#fff';
    } else {
        effect.style.backgroundColor = '#fff';
        changeTitleSyle('#000');
        // title.style.color = '#000';
        if (!nav.style.background) {
            return
        }
        nav.style.background = nav.style.background  ? '#fff' : nav.style.background;
        moon.style.color = '#000'
        nav.style.color = '#000';
            
    }

    // }
    // if (nav.style.background == 'rgb(255, 255, 255)') {
    //     // nav.style.background = '#111418';
    //     // if (nav.style.background == 'transparent') {
    //         nav.style.background = '#000';
        // }
        // return;
    // } 
    // nav.style.background = effect.style.backgroundColor ==
    
}
moon.addEventListener('click', handleClickEvent);


const copyright = document.querySelector('.copyright');
const date = new Date();
copyright.innerHTML = `Copyright @ ${date.getFullYear()} nvivo.tv`;
