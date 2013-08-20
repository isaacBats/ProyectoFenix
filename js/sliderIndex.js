<script tupe="text/javascript">
var i = 0;
$(document).on("ready", main);

function main(){
	var control = setInterval(cambiarSlider, 5000);
}

function cambiarSlider(){
	i++;
	if(i == $("#slider-imag img").size()){
		i = 0;
	}
	$("#slider-imag img").hide();
	$("#slider-imag img").eq(i).fadeIn("medium");
}
</script>