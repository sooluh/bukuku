function giscus() {
  var repository = 'sooluh/reading';
  var id = 'R_kgDOJfayfw';
  var category = 'DIC_kwDOJfayf84CWVYJ';
  var script = document.createElement('script');

  script.src = 'https://giscus.app/client.js';
  script.setAttribute('data-repo', repository);
  script.setAttribute('data-repo-id', id);
  script.setAttribute('data-category', 'General');
  script.setAttribute('data-category-id', category);
  script.setAttribute('data-mapping', 'pathname');
  script.setAttribute('data-strict', '1');
  script.setAttribute('data-reactions-enabled', '0');
  script.setAttribute('data-emit-metadata', '1');
  script.setAttribute('data-input-position', 'top');
  script.setAttribute('data-theme', 'light');
  script.setAttribute('data-lang', 'en');
  script.setAttribute('data-loading', 'lazy');
  script.setAttribute('crossorigin', 'anonymous');
  script.setAttribute('async', 'async');

  document.getElementById('giscus').appendChild(script)
}

(function () {
  'use strict';

  up.log.config.banner = false;
  up.log.disable();

  up.compiler('[data-masonry]', function (element) {
    new Masonry(element);
  });

  up.on('up:fragment:inserted', function (evt) {
    if (/\/book\//.test(window.location.href) && window.umami) {
      var html = evt.target || evt.srcElement;
      var title = html.querySelector('h2').innerHTML;

      window.umami.track(title);
    }

    new LazyLoad({
      callback_load: function (element) {
        element.classList.add('loaded');
      },
    });

    [...document.querySelectorAll('[data-bs-toggle="tooltip"]')].map(function (element) {
      new bootstrap.Tooltip(element);
    });

    if (document.getElementById('giscus')) {
      document.getElementById('giscus').innerHTML = '';

      if (/\/book\//.test(new URL(window.location.href).pathname)) {
        giscus();
      }
    }
  });
})();
