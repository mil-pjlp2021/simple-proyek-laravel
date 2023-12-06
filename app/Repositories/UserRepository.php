<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getAll()
    {
        $user = User::paginate(100);

        return $user;
    }

    public function findByID($id)
    {
        $user = User::findOrFail($id);

        return $user;

    }

    public function save($data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return $user;
    }

    public function update($id, $data)
    {
        $user = User::findOrFail($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        if ($user->save()) {
            return $user;
        }

    }
}
