// app/Http/Controllers/SeatAllocationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeatAllocation;

class SeatAllocationController extends Controller
{
    public function index()
    {
        // Display the available seats for a selected trip
        return view('seat_allocations.index');
    }

    public function store(Request $request)
    {
        // Store a new seat allocation
        $data = $request->validate([
            'user_id' => 'required|exists:users,id',
            'trip_id' => 'required|exists:trips,id',
            'seat_number' => 'required|integer|min:1|max:36',
        ]);

        SeatAllocation::create($data);

        return redirect()->route('seat_allocations.index');
    }
}
