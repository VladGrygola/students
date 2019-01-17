// Відкриття форми додавання по кліку на кнопку
$("#add").click(function(){ 
   $(".addFormDiv").fadeIn();
});
// Закриття форми додавання по кліку на кнопку
$("#btn").click(function(){ 
    $(".addFormDiv").hide();
});
// Закриття форми додавання по кліку не на форму
 $(document).mouseup(function(e){
    var container = $(".addFormDiv");
    if (container.has(e.target).length === 0){
        container.fadeOut();
    }
});