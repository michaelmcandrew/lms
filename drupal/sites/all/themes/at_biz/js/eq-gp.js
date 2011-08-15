(function ($) {
  Drupal.behaviors.atheadliner_egp = {
    attach: function(context) {
      $('#bi-panel .block-content').equalHeight();
      $('#tri-panel .block-content').equalHeight();
      $('#tri-panel-2 .block-content').equalHeight();
      $('#quad-panel .block-content').equalHeight();
      $('#footer-panel .block-content').equalHeight();
    }
  };
})(jQuery);