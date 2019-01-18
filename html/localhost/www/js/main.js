// Open form to click
$("#add").click(function(){ 
   $(".addFormDiv").fadeIn();
});
// Close form to click on the button
$("#btn").click(function(){ 
    $(".addFormDiv").hide();
});
// Close form to click anywhere
 $(document).mouseup(function(e){
    var container = $(".addFormDiv");
    if (container.has(e.target).length === 0){
        container.fadeOut();
    }
});
// Add checkboxes to table
var numRows = parseInt(document.getElementById('rowNumbers').innerHTML);
for(var i = 1; i <= numRows; i++) {
    var add = "<input style='margin:9px' type='checkbox' value='" + i + "'/>";
    $("#checkboxToTable").append(add);
}