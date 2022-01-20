<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;
use App\Player;
use App\Team_players;

class Player extends Model
{
    //Primary Key
    protected $fillable = [
        'id_user', 'email', 'first name',
    ];
   public $primaryKey = "player_id";

   public static function teams($id)
    {
        $player = Player::find($id);
        $player_teams = Team_players::where('id_player',$player['player_id'])->get();
        foreach ($player_teams as $team)
        {
            $teams[]=Team::find($team['id_team']);
        }
        if (isset($teams))
        return $teams;
        else
        return [];
    }
}
