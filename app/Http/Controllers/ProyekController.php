<?php

namespace App\Http\Controllers;

use App\Repositories\KlienRepository;
use App\Repositories\ProyekRepository;
use Illuminate\Http\Request;

class ProyekController extends Controller
{

    private $proyekRepository;
    private $klienRepository;

    public function __construct(protected ProyekRepository $proyek, KlienRepository $klien)
    {
        $this->proyekRepository = $proyek;
        $this->klienRepository = $klien;
    }

    /**
     * Display a listing of the proyek.
     */
    public function index()
    {
        $proyek = $this->proyekRepository->getAll();
        return view('proyek.index',compact('proyek'));
    }

    /**
     * Show the form for creating a new proyek.
     */
    public function create()
    {
        $klien = $this->klienRepository->getAll();
        return view('proyek.create',compact('klien'));
    }

    /**
     * Store a newly created proyek in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nama'=>'required',
                'deskripsi'=>'nullable',
                'klien_id'=>'required',
            ]
        );

        $data = $this->proyekRepository->save($validated);
        if ($data) {
            return redirect()->route('proyek.index')->banner('Berhasil menambahkan proyek');
        }
    }

    /**
     * Display the specified proyek.
     */
    public function show(string $id)
    {
        return $this->proyekRepository->findByID($id);
    }

    /**
     * Show the form for editing the specified proyek.
     */
    public function edit(string $id)
    {
        $klien = $this->klienRepository->getAll();
        $proyek = $this->proyekRepository->findByID($id);
        return view('proyek.show',compact('proyek','klien'));
    }

    /**
     * Update the specified proyek in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama'=>'required',
            'deskripsi'=>'nullable',
            'klien_id'=>'required',
        ]);

        $data = $this->proyekRepository->update($id,$validated);
        if ($data) {
            return redirect()->route('proyek.index')->banner('Berhasil mengubah data proyek');
        }
    }

    /**
     * Remove the specified proyek from storage.
     */
    public function destroy(string $id)
    {
        $proyek = $this->proyekRepository->findByID($id);

        if ($proyek->delete()) {
            return redirect()->route('proyek.index')->banner('Berhasil menghapus data proyek');
        }
    }


}
