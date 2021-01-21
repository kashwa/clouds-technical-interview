<?php

namespace App\Http\Repository;

use App\User;

class ClientRepository
{

    /**
     * Return all clients in the system.
     *
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function findAll()
    {
        return User::all();
    }

    /**
     * Find client via id.
     *
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return User::where('id', $id);
    }

    /**
     * Update client status.
     *
     * @param $id
     * @return mixed
     */
    public function updateClient($id)
    {
        $user = $this->find($id);
        return $user->first()->status == 1 ? $user->update(['status' => 0]) : $user->update(['status' => 1]);
    }

    public function delete($id)
    {
        User::destroy($id);
    }
}
