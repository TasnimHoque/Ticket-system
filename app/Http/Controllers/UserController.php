// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        // Display the form to register a new user
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Store a new user
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
        ]);

        User::create($data);

        return redirect()->route('users.create');
    }
}
