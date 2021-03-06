<! ----------------------------------------------------------------------------------------------------------------
--
#Original Author: Tabatha Foes                                    
#Date Created: 9/24/2020                    
#Version:  1.0                                                  
#Date Last Modified: 9/24/2020                              
#Modified by: Tabatha Foes                                          
#Modification log:     9/24/2020 -- Created util
 --
------------------------------------------------------------------------------------------------------------------>
<?php
    // make sure the page uses a secure connection
    $https = filter_input(INPUT_SERVER, 'HTTPS');
    if (!$https) {
        $host = filter_input(INPUT_SERVER, 'HTTP_HOST');
        $uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
        $url = 'https://' . $host . $uri;
        header("Location: " . $url);
        exit();
    }
?>