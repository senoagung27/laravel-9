<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Warehouse_locations extends Model
{
    use HasFactory;
    use HasFactory;
    use HasUuids;

    public function newUniqueId(): string
    {
        return (string) Uuid::uuid4();
    }
    // protected $guarded = [];
    protected $fillable = ['jubelio_locations_name'];
    protected $table = 'warehouse_locations';
    protected function data(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
}
