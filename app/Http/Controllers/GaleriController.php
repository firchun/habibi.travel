<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GaleriController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Images',
            'galeri' => Galeri::latest()->get(),

        ];
        return view('admin.galeri.index', $data);
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'type' => ['required'],
                'thumbnail' => ['required'],
            ]);

            $Galeri = new Galeri;
            if ($request->hasFile('thumbnail')) {
                $filename = Str::random(32) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                $file_path = $request->file('thumbnail')->storeAs('public/fotos', $filename);
            }
            $Galeri->thumbnail = isset($file_path) ? $file_path : null;
            $Galeri->name = $request->name;
            $Galeri->type = $request->type;
            $Galeri->id_user = Auth::user()->id;
            $Galeri->description = $request->description ?? '-';
            if ($Galeri->save()) {

                return redirect()->back()->with('success', 'Berhasil menambahkan data');
            } else {
                return redirect()->back()->with('danger', 'Gagal menambahkan data');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', 'Terjadi kesalahan : ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'type' => ['required'],
                'thumbnail' => ['required'],
            ]);
            $Galeri = Galeri::findOrFail($id);
            if ($request->hasFile('thumbnail')) {
                if ($Galeri->thumbnail != '' && Storage::exists($Galeri->thumbnail)) {
                    Storage::delete($Galeri->thumbnail);
                }

                $filename = Str::random(32) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                $file_path = $request->file('thumbnail')->storeAs('public/fotos', $filename);
            }
            $Galeri->thumbnail = isset($file_path) ? $file_path : $Galeri->thumbnail;
            $Galeri->name = $request->name;
            $Galeri->type = $request->type;
            $Galeri->id_user = Auth::user()->id;
            $Galeri->description = $request->description;

            if ($Galeri->save()) {
                return redirect()->back()->with('success', 'Berhasil mengubah data ');
            } else {
                return redirect()->back()->with('danger', 'Gagal mengubah data ');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', 'Terjadi kesalahan : ' . $e->getMessage());
        }
    }
    public function destroy($id)
    {

        try {
            $Galeri = Galeri::findOrFail($id);
            if ($Galeri->thumbnail != '' && Storage::exists($Galeri->thumbnail)) {
                Storage::delete($Galeri->thumbnail);
            }
            $Galeri->delete();
            return back()->with(['success' => 'Berhasil menghapus data']);
        } catch (QueryException $e) {
            return back()->with(['danger' => 'Tidak dapat menghapus data karena ada keterkaitan data lain.']);
        } catch (\Exception $e) {
            return back()->with(['danger' => 'Terjadi kesalahan saat menghapus data, ', $e->getMessage()]);
        }
    }
}
