<?php 
ob_start();
require('database.php');
$tab = "SELECT * FROM parts ";
$partsi = mysqli_query($mysqli,$tab);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/partstable.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="icon" href="images/cat.png">
    <title>Parts Table</title>
</head>
<body>

    <table border="1px"> 
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>About</th>
            <th>Year</th>
            <th>Era</th>
            <th>Museum</th>
            <th>Type</th>
            <th>Other</th>
            <th>Sora</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>

        <?php foreach($partsi as $part){ ?>

            <tr>
                <td><?php echo $part['id'] ?></td>
                <td><?php echo $part['name'] ?></td>
                <td class="abb"><?php echo $part['about'] ?></td>
                <td><?php echo $part['year'] ?></td>
                <td><?php echo $part['era'] ?></td>
                <td><?php echo $part['museum'] ?></td>
                <td><?php echo $part['type'] ?></td>
                <td><?php echo $part['other'] ?></td>
                <td><img src="uimg/<?php echo $part['image'] ?>" height="50px" width="50px"></td>
                <td class="bt"><a href="<?php echo 'add.php?edit=' . $part['id'] ?>">Edit</a></td>
                <td class="bt"><a href="<?php echo 'table.php?del=' . $part['id'] ?>" class="dell">Delete</a></td>
            </tr>

        <?php } ?>

        <?php 

if(isset($_GET['del'])){
    $pid = $_GET['del'];
    ?>
            <div class="koko" >
                <div class="kokos">
                    <form  method="post">
                        <p>Are You Sure Want to Delete this Part ?</p>
                        <div class="btnn">
                            <input type="submit" name="delete" value="Delete" class="hio">
                            <p class="can">Cancel</p>
                        </div>
                    </form>
                </div>
            </div>
            <?php 
                
            if(isset($_POST['delete'])){
                
            $delete=mysqli_query($mysqli,"DELETE FROM`parts`WHERE`id`='$pid'");
            
                header('location:table.php');
            ob_end_flush();
        } ?>
    
<script>
        var koko = document.querySelector('.koko');
        var cancel = document.querySelector('.can');
        var hio = document.querySelector('.hio');

        cancel.addEventListener('click', function(){
            koko.classList.add('hide')
        })
    </script>
<?php
    }
?>
    </table>
</body>
</html>