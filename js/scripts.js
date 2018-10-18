$(function() {

    $(".tooltip").hide();

    $("li").mouseenter(function(){
        var id = $(this).attr('id');

        if((typeof id !== 'undefined') && (id.length > 0)) {
            var i;
            $("b").each(function(){
                var idb = $(this).attr('id');
                if((typeof idb !== 'undefined') && (idb == id)) {
                    var tcolor = $(this).css("color");
                    $(this).css("background-color", tcolor);
                    $(this).addClass("und");
                } 
            });
        }
    });

    $("li").mouseleave(function(){
        var id = $(this).attr('id');

        if((typeof id !== 'undefined') && (id.length > 0)) {
            var i;
            $("b").each(function(){
                var idb = $(this).attr('id');
                if((typeof idb !== 'undefined') && (idb == id)) {
                    $(this).removeAttr("style");
                    $(this).removeClass("und");
                } 
            });
        }
    });

    $(".tip").mouseenter(function(){
        var top = $(this).offset().top;
        var left = $(this).offset().left;
        var width = $(this).width();

        var twidth = $(".tooltip").width();
        var theight = $(".tooltip").height();

        var fpos = top - 12 - theight;
        var fleft = left + width * 0.5 - twidth * 0.5;

        $(".tooltip").fadeIn(50);
        $(".tooltip").css({top: fpos, left: fleft});

        if($(this).attr("typ") == "wydarzenie") {
            console.log("x");
            $(".tip-typ").css("background-color", "#9d0d10");
            $(".tip-typ").html("Wydarzenie");
        } else if ($(this).attr("typ") == "biografia") {
            console.log("x");
            $(".tip-typ").css("background-color", "#111d4a");
            $(".tip-typ").html("Biografia");
        } else if ($(this).attr("typ") == "ciekawostka") {
            console.log("x");
            $(".tip-typ").css("background-color", "#e29429");
            $(".tip-typ").html("Ciekawostka");
        } else if ($(this).attr("typ") == "miejsce") {
            console.log("x");
            $(".tip-typ").css("background-color", "#258f8e");
            $(".tip-typ").html("Miejsce");
        }

        $(".tip-naglowek").html($(this).attr("nazwa"));
        $(".tip-opis").html($(this).attr("opis"));
        $(".obrazek").attr("style", "background-image:url(img/tooltip/" + $(this).attr("zdjecie") + ");");



        var tcolor = $(this).css("color");
        $(this).css("background-color", tcolor);
        $(this).addClass("und");


    });

    $(".tip").mouseleave(function(){
        $(".tooltip").fadeOut(100);

        $(this).removeAttr("style");
        $(this).removeClass("und");
    });

    $("#button").click(function(){
        var id = $(this).attr("list");
        $(this).remove();
        $("#" + id).addClass("showit");

        var h = $("#" + id + "-p").height();

        console.log(h);

        $("." + id + "-l").css("height", h + 110);
    });
        
});
