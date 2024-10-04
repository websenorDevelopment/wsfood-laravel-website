<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class user_controller extends Controller
{
    public function store(Request $request)
    {
      
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric',
        ]);

        
        $user = user::create([
            'name' =>ucfirst( $validatedData['name']),
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
        ]);

        return redirect()->route('home_page');
    }

       public function update(Request $request, $id)
    {
       
        $user = user::findOrFail($id);

        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|numeric'
        ]);

        
        $user->update([
            'name' => ucfirst($validatedData['name']),
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
        ]);

        return response()->json(['message' => 'User updated successfully!', 'user' => $user], 200);
    }

    
    public function destroy($id)
    {
       
        $user = user::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'User deleted successfully!'], 200);
    }
}
