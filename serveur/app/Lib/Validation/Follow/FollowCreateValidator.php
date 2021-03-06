<?php 

namespace Lib\Validation\Follow;
use Lib\Validation\BaseValidator as BaseValidator;

class FollowCreateValidator extends BaseValidator {

    public function __construct()
	{
		$this->regles = array(
			'follower_id'			=>	'required',
			'following_id'			=>	'required'
		);
	}

}