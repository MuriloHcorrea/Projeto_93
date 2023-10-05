<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Raca;

class Tipo extends Model
{
    use HasFactory;

    protected $table = 'tipos';
    protected $primaryKey = 'id_tipo';
    protected $dates = [

        'created_at',
        'updated_at',
        'deleted_at'

    ];

    protected $fillable = [

        'tipo'
    ];

    /**

     * | Relacionamentos

     */

     public function raca(){

        return $this->belongsTo(

            Raca::class,

            'id_tipo',

            'id_tipo'

            );

     }


}
