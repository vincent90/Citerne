<?PHP
	//Have seperate language files for each language I add, this would be english file
	function lang($phrase){
		
		static $lang = array(
			'SIGNIN_TITLE' => 'No photo\'s available',
			'SIGNIN_USERNAME' => 'This user is new'
			'SIGNIN_PASSWORD' => 'This user is new'
			'SIGNIN_CONNECTION' => 'This user is new'
		);
		return $lang[$phrase];
	}
?>