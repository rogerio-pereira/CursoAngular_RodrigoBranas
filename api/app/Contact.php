<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'telefone', 'data', 'cor', 'operator_id'
    ];

    protected $hidden = [
        'operator_id', 'created_at', 'updated_at'
    ];

    public function operadora()
    {
        return $this->belongsTo(Operator::class, 'operator_id', 'id');
    }
}
