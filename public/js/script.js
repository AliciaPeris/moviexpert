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
});
