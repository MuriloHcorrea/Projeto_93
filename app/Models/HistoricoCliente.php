<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cliente;
class HistoricoCliente extends Model
{
    use HasFactory;

    protected $table = 'historico_cliente';

    protected $primaryKey = 'id_historico_cliente';

    protected $dates = [


        'created_at',

        'updated_at',

        'deleted_at'


    ];


    protected $fillable = [


        'id_cliente',
        'data_adocao',
        'descricao'



    ];


    /**

     * | Relacionamentos

     */

     public function user(){

        return $this->belongsTo(
            User::class,
            'id_historico_cliente',
            'id_historico_cliente'

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
