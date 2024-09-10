<?php

namespace App\Observers;

use App\Models\Consultation;
use Illuminate\Support\Facades\Auth;

class ConsultationObserver
{

    /**
     * Handle the Consultation "created" event.
     *
     * @return void
     */
    public function creating(Consultation $consultation)
    {
        $consultation->user_id = Auth::id();
    }

    /**
     * Handle the Consultation "created" event.
     */
    public function created(Consultation $consultation): void
    {
        //
    }

    /**
     * Handle the Consultation "updated" event.
     */
    public function updated(Consultation $consultation): void
    {
        //
    }

    /**
     * Handle the Consultation "deleted" event.
     */
    public function deleted(Consultation $consultation): void
    {
        //
    }

    /**
     * Handle the Consultation "restored" event.
     */
    public function restored(Consultation $consultation): void
    {
        //
    }

    /**
     * Handle the Consultation "force deleted" event.
     */
    public function forceDeleted(Consultation $consultation): void
    {
        //
    }
}
