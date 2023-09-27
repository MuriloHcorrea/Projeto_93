<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

</head>



<body>

    <h1>Pets</h1>

    <div id="divBusca">

        <img src="search3.png" alt=""/>

        <input type="text" id="txtBusca" placeholder="Buscar..."/>

      </div>

      <div>

    <a class="btn btn-success"

      href="{{ route('pet.index',

     ['id'=>$pet->nome])}}">

     <i class="bi bi-eye"></i>



    </a>

      </div>

</body>

</html>





<style>

    #txtBusca{

  float:left;

  background-color:transparent;

  padding-left:5px;

  font-size:18px;

  border:none;

  height:32px;

  width:226px;

}



#btnBusca{

  float:left;

  cursor:pointer;

}



#divBusca img{

  float:left;

}



#divBusca{

  border:solid 10px rgba(47, 79, 79, 0.8);

  border-radius:10px;

  height:37px;

  width:400px;

}

</style>

