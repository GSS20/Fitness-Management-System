function logout() {
	$.post("logout.php", function() {
		location.reload();
	});
}