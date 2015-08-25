<?php namespace App\Http\Controllers;

use Request;
use App\Models\User;

class UserController extends Controller {

	public function viewAll() {
		$users = User::getAll();
		return view('all_users', ['users' => $users]);
	}

	public function view($id) {
		$user = User::get($id);
		//print_r($user);
		return view('user', ['user' => $user]);
	}

	public function create() {
		return view('new_user');
	}

	public function postCreate() {
		$user = new User();
		$user->first_name = Request::input('first_name');
		$user->last_name = Request::input('last_name');
		$user->email = Request::input('email');
		$user->phone = Request::input('phone');
		$user->save();

		return redirect('users');
	}

	public function update($id) {
		$user = User::get($id);
		return view('update_user', ['user' => $user]);
	}

	public function postUpdate($id) {

		$user = User::get($id);
		$user->first_name = Request::get('first_name');
		$user->last_name = Request::get('last_name');
		$user->email = Request::get('email');
		$user->phone = Request::get('phone');
		$user->save();
		return redirect('users');
	}

	public function delete($id) {
		

		$user = User::get($id);
		$user->delete($id);
		return redirect('users');
	}

}
