<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use App\Models\Pet;

class Porte extends Model

{

    use HasFactory;

    protected $table = 'porte';

    protected $primaryKey = 'id_porte';

    protected $dates = [

        'created_at',

        'updated_at',

        'deleted_at'

    ];

    protected $fillable = [

        'porte'
    ];


    const PEQUENO = 1;
    const MEDIO = 2;
    const GRANDE = 3;

    /**

     * | Relacionamentos

     */

     public function pet(){



        return $this->belongsTo(



            Pet::class,

            'id_porte',

            'id_porte'

            );

     }

}
