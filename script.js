const nav = document.querySelector('#nav');
const presenter = document.querySelectorAll('.presenter');
const lower_background = document.querySelector('.background');
const movie_grid = document.querySelector('.movie_grid');
const container = document.querySelector('.container');

// switch background when scroll
document.onwheel = changeBackground;
function changeBackground(event) {
   
    if (event.deltaY > 0) {
        const currentColor = movie_grid.style.backgroundColor;        
        nav.style.background = currentColor  ? currentColor : '#000';  
        moon.style.color = nav.style.background == 'rgb(255, 255, 255)' ? '#000' : '#fff';
     
        nav.style.color = moon.style.color;
    } 
    
    else {
        nav.style.background = 'transparent';
        moon.style.color = '#fff';
        
        nav.style.color = '#fff';
    }
    
}

const presenter_list = Array.from(presenter);
function changeTitleSyle(value) {
    presenter_list.map(item => item.style.color = value);
}


// switch mode
const moon = document.querySelector('#moon');
function respondOnClick() {

    nav.style.background = 'transaparent';
    
    if (movie_grid.style.backgroundColor == 'rgb(255, 255, 255)') {
        movie_grid.style.backgroundColor = '#111418';
        lower_background.style.backgroundImage =  "linear-gradient(to right top, rgba(0, 0, 0, 0.1), #000), url('images/ae2f001213e74f45eac9ef1e142f321391587ac2-shutterstock_274681841.jpg')";
        
        changeTitleSyle('#fff');
        
        if (!nav.style.background) { return ;}
        nav.style.background = nav.style.background  ? '#000' : nav.style.background;
        moon.style.color = '#fff';
        
        nav.style.color = '#fff';
    } 
    
    else {
        movie_grid.style.backgroundColor = '#fff';
        lower_background.style.backgroundImage =  "linear-gradient(to right top, rgba(255,30,72, .65), #ED867D), url('images/ae2f001213e74f45eac9ef1e142f321391587ac2-shutterstock_274681841.jpg')";
        
        changeTitleSyle('#000');
        
        if (!nav.style.background) { return ;}
        nav.style.background = nav.style.background  ? '#fff' : nav.style.background;
        moon.style.color = '#000'
        nav.style.color = '#000';
            
    }

}
moon.addEventListener('click', respondOnClick);



// ...........slideshow functionality ......
var firstSlide = 1;
view(firstSlide);

function addSlide(k) {
    view(firstSlide += k);
}

function slideShow(k) {
    view(firstSlide = n);
}

function view(k) {
    var i;
    var movie = document.getElementsByClassName("movie");
  
    if (k > movie.length) {firstSlide = 1;}
    if (k < 1) {firstSlide = movie.length;}
  
    for (i = 0; i < movie.length; i++) {
        movie[i].style.display = "none";
    }

    movie[firstSlide-1].style.display = "block";
}