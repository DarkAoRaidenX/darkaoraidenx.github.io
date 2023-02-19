$(document).ready(function ()
{
    $(".xpCalc").on("change", function ()
    {
        perform_calc();
    });

    $("#selectPrimaryObjective").on("change", function ()
    {
        xp_set();

    });
 
    xp_set();

});



function xp_set()
{

    var mul = $("#selectPrimaryObjective option:selected").data("mul")*1;


    var secondaryObjectiveArray = 
    [
        ["Select Secondary Objective", ""],
        ["Apoca Bloom (15) ", "apoca_bloom"],
        ["Alien Fossil (10) ", "alien_fossil"],
        ["Boolo Cap (20) ", "boolo_cap"],
        ["Dystrum (100) ", "dystrum"],
        ["Ebonut (14) ", "ebonut"],
        ["Fester Fleas (10) ", "fester_fleas"],
        ["Gunk Seed (12) ", "gunk_seed"],
        ["Hollomite (35) ", "hollomite"],
    ];

    var xpAmount = mul*175;



    $('#selectSecondaryObjective').empty();
    for (var key in secondaryObjectiveArray)
    { 
        var sel = "";
        var xpString = "";
        if (key == 0) sel = "selected";
        if (key != 0) xpString = '(' + xpAmount + ' XP)';

        $('#selectSecondaryObjective').append
        (
            '<option id="'+secondaryObjectiveArray[key][1]+'" value="'+ xpAmount +'" '+ sel +'>' 
            + secondaryObjectiveArray[key][0] + xpString + '</option>'
        );
    }


}



/* 
Things to do
1. Formula for Holomite and Dystrum 
2. Holomite and Dystrum alphabetical list
3. Selected status doesn't have the XP showing up
4. Make it so it doesnt refresh secondary when changing primary and just updates the values but might make it so not need selected option 
5. Pictures/Icons pop up whatever you choose
*/




function perform_calc()
{
    var primary=$("#selectPrimaryObjective").val()*1;
    var secondary=$("#selectSecondaryObjective").val()*1;
    var sum=primary+secondary;
    var total=sum
    +sum/100*$("#selectHazardLevel").val()*1
    +sum/100*$("#selectComplexityLevel").val()*1
    +sum/100*$("#selectLengthFootSteps").val()*1
    +sum/100*$("#selectWarningActive").val()*1
    +sum/100*$("#selectWarningActive2").val()*1
    +sum/100*$("#selectDoubleXP").val()*1;
    $("#xpTotal").val(total);
}
 

// function addClass()
// {
//     if(option.name == 'egg_hunt4_primary'){
//     		var elem = document.getElementsByName("egg_hunt6_secondary");
//     		elem.classList.add("hidden");
//     }
//     // var elem = document.getElementsByName("egg_hunt6_secondary");
//     // elem.className += "hidden";
// }	

