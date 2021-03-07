<?php
   include_once 'dbh.php';

   $sql_select = "SELECT * FROM student;";
   $result = mysqli_query($conn, $sql_select);

   //Check if there are data from the database
   $resultCheck = mysqli_num_rows($result);

   if ($resultCheck > 0) {
       //Showing data from the database
       while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>". $row["name"] ."</td>
                    <td>". $row["gender"] ."</td>
                    <td>". $row["email"] ."</td>
                    <td>". $row["password"] ."</td>
                    <td>". $row["voting_status"] ."</td>
                </tr>";
       }
        echo "</table>";
   }
?>
