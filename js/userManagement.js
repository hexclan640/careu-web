$(document).ready(function()
{
	setInterval(function()
	{
		$("#div1").load('../../php/admin/userRequests.php')
	}, 2000);
});

$(document).ready(function()
{
	setInterval(function()
	{
		$("#div2").load('../../php/admin/userBrief.php')
 	}, 2000);
});