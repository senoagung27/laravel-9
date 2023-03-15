<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StokJubelio extends Model
{

    use HasFactory;
    use HasUuids;

    public function newUniqueId(): string
    {
        return (string) Uuid::uuid4();
    }
    protected $guarded = [];
    // protected $fillable = ['data','name_data','token'];
    protected $table = 'stoks';
    public function stokjbresult()
    {
        return $this->belongsTo(StokFF::class, 'id', 'stokjb_id');
    }
    protected function data(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
}
