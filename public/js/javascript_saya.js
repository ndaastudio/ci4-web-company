window.addEventListener('DOMContentLoaded', event => {
    const mainNav = document.body.querySelector('#mainNav');

    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };
});
