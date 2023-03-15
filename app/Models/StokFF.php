<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StokFF extends Model
{
    use HasFactory;
    use HasUuids;

    public function newUniqueId(): string
    {
        return (string) Uuid::uuid4();
    }
    protected $guarded = ['*'];
    protected $table = 'stok_f_f_s';
    // public function stokffresult()
    // {
    //     return $this->belongsTo(StokJubelio::class, 'stokff_id', 'id');
    // }
    // public function stokjbresult()
    // {
    //     return $this->belongsTo(StokFF::class, 'stokjb_id', 'id');
    // }
    protected function data(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
}
