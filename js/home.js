//javascript functionality for events

    $(function()
    {
        var ele=$("h2");
        $(".content").hover(function()
        {
            $(this).css('background-color','#FFF');
            $(this).css('color','black');
            $(ele).css('color','black');
        });
    });

