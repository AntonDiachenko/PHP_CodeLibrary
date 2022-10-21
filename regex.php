    <?php

// REGEX (REGULAR EXPRESSIONS)

// name just the letter or white space
    (!preg_match("/^[a-zA-Z-' ]*$/" , $name))

// name - cannot be empty, at least two words, must start with a letter, contains a-z, A-Z, period, dash only
    (!preg_match("/^[a-zA-Z]+(?:\s[a-zA-Z-']+)$/", $name)) 
    (!preg_match("/^[A-Za-z][A-Za-z.-]+[ ][A-Za-z .-]+/", $name))   // alternative

// name - two words only
    (!preg_match("/^[a-zA-Z']+[\s.-][a-zA-Z']+$/", $name))     
    

// email 
    (!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/" , $email))


// website
    (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i" , $website))
                   

// date
// enter the date (three fields) dd:1-31, mm:1-12, yyyy:1953-1998
    (!preg_match("/(?:0[1-9]|[12][0-9]|3[01])/", $day)) 
    (!preg_match("/(?:0[1-9]|1[012])/", $month)) 
    (!preg_match("/(?:^(195)[3-9]|1960|(19)[6-8][0-9]|(199)[0-8]$)/", $year))






    ?>



