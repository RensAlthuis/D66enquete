var sliders = $("#sliders .slider");

i = 0
sliders.each(function() {
    maximum = 100;
    $(this).slider({
        value: 0,
        min: 0,
        max: maximum,
        range: "max",
        step: 2,
        animate: 100,
        create: function() {
            $("#custom-handle", this).text( $( this ).slider( "value" ) );
        },
        slide: function(event, ui) {

            //calculate of other sliders
            var total = 0;    
            sliders.not(this).each(function() {
                total += $(this).slider("option", "value");
            });    

            var available = maximum - total;            

            //total += ui.value;

            if (available - ui.value >= 0) {
                total += ui.value;
                $('#over span').text(maximum-total + "%");
                $("#custom-handle", this).text(ui.value + "%");
            } else {
                return false;
            }
        }
    });
});

$("#sendButton").click(function (){
	var values = [];
	var i = 0;
	sliders.each(function() {
		values[i] = $(this).slider("option", "value");
		i = i + 1;
	});
	$.ajax({
		url: "Send.php",
		type: "post",
		data: {val: values},
		success: function(result){
			console.log(result);
		},
		error: function(err){
			console.log(err);
		}
	});
});
