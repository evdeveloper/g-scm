$(document).ready(function() {
	$("#catalog-filter__range").slider({
    range: true,
    min: 2,
    max: 2484639,
    values: [ 2, 2484639 ],
    slide: function( event, ui ) {
      $("#amount").val(ui.values[ 0 ] + " руб - " + ui.values[ 1 ] + " руб");
      $(".f__price-input").attr("value", ui.values[ 0 ]);
      $(".t__price-input").attr("value", ui.values[ 1 ]);
    }
  });
  $("#amount").val($("#catalog-filter__range").slider("values", 0) + " руб - " + $("#catalog-filter__range").slider("values", 1) + " руб");


});