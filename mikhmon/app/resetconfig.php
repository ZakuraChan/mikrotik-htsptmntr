<?php session_start(); ?>
<?php
if(!isset($_SESSION['usermikhmon'])){
	header("Location:login.php");
}else{
$my_file = 'config.php';
		$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
		$data ='<?php $iphost=""; $userhost=""; $passwdhost=""; $useradm="admin"; $passadm="1234"; $reloadindex="15"; $profile1="Voucher3Jam"; $profile2="Voucher1Hari"; $profile3="Voucher2Hari"; $profile4="Voucher7Hari"; $profile5="Voucher30Hari"; $profile6=""; $profile7=""; $profile8=""; $profile9=""; $profile10=""; $uactive1="3h"; $uactive2="1d"; $uactive3="2d"; $uactive4="7d"; $uactive5="30d"; $uactive6=""; $uactive7=""; $uactive8=""; $uactive9=""; $uactive10=""; $vname1="3Jam"; $vname2="1Hari"; $vname3="2Hari"; $vname4="7Hari"; $vname5="30Hari"; $vname6=""; $vname7=""; $vname8=""; $vname9=""; $vname10=""; $utimelimit1="1h"; $utimelimit2="2h"; $utimelimit3="5h"; $utimelimit4="10h"; $utimelimit5="12h"; $utimelimit1t="1Jam"; $utimelimit2t="2Jam"; $utimelimit3t="5Jam"; $utimelimit4t="10Jam"; $utimelimit5t="12Jam"; $ubytelimit1="500000000"; $ubytelimit2="1000000000"; $ubytelimit3="2000000000"; $ubytelimit4="5000000000"; $ubytelimit5="10000000000"; $ubytelimit1t="500MB"; $ubytelimit2t="1GB"; $ubytelimit3t="2GB"; $ubytelimit4t="5GB"; $ubytelimit5t="10GB"; $price1="Rp1.000"; $price2="Rp3.000"; $price3="Rp5.000"; $price4="Rp15.000"; $price5="Rp35.000"; $price6=""; $price7=""; $price8=""; $price9=""; $price10=""; $speed1="512k/680k"; $speed2="512k/720k"; $speed3="512k/1M"; $speed4="512k/2M"; $speed5="1M/1M"; $headerv="Kemangi 41"; $notev="Login dan Logout buka http://k41.net"; ?>';
		fwrite($handle, $data);
		$my_file1 = '../status/config.php';
		$handle1 = fopen($my_file1, 'w') or die('Cannot open file:  '.$my_file1);
		$data1 = '<?php $iphost=""; $userhost=""; $passwdhost=""; $headerv="Kemangi41"; ?>';
		fwrite($handle1, $data1);
 	session_destroy(); 
 	header("Location: login.php");
}
?>
