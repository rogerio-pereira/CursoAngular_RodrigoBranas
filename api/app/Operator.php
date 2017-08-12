<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nome', 'codigo', 'categoria', 'preco',
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
