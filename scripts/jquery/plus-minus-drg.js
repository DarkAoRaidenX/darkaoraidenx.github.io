// Kiriak - BDO Codex:

$(document).ready(function ()
{

    $('.hide-show').each(function ()
    {

$(this).click(function ()
    {
		console.log('clicked');
        var content=$(this).find(".plus-minus").html();
        if (content=='+') content='-';
        else content='+';
       $(this).find(".plus-minus").html(content);

    });
    });
	
});