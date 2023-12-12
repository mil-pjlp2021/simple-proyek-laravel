<?php

namespace App\Http\Controllers;

use App\Repositories\PekerjaanRepository;
use App\Repositories\TipePekerjaanRepository;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{

    private $pekerjaanRepository;
    private $tipePekerjaanRepository;

    public function __construct(protected PekerjaanRepository $pekerjaan, TipePekerjaanRepository $tipePekerjaan)
    {
        $this->pekerjaanRepository = $pekerjaan;
        $this->tipePekerjaanRepository = $tipePekerjaan;
    }

    /**
     * Display a listing of the pekerjaan.
     */
    public function index()
    {
        $pekerjaan = $this->pekerjaanRepository->getAll();
        return view('pekerjaan.index',compact('pekerjaan'));
    }

    /**
     * Show the form for creating a new pekerjaan.
     */
    public function create()
    {
        $tipePekerjaan = $this->tipePekerjaanRepository->getAll();
        return view('pekerjaan.create',compact('tipePekerjaan'));
    }

    /**
     * Store a newly created pekerjaan in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nama'=>'required',
                'deskripsi'=>'nullable',
                'tipe_pekerjaan_id'=>'required',
            ]
        );

        $data = $this->pekerjaanRepository->save($validated);
        if ($data) {
            return redirect()->route('pekerjaan.index')->banner('Berhasil menambahkan pekerjaan');
        }
    }

    /**
     * Display the specified pekerjaan.
     */
    public function show(string $id)
    {
        return $this->pekerjaanRepository->findByID($id);
    }

    /**
     * Show the form for editing the specified pekerjaan.
     */
    public function edit(string $id)
    {
        $tipePekerjaan = $this->tipePekerjaanRepository->getAll();
        $pekerjaan = $this->pekerjaanRepository->findByID($id);
        return view('pekerjaan.show',compact('pekerjaan','tipePekerjaan'));
    }

    /**
     * Update the specified pekerjaan in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama'=>'required',
            'deskripsi'=>'nullable',
            'tipe_pekerjaan_id'=>'required',
        ]);

        $data = $this->pekerjaanRepository->update($id,$validated);
        if ($data) {
            return redirect()->route('pekerjaan.index')->banner('Berhasil mengubah data pekerjaan');
        }
    }

    /**
     * Remove the specified pekerjaan from storage.
     */
    public function destroy(string $id)
    {
        $data = $this->pekerjaanRepository->findByID($id);

        if ($data->delete()) {
            return redirect()->route('pekerjaan.index')->banner('Berhasil menghapus pekerjaan');
        }
    }
}
