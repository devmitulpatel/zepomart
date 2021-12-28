<?php

use App\Models\SeoPlan;

dd(SeoPlan::with(['features'])->get()->first()->features);
