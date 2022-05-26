<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    

<canvas id="myChart" width="50" height="50"></canvas>


<script>
var q = "<?php echo$_GET['q'];  ?>";
const ctx = document.getElementById('myChart').getContext('2d');
axios.get('alldata.php?searchq='+q).then(data=>{
  const results = data.data;
  const y = results.map(dt=>parseInt(dt.moisture));
  const x = results.map(dt=>dt.created_at);


var xValues = x;
var yValues = y;
var barColors = ["orange"];

new Chart(ctx, {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
     label: "",
      backgroundColor: barColors,
      data: yValues
    }]
  }, 
})


});
</script>
</body>
</html>