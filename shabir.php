<?php
//REMARK 1:
class Model_User extends \Orm\Model {
	protected static $_properties = array(
		'id',
		'name',
		'first_name',
		'last_name',
		'email',
		'password',
		'country_id',
		'language_id',
		'challenge_points',
		'key',
		'userstatus_id',
		'created_at',
		'updated_at'
	);
	
	protected static $_belongs_to = array('userstatus','country','language');
	protected static $_has_many = array('userchallenges');
	
	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
		'password' => array(
			'events' => array('before_save'),
		),
	);
	
	public static function validate($factory) {
		$val = Validation::forge($factory);
		$val->add_field('firstname', 'Firstname', 'required|max_length[100]');
		$val->add_field('lastname', 'Lastname', 'required|max_length[100]');
		$val->add_field('email', 'Email', 'required|max_length[125]|valid_email');
		$val->add_field('password', 'Password', 'required|min_length[4]');
		$val->add_field('confirm-password', 'Confirmpassword', 'required|match_value[' . Input::post('password') . ']');
		return $val;
	}
}
?>