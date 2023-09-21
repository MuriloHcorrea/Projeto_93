<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use App\Models\Pet;

class Sexo extends Model

{

    use HasFactory;

    protected $table = 'sexo';
    protected $primaryKey = 'id_sexo';
    protected $dates = [

        'created_at',
        'updated_at',
        'deleted_at'

    ];

    protected $fillable = [

        'sexo'
    ];

    /**

     * | Relacionamentos

     */

     public function pet(){

        return $this->belongsTo(

            Pet::class,

            'id_sexo',

            'id_sexo'

            );

     }

}
