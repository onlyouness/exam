<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        "id","id_client","id_voiture","date_debut_location","date_fin_location"
    ];
    public function client(){
        return $this->belongsTo(Client::class,"id_client");
    }
    public function voiture(){
        return $this->belongsTo(Voiture::class,"id_voiture");
    }
}