// Kiriak - BDO Codex:

$(document).ready(function ()
{

    $('.hide-show').each(function ()
    {

$(this).click(function ()
    {
		console.log('clicked');
        var content=$(this).find(".plus-minus-fa").html();
        if (content=='<i class="fa-solid fa-plus"></i>') content='<i class="fa-solid fa-minus"></i>';
        else content='<i class="fa-solid fa-plus"></i>';
       $(this).find(".plus-minus-fa").html(content);

    });
    });
	
});