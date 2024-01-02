<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Teams',
            'Team' => Team::latest()->get(),

        ];
        return view('admin.team.index', $data);
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'position' => ['required'],
                'thumbnail' => ['required'],
            ]);

            $Team = new Team;
            if ($request->hasFile('thumbnail')) {
                $filename = Str::random(32) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                $file_path = $request->file('thumbnail')->storeAs('public/fotos', $filename);
            }
            $Team->thumbnail = isset($file_path) ? $file_path : null;
            $Team->name = $request->name;
            $Team->position = $request->position;
            $Team->email = $request->email;
            $Team->phone = $request->phone;
            if ($Team->save()) {

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
                'position' => ['required'],
                'thumbnail' => ['required'],
            ]);
            $Team = Team::findOrFail($id);
            if ($request->hasFile('thumbnail')) {
                if ($Team->thumbnail != '' && Storage::exists($Team->thumbnail)) {
                    Storage::delete($Team->thumbnail);
                }

                $filename = Str::random(32) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                $file_path = $request->file('thumbnail')->storeAs('public/fotos', $filename);
            }
            $Team->thumbnail = isset($file_path) ? $file_path : $Team->thumbnail;
            $Team->name = $request->name;
            $Team->position = $request->position;
            $Team->email = $request->email;
            $Team->phone = $request->phone;

            if ($Team->save()) {
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
            $Team = Team::findOrFail($id);
            if ($Team->thumbnail != '' && Storage::exists($Team->thumbnail)) {
                Storage::delete($Team->thumbnail);
            }
            $Team->delete();
            return back()->with(['success' => 'Berhasil menghapus data']);
        } catch (QueryException $e) {
            return back()->with(['danger' => 'Tidak dapat menghapus data karena ada keterkaitan data lain.']);
        } catch (\Exception $e) {
            return back()->with(['danger' => 'Terjadi kesalahan saat menghapus data, ', $e->getMessage()]);
        }
    }
}
