let scrollContainer;
let isAutoScrolling = true;
let scrollSpeed = 0.5;
let animationId;

function initProjectScroll() {
    scrollContainer = document.querySelector('.project-scroll');

    if (!scrollContainer) return;

    const projectCards = Array.from(scrollContainer.children);
    projectCards.forEach(card => {
        const clone = card.cloneNode(true);
        scrollContainer.appendChild(clone);
    });

    startAutoScroll();

    scrollContainer.addEventListener('mouseenter', () => {
        isAutoScrolling = false;
    });

    scrollContainer.addEventListener('mouseleave', () => {
        isAutoScrolling = true;
    });

    scrollContainer.addEventListener('scroll', () => {
        handleInfiniteScroll();
    });
}

function startAutoScroll() {
    function scroll() {
        if (isAutoScrolling && scrollContainer) {
            scrollContainer.scrollLeft += scrollSpeed;
            handleInfiniteScroll();
        }
        animationId = requestAnimationFrame(scroll);
    }
    scroll();
}

function handleInfiniteScroll() {
    if (!scrollContainer) return;

    const projectCards = scrollContainer.children.length / 2;
    const cardWidth = scrollContainer.children[0]?.offsetWidth || 0;
    const gap = parseInt(getComputedStyle(scrollContainer).gap) || 0;
    const singleSetWidth = projectCards * cardWidth + (projectCards - 1) * gap;
    const maxScroll = singleSetWidth;

    if (scrollContainer.scrollLeft >= maxScroll) {
        scrollContainer.scrollLeft -= maxScroll;
    }

    if (scrollContainer.scrollLeft <= 0) {
        scrollContainer.scrollLeft = maxScroll - 1;
    }
}

document.addEventListener('DOMContentLoaded', initProjectScroll);

window.addEventListener('beforeunload', () => {
    if (animationId) {
        cancelAnimationFrame(animationId);
    }
});
