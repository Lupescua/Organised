function placeHero(x, y) {
    var hero = document.getElementById('hero');
    hero.style.left = x + 'px';
    hero.style.top = y + 'px';
    hero_x = x;
    hero_y = y;
}

var hero_x; // current hero x coordinate
var hero_y; // current hero y coordinate

placeHero(150, 150);

// var hero = document.getElementById('hero');
var hero= $('#hero');
console.log(hero.style);

document.addEventListener('keyup', keyPressed);

function keyPressed(event) {
    console.log(event);
    if (event.key == "ArrowRight") {
        hero.style.left = (parseInt(hero.style.left) + 50) + 'px';
    } else if (event.key == "ArrowLeft") {
        hero.style.left = (parseInt(hero.style.left) - 50) + 'px';
    } else if (event.key == "ArrowUp") {
        hero.style.top = (parseInt(hero.style.top) - 50) + 'px';
    } else if (event.key == "ArrowDown") {
        hero.style.top = (parseInt(hero.style.top) + 50) + 'px';
    }
}
