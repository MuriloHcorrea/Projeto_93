<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pet;
use App\Models\Cliente;

class Adocao extends Model
{
    use HasFactory;

    protected $table = 'adocao';

    protected $primaryKey = 'id_adocao';

    protected $dates = [

        'created_at',
        'updated_at',
        'deleted_at'
    ];


    protected $fillable = [


        'id_cliente',
        'id_usuario',
        'id_pet',
        'status_doacao'

    ];


    /**

     * | Relacionamentos

     */

     public function pet(){

        return $this->belongsTo(
            Pet::class,
            'id_pet',
            'id_pet'
            );



     }


     public function cliente(){

        return $this->belongsTo(
            Cliente::class,
            'id_cliente',
            'id_cliente'
            );



     }

}



