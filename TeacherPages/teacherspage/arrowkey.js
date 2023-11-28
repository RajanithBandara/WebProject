document.addEventListener('DOMContentLoaded', function () {
    const slidesContainer = document.querySelector('.slides');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');
    let currentIndex = 0;

    function showSlide(index) {
        const slideWidth = document.querySelector('.slide').offsetWidth;
        slidesContainer.style.transform = `translateX(-${index * slideWidth}px)`;
    }

    function moveToNext() {
        currentIndex = Math.min(slidesContainer.children.length - 1, currentIndex + 1);
        showSlide(currentIndex);
    }

    function moveToPrev() {
        currentIndex = Math.max(0, currentIndex - 1);
        showSlide(currentIndex);
    }

    nextButton.addEventListener('click', moveToNext);
    prevButton.addEventListener('click', moveToPrev);

    document.addEventListener('keydown', function (event) {
        if (event.key === 'ArrowLeft') {
            moveToPrev();
        } else if (event.key === 'ArrowRight') {
            moveToNext();
        }
    });
});
