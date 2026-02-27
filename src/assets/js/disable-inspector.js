(function () {
    const threshold = 160;
    const widthThreshold = window.outerWidth - window.innerWidth > threshold;
    const heightThreshold = window.outerHeight - window.innerHeight > threshold;

    if (widthThreshold || heightThreshold) {
        handleDevToolsOpen();
    }

    document.addEventListener('keydown', function (e) {
        if (
            (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J' || e.key === 'C')) ||
            (e.key === 'F12')
        ) {
            e.preventDefault();
            handleDevToolsOpen();
        }
    });

    setInterval(function () {
        const isDevToolsOpen =
            window.outerWidth - window.innerWidth > threshold ||
            window.outerHeight - window.innerHeight > threshold;

        if (isDevToolsOpen) {
            handleDevToolsOpen();
        }
    }, 1000);

    document.addEventListener('contextmenu', function (e) {
        e.preventDefault();
        return false;
    });

    function handleDevToolsOpen() {
        console.log("DevTools detected");
    }
})();