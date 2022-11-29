<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        if (Auth::user()) {
            $id = Auth::user()->id;
            $users = User::with('rules')->find($id);
            foreach ($users->rules as $rule) {
                return view('livewire.home', compact('rule'));
            }
        } else {
            return view('livewire.home');
        }

    }
}
