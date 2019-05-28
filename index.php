<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <script>
      function callDatabase(phpCall) {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
               console.log(this.responseText);
            }
         };
         xmlhttp.open('GET', phpCall, true);
         xmlhttp.send();
      }
   </script>

   <style>
      button {
         margin: 5px;
      }
   </style>
   </head>

<body>
   <button onclick='callDatabase("connect.php")'>Create database</button><br>
   <button onclick='callDatabase("create.php")'>Create table</button><br>
   <button onclick='callDatabase("addrecord.php")'>Add record</button><br>
   <button onclick='callDatabase("addmultirecord.php")'>Add 3 records</button><br>
</body>

</html>