//
$(document).ready(function()  {

// CHIAMATA AJAX
$.ajax({

  "url": "http://localhost/php-ajax-dischi/src/partials/api.php",
  "method": "GET",
  "success": function(data){
    render(data);
  },
  "error": function(err){
    alert("errore");
  },
});
});

//FUNCTION PER CICLARE TUTTI I DISCHI
function render(result) {
  for (var i = 0; i < result.length; i++) {
    console.log(result[i]["title"]);

    //HANDLEBARS
    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);

    var context = {
        "title": result[i]["title"],
        "author": result[i]["author"],
        "year": result[i]["year"],
        "poster": result[i]["poster"]
    };
    var html = template(context);
    $(".row").append(html);
  }
}
