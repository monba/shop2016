$(document)
.on("submit", "#board_login", function(){
  if(validate("login")){
		$.post('ajax_login.php', $(this).serialize(), function(data){
			if(data === 0){
				alert("Username or Password is incorrect");
			} else if (data == 1){
				window.open('.../dedlogin.php', '_self');	
			}
		});
	}
})
;

function validate(){
		if($("#b_username").val() === ''){
			alert("Must provide a username");
			$("#b_username").focus();
			return false;
		}
		if($("#b_password").val() === ''){
			alert("Must provide a password");
			$("#b_password").focus();
			return false;
		}
		return true;
}