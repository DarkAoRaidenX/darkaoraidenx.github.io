function showonlyone(thechosenone) {
     $('div[class|="showonlyone"]').each(function(index) {
          if ($(this).attr("id") == thechosenone) {
               $(this).show();
          }
          else {
               $(this).hide();
          }
     });
}