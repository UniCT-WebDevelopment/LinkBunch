$('#text_font').on('change', function () {
    $(this).css('font-family', $(this).children("option:selected").val());
});

$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $("#indnav a, footer a[href='#myPage']").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function () {
                window.location.hash = hash;
            });
        }
    });
});

$('.input-group-append input[type="text"]').on('change',function(){
    $(this).parent().children('input[type="color"]').val($(this).val());
});
$('.input-group-append input[type="color"]').on('change',function(){
    $(this).parent().children('input[type="text"]').val($(this).val());
});