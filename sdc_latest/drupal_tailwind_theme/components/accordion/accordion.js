(function () {
  document.addEventListener('click', function (e) {
    const trigger = e.target.closest('[aria-controls]');
    if (!trigger) return;

    const panelId = trigger.getAttribute('aria-controls');
    const panel = document.getElementById(panelId);
    const icon = trigger.querySelector('svg');

    const expanded = trigger.getAttribute('aria-expanded') === 'true';

    trigger.setAttribute('aria-expanded', String(!expanded));
    panel.hidden = expanded;

    if (icon) {
      icon.classList.toggle('rotate-180', !expanded);
    }
  });
})();
