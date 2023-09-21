<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pet;
use App\Models\User;

class HistoricoPet extends Model
{
    use HasFactory;
    protected $table = 'historico_pet';

    protected $primaryKey = 'id_historico_pet';

    protected $dates = [

        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [


        'id_pet',
        'descricao',
       'data_devolucao'

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

     public function user(){

        return $this->belongsTo(
            User::class,
            'id_historico_pet',
            'id_historico_pet'
            );
     }

}
