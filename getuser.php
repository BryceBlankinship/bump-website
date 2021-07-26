<?php

$link = mysqli_connect("localhost","root","!Soccer6611like321","accountsDB");

if($link == false){
    die("Could not connect to SQL -> " . mysqli_connect_error());
}

$sql = ("INSERT INTO accountsDB.new_table(username, password) VALUES ('test1', 'test2')");

if(mysqli_query($link, $sql)){
    echo "Data sent successfully!";
}else{
    echo("Could not send data to SQL -> " . mysqli_error($link));
}

mysqli_close($link);
?>

