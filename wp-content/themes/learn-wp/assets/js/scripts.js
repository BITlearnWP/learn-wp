window.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('.full-slider')) {
        const slider = document.querySelector('.full-slider');
        const sliderInner = slider.querySelector('.full-slider-inner');
        const sliderBlock = slider.querySelectorAll('.slider-block');
        const leftButton = document.querySelector('button#full-slider-arrow-left');
        const rightButton = document.querySelector('button#full-slider-arrow-right');

        const width = window.getComputedStyle(slider).width;
        let offset = 0;

        sliderInner.style.width = 100 * sliderBlock.length + "%";

        sliderBlock.forEach(item => {
            item.style.width = +width.slice(0, width.length-2) + 'px'; 
        })
        
        function moveSliderLeft() {
            if (offset === 0) {
                offset = +width.slice(0, width.length-2) * (sliderBlock.length-1)
            } else {
                offset -= +width.slice(0, width.length-2);
            }
            sliderInner.style.transform = `translateX(-${offset}px)`
        }

        function moveSliderRight() {
            if (offset === +width.slice(0, width.length-2) * (sliderBlock.length-1)) {
                offset = 0
            } else {
                offset += +width.slice(0, width.length-2);
            }

            sliderInner.style.transform = `translateX(-${offset}px)`
        }

        // Math.round((offset + Number.EPSILON) * 100) / 100;

        leftButton.addEventListener('click', () => {
            moveSliderLeft();
        })
        
        rightButton.addEventListener('click', () => {
            moveSliderRight() ;
        })
    }

    if (document.querySelector('.full-slider-dis')) {
        const slider = document.querySelector('.full-slider-dis');
        const sliderInner = slider.querySelector('.full-slider-inner');
        const sliderBlock = slider.querySelectorAll('.slider-block');
        const leftButton = document.querySelector('button#full-slider-arrow-left-dis');
        const rightButton = document.querySelector('button#full-slider-arrow-right-dis');

        const width = window.getComputedStyle(slider).width;
        let offset = 0;

        sliderInner.style.width = 100 * sliderBlock.length + "%";

        sliderBlock.forEach(item => {
            item.style.width = +width.slice(0, width.length-2) + 'px'; 
        })
        
        function moveSliderLeft() {
            if(leftButton.classList.contains('disabled')) {
                return;
            }
            rightButton.classList.remove('disabled');
            offset -= +width.slice(0, width.length-2);
            if (offset === 0) {
                leftButton.classList.add('disabled')
            }        
            sliderInner.style.transform = `translateX(-${offset}px)`
        }

        function moveSliderRight() {
            if(rightButton.classList.contains('disabled')) {
                return;
            }
            leftButton.classList.remove('disabled');
            offset += +width.slice(0, width.length-2);
            if (offset === +width.slice(0, width.length-2) * (sliderBlock.length-1)) {
                rightButton.classList.add('disabled')
            }
            sliderInner.style.transform = `translateX(-${offset}px)`
        }

        leftButton.addEventListener('click', () => {
            moveSliderLeft();
        })
        
        rightButton.addEventListener('click', () => {
            moveSliderRight() ;
        })
    }
})