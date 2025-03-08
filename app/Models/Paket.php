<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $table = 'paket';
    protected $guarded = [];

    public function Biro()
    {
        return $this->beLongsTo(User::class, 'user_id');
    }

}
