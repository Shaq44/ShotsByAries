<?
         

                $to_email = 'shaquan44@gmail.com';
                $subject = 'Booking Photos';
                $message = 'This is to test if things work';
                $headers = 'from: John Doe';
                mail($to_email,$subject,$message,$headers);

               /* if(isset($_POST['send']))  {  
                    $fname= $_POST['fname1'];
                        $lname= $_POST['lname1'];
                        $summary = $_POST['summary1'];
                $summary ='<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                </head>
                <body>
                <div class="container">
                '.$summary.'
                </div>
                    
                </body>
                </html>';
                $result = @mail($to, $subject, $summary, $headers);
                echo '<script>alert("Email sent successfully !")</script>';
                echo '<script>window.location.href="index.php";</script>';


            }*/

            ?>