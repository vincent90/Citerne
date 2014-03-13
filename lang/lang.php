<?PHP
	function lang($phrase){
		static $lang = array(
			'SIGNIN_TITLE' => 'Veuillez vous identifier',
			'SIGNIN_USERNAME' => 'Nom d\'usager',
			'SIGNIN_PASSWORD' => 'Mot de passe',
			'SIGNIN_CONNECTION' => 'Se connecter'
		);
		return $lang[$phrase];
	}
?>