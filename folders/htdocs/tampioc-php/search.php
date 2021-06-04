<!-- <script>
   $(document).ready(function () {
     $("#myInput").on("keyup", function () {
       var value = $(this).val().toLowerCase();
       $("#table tr").filter(function () {
         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       });
     });
   });
</script> -->

<?php
// // 2. perform a database query
// $cleanSearch = mysqli_real_escape_string($_POST['search']);
// $query = mysqli_query("SELECT * FROM users WHERE artist LIKE '%$cleanSearch%'");
// // test if there was a query error
// if (!$query) {
//     die("Database query failed");
// }

// ?>
// <!DOCTYPE html>
// <html>
//     <head>
//         <link rel="stylesheet" type="text/css" href="main.css">
//     </head>
//     <body>
//         <h1>Music Info</h1>
//         <form method="POST" action="index.php" id="searchForm">
//             <input type="text" id="searchBox" name="search" placeholder="search...">
//             <input type="submit" name="submit" value="search">
//         </form>
//         <?php
// // 3. use returned data (if any)
// while ($row = mysqli_fetch_row($query)) {
//     // output data from each row
//     var_dump($row);
//     echo "<hr/>";
// }
// ?>
//         <?php
// // 4. release returned data
// mysqli_free_result($query);
// ?>
//     </body>
// </html>
