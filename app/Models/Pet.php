<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

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



      * retorna o tipo do lançamento



      * 21-08-2023



      * @return belongsTo



      */



    public function sexo()

    {

  return $this->belongsTo(

            sexo::class,

            'id_sexo',
            'id_sexo'
        );



    }







    /**



      * retorna o centro de custo do lançamento



      * 21-08-2023



      * @return belongsTo



      */



    public function porte()



    {



        return $this->belongsTo(



            porte::class,



            'id_porte',



            'id_porte'



        );



    }







    /**



      * retorna o usuario do lançamento



      * 21-08-2023



      * @return belongsTo



      */



    public function cor()



    {



        return $this->belongsTo(



            cor::class,



            'id_cor',



            'id_cor'



        );



    }











    /**



     * ---------------------------------------------------



     * | Mutators



     * | https://laravel.com/docs/10.x/eloquent-mutators



     * ---------------------------------------------------



     */



    protected function descricao(): Attribute



    {



        return Attribute::make(



            get: fn (string $value) => ucfirst($value),



            set: fn (string $value) => strtolower(trim($value)),



        );



    }







    protected function valor(): Attribute



    {



        return Attribute::make(



            get: fn (string $value) => number_format($value,2,',','.'),



        );



    }











    /**



     * ----------------------------------------------------



     * | Outros Métodos



     * -------------------------------



     */

}
