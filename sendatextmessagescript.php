<?php																				

$domainnamea=$_SERVER['HTTP_HOST'];
$domainnamea = str_replace("www.", "", "$domainnamea");

$selfa=$_SERVER['PHP_SELF'];
$foldera = dirname($selfa);

	if(isset($_POST['sms']))
	{
		$area = $_POST['area'];
		$pre = $_POST['pre'];
		$last = $_POST['last'];
		$prov = $_POST['prov'];
                $data = $_POST['data'];


		if((strlen($data))>100){$data='';}
		$wrong_data=='1';
		if($data==NULL){$wrong_data='jytvurrDSgfdger54e3    hcbh6EGjtu76';}
		
if((is_numeric($area)) && (is_numeric($pre)) && (is_numeric($last)) && (is_numeric($prov)) && ((strlen($data))<100) && ($wrong_data!='jytvurrDSgfdger54e3    hcbh6EGjtu76') && ((strlen($area))==3) && ((strlen($pre))==3) && ((strlen($last))==4) && ($prov<11) && ($prov>0)){

if($prov == '1'){$ext='@message.alltel.com';}
elseif($prov == '2'){$ext='@cingularme.com';}
elseif($prov == '3'){$ext='@mms.mycricket.com';}
elseif($prov == '4'){$ext='@mymetropcs.com';}
elseif($prov == '4'){$ext='@metropcs.sms.us';}
elseif($prov == '4'){$ext='@metropcs.com';}
elseif($prov == '5'){$ext='@messaging.nextel.com';}
elseif($prov == '6'){$ext='@messaging.sprintpcs.com';}
elseif($prov == '7'){$ext='@tmomail.net';}
elseif($prov == '8'){$ext='@email.uscc.net';}
elseif($prov == '9'){$ext='@vtext.com';}
elseif($prov == '10'){$ext='@vmobl.com';}
elseif($prov == '11'){$ext='@txt.bellmobility.ca';}
elseif($prov == '12'){$ext='@fido.ca';}
elseif($prov == '13'){$ext='@text.mts.net';}
elseif($prov == '14'){$ext='@pcs.rogers.com';}
elseif($prov == '15'){$ext='@sms.sasktel.com';}
elseif($prov == '16'){$ext='@msg.telus.com';}

$to="$area$pre$last$ext";


$headers = "From: info@$domainnamea\r\nReply-To: info@$domainnamea"; 

				$message_sms = $data. "\n\n";
				if(mail($to, '', $message_sms, $headers))
				{
					$msg = 'Sent Successfully';
				}
				else {
					$msg = 'Error! Please return shortly.';
				}

}else{$msg='Please fill all fields correctly';}
	}
?>
<html>
<head>
<STYLE type="text/css"> 
.area{width:27px;height:21px;}
.last{width:35px;height:21px;}
.menuna{font-size:12px;font-family:arial narrow;line-height:19px;border:2px solid #3399CC;background:#EEF2FD;}
.menuna td{padding-bottom:3px;padding-left:2px;padding-right:2px;}
.bottom td{font-size:17px;padding-left:10px;padding-right:10px;text-align:center}
.sm{font-size:11px}
#carriers select{font-size:11px;width:100px;}
#carriers option{font-size:11px;width:100px;}
.tp td{vertical-align:top;font-size:13px;}
p{text-align:justify;font-size:11px}
input{color:#525252}
</STYLE> 
</head>
<body>
<div align=center style="height:25px;font-size:11px;font-weight:bold;"><?php echo $msg;?></div>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post" name="sms"><table cellspacing=3 class=menuna cellpadding=2 align=center> 
<tr><td colspan=2 align=center><b><u>Send Content to Cell Phone</u></b></td></tr>
<tr><td colspan=2 align=center></td></tr><tr><td>Mobile&nbsp;#&nbsp;</td><td>(<input type="text" name="area" maxlength="3" class="area" onKeyUp="next()" value="">)&nbsp;<input type="text" name="pre" maxlength="3" class="area" onKeyUp="next1()" value="">-<input type="text" name="last" maxlength="4" class="last" value=""></td></tr> 
<tr><td>Carrier&nbsp;</td><td><select id=carriers name='prov'><option>Select Carrier</option><option value='1'>Alltel</option><option value='2'>AT&T</option><option value='3'>Cricket</option><option value='4'>Metro PCS</option></option><option value='5'>Nextel</option><option value='6'>Sprint PCS</option><option value='7'>T-Mobile</option><option value='8'>Us Cellular</option> 
<option value='9'>Verizon</option><option value='10'>Virgin Mobile</option><option value='11'>Bell (Canada)</option><option value='12'>Fido (Canada)</option><option value='13'>MTS (Canada)</option><option value='14'>Rogers (Canada)</option><option value='15'>Sasktel (Canada)</option><option value='16'>Telus (Canada)</option></select></td></tr> 
<tr><td>Message</td><td><textarea name="data" style="height:50px;width:110px;font-size:11px;"></textarea></td></tr>
<tr><td colspan=2 style="width:110px;text-align:center;">* Message rates may apply</td></tr>
<tr><td colspan=2 align=center><br><input name="sms" type="submit" value="Send Text" style="width:132px;height:26px;background:#46A026;color:#ffffff;font-weight:bold;font-size:14px;"></form></td></tr></table> 
</body>
</html>