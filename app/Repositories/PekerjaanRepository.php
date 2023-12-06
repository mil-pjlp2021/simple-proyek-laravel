<?php

namespace App\Repositories;

use App\Models\Pekerjaan;

class PekerjaanRepository
{
    public function getAll()
    {
        $pekerjaan = Pekerjaan::paginate(100);

        return $pekerjaan;
    }

    public function findByID($id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);

        return $pekerjaan;

    }

    public function save($data)
    {
        $pekerjaan = Pekerjaan::create([
            'nama' => $data['nama'],
            'deskripsi' => $data['deskripsi'],
            'tipe_pekerjaan_id' => $data['tipe_pekerjaan_id'],
        ]);

        return $pekerjaan;
    }

    public function update($id, $data)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);
        $pekerjaan->nama = $data['nama'];
        $pekerjaan->deskripsi = $data['deskripsi'];
        $pekerjaan->tipe_pekerjaan_id = $data['tipe_pekerjaan_id'];

        if ($pekerjaan->save()) {
            return $pekerjaan;
        }

    }
}
