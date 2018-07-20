<?php
include ("db.php");

if(isset($_POST['submit'])) {



                $names = mysqli_real_escape_string($conn,$_POST['names']);
                $mobiles = mysqli_real_escape_string($conn,$_POST['mobiles']);
                $emails = mysqli_real_escape_string($conn,$_POST['emails']);
                $dropp = mysqli_real_escape_string($conn,$_POST['dropp']);
                $pickupaddress = mysqli_real_escape_string($conn,$_POST['pickupaddress']);
                $landmark = mysqli_real_escape_string($conn,$_POST['landmark']);
                $dropingaddress = mysqli_real_escape_string($conn,$_POST['dropingaddress']);
                $country = mysqli_real_escape_string($conn,$_POST['country']);
                $state = mysqli_real_escape_string($conn,$_POST['state']);
                $city = mysqli_real_escape_string($conn,$_POST['city']);
                $calendardate = mysqli_real_escape_string($conn,$_POST['calendardate']);
                $ridetime = mysqli_real_escape_string($conn,$_POST['ridetime']);



$sql = "INSERT INTO bookings (names, mobiles, emails, dropp, pickupaddress, landmark, dropingaddress, country, state, city, calendardate, ridetime) 
VALUES ('$names' , '$mobiles', '$emails', '$dropp', '$pickupaddress', '$landmark', '$dropingaddress', '$country', '$state', '$city' , '$calendardate' , '$ridetime')";
  
if(mysqli_query($conn,$sql))
  {
    $to      = $emails;
                $subject = 'Booking Details';
    $message = '
    Booking Details:
    
    Booked time: '.$calendardate.'('.$ridetime.')
    Booking type: '.$dropp.','.$country.' , '.$state.' , '.$city.'
    From: '.$pickupaddress.'('.$landmark.')
    To: '.$dropingaddress.'('.$dropingaddress.')
    If mistakes after booking please contact us'; 

    $headers = 'From:support@letsgo.com' . "\r\n";
                $msg = "Name: $names, Mobile number:$mobiles, Date:$calendardate, Time: $ridetime, From:$pickupaddress, To:$dropingaddress, Package: $city";

               // $numbers = Array( '8886231484' , $mobiles );
               // for( $i = 0; $i < count($numbers) ; $i++)
               // {
                      

$url = "http://158.69.130.136:9091/SMSPANELAPI?username=letsgo&pwd=nagendra&msisdn=". $numbers[$i]. "&msg=".urlencode($msg)."&senderid=letsgo";
                     // $url = "http://bsms.slabs.mobi/spanelv2/api.php?username=letsgo&password=nagendra&to=". $numbers[$i]. "&from=letsgo&message=".urlencode($msg);  

                    //  $ret = file($url);  
               // }
    mail($to, $subject, $message, $headers);
               
    header('Location: Bookacab.php');
  }
  else
  {
    echo "Error:" .mysqli_error($con);
  }
}
?>

















