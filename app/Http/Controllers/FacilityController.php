<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        // kiri & tengah tetap
        $imageFacilities = Facility::whereNotNull('image')
            ->take(3)
            ->get();

        // pilih 2 type teratas (berdasarkan jumlah facility)
        $topTypes = Facility::select('type')
            ->whereNotNull('type')
            ->groupBy('type')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(2)
            ->pluck('type');

        // ambil semua facility untuk 2 type tsb (field secukupnya)
        $facilitiesByType = Facility::select('id', 'name', 'type', 'description')
            ->whereIn('type', $topTypes)
            ->orderBy('type')
            ->orderBy('name')
            ->get()
            ->groupBy('type'); // hasil: ['Akomodasi' => Collection, 'Transportasi' => Collection]

        return view('welcome', compact('imageFacilities', 'facilitiesByType'));
    }

    public function katalog(Request $request)
    {
        $type    = $request->query('type');
        $q       = $request->query('q');
        $sort    = $request->query('sort','name_asc');
        $perPage = (int) $request->query('per_page', 12);

        $query = Facility::query()->select('id','name','type','description','image');

        if ($type) $query->where('type', $type);
        if ($q) {
            $query->where(function($w) use ($q){
                $w->where('name','like',"%{$q}%")
                  ->orWhere('description','like',"%{$q}%")
                  ->orWhere('type','like',"%{$q}%");
            });
        }

        switch ($sort) {
            case 'name_desc': $query->orderBy('name','desc'); break;
            case 'newest':    $query->latest(); break;
            case 'oldest':    $query->oldest(); break;
            default:          $query->orderBy('name'); // name_asc
        }

        $facilities = $query->paginate($perPage)->withQueryString();

        $types = Facility::whereNotNull('type')->distinct()->orderBy('type')->pluck('type');

        return view('facilities.index', compact('facilities','types','type','q','sort','perPage'));
    }

    /** (Opsional) Detail satu fasilitas */
    public function show(Facility $facility)
    {
        return view('facilities.show', compact('facility'));
    }
}
