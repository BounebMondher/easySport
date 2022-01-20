<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team_players;
use App\Player;

class Team extends Model
{
    //Primary Key
   public $primaryKey = "team_id";

   public static function players($id)
    {
        $team = Team::find($id);
        $team_players = Team_players::where('id_team',$team['team_id'])->get();
        foreach ($team_players as $player)
        {
            $players[]=Player::find($player['id_player']);
        }
        return $players;
    }
}
