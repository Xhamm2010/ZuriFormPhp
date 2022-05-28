
<?php
//extract the content of form posted using their keys
//$result = print_r($_POST);
$name = $_POST['name'];
$email = $_POST['useremail'];
$bday = $_POST['bday'];
$gender = $_POST['gender'];
$country = $_POST['country'];


// print the extracted values out to the user
echo "NAME: " . $name . "<br>";
echo "EMAIL: " . $email . "<br>";
echo "BIRTHDAY: " . $bday . "<br>";
echo "GENDER: " . $gender . "<br>";
echo "COUNTRY " . $country . "<br>";

//write the output to a csv file
$filename = "userdata.csv";    
$handle = fopen($filename, "a");//open file in read mode 
$no_row = count(file("userdata.csv"));
//converting array into string
$result = $no_row.", ".$name.", ".$email.", ".$bday.", ".$gender.", ".$country;
fwrite($handle,$result."\n");//write to file)  
fclose($handle);//close file
print_r($result);



?>