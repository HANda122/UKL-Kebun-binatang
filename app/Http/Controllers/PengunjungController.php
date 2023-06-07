<?php

namespace App\Http\Controllers;

use App\Models\Pengunjungs;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    public function index()
{
    return view('pengunjung.index', [
        'pengunjungs' => Pengunjungs::latest()->simplePaginate(1),
    ]);
}
    public function create()
    {
        return view('pengunjung.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'min:3'],
            'address' => ['required', 'min:10'],
            'phone_number' => ['required', 'numeric']
        ]);
        $pengunjungs = new Pengunjungs();
        $pengunjungs->name = $request->name;
        $pengunjungs->address = $request->address;
        $pengunjungs->phone_number = $request->phone_number;

        $pengunjungs -> save();

        session()->flash('success', 'Data berhasil Ditambahkan.');

        return redirect()->route('pengunjungs.index');
    }
   
    public function edit($id)
    {
        $pengunjungs = Pengunjungs::find($id);
        return view('pengunjung.edit', [
            'pengunjung' => $pengunjungs
        ]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'min:3'],
            'address' => ['required', 'min:10'],
            'phone_number' => ['required', 'numeric']
        ]);

        $pengunjungs = Pengunjungs::find($id);
        $pengunjungs->name = $request->name;
        $pengunjungs->address = $request->address;
        $pengunjungs->phone_number = $request->phone_number;

        $pengunjungs -> save();

        return redirect()->route('pengunjungs.index');
    }
    public function destroy($id)
    {
        $pengunjungs = Pengunjungs::find($id);

        $pengunjungs->delete();

        return redirect()->route('pengunjungs.index');
    }

    
    

}
