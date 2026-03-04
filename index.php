<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$a = $_POST['firstName'];
$b = $_POST['lastName'];
$c= $_POST['score'];
$d =$_POST['subject'];
if(!empty($a) && !empty($b)&& !empty($c) && !empty($d)){
    echo " You are welcome" ." " .$a ." ".$b ." " ."and you scored" ." " .$c  ." ". "in" ." ". $d . ".";
}
 else{
    echo "Pls obey the instruction";
    }
}
if($c>=0 && $c<=59){
echo "Your grade in" .$d ." is F";
}
else if ( $c>=60 && $c <=69){
    echo "Your grade in " .$d ." is D";

}
else if ( $c>=70 && $c <=79){
    echo  "Your grade in" .$d ." is C ";
}
else if ( $c>=80 && $c <=89){
    echo  "Your grade in" ." " .$d ." is D ";
}
else{
    echo "Your grade in" .$d ." is A ";
};
?>







<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header {
            color: rosybrown;
        }
    </style>


</head>

<body>
    <main>
        <h3 class="header">Elohos Academy Result Access page.</h3>
        <p>You are welcome to the official page of the 2024/2025 academic session result .</p>
        <p> Instruction: kindly input your full name ,select the subject and input your score to access your
            grade,thereafter a list would be sent to confirm you have been promoted.</p>
        <form action="" method="post">
            <label class="scoreb" for="firstname"><input type="text" required placeholder="whats your firstname?"
                    name="firstName" id="score"></label>
            <label for="last name"><input type="text" required placeholder="Whats your lastname ? " name="lastName"
                    id="lastname"></label>
            <label for="subject"><select name="subject" id="" required >
                    <option value="Mathematics">Mathematics </option>
                    <option value="English">English</option>
                    <option value="General Studies"> General Studies</option>
                    <option value="Further Mathematics">Further Mathematics</option>
                    <option value="Basic Science">Basic Science</option>

                </select></label>
            <label for="score"> <input type="text" required placeholder="whats your Score?" name="score"></label>
            <input type="Submit" value="submit">
        </form>

    </main>
</body>

</html>