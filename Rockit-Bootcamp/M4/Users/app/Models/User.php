<?php 
namespace App\Models;


use DB;

class User {

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;

    /**
     * Save (Call Insert or Update)
     */

    public function save() {
        if (empty($this->id)) {
            $this->insert();
        } else {
            $this->update($this->id);
        }
    }

    /**
     * Create
     */
    private function insert() {

        // SQL
        $sql = "
            INSERT INTO USER (first_name, last_name, email, phone)
            VALUES (:first_name, :last_name, :email, :phone)
            ";

        // Execute
        DB::insert($sql, [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone
            ]);
    }

    /**
     * Update User
     */
    private function update() {
        $sql = "
            UPDATE user
            SET first_name = :first_name, 
                last_name = :last_name,
                email = :email, 
                phone = :phone
            WHERE id = :id;
            ";

        DB::update($sql, [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone
            ]);

    }

    /**
     * Delete
     */
    public static function delete($id) {

        DB::table('user')->where('id', '=', $id)->delete();
    }


    /**
     * Get User
     */
    public static function get($id) {

        // SQL
        $sql = "
            SELECT *
            FROM user
            WHERE id = :id";

        // Execute
        $row = DB::selectOne($sql, ['id' => $id]);

        // Start a new User Object
        $user = new User();

        $user->id = $row['id'];
        $user->first_name = $row['first_name'];
        $user->last_name = $row['last_name'];
        $user->email = $row['email'];
        $user->phone = $row['phone'];

        return $user;
    }

    // Get All Users
    public static function getAll() {
        
        $sql = "SELECT * FROM user";

        $rows = DB::select($sql);
        $users = [];
        foreach($rows as $row) {
            $user = new User();
            $user->id = $row['id'];
            $user->firstName = $row['first_name'];
            $user->lastName = $row['last_name'];
            $user->email = $row['email'];
            $user->phone = $row['phone'];

            $users[] = $user;
        }
        return $users;
    }

}