<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <script>
      function createDb() {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
               console.log(this.responseText);
            }
         };
         xmlhttp.open('GET', 'connect.php', true);
         xmlhttp.send();
      }
   </script>
   </head>

<body>
   <button onclick='createDb()'>Create database</button>
</body>

</html>