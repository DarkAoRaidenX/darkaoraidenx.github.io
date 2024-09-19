// Kiriak - BDO Codex:

$(document).ready(function ()
{

    $('.button-link').each(function ()
    {

$(this).click(function ()
    {
		console.log('clicked');
        var content=$(this).find(".dot-plus").html();
        if (content=='+') content='-';
        else content='+';
       $(this).find(".dot-plus").html(content);

    });
    });
	
});