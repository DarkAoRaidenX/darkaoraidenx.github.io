// Kiriak - BDO Codex:

$(document).ready(function ()
{

    $('.buttonLink').each(function ()
    {

$(this).click(function ()
    {
		console.log('clicked');
        var content=$(this).find(".dotPlus").html();
        if (content=='+') content='-';
        else content='+';
       $(this).find(".dotPlus").html(content);

    });
    });
	
});