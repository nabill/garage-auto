document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('contextmenu', function (e) {
        e.preventDefault();
    });

    document.addEventListener('keydown', function (e) {
        if (e.ctrlKey && e.shiftKey && e.keyCode === 73) {
            e.preventDefault();
        }
        if (e.ctrlKey && e.shiftKey && e.keyCode === 67) {
            e.preventDefault();
        }
        if (e.ctrlKey && e.keyCode === 85) {
            e.preventDefault();
        }
    });
});