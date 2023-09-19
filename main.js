const app = document.getElementById('typewriter');


const typewriter = new Typewriter (app, {
    loop: true,
    delay:75,
});

typewriter
.typeString('front end developer')
.pauseFor(200)
.start()
