<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Adocao;
use App\Models\HistoricoCliente;


class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';

    protected $primaryKey = 'id_cliente';

    protected $dates = [

        'created_at',
        'updated_at',
        'deleted_at'
    ];


    protected $fillable = [
        'nome',
        'dt_nascimento',
        'cpf',
        'email',
        'endereco'
    ];


    /**

     * | Relacionamentos

     */

     public function historico_cliente(){

        return $this->belongsTo(
            historico_cliente::class,
            'id_cliente',
            'id_cliente'
            );



     }


     public function adocao(){

        return $this->belongsTo(
            Adocao::class,
            'id_cliente',
            'id_cliente'
            );



     }
}
