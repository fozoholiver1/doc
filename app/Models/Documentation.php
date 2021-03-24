<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Documentation extends Model
{

    use HasTrixRichText;
    use HasFactory;
    protected $guarded=[];
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
