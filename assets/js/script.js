(function ($) {
  'use strict';

  up.log.config.banner = false;
  up.log.disable();

  up.on('up:fragment:loaded', function (evt) {
    var reload = evt.response.getHeader('x-full-reload')

    if (reload) {
      evt.preventDefault();
      evt.request.loadPage();
    }
  });

  up.compiler('[data-masonry]', function (element) {
    new Masonry(element);
  });

  up.on('up:fragment:inserted', function () {
    new LazyLoad({});
  });
})(window.jQuery);
