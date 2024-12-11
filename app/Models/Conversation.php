<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User; // Import User model

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'receiver_id',
        'sender_id',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function getReceiver()
    {
        // Ensure the user is authenticated
        $authId = auth()->id();

        if (!$authId) {
            return null; // Or handle the unauthenticated case appropriately
        }

        // Return the appropriate user based on the sender/receiver relationship
        return $this->sender_id === $authId
            ? User::firstWhere('id', $this->receiver_id)
            : User::firstWhere('id', $this->sender_id);
    }
}
