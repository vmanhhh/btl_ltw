$("#tab-user").DataTable({
	responsive: true,
	lengthChange: false,
	autoWidth: false,
});

$(function () {
	$('[data-toggle="tooltip"]').tooltip();
});

$(".btn-edit").click(function (e) {
	var username = $(this).data("username");
	var fname = $(this).data("fname");
	var lname = $(this).data("lname");
	var gender = $(this).data("gender");
	var age = $(this).data("age");
	var phone = $(this).data("phone");
	var img = $(this).data("img");
	// console.log(username, fname, lname, gender, age, phone);
	$("#EditUserModal input[name='username']").val(username);
	$("#EditUserModal input[name='fname']").val(fname);
	$("#EditUserModal input[name='lname']").val(lname);
	if (gender)
		$("#EditUserModal #Nam").prop(
			"checked",
			true
		); //Search checked input radio jquery
	else $("#EditUserModal #Nu").prop("checked", true);
	$("#EditUserModal input[name='age']").val(age);
	$("#EditUserModal input[name='phone']").val(phone);
	$("#EditUserModal input[name='img']").val(img);
	$("#EditUserModal").modal("show");
});

$(".btn-changepass").click(function (e) {
	var username = $(this).data("username");
	$("#EditPassModal input[name='username']").val(username);
	$("#EditPassModal").modal("show");
});

$(".btn-delete").click(function (e) {
	var username = $(this).data("username");
	var img = $(this).data("img");
	$("#DeleteUserModal input[name='username']").val(username);
	$("#DeleteUserModal input[name='img']").val(img);
	$("#DeleteUserModal").modal("show");
});
