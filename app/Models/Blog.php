<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = [
        'titulo',
        'contenido',
        'user_id',

    ];

    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
