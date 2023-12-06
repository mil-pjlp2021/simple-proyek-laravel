<?php

namespace App\Http\Controllers;

use App\Repositories\TipePekerjaanRepository;
use Illuminate\Http\Request;

class TipePekerjaanController extends Controller
{

    private $tipePekerjaanRepository;

    public function __construct(protected TipePekerjaanRepository $tipePekerjaan)
    {
        $this->tipePekerjaanRepository = $tipePekerjaan;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tipePekerjaan = $this->tipePekerjaanRepository->getAll();
        return view('tipe_pekerjaan.index',compact('tipePekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipe_pekerjaan.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nama'=>'required',
            ]
        );

        $data = $this->tipePekerjaanRepository->save($validated);
        if ($data) {
            return redirect()->route('tipe_pekerjaan.index')->banner('Berhasil menambahkan tipe pekerjaan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->tipePekerjaanRepository->findByID($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipePekerjaan = $this->tipePekerjaanRepository->findByID($id);
        return view('tipe_pekerjaan.show',compact('tipePekerjaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama'=>'required',
        ]);

        $data = $this->tipePekerjaanRepository->update($id,$validated);
        if ($data) {
            return redirect()->route('tipe_pekerjaan.index')->banner('Berhasil mengubah data tipe pekerjaan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tipePekerjaan = $this->tipePekerjaanRepository->findByID($id);

        if ($tipePekerjaan->delete()) {
            return redirect()->route('tipe_pekerjaan.index')->banner('Berhasil menghapus Tipe Pekerjaan');
        }
    }
}
