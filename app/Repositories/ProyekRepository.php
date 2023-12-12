<?php

namespace App\Repositories;

use App\Models\Proyek;

class ProyekRepository
{
    public function getAll()
    {
        $pekerjaan = Proyek::paginate(100);

        return $pekerjaan;
    }

    public function findByID($id)
    {
        $pekerjaan = Proyek::findOrFail($id);

        return $pekerjaan;

    }

    public function save($data)
    {
        $pekerjaan = Proyek::create([
            'nama' => $data['nama'],
            'deskripsi' => $data['deskripsi'],
            'klien_id' => $data['klien_id'],
        ]);

        return $pekerjaan;
    }

    public function update($id, $data)
    {
        $pekerjaan = Proyek::findOrFail($id);
        $pekerjaan->nama = $data['nama'];
        $pekerjaan->deskripsi = $data['deskripsi'];
        $pekerjaan->klien_id = $data['klien_id'];

        if ($pekerjaan->save()) {
            return $pekerjaan;
        }

    }
}
