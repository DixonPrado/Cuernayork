//SLIDER TRAMITES Y SERVICIOS
const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider-section");
let sliderSectionLast = sliderSection[sliderSection.length-1];

const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

slider.insertAdjacentElement('afterbegin',sliderSectionLast);

//
var getStyle = function(e, styleName) {
    var styleValue = "";
    if (document.defaultView && document.defaultView.getComputedStyle) {
      styleValue = document.defaultView.getComputedStyle(e, "").getPropertyValue(styleName);
    } else if (e.currentStyle) {
      styleName = styleName.replace(/\-(\w)/g, function(strMatch, p1) {
        return p1.toUpperCase();
      });
      styleValue = e.currentStyle[styleName];
    }
    return styleValue;
  }
  ////////////////////////////////////
  var e = document.getElementById('slider');
  var marleft = getStyle(e, 'margin-left');
  var marleft1 = marleft.replace(/px/g,'');
  var marleft2 = parseFloat(marleft1)*2;
  var marleft3 = marleft2+'px';

//

function nextSlider(){
    let sliderSectionFirst = document.querySelectorAll(".slider-section")[0]; 
    slider.style.marginLeft = marleft3;
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend',sliderSectionFirst);
        slider.style.marginLeft = marleft;
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
        slider.style.marginLeft = marleft;
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

//
var e2 = document.getElementById('slider2');
var marleft2 = getStyle(e, 'margin-left');
var marleft12 = marleft2.replace(/px/g,'');
var marleft22 = parseFloat(marleft12)*2;
var marleft32 = marleft22+'px';

function nextSlider2(){
    let sliderSectionFirst2 = document.querySelectorAll(".slider-section2")[0]; 
    slider2.style.marginLeft = marleft32;
    slider2.style.transition = "all 0.5s";
    setTimeout(function(){
        slider2.style.transition = "none";
        slider2.insertAdjacentElement('beforeend',sliderSectionFirst2);
        slider2.style.marginLeft = marleft2;
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
        slider2.style.marginLeft = marleft2;
    } , 500);
}

btnRight2.addEventListener('click',function(){
    nextSlider2();
});

btnLeft2.addEventListener('click',function(){
    prevSlider2();
});
