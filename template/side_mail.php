<?php
$y = date('Y');
$img = "https://ownlydigital.com/live/marutivisa/images/logo-img.png";
echo '<table cellpadding="0" style="width:100%;">
        <tbody>
           <tr style="width:100%;clear:both">
              <td style="width:70%;display:block;clear:both">
                 <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:30px;margin-bottom:30px;background-clip:padding-box;border-collapse:collapse;border-color:#dddddd;border-radius:0 0 3px 3px;border-style:solid solid none;border-width:0 1px 1px">
        <tbody>
           <tr>
              <td height="3" bgcolor="#d91212"></td>
           </tr>
           <tr style="height:100px">
           <td align="center" bgcolor="#d91212" Top-border-color="#d91212" height="30"><img src ="' . $img . '
           ">
           </td>
           </tr>
           <tr>
              <td bgcolor="#F7F9F9">
                 <table style="width:100%;clear:both" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tbody>
                       <tr>
                          <td height="2px;"></td>
                       </tr>
                       <tr>
                          <td height="2px;"></td>
                       </tr>
                       <tr>
                          <td>
                             <table rules="all" style="border-color: #666;" cellpadding="12;" width="100%;">                             
                             
                             <tr>
                             <td style="color:#101010;font-size:16px;"><strong>Name:</strong> </td>
                             <td style="color:#101010;font-size:16px;">' . $cname . '</td>
                          </tr>
                          <tr>
                          <td style="color:#101010;font-size:16px;"><strong>E-mail:</strong> </td>
                          <td style="color:#101010;font-size:16px;">' . $cemail . '</td>
                       </tr>
                       <tr>
                       <td style="color:#101010;font-size:16px;"><strong>Mobile:</strong> </td>
                       <td style="color:#101010;font-size:16px;"><a href="'.$urlencodedtext.'">'.$countryphone.'</a></td>
                    </tr>
                    <tr>
                       <td style="color:#101010;font-size:16px;"><strong>Subject:</strong> </td>
                       <td style="color:#101010;font-size:16px;">' .  $csubject . '</td>
                    </tr>
                
                    <tr>   
                          <td style="color:#101010;font-size:16px;"><strong>Message:</strong> </td>
                          <td style="color:#101010;font-size:16px;">' . $cmessage . '</td>
                       </tr>  
                                        
                    </tbody>
                 </table>
                 <br>
              </td>
           </tr>
           <tr>
              <td align="center" bgcolor="#d91212" height="50"><font face="Segoe UI,Trebuchet MS,Arial, Helvetica, sans-serif" color="#fff" style="font-size:13px"> &copy; '.$y.'  <b>Maruti Visa</b> All rights reserved. </font></td>
           </tr>
        </tbody>
     </table>';