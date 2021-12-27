<?php

namespace Database\Seeders;

use App\Models\DynamicSiteData;
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

    }
}
