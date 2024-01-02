<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Settings Web',
            'setting' => Setting::first(),
        ];
        return view('admin.settings.index', $data);
    }
    public function update(Request $request)
    {
        try {

            $Setting = Setting::findOrFail(1);
            if (isset($request->name_web) && !empty($request->name_web)) {
                $Setting->name_web = $request->name_web;
            }

            if (isset($request->description_web) && !empty($request->description_web)) {
                $Setting->description_web = $request->description_web;
            }

            if (isset($request->about_web) && !empty($request->about_web)) {
                $Setting->about_web = $request->about_web;
            }

            if (isset($request->time_open) && !empty($request->time_open)) {
                $Setting->time_open = $request->time_open;
            }

            if (isset($request->time_closed) && !empty($request->time_closed)) {
                $Setting->time_closed = $request->time_closed;
            }

            if (isset($request->phone) && !empty($request->phone)) {
                $Setting->phone = $request->phone;
            }

            if (isset($request->email) && !empty($request->email)) {
                $Setting->email = $request->email;
            }

            if (isset($request->address) && !empty($request->address)) {
                $Setting->address = $request->address;
            }

            if ($Setting->save()) {
                return redirect()->back()->with('success', 'Berhasil mengubah setting ');
            } else {
                return redirect()->back()->with('danger', 'Gagal mengubah setting ');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('danger', 'Terjadi kesalahan : ' . $e->getMessage());
        }
    }
}
