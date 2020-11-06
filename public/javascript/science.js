var tire = document.querySelector('#tireImage');
var url = [
'./assets/media/images/tires/120 A to D/120a.png',
'./assets/media/images/tires/120 A to D/120c.png',
];


setInterval(changeImage,600);
var index = 0;

var options = {
    root: document.querySelector('main'),
    rootMargin: '0px',
    threshold: 0
};

var observer = new IntersectionObserver(callback, options);

function callback(){
    console.log('ello');
}

let target = document.querySelector('#cta');
observer.observe(target);


tireIndex = 0;
var tireURL = [
'http://localhost/portfolio/roostertires/public/images/tires/science/rotatation/2.png',
'http://localhost/portfolio/roostertires/public/images/tires/science/rotatation/3.png',
'http://localhost/portfolio/roostertires/public/images/tires/science/rotatation/4.png',
'http://localhost/portfolio/roostertires/public/images/tires/science/rotatation/1.png'
];
var features = [
'http://localhost/portfolio/roostertires/public/images/tires/science/RS%20Bars.png',
'http://localhost/portfolio/roostertires/public/images/tires/science/RS%20Web.png',
'http://localhost/portfolio/roostertires/public/images/tires/science/RS%20Sipes.png',
'http://localhost/portfolio/roostertires/public/images/tires/science/RS%20Block.png',
'http://localhost/portfolio/roostertires/public/images/tires/science/RS%20Tread.png',
'http://localhost/portfolio/roostertires/public/images/tires/science/RS%20Material.png',
'http://localhost/portfolio/roostertires/public/images/tires/science/RS%20Hull.png',
'http://localhost/portfolio/roostertires/public/images/tires/science/RS%20DOT.png',
];

let img = document.getElementById('tireImage');
const tl = new TimelineLite({paused:false});
var index = 0;
var interval = setInterval(firstInterval, 2000);
function firstInterval(){
     if(index == tireURL.length-1){
         index = 0;
         console.log('index'+index)
     } else {
                 console.log(tireURL[index])

        tl.to(img, 3, {scale:0,opacity:0})
        .to(img, 0, {attr:{src:`${tireURL[index]}`}})
        .to( img,3,{opacity:1,scale:1});
        index++;
     }
}



var bulletPoint = document.getElementsByClassName("bulletPoint");

for(var i = 0; i < bulletPoint.length; i++){
    bulletPoint[i].addEventListener("mouseenter", function(event) {   
        
        for(var i = 0;i<bulletPoint.length;i++){
                let current = bulletPoint[i];
                TweenMax.to(current,1,{opacity:0.1});
            }
            let target = event.target;
            TweenMax.to(target,1,{opacity:1,left:200});
        }

    );
    bulletPoint[i].addEventListener("mouseleave", function(event) {       
        for(var i = 0;i<bulletPoint.length;i++){
                let current = bulletPoint[i];
                TweenMax.to(current,1,{opacity:1});
            }

    }); 
}

const replacetl = new TimelineLite();
for(var ind = 0; ind < bulletPoint.length; ind++){

    bulletPoint[ind].addEventListener("mouseenter", function(e) {
    tl.pause();
    replacetl.to(img, 1, {scale:0,opacity:0})
    .to(img, 0, {attr:{src:`${features[Array.from(bulletPoint).indexOf(e.target)]}`}})
    .to( img,1,{opacity:1,scale:0.6});


    }) 

    bulletPoint[ind].addEventListener("mouseleave", function(event) {
    tl.play();
    })
    
}