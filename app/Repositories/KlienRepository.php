<?php

namespace App\Repositories;

use App\Models\Klien;

class KlienRepository
{
    public function getAll()
    {
        $klien = Klien::paginate(100);

        return $klien;
    }

    public function findByID($id)
    {
        $klien = Klien::findOrFail($id);

        return $klien;

    }

    public function save($data)
    {
        $klien = Klien::create([
            'nama' => $data['nama'],
            'kontak' => $data['kontak'],

        ]);

        return $klien;
    }

    public function update($id, $data)
    {
        $klien = Klien::findOrFail($id);
        $klien->nama = $data['nama'];
        $klien->kontak = $data['kontak'];

        if ($klien->save()) {
            return $klien;
        }

    }
}
