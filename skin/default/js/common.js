// pc端导航
$('.nav-out>li').mouseenter(function(){
    var navIn=$(this).find('.nav-in');
    if(navIn){
        navIn.fadeIn();
    }
});
$('.nav-out>li').mouseleave(function(){
    var navIn=$(this).find('.nav-in');
    if(navIn){
        navIn.fadeOut();
    }
});
// 遮罩层高度
var dd = $(document).height();
$('.tel-list').css('height',dd-86);
// 手机端导航
var tog = 0;
$('.tog').click(function(){
    if(tog == 0){
        $('.tel-list').css('width','100%');
        $('.tel-list a').fadeIn(500);
        $(document.html).css('overflow','hidden');
        $(document.body).css('overflow','hidden');
        tog = 1;
    }else{
        $('.tel-list').css('width',0);
        $('.tel-list a').fadeOut(500);
        $(document.html).css('overflow','visible');
        $(document.body).css('overflow','visible');
        tog = 0;
    }
});