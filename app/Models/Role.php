<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id')->withPivot('created_at');
        // Customizing The pivot Attribute Name
        /*->as('subscription')
        ->withTimestamps();*/
        // Filtering Queries Via Intermediate Table Columns
        // wherePivot, wherePivotIn, and wherePivotNotIn 
    }
}
