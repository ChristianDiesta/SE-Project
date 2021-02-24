<?php
   include_once 'dbh.php';

   $sql_select = "SELECT * FROM stud_info;";
   $result = mysqli_query($conn, $sql_select);

   //Check if there are data from the database
   $resultCheck = mysqli_num_rows($result);

   if ($resultCheck > 0) {
       //Showing data from the database
       while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>". $row["FirstName"] ."</td>
                    <td>". $row["LastName"] ."</td>
                    <td>". $row["StudentID"] ."</td>
                </tr>";
       }
        echo "</table>";
   }
?>