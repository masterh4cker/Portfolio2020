<! ----------------------------------------------------------------------------------------------------------------
--
#Original Author: Tabatha Foes                                    
#Date Created: 9/11/2020                    
#Version:  1.0                                                  
#Date Last Modified: 9/11/2020                              
#Modified by: Tabatha Foes                                          
#Modification log:     9/11/2020 -- Created PHP for delete visitor
 --
------------------------------------------------------------------------------------------------------------------>
<?php
require_once('database.php');

// Get IDs
$visitor_id = filter_input(INPUT_POST, 'visitor_id', FILTER_VALIDATE_INT);
//$employee_id = filter_input(INPUT_POST, 'employeeID', FILTER_VALIDATE_INT);



// Delete the visitor from the database
if ($visitor_id != false) {
    echo "Inside the if statement.";
    $query = 'DELETE FROM visitor
              WHERE visitor_id = :visitor_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':visitor_id', $visitor_id);
    $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('admin.php');