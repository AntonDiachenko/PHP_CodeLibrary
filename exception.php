<?php
function div($x , $y){

    if($y == 0){
        throw new Exception("the denum should not be zero");
    }
    if($x == 0){
        throw new Exception("test");
    }
    return ($x/$y);
}




try{
    div(0,0);
}catch(Exception $e){
    echo $e->getMessage();
}
finally{
    echo "thats is perfect";
}


// try{
//     div(0,4);
// }catch(Exception $e){
//     echo "the answer is zero";
// }

?>