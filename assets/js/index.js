/*
    * slider
*/
const slider = document.getElementById('slider');
const arrowLeft = document.getElementById('arrow-left');
const arrowRight = document.getElementById('arrow-right');
let sliderItems = document.querySelectorAll('.slider__img');
let sliderItemsLast = sliderItems[sliderItems.length - 1];
slider.insertAdjacentElement('afterbegin', sliderItemsLast);

function nextSlide() {
    let sliderItemsFirst = document.querySelectorAll('.slider__img')[0];
    slider.style.marginLeft = '-200%';
    slider.style.transition = 'all 0.5s';
    setTimeout(() => {
        slider.style.transition = 'none';
        slider.insertAdjacentElement('beforeend', sliderItemsFirst);
        slider.style.marginLeft = '-100%';
    }, 500);
}
arrowRight.addEventListener('click', () => {
    nextSlide();
});

function prevSlide() {
    slider.style.transform = 'translateX(' + (-currentSlide * 100) + '%)';
    currentSlide--;
}