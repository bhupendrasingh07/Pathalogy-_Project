<!DOCTYPE html>
<html lang="en">


<!-- appointments23:19-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>

    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/app.js"></script>
	<script>
    //     $( document ).ready(function() {
    //         getdata();
    //     })

    //     function getdata() {
    //         $.ajax({
    //             url: './Module/appointment.php',
    //             type: 'GET',
    //             dataType: 'json',
    //             success: function (response) {
    //                 if (response.success) {
    //                     // Handle the successful response here
    //                     updateTable(response.data);
    //                     // console.log('Data:', response.data);
    //                 } else {
    //                     // Handle the case where the server response indicates an error
    //                     console.error('Server Error:', response.error);
    //                 }
    //             },
    //             error: function (xhr, status, error) {
    //                 console.error('AJAX Error:', error);
    //             }
    //         });
    //     }
    // function updateTable(data) {
    //     var tableBody = $('#appointment');
        
    //     // Clear existing rows
    //     tableBody.empty();
    //     $.each(data, function(index, row) {
    //         var newRow = $('<tr>');
    //         newRow.append($('<td>').text(row.appointment_id));
    //         newRow.append($('<td>').text(row.patient_name));
    //         newRow.append($('<td>').text(row.age));
    //         newRow.append($('<td>').text(row.package_name));
    //         newRow.append($('<td>').text(row.department));
    //         newRow.append($('<td>').text(row.appointment_date));
    //         newRow.append($('<td>').text(row.appointment_time));
    //         var statusText = (row.status == 1) ? 'Pending' : 'Booked';
    //         newRow.append($('<td>').text(statusText));
    //         // css for all tbody data 
    //         newRow.children('td').css('text-align', 'center');

    //         var actionColumn = $('<td>').addClass('text-right').html(`
    //         <div class="dropdown dropdown-action">
    //             <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
    //             <div class="dropdown-menu dropdown-menu-right">
    //                 <a class="dropdown-item" href="edit-patient.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
    //                 <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
    //             </div>
    //         </div>
    //     `);
    //     newRow.append(actionColumn);
    //         tableBody.append(newRow);
    //     });
    // }
     </script>
</body>


<!-- appointments23:20-->
</html>