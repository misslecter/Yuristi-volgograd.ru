var parent = $(".input-bizcons");
var input = $(".form-control");
var label = $(".input-label");
var old_placeholder;
input.focus(function () {
    old_placeholder = this.placeholder;
    $(this).parent().children().css("visibility", "visible");
    $(this).parent().children().css("padding-left", "20px");
    $(this).css("padding-left", "50px");
    $(this).attr('placeholder','');
});
input.blur(function () {
    if(this.value) {
        $(this).css("padding-left", "50px");
    } else {
        label.css("visibility", "hidden");
        label.css("padding-left", "0px");
        $(this).css("padding-left", "20px");
        $(this).attr('placeholder', old_placeholder);
    }
})