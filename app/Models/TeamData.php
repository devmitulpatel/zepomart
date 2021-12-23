<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class TeamData extends Model
{
    use HasFactory;

    const DefaultNoOfDisplay = 4;

    public function socials(): MorphToMany
    {
        return $this->morphToMany(SocialNetwork::class, 'socialables')->withPivot(['link']);
    }

    public function createSocialLink(SocialNetwork $type,$link){
        if(!$this->socials()->exists($type->id)) {
            $this->socials()->attach($type->id, ['link' => $link]);
        }else{
            //$this->socials()->updateExistingPivot($type->id, ['link' => $link]);
            $this->socials()->attach($type->id, ['link' => $link]);
        }
    }

}
