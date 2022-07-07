function removeChildren(container) {
    while (container.firstChild) container.removeChild(container.firstChild);
}

function marquees() {
    const marqueeElements = document.querySelectorAll('.marquee-container .marquee');

    marqueeElements.forEach(marquee => {
        const container = marquee.parentNode;
        const elementCount = Math.ceil(container.clientWidth / marquee.clientWidth) + 1;

        removeChildren(container);

        for (let i = 0; i < elementCount; i++) {
            container.appendChild(marquee.cloneNode(true))
        }
    });
}

window.addEventListener("load", marquees);
window.addEventListener("resize", marquees);
