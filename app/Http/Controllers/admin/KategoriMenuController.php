<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KategoriMenu;
use Illuminate\Http\Request;

class KategoriMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategorimenus = KategoriMenu::all();
        return view('pages.admin.kategori-menu.index',compact('kategorimenus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.kategori-menu.create');
    } 

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //VALIDASI FORM INPUT
        $validated = $request->validate([
            'kategoriMenu' => 'required|unique:kategori_menus'
        ]);
        KategoriMenu::create($validated);
        notify()->success('DATA DITAMBAHKAN !','BERHASIL');
        return redirect()->route('kategori-menu.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = KategoriMenu::find($id);
        return view('pages.admin.kategori-menu.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //VALIDASI FORM INPUT
        $validated = $request->validate([
            'kategoriMenu' => 'required|unique:kategori_menus'
        ]);
        KategoriMenu::find($id)->update($validated);
        return redirect()->route('kategori-menu.index')->with('sukses','Success Update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        KategoriMenu::find($id)->delete();
        return redirect()->route('kategori-menu.index')->with('sukses','Success Deleted!');
    }
}
