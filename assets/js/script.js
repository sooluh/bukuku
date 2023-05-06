(function ($) {
  'use strict';

  up.firstLoad = true;
  up.log.config.banner = false;
  up.log.disable();

  up.on('up:fragment:loaded', function (evt) {
    var reload = evt.response.getHeader('x-full-reload')

    if (reload) {
      evt.preventDefault();
      evt.request.loadPage();
    }
  });

  up.on('up:fragment:inserted', function (evt) {
    if (up.firstLoad) {
      up.firstLoad = false;
      return;
    }

    new LazyLoad({});
    new Masonry(document.querySelector('[data-masonry]'));
  });
})(window.jQuery);
