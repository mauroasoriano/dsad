<?php

namespace App\Traits;
use App\Models\User;

trait LoggedUserTrait{

	public function get_data_logged_user($id)
	{
		$data_user_json = User::with(
			'profiles_id:id,user_id,profile_id',
			'profiles_id.profile:id,name',
			'profiles_id.profile.modules_id:profile_id,module_id',
			'profiles_id.profile.modules_id.modules:id,name',
		)->select('id', 'user')->where('id', $id)->get();

		$data_user_json = json_decode($data_user_json);
		$data_user['id'] = $data_user_json[0]->id;
		$data_user['user'] = $data_user_json[0]->user;
		$data_user['profile'] = $data_user_json[0]->profiles_id->profile->name;
		for ($i=0; $i < count($data_user_json[0]->profiles_id->profile->modules_id); $i++) { 
			$data_user['modules'][] = $data_user_json[0]->profiles_id->profile->modules_id[$i]->modules->name;
		}
		return $data_user;
	}

}