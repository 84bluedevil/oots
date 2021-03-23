

// Div Tilt

$('document').ready(() => {

    VanillaTilt.init(document.querySelector(".aboutUs"), {
        max: 55,
        speed: 300,
        glare: true,
        startY: 90,
        "max-glare": .70,
        "glare-prerender": false,
        scale: 1.25,
        perspective: 2000,
        easing: "cubic-bezier(.03,.98,.52,.99)"
    });

});





//sound & changes background no going back atm 

const musicBtn = document.querySelector('#audioBtn');

musicBtn.onclick = function playMusic() {
    let newMusic = document.querySelector('#audioOne');
    let videoBackground = document.querySelector('#backgroundVideo');
    videoBackground.setAttribute('src', '../imgs/video1.mp4');
    videoBackground.setAttribute('id', 'background');
    newMusic.currentTime=37.9;
    newMusic.volume = .2;
    newMusic.play();

}



// links on hover

