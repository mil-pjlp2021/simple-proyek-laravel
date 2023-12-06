<?php

namespace App\Http\Controllers;

use App\Repositories\KlienRepository;
use Illuminate\Http\Request;

class KlienController extends Controller
{

    private $klienRepository;

    public function __construct(protected KlienRepository $klien)
    {
        $this->klienRepository = $klien;
    }

    /**
     * Display a listing of the klien.
     */
    public function index()
    {
        $klien = $this->klienRepository->getAll();
        return view('klien.index',compact('klien'));
    }

    /**
     * Show the form for creating a new klien.
     */
    public function create()
    {
        return view('klien.create');
    }

    /**
     * Store a newly created klien in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nama'=>'required',
                'kontak'=>'required',
            ]
        );

        $data = $this->klienRepository->save($validated);
        if ($data) {
            return redirect()->route('klien.index')->banner('Berhasil menambahkan user');
        }
    }

    /**
     * Display the specified klien.
     */
    public function show(string $id)
    {
        return $this->klienRepository->findByID($id);
    }

    /**
     * Show the form for editing the specified klien.
     */
    public function edit(string $id)
    {
        $klien = $this->klienRepository->findByID($id);
        return view('klien.show',compact('klien'));
    }

    /**
     * Update the specified klien in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama'=>'required',
            'kontak'=>'required',

        ]);

        $data = $this->klienRepository->update($id,$validated);
        if ($data) {
            return redirect()->route('klien.index')->banner('Berhasil mengubah data klien');
        }
    }

    /**
     * Remove the specified klien from storage.
     */
    public function destroy(string $id)
    {
        $klien = $this->klienRepository->findByID($id);

        if ($klien->delete()) {
            return redirect()->route('klien.index')->banner('Berhasil menghapus klien');
        }
    }
}
