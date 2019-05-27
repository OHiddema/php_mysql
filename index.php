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

      // copy createDb() for now, optimize code laterr
      function createTable() {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
               console.log(this.responseText);
            }
         };
         xmlhttp.open('GET', 'create.php', true);
         xmlhttp.send();
      }

      // copy createDb() for now, optimize code laterr
      function addRecord() {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
               console.log(this.responseText);
            }
         };
         xmlhttp.open('GET', 'addrecord.php', true);
         xmlhttp.send();
      }

   </script>
   </head>

<body>
   <button onclick='createDb()'>Create database</button>
   <button onclick='createTable()'>Create table</button>
   <button onclick='addRecord()'>Add record</button>
</body>

</html>