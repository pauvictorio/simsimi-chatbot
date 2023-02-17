$(document).ready(function() {
	$.get("/talks/index_html", $(this).serialize(), function(res) {
		$("#conversation").html(res);
		$("#conversation").scrollTop($("#conversation")[0].scrollHeight);
	});

	$('form').on("submit", function() {
		var message = $("#user-chat").val();
		var userMessage = '<div class="chat"><div class="user"><img src="/assets/user.jpg"><div class="user-in"><p>' + message + '</p></div></div></div>';
	
		$("#conversation").append(userMessage);
		$("#conversation").scrollTop($("#conversation")[0].scrollHeight);
	
		var form = $(this);
	
		$.post(form.attr('action'), form.serialize(), function(res) {
			$("#conversation").find(".user").last().remove();
			$("#conversation").html(res);
	
			$.get("/talks/index_html", form.serialize(), function(res) {
				$("#conversation").html(res);
				$("#conversation").scrollTop($("#conversation")[0].scrollHeight);
			});
		});
	
		$("#user-chat").val('');
		return false;
	});
	
});