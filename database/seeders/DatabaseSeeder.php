<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\ClientFeedback;
use App\Models\DynamicSiteData;
use App\Models\PlanFeature;
use App\Models\StaticPage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         $this->call(MainSiteSeeder::class);
         $this->call(OwnablesSeeder::class);

         $this->call(DynamicSiteDataSeeder::class);
         $this->call(SocialNetworkSeeder::class);
         $this->call(SocialableSeeder::class);
         $this->call(TeamDataSeeder::class);
         $this->call(TableUpdateSeeder::class);
         $this->call(NavigationSeeder::class);
         $this->call(StaticPageSeeder::class);
         //$this->call(SeoPlanFeatureCatSeeder::class);
         $this->call(CategoriesSeeder::class);
         $this->call(PlanFeatureSeeder::class);
         $this->call(SeoPlanSeeder::class);
         $this->call(ClientFeedbackSeeder::class);
         $this->call(PackageTypeSeeder::class);
         $this->call(PackagePlansSeeder::class);
         $this->call(CostableSeeder::class);
         $this->call(FeatureableSeeder::class);

         ///
        ///crowdtize

        $this->call(SponsorSeeder::class);
        $this->call(RegistredUserSeeder::class);
        $this->call(TermNConditionSeeder::class);

    }
}
