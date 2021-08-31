<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name']; // Get Name value from HTML Form
        $name2 = $_POST['name2']; // Get Name value from HTML Form
        $email_id = $_POST['email']; // Get Email Value
        $mobile_no = $_POST['contactNumber']; // Get Mobile No
        $msg = $_POST['message']; // Get Message Value

        $to = "hello@menlohacks.com"; // You can change here your Email
        $subject = "'$name' has sent a mail"; // This is your subject

        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Last Name: </strong></td>
                            <td style='width:400px'>$name2</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mobile No: </strong></td>
                            <td style='width:400px'>$mobile_no</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script>";
            echo 'window.location= "../contact.html?message=sent";';
            echo "</script>";
        }

        else{
            // Message if mail has been not sent
            echo "<script>";
            echo 'window.location= "../contact.html?message=error";';
            echo "</script>";
        }
    }

?>
