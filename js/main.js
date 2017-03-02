/////////////// UNIVERSAL

	$(".search-toggle").on("click", function(){
		$("#slide").animate({width:'150px', padding:'1px 5px'},350);
	});

	$("textarea").keydown(resize); 

	function resize(){
		var  $el = this;
		setTimeout(function(){
			$el.style.cssText = "height: auto; padding:0;";
			$el.style.cssText = "height: "+ $el.scrollHeight+"px";
		}, 0);
	}            


/////////////// HOME

		$(function() {
		    $("textarea[name='comment-text']").keypress(function (e) {
		        if(e.which == 13) {
		            //submit form via ajax, this is not JS but server side scripting so not showing here
		            e.preventDefault();
		        }
		    });
		});		

		var str = $("#post-text:input").val();
		$(".btn.btn-mt").on("click", function(){
			var result = str.replace(/\n/g, '<br />');
			document.write(result);
		});


/////////////// LOGIN

	function authentication($username, $password){
		$query = "select * from user where username = "+ $username +" AND password ="+ $password;
		$.ajax({
			type: 'POST',
			url: "incl/header.php?auth"
		});

	}
