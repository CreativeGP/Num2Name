
function num2name($num)
{
    $vowels = array('a', 'i', 'u', 'e', 'o', 'ar', 'ea', 'ear', 'or', 'oo', 'our', 'ew', 'ure', 'air', 'ir');
    $consonants = array('l', 'r', 'p', 'b', 't', 'd', 'k', 'g', 'm', 'n', 'f', 'v', 'h', 's', 'c', 'th', 'sh', 'j', 'y', 'w');
    
    mt_srand((int) $num);

    $long = 5;
    $orig = mt_rand(3, $long);
    $name = mt_rand(3, $long);
    $ret_orig = "";
    $ret_name = "";

    $count = 0;
    while (strlen($ret_orig) < $orig)
    {
        $ret_orig .= $consonants[mt_rand(0, count($consonants)-1)];
        $ret_orig .= $vowels[mt_rand(0, count($vowels)-1)];
    }
    if(mt_rand(0,1) == 0) $ret_orig .= $consonants[mt_rand(0, count($consonants)-1)];
    $ret_orig = ucfirst($ret_orig);

    while (strlen($ret_name) < $name)
    {
        $ret_name .= $consonants[mt_rand(0, count($consonants)-1)];
        $ret_name .= $vowels[mt_rand(0, count($vowels)-1)];
    }
    if(mt_rand(0,1) == 0) $ret_name .= $consonants[mt_rand(0, count($consonants)-1)];
    $ret_name = ucfirst($ret_name);

    return $ret_name . " " . $ret_orig;
}
