<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document_type extends Model
{
    use HasFactory;

    protected $fillable = array('name',
                                'atributes');


    public function documents()
    {
        return $this->hasMany(documents::class,'code_id');
    }
}
