//SLIDER TRAMITES Y SERVICIOS
const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider-section");
let sliderSectionLast = sliderSection[sliderSection.length-1];

const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

slider.insertAdjacentElement('afterbegin',sliderSectionLast);

function nextSlider(){
    let sliderSectionFirst = document.querySelectorAll(".slider-section")[0]; 
    slider.style.marginLeft = "-50%";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend',sliderSectionFirst);
        slider.style.marginLeft = "-25%";
    } , 500);
}
function prevSlider(){
    let sliderSection = document.querySelectorAll(".slider-section");
    let sliderSectionLast = sliderSection[sliderSection.length-1]; 
    slider.style.marginLeft = "0";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin',sliderSectionLast);
        slider.style.marginLeft = "-25%";
    } , 500);
}

btnRight.addEventListener('click',function(){
    nextSlider();
});

btnLeft.addEventListener('click',function(){
    prevSlider();
});

//SLIDER PROGRAMAS SOCIALES
const slider2 = document.querySelector("#slider2");
let sliderSection2 = document.querySelectorAll(".slider-section2");
let sliderSectionLast2 = sliderSection2[sliderSection.length-1];

const btnLeft2 = document.querySelector("#btn-left2");
const btnRight2 = document.querySelector("#btn-right2");

slider2.insertAdjacentElement('afterbegin',sliderSectionLast2);

function nextSlider2(){
    let sliderSectionFirst2 = document.querySelectorAll(".slider-section2")[0]; 
    slider2.style.marginLeft = "-50%";
    slider2.style.transition = "all 0.5s";
    setTimeout(function(){
        slider2.style.transition = "none";
        slider2.insertAdjacentElement('beforeend',sliderSectionFirst2);
        slider2.style.marginLeft = "-25%";
    } , 500);
}
function prevSlider2(){
    let sliderSection2 = document.querySelectorAll(".slider-section2");
    let sliderSectionLast2 = sliderSection2[sliderSection2.length-1]; 
    slider2.style.marginLeft = "0";
    slider2.style.transition = "all 0.5s";
    setTimeout(function(){
        slider2.style.transition = "none";
        slider2.insertAdjacentElement('afterbegin',sliderSectionLast2);
        slider2.style.marginLeft = "-25%";
    } , 500);
}

btnRight2.addEventListener('click',function(){
    nextSlider2();
});

btnLeft2.addEventListener('click',function(){
    prevSlider2();
});
