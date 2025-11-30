const initSliderCaptcha = () => {
    const track = document.querySelector("[data-slider-track]") as HTMLElement;
    const handle = document.querySelector("[data-slider-handle]") as HTMLElement;
    const input = document.querySelector("input[name='slider_captcha']") as HTMLInputElement;

    if (!track || !handle || !input) return;

    let dragging = false;
    let startX = 0;

    const getClientX = (ev: MouseEvent | TouchEvent) => {
        if (ev instanceof TouchEvent) {
            return ev.touches[0].clientX;
        }
        return ev.clientX;
    };

    const startDrag = (ev: MouseEvent | TouchEvent) => {
        dragging = true;
        startX = getClientX(ev) - handle.offsetLeft;
        ev.preventDefault();
    };

    const moveDrag = (ev: MouseEvent | TouchEvent) => {
        if (!dragging) return;
        let pos = getClientX(ev) - startX;
        const max = track.offsetWidth - handle.offsetWidth;
        pos = Math.max(0, Math.min(pos, max));
        handle.style.left = pos + "px";

        if (pos >= max) {
            input.value = "1";
            track.classList.add("sw-verified");
            dragging = false;
        }
        ev.preventDefault();
    };

    const endDrag = () => {
        dragging = false;
    };

    handle.addEventListener("mousedown", startDrag);
    document.addEventListener("mousemove", moveDrag);
    document.addEventListener("mouseup", endDrag);

    handle.addEventListener("touchstart", startDrag);
    document.addEventListener("touchmove", moveDrag);
    document.addEventListener("touchend", endDrag);
};

document.addEventListener("DOMContentLoaded", initSliderCaptcha);
