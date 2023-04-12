<?php
 include('../controllers/common.php');
if(isset($_POST['submit']))
{
    $sender=$_POST['sender'];
    $receiver=$_POST['receiver'];
    $amount=$_POST['amount'];

    $qry1="SELECT * FROM CUSTOMERS WHERE acno=$sender";
    $qry2="SELECT * FROM CUSTOMERS WHERE acno=$receiver";
    $result1=mysqli_query($conn,$qry1);
    $result2=mysqli_query($conn,$qry2);

    $r1= mysqli_fetch_array($result1);
    $r2= mysqli_fetch_array($result2);

    if (mysqli_num_rows($result1) == 0||mysqli_num_rows($result2) == 0) 
    {
        die('<script>alert("Transaction failed.");window.location = history.back();</script>');
    }
    else
    {
        $sender_balance=$r1['balance'];
        $receiver_balance=$r2['balance'];
        if($sender_balance<=5000)
        {
            die('<script>alert("Insufficient balance.");window.location = history.back();</script>');
        }
        else if($amount>$sender_balance)
        {
            die('<script>alert("Insufficient balance");window.location = history.back();</script>');
        }
        else
        {
            $updated_sender_balance=$sender_balance-$amount;
            $updated_receiver_balance=$receiver_balance+$amount;
            date_default_timezone_set('Asia/Kolkata');
            $system_time = date('Y-m-d h:i:s');
            $date = date('Y-m-d');
            $update_qry1="UPDATE CUSTOMERS SET balance=$updated_sender_balance WHERE acno = $sender;";
            mysqli_query($conn,$update_qry1);
            $update_qry2="UPDATE CUSTOMERS SET balance=$updated_receiver_balance WHERE acno = $receiver;";
            mysqli_query($conn,$update_qry2);
            $update_qry3="INSERT INTO TRANSFER(acc_from,acc_to,amount,time_stamp,date_of_trans)
            VALUES ('$sender', '$receiver', '$amount',' $system_time','11-04-2023');";
            mysqli_query($conn,$update_qry3);
            die('<script>alert("Transaction succesful.");window.location = history.back();</script>');

           
        }
    }
        

   
}
?>