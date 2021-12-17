function testbrowse(){
    //$("#content").animate({opacity: 0},1000);
    //$("#content").animate({opacity: 1},2000);
    $("#content").load("testing.php #test");
    $(this).scrollTop(0);
    //$(this).scrollTop(800);
};
function browseAlanScott(){
    //$("#content").animate({opacity: 0},1000);
    //$("#content").animate({opacity: 1},2000);
    $("#content").load("all-information.php #alanscott");
    $(this).scrollTop(0);
    //$(this).scrollTop(800);
};