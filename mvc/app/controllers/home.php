<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User; // Make sure this use statement is correct

class Home extends Controller {
    
    public function index($username = '') {
        // Example: Fetch user data from the database based on the provided username
        $user = User::where('username', $username)->first();

        if (!$user) {
            // If the user is not found, create a dummy user for demonstration
            $user = new User();
            $user->username = 'Guest';
        }

        // Pass user data to the view
        $this->view('home/index', ['username' => $user->username]);
    }

    public function create($username = '', $email = '') {
        // Example: Create a new user record
        $user = User::create([
            'username' => $username,
            'email' => $email   
        ]);

        // Optionally, return a response or redirect to another page
        return $user; // This returns the created user object; adjust as needed
    }
}
