$(document).ready(function(){
	$("#submit").click(function(event){
		event.preventDefault();

		var password1=document.getElementById("password1").value;
		var password2=document.getElementById("password2").value;

		if(password1!="" && password2!="")
		{
			if(password1==password2)
			{
				var formData=$("#editProfile").serialize();
				$.post("../../php/editProfile.php",
					formData,
					function(data,status){
						if(data=="success" && status=="success")
						{
							location.replace("home.php");
						}	
					});
			}
			else
			{
				$("#error2").addClass("hidden");
				$("#error1").removeClass("hidden");
			}
		}
		else
		{
			$("#error1").addClass("hidden");
			$("#error2").removeClass("hidden");
		}
	});
});