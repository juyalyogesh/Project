<center>
    <style>
        input{
            height: 30px;
            width: 150px;
            border-radius: 5px;
        }
        button{
            height: 30px;
            width: 70px;
            border-radius: 5px;
            background: #3A6DEB;
            color: #ffff;
            border: none;
            cursor: pointer;
        }
    </style>
<form method="post">
<h3>Q-1 : Print triangle - and allow user to set height of it in. </h3>

    <h4>(Please Enter The Number And print a triangle.)</h4>
<input type="number" name="t1" placeholder="Please Enter Number">
<button type="submit"  name="btn">click</button>
</form>
<?php
if(isset($_POST['btn'])){
$t1=$_POST['t1'];
for($i=1; $i<=$t1; $i++){
    for($j=$i; $j<=$t1; $j++){
        echo" ";
    }
for($k=1;$k<=(($i*2)-1); $k++){
    echo"*";
}
echo"<br>";
}
}
?>
<h3>Q-2 : Find Valid Date(MMDDYYYY) from string</h3>
<?php
function findValidDates($string) {
    $patterndate = '/\b(\d{2}) (\d{2}) (\d{4})\b/';
    $validDatecheck = array();
    if (preg_match_all($patterndate, $string, $matches, PREG_SET_ORDER)) {
        foreach ($matches as $match) {
            $month = $match[1];
            $day = $match[2];
            $year = $match[3];
            if (checkdate($month, $day, $year)) {
                $validDatecheck[] = "$month $day $year";
            }
        }
    }
    return $validDatecheck;
}
$string = "01 15 2040";
$validDatecheck = findValidDates($string);

if($validDatecheck){
    echo "Valid dates found: " . implode(", ", $validDatecheck);
}
else{
    echo"Please Enter Valid Date (MMDDYYYY) This Format";
}
?>
</center>