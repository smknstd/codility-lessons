function solution($S) {
    // write your code in PHP5.3

    $stack = array();

    for($i=0;$i<strlen($S);$i++){

        if( (($S{$i}==")") and (end($stack)=="(")) or  (($S{$i}=="}") and (end($stack)=="{")) or (($S{$i}=="]") and (end($stack)=="[")) )
            array_pop($stack);
        else
            array_push($stack, $S{$i});
    }

    if(empty($stack))
        return 1;
    else
        return 0;
}