
$(document).ready(function() {

	$("#step_one").on("click", function() {
		$(".first_item").slideToggle(500);
		$(".second_item").slideUp(500);
		});

	$("#step_second").on("click", function() {
		$(".second_item").slideToggle(500);
		$(".first_item").slideUp(500);
		});

	$("#continue").on("click", function(){
		$(".first_item").slideUp(500);
	    $(".second_item").slideDown(500);	
	});

	$("#information").on("click", function(){
		$(".information").slideDown(500);
	});
	$("#information_close").on("click", function(){
		$(".information").slideUp(500);
	});

	//E-mail Ajax Send
    $('form').submit(function(e) {
        e.preventDefault();
        $('form').find('input[type="text"]').trigger('red');
        $('form').find('textarea').trigger('blur');
        if (!$(this).find('input[type="text"]').hasClass('error_input') && !$(this).find('textarea').hasClass('error_input')) {
            var type = $(this).attr('method');
            var url = $(this).attr('action');
            var data = $(this).serialize();
            $.ajax({
                type: type,
                url: url,
                data: data,
                success: function() {
                $(".second_item").slideToggle(100);
				$(".fisrt_step").addClass('hidden');
				$(".second_step").addClass('hidden');
				$(".popup_success").fadeIn('slow');
                    //alert("Success");
                    // $(".popup_success").slideToggle("slow")({
                    //     direction: "up"
                    // }, 300);
                }
            });
        }
        $(this).trigger("reset");
    });

}); 