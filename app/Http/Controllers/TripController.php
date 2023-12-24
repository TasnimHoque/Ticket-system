// app/Http/Controllers/TripController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    public function create()
    {
        // Display the form to create a new trip
        return view('trips.create');
    }

    public function store(Request $request)
    {
        // Store a new trip
        $data = $request->validate([
            'date' => 'required|date',
        ]);

        Trip::create($data);

        return redirect()->route('trips.create');
    }
}
