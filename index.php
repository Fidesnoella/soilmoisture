
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Soil Moisture Records</title>
</head>
<body background="another.jpg">
    <main >
        <div class="w-full">
            <div class="mt-5">
                <div class="col-md-6 m-auto">
                <font size=4><b>
                    <h4 style="color:aliceblue;" class="text-center">Soil Moisture Record System</h4>
                    </b>
                </font>

                <a href="AllList.php" class="btn btn-primary d-flex mt-3 w-25 justify-content-around ml-auto">View all records</a>
                <form method="POST"
                class="p-5"
                 action="save.php"style="
                    margin: 5% auto;
                    border: 1px solid #ffffffa1;border-radius: 20px;
                    ">
                    <div class="form-group">
                        <label for="Device serial" class="text-white">Soil Type</label>
                        <!-- select box -->
                        <select required name="soil_type" id="device" class="form-control">
                            <option selected disable value="">Please Select Soil type</option>
                            <option value="clay">Clay</option>
                            <option value="sandy">Sandy</option>
                            <option value="silty">Silty</option>
                            <option value="peaty">Peaty</option>
                            <option value="chalky">Chalky</option>
                            <option value="loamy">Loamy</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="temparature" class="text-white">Soil Moisture</label>
                        <input type="text" required name="moisture" class="form-control"  placeholder="soil moisture" />
                    </div>
                    <div class="form-group d-flex justify-content-around">
                        <button class="btn btn-success" style=" 
                            width: 20%;
                            border: 0;
                            border-radius: 5px;
                            cursor: pointer;
                            box-sizing: border-box;">Save</button>

                        <input type="reset" value="Reset" name="reset" style=" 
                            width: 20%;
                            border: 0;
                            background: #ff0000bf;
                            border-radius: 5px;
                            color: aliceblue;
                            cursor: pointer;
                            box-sizing: border-box;">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>