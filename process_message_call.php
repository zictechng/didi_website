<?php
//$date = date("Y-m-d");
$mylevel ='';
sleep(1);
			
									if(!empty($_POST))
									{
										
										$output ='';
										$f_name = ($_POST['f_name']);
										$c_email = ($_POST['c_email']);
										$c_Phone = ($_POST['c_Phone']);
										@$c_Subject = ($_POST['c_Subject']);
										@$c_message = ($_POST['c_message']);
										@$valid_code = ($_POST['valid_code']);
										@$code_entered = ($_POST['code_entered']);
										
										if ($code_entered !== $valid_code) 
										{
										echo "2"; // failed, wrong security supplied
										}
									else if($code_entered == $valid_code)
									{
										echo "1"; // success
								
									// send email out from here...
			$to = 'info@procelgleam.com';
         	$subject = "Message from Procel Gleam Services website";
         
         // Create the body message
         @$message .= "<br>
         <div style='font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee'>
	<table align='center' width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
    <tbody>
        <tr>
        	<td bgcolor='#FFFFFF'>
                <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                <tbody>
                	<tr>
                    	<td>
                			<table width='690' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                            <tbody>
                            	<tr>
                                    <td height='80' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#FFFFFF' style='padding:0;margin:0;font-size:0;line-height:0'><img src='http://www.zictech-ng.com/eu/img/logo-white2.png'>
                                    
                                    </td>
                   			  </tr>
                                <tr>
                                    <td align='center'>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0'>
                                        <tbody>
                                        	<tr>
                                            	<td colspan='3' height='60'></td></tr><tr><td width='25'></td>
                                                <td align='center'>
                                                  <h6 style='font-family:HelveticaNeue-Light,arial,sans-serif;font-size:25px;color:#404040;line-height:28px;font-weight:bold;margin:0;padding:0'> Notification of withdrawal request in your account</h6>
                                                </td>
                                                <td width='25'></td>
                                            </tr>
                                            <tr>
                                            	<td colspan='3' height='40'></td></tr><tr>
                                            	  <td colspan='5' align='center'>
                                                    <p style='color:#404040;font-size:16px;line-height:24px;font-weight:lighter;padding:0;margin:0'>
													Hello Admin, $f_name, sent you a requested from the website! find below request details.</p>
                                                    <br>
                                                    <p style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'></p>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td colspan='4'>
                                                <div style='width:100%;text-align:center;margin:30px 0'>
                                                    <table align='center' cellpadding='0' cellspacing='0' style='font-family:HelveticaNeue-Light,Arial,sans-serif;margin:0 auto;padding:0'>
                                                    <tbody>
                                                    	<tr>
                                                            <td align='center' style='margin:0;text-align:center'><style='font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px'>Full Name: <b>$f_name</b></td>
                                                      	</tr>
														  <tr>
														  <td align='center' style='margin:0;text-align:center'><style='font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px'>Email: <b>$c_email</b></td>
														</tr>
														<tr>
                                                            <td align='center' style='margin:0;text-align:center'><style='font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px'>Phone Contact: <b>$c_phone</b></td>
                                                      	</tr>
														  <tr>
														  <td align='center' style='margin:0;text-align:center'><style='font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px'>Purpose: <b>$f_name</b></td>
														</tr>
														<br/><br/>
														<tr>
                                                            <td align='center' style='margin:0;text-align:center'><style='font-size:21px;line-height:22px;text-decoration:none;color:#ffffff;font-weight:bold;border-radius:2px;background-color:#0096d3;padding:14px 40px;display:block;letter-spacing:1.2px'>Message Send: <b>$c_message</b></td>
                                                      	</tr>
                                                   	</tbody>
                                                    </table>
                                               	</div>
                                           	</td>
                                       	</tr>
										   
                                        
                                 	</tbody>
                                    </table>
                             	</td>
                   			</tr>
                            
                            <tr bgcolor='#ffffff'>
                                <td bgcolor='#FFFFFF'>
                                  
                                  <table width='570' align='center' border='0' cellspacing='0' cellpadding='0'>
                                    <tbody>
                                      <tr>
                                        <td>
                                          <h2 style='color:#404040;font-size:22px;font-weight:bold;line-height:26px;padding:0;margin:0'>&nbsp;</h2>
                                          <div style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'>Ensure to keep fellow up with client with $c_email </div>
                                        </td>
                                      </tr>
                                      <tr><td>&nbsp;</td>
                                </tr></tbody></table></td>
                              </tr>
                          	</tbody>
                            </table>
                  			<table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                            <tbody>
                            	<tr>
                                	<td align='center'>
                                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                                        <tbody>
                                        	<tr><td colspan='2' height='30'></td></tr>
                                            <tr>
                                           	  <td width='360' valign='top'>&nbsp;</td>
                                              	<td align='right' valign='top'>
                                                	<span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/BggPYqAh.png' alt='fb'></a>&nbsp;</span>
                                                    <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/j3NsGLak.png' alt='twit'></a>&nbsp;</span>
                                                    <span style='line-height:20px;font-size:10px'><a href='#'><img src='http://i.imgbox.com/wFyxXQyf.png' alt='g'></a>&nbsp;</span>
                                              	</td>
                                            </tr>
                                            <tr><td colspan='2' height='5'></td></tr>
                                      	</tbody>
                                        </table>
                                    <p><span style='color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0'>&copy; 2023 Procel Gleam Services Trade. All Rights Reserved. </span></p></td>
                  				</tr>
                          	</tbody>
                          </table>
               		  </td>
                	</tr>
              	</tbody>
                </table>
            </td>
	  </tr>
 	</tbody>
    </table>
</div>";
         $header = "From: Procel Gleam Services <info@procelgleam.com> \r\n";
         $header .= "Cc:noreply@veeapps.co.in \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         @$retval = mail ($to,$subject,$message,$header);
									}
									else
									{
									echo "3"; // error show
									}
													
								}
										
?>