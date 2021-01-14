<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    /**
	 * Get the user that owns the phone.
	 */
    public function user() {
    	// return $this->belongsTo(User::class, 'foreign_key', 'owner_key');
    	return $this->belongsTo(User::class);
    }
}
