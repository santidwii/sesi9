<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<body>
    <div id= "artikel1">
        isi artikel 1
    </div>
    <div class= "artikel2">
        isi artikel 2
    </div>
    <div>
    <script>
         document.getElementById("artikel1").style.color = "red";

         const obj = document.getElementsByClassName("artikel2");
         obj[0].style.color = "blue";
    </script>
    
  

</body>
</html>