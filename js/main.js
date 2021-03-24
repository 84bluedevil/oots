const musicBtn = document.querySelector('#audioBtn');
const messageBtn = document.querySelector('#msgBtn');

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

//plays sound & changes background refresh to exit
musicBtn.onclick = function playMusic() {
    let newMusic = document.querySelector('#audioOne');
    let videoBackground = document.querySelector('#backgroundVideo');
    videoBackground.setAttribute('src', '../imgs/video1.mp4');
    //videoBackground.setAttribute('id', 'backgroundVideo');
    newMusic.currentTime=37.9;
    newMusic.volume = .2;
    newMusic.play();

};

//form control and errors
messageBtn.onclick = () => {
    const emailBox = document.querySelector('.emailInput');
    const messageBox = document.querySelector('.messageInput');
    if(emailBox.value.length > 4){
        let userEmail = emailBox.value;
    }else{
        alert('Email Error');

    }
    if(messageBox.value.length < 25){
        let userMessage = messageBox.value;
    }else{

    }
};