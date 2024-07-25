<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>READ DATABASE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #0b0c10;
            color: #c5c6c7;
        }
        
        .navbar {
            background-color: #1f2833;
        }
        
        .navbar-brand,
        .nav-link {
            color: #66fcf1 !important;
        }
        
        .card {
            background-color: #1f2833;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        }
        
        .card-header {
            background-color: #0b0c10;
            color: #66fcf1;
            border-bottom: none;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        
        .table {
            color: #c5c6c7;
        }
        
        .light-theme {
            background-color: #f0f2f5;
            color: #1f2833;
        }
        
        .light-theme .navbar {
            background-color: #e3f2fd;
        }
        
        .light-theme .navbar-brand,
        .light-theme .nav-link {
            color: #1f2833 !important;
        }
        
        .light-theme .card {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .light-theme .card-header {
            background-color: #e3f2fd;
            color: #ffffff;
        }
        
        .light-theme .table {
            color: #1f2833;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.html">READ DATABASE</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.html#insert">Insert</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#delete">Delete</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.html#update">Update</a></li>
                </ul>
            <button class="btn btn-outline-primary" id="themeToggle"><i class="fa-regular fa-lightbulb"></i> </button>
        </div>
    </nav>
    <div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-striped table-hover table-lg">
            <thead>
                <tr>
                    <th scope="col"><center>Text</center></th>
                    <th scope="col"><center>Password</center></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "conn.php";
                $read = "SELECT * FROM `data`";
                $result = mysqli_query($conn, $read);

                while ($row = mysqli_fetch_assoc($result)) {
                    $text = htmlspecialchars($row['text']);
                    $pass = htmlspecialchars($row['pass']);
                    echo "<tr>
                            <td><center>" . $text . "</center></td>
                            <td><center>" . $pass . "</center></td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


    <script>
        document.getElementById('themeToggle').addEventListener('click', function() {
            document.body.classList.toggle('light-theme');
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
