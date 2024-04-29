<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    // Define the table associated with the model
    protected $table = 'tasks';

    // Define the fillable attributes of the model
    protected $fillable = [
        'user_id',
        'description',
        'status',
    ]; 

    // Define relationships with other models
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
