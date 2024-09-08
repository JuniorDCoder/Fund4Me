<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = ['voting_campaign_id', 'name', 'description' ,'image_path'];

    public function votingCampaign()
    {
        return $this->belongsTo(VotingCampaign::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
