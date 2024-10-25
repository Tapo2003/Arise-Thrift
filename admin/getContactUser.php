<?php
    session_start();
    require_once('dbconn.php');
    extract($_POST);
    
    $sql = "SELECT * FROM arise_contact";
    $result = mysqli_query($connection, $sql) or die(mysql_error());
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        $recordcount = 0; $tablerow = '';

        while($row = mysqli_fetch_assoc($result)){
            $recordcount ++;
            $contactName  = $row['contact_name'];
            $contactEmail = $row['contact_email'];
            $contactPhone = $row['contact_phone'];
            $contactMessage = $row['contact_message'];
           
            $tablerow .= "<tr>";
                $tablerow .= "<td>$recordcount</td>";
                $tablerow .= "<td>$contactName</td>";
                $tablerow .= "<td>$contactEmail</td>";
                $tablerow .= "<td>$contactPhone</td>";
                $tablerow .= "<td>$contactMessage</td>";
            $tablerow .= "</tr>";
        }       
    }else{
        $tablerow = 0;
    }
    echo $tablerow;
?>