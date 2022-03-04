<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class territory extends Model
{
    use HasFactory;
    protected $table = 'territory';
    protected $primaryKey = 'tid';
    protected $fillable = [
        'tcode','tname','zid ','rid ',
    ];	
}
