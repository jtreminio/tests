$(document).ready(function () {
    $('.open-modal').click(function () {
        $("#dialog").dialog({
            modal:true,
            buttons:{
                Ok:function () {
                    $(this).dialog("close");
                }
            }
        });
    });
});