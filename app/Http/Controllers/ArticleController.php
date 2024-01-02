<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Articles',
            'Article' => Article::latest()->get(),

        ];
        return view('admin.article.index', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Create Article',

        ];
        return view('admin.article.create', $data);
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => ['required', 'string', 'max:255'],
                'description' => ['required'],
                'category' => ['required'],
                'thumbnail' => ['required'],
            ]);

            $Article = new Article;
            if ($request->hasFile('thumbnail')) {
                $filename = Str::random(32) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                $file_path = $request->file('thumbnail')->storeAs('public/fotos', $filename);
            }
            $Article->thumbnail = isset($file_path) ? $file_path : null;
            $Article->title = $request->title;
            $Article->slug = Str::slug($request->title);
            $Article->description = $request->description;
            $Article->category = $request->category;
            $Article->id_user = Auth::user()->id;
            if ($Article->save()) {

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
                'title' => ['required', 'string', 'max:255'],
                'description' => ['required'],
                'category' => ['required'],
            ]);
            $Article = Article::findOrFail($id);
            if ($request->hasFile('thumbnail')) {
                if ($Article->thumbnail != '' && Storage::exists($Article->thumbnail)) {
                    Storage::delete($Article->thumbnail);
                }

                $filename = Str::random(32) . '.' . $request->file('thumbnail')->getClientOriginalExtension();
                $file_path = $request->file('thumbnail')->storeAs('public/fotos', $filename);
            }
            $Article->thumbnail = isset($file_path) ? $file_path : $Article->thumbnail;
            $Article->title = $request->title;
            $Article->slug = Str::slug($request->title);
            $Article->description = $request->description;
            $Article->category = $request->category;
            $Article->id_user = Auth::user()->id;

            if ($Article->save()) {
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
            $Article = Article::findOrFail($id);
            if ($Article->thumbnail != '' && Storage::exists($Article->thumbnail)) {
                Storage::delete($Article->thumbnail);
            }
            $Article->delete();
            return back()->with(['success' => 'Berhasil menghapus data']);
        } catch (QueryException $e) {
            return back()->with(['danger' => 'Tidak dapat menghapus data karena ada keterkaitan data lain.']);
        } catch (\Exception $e) {
            return back()->with(['danger' => 'Terjadi kesalahan saat menghapus data, ', $e->getMessage()]);
        }
    }
}
