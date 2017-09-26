



jQuery(document).ready(function($) {

      // check width
      if ($("body").width() <= 1200){
        // if true trigger event
        $("#dropdown").click(function(){
          $("#menu").toggle("slow", function() {

          });
        });
        // when link clicked hide menu
        $(".link").click(function(){
          $("#menu").hide();
        });
      }
});
