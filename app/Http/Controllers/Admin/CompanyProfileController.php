<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CompanyProfileController extends Controller
{
    public function edit(): View
    {
        $profile = CompanyProfile::first();

        return view('admin.company-profile.edit', compact('profile'));
    }

    public function update(Request $request): RedirectResponse
    {
        $profile = CompanyProfile::first();
        $data = $request->validate([
            'company_name' => 'required|string|max:255',
            'description' => 'required|string',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/profil'), $filename);
            $this->deleteFile($profile?->logo);
            $data['logo'] = 'images/profil/' . $filename;
        }

        CompanyProfile::updateOrCreate(['id' => $profile?->id], $data);

        return redirect()->route('admin.company-profile.edit')->with('success', 'Profil perusahaan berhasil disimpan.');
    }

    private function deleteFile(?string $path): void
    {
        if ($path && file_exists(public_path($path))) {
            unlink(public_path($path));
        }
    }
}
