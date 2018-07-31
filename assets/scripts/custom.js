function filterGallery(gallery_type, element) {
    var cleanActive = element.parentElement.parentElement.querySelectorAll('a');
    for (var i = 0; i < cleanActive.length; i++) {
        cleanActive[i].classList = "";
    }
    element.classList = 'active';
    var photos = document.querySelectorAll('#gallery-list li');

    if (gallery_type != 'All') {
        for (var i = 0; i < photos.length; i++) {
            photos[i].classList = "photo-gallery hidden";
        }

        for (var i = 0; i < photos.length; i++) {
            if (photos[i].getAttribute('data-type') == gallery_type) {
                photos[i].classList = "photo-gallery";
            }
        }
    } else {
        for (var i = 0; i < photos.length; i++) {
            photos[i].classList = "photo-gallery";
        }
    }
}

var currentSlide = 0;
var maxSlide = 3;

function setSlider() {
    if (currentSlide > maxSlide) {
        currentSlide = 0;
    }

    var slides = document.querySelectorAll('#slider .slide');
    for (var i = 0; i < slides.length; i++) {
        slides[i].classList = "slide";
        if (i == currentSlide) {
            slides[i].classList = "slide active";
        }
    }

    currentSlide++;
    setTimeout(function () {
        setSlider();
    }, 3000);
}

setTimeout(function () {
    setSlider();
}, 0);