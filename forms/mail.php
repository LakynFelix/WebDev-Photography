
<?php
$to = "lakynmphotography@hotmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>


<!-- <?php
// define variables and set to empty values
// $nameErr = $emailErr = "";
// $name = $email = $message = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["name"])) {
//     $nameErr = "Name is required";
//   } else {
//     $name = test_input($_POST["name"]);
//     // check if name only contains letters and whitespace
//     if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
//       $nameErr = "Only letters and white space allowed";
//     }
//   }
  
//   if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $email = test_input($_POST["email"]);
//     // check if e-mail address is well-formed
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//       $emailErr = "Invalid email format";
//     }
//   }

//   if (empty($_POST["message"])) {
//     $message = "";
//   } else {
//     $message = test_input($_POST["message"]);
//   }
// }

// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }
// ?>

// <h2>PHP Form Validation Example</h2>
// <p><span class="error">* required field</span></p>
// <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
//   Name: <input type="text" name="name" value="<?php echo $name;?>">
//   <span class="error">* <?php echo $nameErr;?></span>
//   <br><br>
//   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
//   <span class="error">* <?php echo $emailErr;?></span>
//   <br><br>
//   Message: <textarea name="message" rows="5" cols="40"><?php echo $message;?></textarea>
//   <br><br>
 
//   <br><br>
//   <input type="submit" name="submit" value="Submit">  
// </form>

// <?php
// echo "<h2>Your Input:</h2>";
// echo $name;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $message;
// echo "<br>"; 

?> -->
