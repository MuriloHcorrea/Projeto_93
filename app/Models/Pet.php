<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use App\Models\Adocao;
use App\Models\User;
use App\Models\HistoricoCliente;
use App\Models\Sexo;
use App\Models\Raca;
use App\Models\Porte;
use App\Models\Cor;



class Pet extends Model

{

    use HasFactory;



    protected $table = 'pet';

    protected $primaryKey = 'id_pet';

    protected $dates = [

        'created_at',

        'updated_at',

        'deleted_at',

    ];







    protected $fillable = [

        'id_raca',

        'id_porte',

        'id_cor',

        'id_sexo',

        'id_historico_pet',

        'id_user',

        'nome',

        'dt_nascimento',

        'deficiencia',

        'castrado',

        'peso',

        'vacina',

    ];


    protected $casts = [

        'dt_nascimento' => 'date',
    ];

    /**
     * --------------------------------------------------
     * | Relacionamentos
     * | https://laravel.com/docs/10.x/eloquent-relationships
     * --------------------------------------------------
     */

     /**
      * retorna

      */



    public function sexo()

    {

  return $this->belongsTo(

            sexo::class,

            'id_sexo',
            'id_sexo'
        );

    }

    public function porte()


    {

        return $this->belongsTo(

            porte::class,
            'id_porte',
            'id_porte'

        );

    }


    public function cor()

    {

        return $this->belongsTo(

            Cor::class,

            'id_cor',

            'id_cor'

        );

    }

    public function raca()

    {

        return $this->belongsTo(

            Raca::class,

            'id_raca',

            'id_raca'

        );

    }

    public function adocao()

    {

        return $this->belongsTo(

            Adocao::class,

            'id_pet',

            'id_pet'

        );

    }

    public function historico_pet()

    {

        return $this->belongsTo(

            HistoricoPet::class,

            'id_pet',

            'id_pet'

        );

    }
    public function user()

    {

        return $this->belongsTo(

            User::class,

            'id_user',

            'id_user'

        );

    }

}
