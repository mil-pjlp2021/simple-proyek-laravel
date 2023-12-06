<?php

namespace App\Repositories;

use App\Models\TipePekerjaan;

class TipePekerjaanRepository
{
    public function getAll()
    {
        $tipe = TipePekerjaan::paginate(100);

        return $tipe;
    }

    public function findByID($id)
    {
        $tipe = TipePekerjaan::findOrFail($id);

        return $tipe;

    }

    public function save($data)
    {
        $tipe = TipePekerjaan::create([
            'nama' => $data['nama'],

        ]);

        return $tipe;
    }

    public function update($id, $data)
    {
        $tipe = TipePekerjaan::findOrFail($id);
        $tipe->nama = $data['nama'];

        if ($tipe->save()) {
            return $tipe;
        }

    }
}
