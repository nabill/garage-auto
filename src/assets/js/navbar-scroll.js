(function () {
  var nav = document.querySelector('.navbar');
  if (!nav) return;
  function update() {
    nav.classList.toggle('is-scrolled', window.scrollY > 10);
  }
  window.addEventListener('scroll', update, { passive: true });
  update();
})();
