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

      // function showselection(str) {
      //    var xmlhttp = new XMLHttpRequest();
      //    xmlhttp.onreadystatechange = function() {
      //       if (this.readyState == 4 && this.status == 200) {
      //          console.log(this.responseText);
      //       }
      //    }
      //   xmlhttp.open("GET","showselection.php?q="+str,true);
      //   xmlhttp.send();
      // }
      
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
   <button onclick='callDatabase("addmultirecprep.php")'>Add 3 records (prepared)</button><br>
   <button onclick='callDatabase("deleterecord.php")'>Delete record (id=1)</button><br>
   <button onclick='callDatabase("updaterecord.php")'>Update record (id=2)</button><br>
   <button onclick='callDatabase("select.php")'>Select HP laptops</button><br>

   <form>
      Using a select query and pass a parameter to select all laptops of this brand:<br>
      <!-- <select name="selection" onchange="showselection(this.options[this.selectedIndex].text)"> -->
      <select name="selection" onchange="callDatabase('showselection.php?q=' + this.options[this.selectedIndex].text)">
      <!-- selection mechanism not perfect yet -->
         <option value="1">HP</option>
         <option value="2">Asus</option>
   </select>
   </form>
</body>

</html>