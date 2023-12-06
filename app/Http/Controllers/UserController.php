<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $userRepository;

    public function __construct(protected UserRepository $users)
    {
        $this->userRepository = $users;
    }

    /**
     * Display a listing of the user.
     */
    public function index()
    {
        $user = $this->userRepository->getAll();
        return view('users.index',compact('user'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',
                'retype_password'=>'required|same:password'
            ]
        );

        $data = $this->userRepository->save($validated);
        if ($data) {
            return redirect()->route('users.index')->banner('Berhasil menambahkan user');
        }
    }

    /**
     * Display the specified user.
     */
    public function show(string $id)
    {
        return $this->userRepository->findByID($id);
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(string $id)
    {
        $user = $this->userRepository->findByID($id);
        return view('users.show',compact('user'));
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'retype_password'=>'required|same:password',
        ]);

        $data = $this->userRepository->update($id,$validated);
        if ($data) {
            return redirect()->route('users.index')->banner('Berhasil mengubah data user');
        }
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy(string $id)
    {
        $user = $this->userRepository->findByID($id);

        if ($user->delete()) {
            return redirect()->route('users.index')->banner('Berhasil menghapus user');
        }

    }
}
