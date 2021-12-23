<?php

namespace App\Observers;

use App\Models\DynamicSiteData;

class DynamicSiteDataObserver
{

    //public $afterCommit = true;
    /**
     * Handle the DynamicSiteData "created" event.
     *
     * @param  \App\Models\DynamicSiteData  $dynamicSiteData
     * @return void
     */
    public function created(DynamicSiteData $dynamicSiteData)
    {
        //
        update_model($dynamicSiteData);
    }

    /**
     * Handle the DynamicSiteData "updated" event.
     *
     * @param  \App\Models\DynamicSiteData  $dynamicSiteData
     * @return void
     */
    public function updated(DynamicSiteData $dynamicSiteData)
    {
        update_model($dynamicSiteData);
    }

    /**
     * Handle the DynamicSiteData "deleted" event.
     *
     * @param  \App\Models\DynamicSiteData  $dynamicSiteData
     * @return void
     */
    public function deleted(DynamicSiteData $dynamicSiteData)
    {
        //
    }

    /**
     * Handle the DynamicSiteData "restored" event.
     *
     * @param  \App\Models\DynamicSiteData  $dynamicSiteData
     * @return void
     */
    public function restored(DynamicSiteData $dynamicSiteData)
    {
        //
    }

    /**
     * Handle the DynamicSiteData "force deleted" event.
     *
     * @param  \App\Models\DynamicSiteData  $dynamicSiteData
     * @return void
     */
    public function forceDeleted(DynamicSiteData $dynamicSiteData)
    {
        //
    }


}
