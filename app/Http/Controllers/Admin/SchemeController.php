<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Scheme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SchemeController extends Controller
{
    /**
     * Display a listing of schemes.
     */
    public function index()
    {
        $schemes = Scheme::latest()->paginate(15);

        return view('admin.schemes.index', compact('schemes'));
    }

    /**
     * Show create form.
     */
    public function create()
    {
        return view('admin.schemes.create');
    }

    /**
     * Store Scheme
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:schemes,title',
            'scheme_code' => 'nullable|string|max:50|unique:schemes,scheme_code',
            'monthly_amount' => 'required|numeric|min:1',
            'installments' => 'required|integer|min:1',
            'bonus_amount' => 'nullable|numeric|min:0',
            'bonus_type' => 'required|in:fixed,percentage',
            'joining_fee' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'terms_conditions' => 'nullable|string',
            'is_online' => 'required|boolean',
            'status' => 'required|in:active,inactive',
        ]);

        $scheme = new Scheme();

        $scheme->title = $request->title;

        $slug = Str::slug($request->title);

        if (Scheme::where('slug', $slug)->exists()) {
            $slug .= '-' . time();
        }

        $scheme->slug = $slug;

        $scheme->scheme_code = $request->filled('scheme_code')
            ? $request->scheme_code
            : 'SCH' . date('Y') . rand(1000, 9999);

        $scheme->monthly_amount = $request->monthly_amount;
        $scheme->installments = $request->installments;

        $scheme->bonus_amount = $request->bonus_amount ?? 0;
        $scheme->bonus_type = $request->bonus_type;

        $scheme->joining_fee = $request->joining_fee ?? 0;

        $scheme->short_description = $request->short_description;
        $scheme->description = $request->description;
        $scheme->terms_conditions = $request->terms_conditions;

        $scheme->is_online = $request->is_online;
        $scheme->status = $request->status;

        /*
        |--------------------------------------------------------------------------
        | Image Upload
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            $folder = public_path('uploads/schemes');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            $image = $request->file('image');

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image->move($folder, $imageName);

            $scheme->image = 'uploads/schemes/' . $imageName;
        }

        $scheme->save();

        return redirect()
            ->route('admin.schemes.index')
            ->with('success', 'Scheme created successfully.');
    }
    /**
     * Show edit form.
     */
    public function edit(Scheme $scheme)
    {
        return view('admin.schemes.edit', compact('scheme'));
    }

    /**
     * Update Scheme
     */
    public function update(Request $request, Scheme $scheme)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:schemes,title,' . $scheme->id,
            'scheme_code' => 'nullable|string|max:50|unique:schemes,scheme_code,' . $scheme->id,
            'monthly_amount' => 'required|numeric|min:1',
            'installments' => 'required|integer|min:1',
            'bonus_amount' => 'nullable|numeric|min:0',
            'bonus_type' => 'required|in:fixed,percentage',
            'joining_fee' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'terms_conditions' => 'nullable|string',
            'is_online' => 'required|boolean',
            'status' => 'required|in:active,inactive',
        ]);

        $slug = Str::slug($request->title);

        if (
            Scheme::where('slug', $slug)
                ->where('id', '!=', $scheme->id)
                ->exists()
        ) {
            $slug .= '-' . time();
        }

        $scheme->title = $request->title;
        $scheme->slug = $slug;

        $scheme->scheme_code = $request->filled('scheme_code')
            ? $request->scheme_code
            : $scheme->scheme_code;

        $scheme->monthly_amount = $request->monthly_amount;
        $scheme->installments = $request->installments;

        $scheme->bonus_amount = $request->bonus_amount ?? 0;
        $scheme->bonus_type = $request->bonus_type;

        $scheme->joining_fee = $request->joining_fee ?? 0;

        $scheme->short_description = $request->short_description;
        $scheme->description = $request->description;
        $scheme->terms_conditions = $request->terms_conditions;

        $scheme->is_online = $request->is_online;
        $scheme->status = $request->status;

        /*
        |--------------------------------------------------------------------------
        | Update Image
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            if (
                !empty($scheme->image) &&
                File::exists(public_path($scheme->image))
            ) {
                File::delete(public_path($scheme->image));
            }

            $folder = public_path('uploads/schemes');

            if (!File::exists($folder)) {
                File::makeDirectory($folder, 0755, true);
            }

            $image = $request->file('image');

            $imageName = time() . '_' . uniqid() . '.' .
                $image->getClientOriginalExtension();

            $image->move($folder, $imageName);

            $scheme->image = 'uploads/schemes/' . $imageName;
        }

        $scheme->save();

        return redirect()
            ->route('admin.schemes.index')
            ->with('success', 'Scheme updated successfully.');
    }

    /**
     * Delete Scheme
     */
    public function destroy(Scheme $scheme)
    {
        if (
            !empty($scheme->image) &&
            File::exists(public_path($scheme->image))
        ) {
            File::delete(public_path($scheme->image));
        }

        $scheme->delete();

        return redirect()
            ->route('admin.schemes.index')
            ->with('success', 'Scheme deleted successfully.');
    }
}