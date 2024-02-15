<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnum;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use function Termwind\render;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Custom/Search', [
            'items' => Advertisement::with('user')->whereNot('status', '=', 'sold')->paginate(10)
        ]);
    }

    public function indexUserOwned() {
        return Inertia::render('Custom/MyAds', [
            'items' => Advertisement::with('user')->where('user_id', '=', Auth::user()->id)->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Custom/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = Advertisement::query()->insertGetId([
            'name' => $request->name,
            'price' => $request->price,
            'subject' => $request->subject,
            'condition' => $request->condition,
            'cleanliness' => $request->cleanliness,
            'photo_path' => $request->file('image')->storeAs('public/ads/' . $request->user()->id, $request->file('image')->getClientOriginalName()),
            'status' => StatusEnum::AVAILABLE,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('ads.search');
    }

    /**
     * Display the specified resource.
     */
    public function show(Advertisement $advertisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Advertisement $advertisement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Advertisement $advertisement)
    {
        //
    }
}
