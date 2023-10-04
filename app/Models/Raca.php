<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tipo;
use App\Models\Pet;


class Raca extends Model
{
    use HasFactory;
    protected $table = 'raca';

    protected $primaryKey = 'id_raca';

    protected $dates = [

        'created_at',
        'updated_at',
        'deleted_at'
    ];




    protected $fillable = [


        'id_tipo',
        'raca',
        'cor'



    ];


    const GOLDEN =1;
    const PERSA =2;
    const CALOPSITA =3;


    /**

     * | Relacionamentos

     */

     public function pet(){

        return $this->belongsTo(
            Pet::class,
            'id_raca',
            'id_raca'
            );



     }


     public function tipo(){

        return $this->belongsTo(
            Tipo::class,
            'id_tipo',
            'id_tipo'
            );



     }
}
