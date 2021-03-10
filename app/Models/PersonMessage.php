<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//php artisan make:model PersonMessage --migration

class PersonMessage extends Model
{
    use HasFactory;

    // table name
    protected $table = 'person_message';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    public function company(){
        return $this->belongsTo(Company::class, "company_id", "id");
    }
}
