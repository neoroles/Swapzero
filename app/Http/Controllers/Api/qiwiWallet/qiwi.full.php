<?php 

namespace QWW;
/*
	define( "_CONTENT_CHARSET", "utf-8" );
	mb_internal_encoding( _CONTENT_CHARSET );
	require_once __DIR__ . "/lib/api.php";
	require_once __DIR__ . "/constants.php";
	
	*/
	
	
	class QiwiClassW {
	/*
	   public $api;

        
    function setUp() {
        $this->api = new Qiwi(PHONE_NUMBER, ACCESS_TOKEN);
    }

	  function getBalance() {
	///// ������
	$getBalance = $api->getBalance();
	//echo "������: ". $getBalance['accounts']['0']['balance']['amount']." �.<br>";
	return $getBalance['accounts']['0']['balance']['amount'];
	}
	
 function getPhoneToId($nmb) {
	///// ����������� id ���������� ���������
	$getPhoneToId = $api->getPhoneToId(['0' => "phone=7".$nmb]);
	//echo "ID ���. ��������� (".$nmb."): " .$getPhoneToId["message"]."<br>";
return $getPhoneToId["message"];
	}
	
	function sendMoney($options) {
		$sendMoney = $api->sendMoneyToQiwi($options);
	}
	
	 function getTxnStatus($txn) {
	///// ������ �������
	$getTxn = $api->getTxn($txn);
	if($getTxn[status]=='SUCCESS'){$getTxn[status]='��������';}
	if($getTxn[status]=='WAITING'){$getTxn[status]='���������';}
	if($getTxn[status]=='ERROR'){$getTxn[status]='������ (��� ������ '.$getTxn[errorCode].')';}
	//echo "������ ����������: ".$getTxn[txnId] . " = " .$getTxn['status']. "<br>";
return $getTxn['status'];
	}
		 function getHistory() {
	///// ������� ����������
	$getHistory = $api->getPaymentsHistory([
		//'startDate' => '2018-03-01T00:00:00+03:00',
		//'endDate' => '2018-10-01T00:00:00+03:00',
		'rows' => '10'
	]);
	//if($getHistory){arrayHistory( $getHistory[data] );}
	return $getHistory[data];
		}
		
	function arrayHistory( array $array ) {
		echo '<br><br>������� ����������<br><table width=100%>';
		echo '<tr><td>ID</td><td>�����</td><td>������</td><td>���</td><td>�����</td></tr>';
		foreach( $array as $key => $val ) {
			if($val[status]=='SUCCESS'){$val[status]='��������';}
			if($val[status]=='WAITING'){$val[status]='���������';}
			if($val[status]=='ERROR'){$val[status]='������ (��� ������ '.$val[errorCode].')';}
			
			if($val[type]=='OUT'){$val[type]='������ '.$val[account];}
			if($val[type]=='IN'){$val[type]='���������� '. $val[personId];}
			if($val[type]=='QIWI_CARD'){$val[type]='���������� '. $val[personId];}
			
			echo '<tr><td>'.$val[txnId] .'</td>';
			echo '<td>'.strtotime($val[date]) .'</td>';
			echo '<td>'.$val[status] .'</td>';
			echo '<td>'.$val[type] .'</td>';
			echo '<td>'.$val[sum][amount] .' +  '. $val[commission][amount] .'(��������) = '. $val[total][amount] .'</td></tr>';
		}
		echo '</table>';
	}
*/
	/////

	/*
[
		'id' => $ids,
		'sum' => ['amount' => $summ,'currency' => '643'], 
		'paymentMethod' => ['type' => 'Account', 'accountId' => '643'],
		'comment' => $txt,
		'fields' => ['account' => '+7'.$number]
	]
	
	*/
	
		///// ������ /////
	/*$ids = time() . '000';
	$number = '9532871881';
	$summ = 1;
	$txt = '�������� ������';
	*/

	/// ������ �� qiwi

	///

	
/*
	/// ������ ����������
	$sendMoney = $api->sendMoneyToProvider($getPhoneToId["message"],[
		'id' => $ids,
		'sum' => ['amount' => $summ,'currency' => '643'], 
		'paymentMethod' => ['type' => 'Account', 'accountId' => '643'],
		'comment' => $txt,
		'fields' => ['account' => $number]
	]);
	///
*/	

/*
	/// ������ webmoney
	$number = '319520673640';
	$sendMoney = $api->sendMoneyToProvider('31271',[
		'id' => $ids,
		'sum' => ['amount' => $summ,'currency' => '643'], 
		'paymentMethod' => ['type' => 'Account', 'accountId' => '643'],
		'comment' => $txt,
		'fields' => ['account' => 'R'.$number]
	]);
	///
*/	
	/*
	if($sendMoney){
		if($sendMoney['transaction']['id']=='' and $sendMoney['transaction']['state']['code']==''){
			echo "������: ". $sendMoney['message']. "(��� ". $sendMoney['code']. ")<br>";
		}else{
			echo "ID: ". $sendMoney['transaction']['id']. "<br>";
			echo "������: ". $sendMoney['transaction']['state']['code'];
		}
	}
	*/
	/////  /////

/*
	/// ������ ������� ������
	arrayCopy( $sendMoney );
	function arrayCopy( array $array ) {
		echo '<ul>';
		foreach( $array as $key => $val ) {
			echo '<li>'.$key .' = '. $val .'</li>';
			if(is_array($val)) {echo arrayCopy($val);} elseif (is_object($val)) {echo clone $val;}
		}
		echo '</ul>';
	}
	echo "<br>";
	///*/
}
?>