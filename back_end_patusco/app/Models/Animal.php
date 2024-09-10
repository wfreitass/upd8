<?php

namespace App\Models;

use App\Observers\AnimalObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[ObservedBy([AnimalObserver::class])]
class Animal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'age',
        'type_animal_id',
        'user_id',

    ];

    public function tipoAnimal(): HasOne
    {
        return $this->hasOne(TipoAnimal::class, "id", "type_animal_id");
    }
}
