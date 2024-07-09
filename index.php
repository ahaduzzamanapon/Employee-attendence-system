<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Attendance System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            
        }
        .header, .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Welcome to Employee Attendance System</h1>
    </header>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="lead">Easily manage employee attendance with our system. Track, monitor, and record attendance efficiently.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Attendance Tracking</h5>
                            <p class="card-text">Monitor daily attendance of employees.</p>
                            <a href="manual_attendance.php" class="btn btn-primary">Manual Attendance</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Automatic Attendance System</h5>
                            <p class="card-text">Automatically get employee attendance.</p>
                            <a href="auto_attendance.php" class="btn btn-primary">Automatic Attendance</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Employee Management</h5>
                            <p class="card-text">Manage employee and add new employees.</p>
                            <a href="user_info.php" class="btn btn-primary">User Management</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Employee Attendance System. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
