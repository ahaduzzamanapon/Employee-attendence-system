<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Manual Attendance</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        /* Your existing styles */
    </style>
</head>
<body>
<div class="container">
    <a href="index.php" class="btn btn-primary"><span>Dashboard</span></a>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="input-group">
                <div class="input-group-append">
                    <button id="start-btn" onclick='get_data()' class="btn"><span>Start</span></button>
                    <button id="end-btn" class="btn btn-danger ml-2"><span>End</span></button>
                </div>
            </div>
            <div class="loader" id="loader"></div>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-light">
                    <tr>
                        <th>User ID</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody id="data"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    function get_data() {
        $.ajax({
            url: 'api_auto.php',
            type: 'POST',
            //data: {data: data},
            success: function (response) {
                console.log(response);
                $("#loader").hide(); // Hide loader when AJAX request is complete
                alert('Data sent successfully');
            },
            error: function (xhr, textStatus, errorThrown) {
                console.log("Error: " + errorThrown + ", " + textStatus + ", " + xhr);
                $("#loader").hide(); // Hide loader in case of error
            }
        });
    }
</script>
</body>
</html>
