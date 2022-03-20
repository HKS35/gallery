<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>project</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            include('connection.php');
            $sql = "select * from album inner join gallery on album.id = gallery.fkey";
            $result = mysqli_query($conn,$sql) or mysqli_error($conn);
            while($row = mysqli_fetch_assoc($result)){  
        ?>
            <div class="col-md-3">
                <p><?php echo $row['album'] ?></p>
              
                    <img src="<?php echo "http://localhost/signup/".$row['photo']; ?>" height="250px" width="300px">
            </div>

        <?php
        }
        ?>
         
        </div>
    </div>
    <!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
        
           
      