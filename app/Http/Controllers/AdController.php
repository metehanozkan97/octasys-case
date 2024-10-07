<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index()
    {
        // Tüm reklamları listelemek
        $ads = Ad::all();
        return view('panel.admin.ads.index', compact('ads'));
    }

    public function create()
    {
        // Pozisyonları sabit bir array olarak tanımlıyoruz
        $positions = [
            'header' => 'Header',
            'footer' => 'Footer',
            'sidebar' => 'Sidebar',
        ];

        return view('panel.admin.ads.create', compact('positions'));
    }

    public function store(Request $request)
    {
        // Yeni reklam kaydetme
        $request->validate([
            'ad_position' => 'required|string|max:255',
            'ad_code' => 'required',
        ]);

        Ad::create($request->all());
        return redirect()->route('dashboard.ads.index')->with('success', 'Reklam başarıyla oluşturuldu');
    }

    public function edit(Ad $ad)
    {
        // Aynı pozisyonları edit sayfasına da gönderiyoruz
        $positions = [
            'header' => 'Header',
            'footer' => 'Footer',
            'sidebar' => 'Sidebar',
        ];

        return view('panel.admin.ads.edit', compact('ad', 'positions'));
    }

    public function update(Request $request, Ad $ad)
    {
        // Reklam güncelleme
        $request->validate([
            'ad_position' => 'required|string|max:255',
            'ad_code' => 'required',
        ]);

        $ad->update($request->all());
        return redirect()->route('dashboard.ads.index')->with('success', 'Reklam başarıyla güncellendi');
    }

    public function destroy(Ad $ad)
    {
        // Reklam silme
        $ad->delete();
        return redirect()->route('dashboard.ads.index')->with('success', 'Reklam başarıyla silindi');
    }
}
