<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

use App\Models\Pet;

class Cor extends Model

{

    use HasFactory;

    protected $table = 'cor';

    protected $primaryKey = 'id_cor';

    protected $dates = [

        'created_at',

        'updated_at',

        'deleted_at'

    ];


    protected $fillable = [



        'cor'

    ];







    /**

     * | Relacionamentos

     */

     public function pet(){



        return $this->belongsTo(



            Pet::class,
            'id_cor',
            'id_cor'
            );



     }



}
