<?php

namespace App\Models;

use App\Observers\ConsultationObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[ObservedBy([ConsultationObserver::class])]
class Consultation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'animal_id',
        'symptoms',
        'dt_consultation',
        'turno',
    ];

    /**
     *
     * @return HasOne
     * 
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class, "id", "user_id");
    }


    public function animal(): HasOne
    {
        return $this->hasOne(Animal::class, "id", "animal_id");
    }
}
