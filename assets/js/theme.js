(function () {
  'use strict';

  function setupVsTabs(root) {
    if (document.body.classList.contains('block-editor-page')) return;
    root.querySelectorAll('.vs-tabs__panel').forEach(function (panel) {
      panel.hidden = !panel.classList.contains('is-active');
    });
  }

  function activateTab(link, root) {
    var href = link.getAttribute('href') || '';
    if (href.charAt(0) !== '#') return;
    var panelId = href.slice(1);
    var panel = Array.from(root.querySelectorAll('.vs-tabs__panel')).find(function (item) {
      return item.id === panelId;
    });
    if (!panel) return;

    var selectedWrapper = link.closest('.vs-tabs__button');
    root.querySelectorAll('.vs-tabs__button').forEach(function (item) {
      item.classList.toggle('is-active', item === selectedWrapper);
    });
    root.querySelectorAll('.vs-tabs__panel').forEach(function (item) {
      var active = item === panel;
      item.hidden = !active;
      item.classList.toggle('is-active', active);
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.vs-about-tabs').forEach(setupVsTabs);
  });

  document.addEventListener('click', function (event) {
    var link = event.target.closest('.vs-about-tabs .vs-tabs__button a');
    if (!link) return;
    var root = link.closest('.vs-about-tabs');
    if (!root) return;
    event.preventDefault();
    activateTab(link, root);
  });
}());
