<?php 
session_start();
if (count($_POST) > 0) {
    if ($_POST["contact"] == $_SESSION["contact"]) {
    $to = "vigneshbaskaran2304@gmail.com \r\n";
    $from = $_POST['email'];
    $retfrom = "vigneshbaskaran2304@gmail.com \r\n";
	$name = $_POST['name'];
	$lname = $_POST['lname'];
    $countrycode = $_POST['countrycode'];
	$number = $_POST['number'];
    $email= $_POST['email'];
    $event = $_POST['event'];
    $about = $_POST['about'];
	$comments= $_POST['comments'];
    
    $adminsubject= "$name  Interested to Contact with Cromwell Manor";
    $customersubject= "Thank You for Interesting to Cromwell Manor";

    $retmessage = "<table style='width: 600px; margin: 0 auto; border: 1px solid #e6e6e6;'>
        <tr>
           <td background='https://mindzdev.mindzmap.com/cromwell-manor-website/assets/images/mail/mail-banner.png' style='padding:0px 20px 30px 20px; position: relative; background-repeat: no-repeat; background-size: cover; background-position: right;'>
                <a target='_blank' href='https://mindzdev.mindzmap.com/cromwell-manor-website/'><img style='margin-bottom: 50px;' src='https://mindzdev.mindzmap.com/cromwell-manor-website/assets/images/mail/logo.png' alt='logo'></a>
                <div style='color: #fff; font-size: 26px; width: 50%;'><b>Thankyou</b></div>
                <div style='color: #fff; font-size: 26px; width: 50%;'><b>For</b> Reaching Out!</div>
            </td>
        </tr>
        <tr>
            <td style='padding: 40px 20px;'>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color:#000000; margin-bottom: 15px;'><b style='text-transform: capitalize;font-weight: 600;'>Hi $name,</b>  Greetings!</div>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color:#000000; margin-bottom: 15px;'>Vivamus eget hendrerit quam. Duis porttitor, lorem eget tincidunt tempor, felis orci lobortis diam, vulputate ultricies orci erat eget elit.</div>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color:#000000;'>Integer venenatis convallis neque, quis rutrum dui interdum id. Praesent eget suscipit felis, vitae tempor urna. Suspendisse dignissim, arcu a blandit feugiat, erat orci luctus enim, eu posuere neque diam id nulla.</div>
            </td>
        </tr>
        <tr>
            <td style='padding: 0px 20px 30px 20px;'>
                <div style='font-size: 14px; line-height: 19px; font-weight: 500; color: #000000; margin-bottom: 6px;'>--</div>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color: #000000; margin-bottom: 6px;'>Best Regards,</div>
                <div style='font-size: 12px; line-height: 18px; color: #000000; margin-bottom: 6px;'><b>CROMWELL MANOR</b></div>
                <a style='font-size: 13px; line-height: 18px; font-weight: 400; color: #000000; text-decoration: none;' href='https://cromwellmanor.co.uk/' target= '_blank'>cromwellmanor.co.uk</a>
            </td>
        </tr>
        <tr>
            <td style='background-color: #F8F8F8; padding: 20px 20px; display: flex; flex-wrap: wrap;  align-items: center; justify-content: space-between;'>
                <div style='color: #707070; font-size: 12px; width: 72%;'>©2024 Cromwell Manor. All Rights Reserved.</div>
                <div style='color: #707070; font-size: 12px; text-align: end; width: 27%; align-items: center; display: flex;'>Designed by <img style='margin: auto 2px;' src='https://mindzdev.mindzmap.com/cromwell-manor-website/assets/images/mail/heart.png' alt='heart'><a style='color: #707070; font-weight: 500; text-decoration: none;' target='_blank' href='https://mindzmap.com/'>MindzMap</a></div>
            </td>
        </tr>
    </table>";

    $message = "<table style='width: 600px; margin: 0 auto; border: 1px solid #e6e6e6;'>
        <tr>
           <td background='https://mindzdev.mindzmap.com/cromwell-manor-website/assets/images/mail/mail-banner.png' style='padding:0px 20px 30px 20px; position: relative; background-repeat: no-repeat; background-size: cover; background-position: right;'>
                <a target='_blank' href='https://mindzdev.mindzmap.com/cromwell-manor-website/'><img style='margin-bottom: 50px;' src='https://mindzdev.mindzmap.com/cromwell-manor-website/assets/images/mail/logo.png' alt='logo'></a>
                <div style='color: #fff; font-size: 26px; width: 50%;'><b>There is a New Inquiry</b></div>
                <div style='color: #fff; font-size: 26px; width: 50%;'><b>For</b> Cromwell Manor</div>
            </td>
        </tr>
        <tr>
            <td style='padding: 40px 20px;'>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color:#000000; margin-bottom: 15px;'><b style='text-transform: capitalize;font-weight: 600;'>Hi Cromwell Manor,</b>  Greetings!</div>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color:#000000; margin-bottom: 30px;'>The details provided by Mr/Ms. <b>$name $lname</b> have been given below. It is important to exercise care while using personal information.</div>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color:#000000; margin-bottom: 10px;'><b>First Name:</b> <span style='text-transform: capitalize;'>$name</span></div>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color:#000000; margin-bottom: 10px;'><b>Last Name:</b> <span style='text-transform: capitalize;'>$lname</span></div>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color:#000000; margin-bottom: 10px;'><b>Phone Number:</b>$countrycode $number</div>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color:#000000; margin-bottom: 10px;'><b>Email ID:</b> $email</div>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color:#000000; margin-bottom: 10px;'><b>Event Type?:</b> <span style='text-transform: capitalize;'>$event</span></div>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color:#000000; margin-bottom: 10px;'><b>How did you hear about us?:</b> <span style='text-transform: capitalize;'>$about</span></div>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color:#000000;'><b>Your Message:</b> <span style='text-transform: capitalize;'>$comments</span></div>
            </td>
        </tr>
        <tr>
            <td style='padding: 0px 20px 30px 20px;'>
                <div style='font-size: 14px; line-height: 19px; font-weight: 500; color: #000000; margin-bottom: 8px;'>--</div>
                <div style='font-size: 14px; line-height: 19px; font-weight: 400; color: #000000; margin-bottom: 6px;'>Warm Regards,</div>
                <div style='font-size: 13px; line-height: 18px; color: #000000; text-transform: capitalize'><b>$name $lname</b></div>
            </td>
        </tr>
        <tr>
            <td style='background-color: #F8F8F8; padding: 20px 20px; display: flex; flex-wrap: wrap;  align-items: center; justify-content: space-between;'>
                <div style='color: #707070; font-size: 12px; width: 72%;'>©2024 Cromwell Manor. All Rights Reserved.</div>
                <div style='color: #707070; font-size: 12px; text-align: end; width: 27%; align-items: center; display: flex;'>Designed by <img style='margin: auto 2px;' src='https://mindzdev.mindzmap.com/cromwell-manor-website/assets/images/mail/heart.png' alt='heart'><a style='color: #707070; font-weight: 500; text-decoration: none;' target='_blank' href='https://mindzmap.com/'>MindzMap</a></div>
            </td>
        </tr>
    </table>";
    
	$headers = 'MIME-Version: 1.0' . "\r\n";
    $headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "X-Priority: 1 (Highest)\n";
    $headers .= "X-MSMail-Priority: High\n";
    $headers .= "Importance: High\n";
	$headers.= "From:" . $from;

	$retheaders = 'MIME-Version: 1.0' . "\r\n";
    $retheaders.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$retheaders .= "X-Priority: 1 (Highest)\n";
    $retheaders .= "X-MSMail-Priority: High\n";
    $retheaders .= "Importance: High\n";
	$retheaders.= "From:" . $retfrom;

	mail($to,$adminsubject,$message,$headers);
	mail($from,$customersubject,$retmessage,$retheaders);
	// header("Location:landing/thanks.html"); 
    echo "0";
}
else
{
    echo "1";
}
} 
?>