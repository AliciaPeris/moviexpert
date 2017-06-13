$(document).ready(function(){
  $("#info").val("");
  $(".ocultar").hide();
  $("#btnmenuadmin").click(function(){
    $("#menuadmin").toggle();
  });
  $(".part").click(function(){
    $("#info").val("");
    var tit=$(this).attr('title');
    $(".ocultar").show();
   $("#info").val(tit);
 });

var mql = window.matchMedia("(min-width: 768px)");
var handleMediaChange = function (mediaQueryList) {
      if (mediaQueryList.matches) {
          $("#menuadmin").show();
      }
  }
  mql.addListener(handleMediaChange);
  handleMediaChange(mql);
});
