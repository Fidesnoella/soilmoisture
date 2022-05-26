<?php

require_once('config.php');
require_once('connection.php');
require_once('SoilModal.php');

$sm = new SoilModal();
if(isset($_GET['searchq'])){
    $allRecords = $sm->search($_GET['searchq']);
}else{
    $allRecords = $sm->getAll();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>all records</title>
</head>

<body background="another.jpg">
    <main>
        <div class="w-full">
            <div class="container mt-5">
                <div class="col-md-8 m-auto">
                    <form>
                        <div class="input-group is-invalid">

                            <div class="custom-file">
                                <input
                                 placeholder="please search here!"
                                  name="searchq"
                                   class="form-control" type="text" required />
                            </div>

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary" type="button">Search</button>
                            </div>
                            
                            
                        </div>
                    </form>
                    <a href="index.php" class="btn btn-primary d-flex mt-3 w-25 justify-content-around ml-auto">
                        Insert New Record</a>
                    <table class="table table-striped table-bordered table-hover mt-4">
                        <thead class="text-white-50">
                            <tr>
                                <th>No</th>
                                <th>Soil Type</th>
                                <th>Soil Moisture</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($allRecords as $record): ?>
                            <tr class="text-white">
                                <td><?php echo $record["id"]; ?>.</td>
                                <td><a href="graph.php?q=<?php echo $record['soil_type']; ?>" ><?php echo $record['soil_type']; ?></a></td>
                                <td><?php echo $record['moisture']; ?><b> KPa</b></td>
                                <td><?php echo $record['created_at']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>