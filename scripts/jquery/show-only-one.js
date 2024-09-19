function showonlyone(thechosenone) {
     $('div[class|="hidden"]').each(function(index) {
          if ($(this).attr("id") == thechosenone) {
               $(this).show();
          }
          else {
               $(this).hide();
          }
     });
}