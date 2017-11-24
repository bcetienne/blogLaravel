<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Donner le nom de la table dans la base de données si elle est au pluriel, ici le modèle Category interragit avec
    //la base de données categories.
    protected $table = "categories";
    //Si la clé primaire est customisée
    protected $primaryKey = 'idCategories';
    //Le modèle n'aura pas l'updated_at et le created_at
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['label'];
}
