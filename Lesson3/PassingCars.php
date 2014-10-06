function solution($A) {
    // write your code in PHP5
    
    $gauche=0;
    $droite=0;
    
    $count=count($A);
    for($i=0;$i<$count;$i++){
        if($A[$i]==1){
            $gauche+=$droite;
        }else{
            $droite++;
        }
    }
    
    if($gauche > 1000000000) 
        return -1;
    else 
        return $gauche;
}
