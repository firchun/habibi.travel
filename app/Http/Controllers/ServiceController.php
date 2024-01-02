<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Services',
            'services' => Service::latest()->get(),
        ];
        return view('admin.services.index', $data);
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'description' => ['required'],
                'icon' => ['required'],
            ]);

            $Service = new Service;
            $Service->name = $request->name;
            $Service->description = $request->description;
            $Service->icon = $request->icon;
            if ($Service->save()) {

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
                'description' => ['required'],
                'icon' => ['required'],
            ]);
            $Service = Service::findOrFail($id);
            $Service->name = $request->name;
            $Service->description = $request->description;
            $Service->icon = $request->icon;

            if ($Service->save()) {
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
            $Service = Service::findOrFail($id);
            $Service->delete();
            return back()->with(['success' => 'Berhasil menghapus data']);
        } catch (QueryException $e) {
            return back()->with(['danger' => 'Tidak dapat menghapus data karena ada keterkaitan data lain.']);
        } catch (\Exception $e) {
            return back()->with(['danger' => 'Terjadi kesalahan saat menghapus data, ', $e->getMessage()]);
        }
    }
}
