<?php

use \Psr\Http\Message\ServerRequestInterface as Request;

use \Psr\Http\Message\ResponseInterface as Response;

use Illuminate\Database\Capsule\Manager as Capsule;

 require 'vendor/autoload.php';

 //$app = new \Slim\App;
//para que erros sejam mostrados, podemos fazer assim:
$app = new \Slim\App([
	'settings' => ['displayErrorDetails' => true
	]

]);


//-------------------------------------------------------
/*AULA01 - Rotas com Slim */
/*
 $app->get('/postagens', function(){

 	//echo '{"nome": "jefferson"}';

 	echo"Listagem de postagens";

 } ); //definindo a rota que a API irá seguir na url
*/


 /*
//os colchetes deixa o parâmetro opcional de ser passado na url
$app->get('/usuarios[/{id}]', function($request, $response){

 	//echo '{"nome": "jefferson"}'; //podemos retornar um JSON

 	$id = $request->getAttribute('id');

 	//Verificar se ID é válido e existe no BD

 	echo"Listagem de usuarios ou ID: " . $id;

 } );
*/

/*
$app->get('/postagens[/{ano}[/{mes}]]', function($request, $response){

 	//echo '{"nome": "jefferson"}'; //podemos retornar um JSON

 	$ano = $request->getAttribute('ano');
 	$mes = $request->getAttribute('mes');

 	//Verificar se ID é válido e existe no BD

 	echo"Listagem de postagens Ano: " . $ano . " mes: " .  $mes;

 } );



// .* indica que será aceito qualquer valor após a barra passado como parâmetro
$app->get('/lista/{itens:.*}', function($request, $response){

 	//echo '{"nome": "jefferson"}'; //podemos retornar um JSON

 	$itens = $request->getAttribute('itens');
 	
 	//Verificar se ID é válido e existe no BD

 	echo  $itens;
 	//var_dump(explode("/", $itens)); // divide a string $itens e transforma em um array

 } );
*/


 /*

//nomeando rotas:

$app->get('/blog/postagens/{id}', function($request, $response){

		echo "Listar postagens para um ID ";
 } )->setName("blog");



$app->get('/meusite', function($request, $response){
		
		$retorno = $this->get("router")->pathFor("blog", ["id" => "10" ]);

		echo $retorno;

 } );

*/


 /*

//agrupando rotas: método group()
$app->group('/v1', function(){ //aqui poderíamos mudar as versões da nossa API apenas mudando /v1 para: /v2, /v3, /v4 ...


	$this->get('/usuarios', function(){

		echo "Listagem de usuarios";
	});

	$this->get('/postagens', function(){

		echo "Listagem de postagens";
	});

});


 $app->run(); //executa a rota definida acima em $app

 */




//-------------------------------------------------------
/*AULA02 - Tipos de requisições*/

/*
Tipos de requisição ou Verbos HTTP

get -> Recuperar recursos do servidor (Select)
post -> Criar dado no servidor (Insert)
put -> Atualizar dados no servidor (Update)
delete -> Deletar dados no servidor (Delete)

*/


/*
//Padrão PSR-7
$app->get('/postagens', function(Request $request, Response $response){

	//Escreve no corpo da resposta utilizando o padrão PSR-7:
	$response->getBody()->write("Listagem de postagens");

	return $response;
});

$app->post('/usuarios/adiciona', function(Request $request, Response $response){

	//Reupera post ($_POST)
	$post = $request->getParsedBody();
	$nome = $post['nome'];
	$email = $post['email'];

	return $response->getBody()->write($nome . " - " . $email );  //insere os dados de formulários no servidor
});

*/

/*

$app->put('/usuarios/atualiza', function(Request $request, Response $response){

	$post = $request->getParsedBody();
	$id   = $post['id'];
	$nome = $post['nome'];
	$email = $post['email'];

	//Atualizar no banco de dados com UPDATE...

	return $response->getBody()->write( "Sucesso ao atualizar: " . $id);
});

$app->delete('/usuarios/remove/{id}', function(Request $request, Response $response){

	$id = $request->getAttribute('id');

	//Deletar do banco de dados com DELETE

	return $response->getBody()->write( "Sucesso ao deletar: " . $id);
});
*/


//-------------------------------------------------------
//AULA03 - Serviços e dependências
//Container dependency injection

//classe apenas para exemplificar
//class Servico{}
//$servico = new Servico;

//como a funcção abaixo é anônima, não podemos usar o objeto $servico diretamente nela, então temos que fazer a declaração de use $servico:
/*$app->get('/servico', function(Request $request, Response $response) use ($servico) {

	var_dump($servico);

});

porém, é utilizado dessa maneira
*/




/*
//Para resolver isso utiliza-se o container Pimple
$container = $app->getContainer(); //recupera container do slim, utiliznado pimple
$container['servico'] = function(){
	return new Servico;
};


$app->get('/servico', function(Request $request, Response $response){

	$servico = $this->get('servico');
	var_dump($servico); //apenas para exibir

});

*/


//Controllers como serviço

/*Dessa forma o próprio Slim faz a instância de um objeto da Classe Home


$container = $app->getContainer(); //recupera container do slim, utiliznado pimple
$container['View'] = function(){
	return new MyApp\View;
};

//como podemos fazer os códigos acima mais organizados:
//$app->get('/usuario', 'Classe:metodo');
$app->get('/usuario', '\MyApp\controllers\Home:index');  //aqui, o Slim se encarrega de instanciar um objeto da Classe Home

*/



/*
//Melhorando os códigos acima:
//Podemos instanciar objeto da Clase Home para não deixar com que o Slim se encarregue disso

$container = $app->getContainer();

$container['Home'] = function(){
	return new MyApp\controllers\Home( new MyApp\View );  //passando no construtor da Home a instância da Classe View
};

$app->get('/usuario', 'Home:index');
*/





/*

//----------------------------------------------------
//AULA04 - Middleware, respostas e database//
//Tipos de respostas
//cabeçalho, texto, Json, XML


$app->get('/header', function(Request $request, Response $response){

	//esses comandos podem ser analisados em: console -> network(rede) -> headers
	 $response->write('Esse é um retorno header');
	 return $response->withHeader('allow', 'PUT') //aceitar metodo put como resposta no cabeçalho
	 		  ->withAddedHeader('Content-Length', 10); //tamanho  do texto a ser retornado ao browser
});




$app->get('/json', function(Request $request, Response $response){

	//return $response->write('{"nome": "jefferson Estevo"}');  //dessa forma é retornado em formato html, precisamos converter para Json

	//convertendo para Json_
	return $response->withJson([
		"nome" => "Jefferson Estevo",
		"endereco" => "Endereco tal..."

	]); 

});



$app->get('/xml', function(Request $request, Response $response){

	$xml = file_get_contents('arquivo'); //pega o arquivo "arquivo" salvo com a sintaxe xml 
	$response->write($xml);

	return $response->withHeader('Content-Type', 'application/xml');  //para modificar para o browser aceitar o formato xml. Pois reconhece $response apenas como texto html, podemos ver isso em console -> rede -> xml -> response headers

});

*/





/*

//Middleware:
//o middleware recebe uma função anônima também, porém com um parâmetro adicional, o $next que aponta para o próximo middleware.

//rotas middleware
$app->add( function($request, $response, $next){

	$response->write(' Início camada 1 +  ');
	//return $next($request, $response); //retorna o próximo middleware

	$response = $next($request, $response); //execução recursiva

	$response->write(' + Fim camada 1 ');

	return $response;

}); //método add(); permite adicionar um middleware


$app->add( function($request, $response, $next){

	$response->write(' Início camada 2 +  ');
	//return $next($request, $response); //retorna o próximo middleware

	$response = $next($request, $response); //execução recursiva

	$response->write(' + Fim camada 2 ');

	return $response;

}); //método add(); permite adicionar um middleware




//rotas normais
$app->get('/usuarios', function(Request $request, Response $response){

	$response->write(' Ação principal usuarios ');

});

$app->get('/postagens', function(Request $request, Response $response){

	$response->write(' Ação principal postagens ');

});

*/







//Bancos de dados:
//Ferramenta Illuminate

//nesse momento devemos fazer a instalação do illuminate no diretório em que estamos trabalhando:
//DIRETÓRIO: /var/www/html/DesenvolvimentoWebCompleto/18-slim_framework$ 
//COMANDO: composer require illuminate/database


//temos que definir o namespace:
//use Illuminate\Database\Capsule\Manager as Capsule;

/*
$container = $app->getContainer();

$container['db'] = function(){


	$capsule = new Capsule;

	$capsule->addConnection([

		'driver'    => 'mysql',
	    'host'      => 'localhost',
	    'database'  => 'slim',
	    'username'  => 'root',
	    'password'  => '',
	    'charset'   => 'utf8',
	    'collation' => 'utf8_unicode_ci',
	    'prefix'    => '',
	]);

	$capsule->setAsGlobal(); // Faz a instância se tornar global

	$capsule->bootEloquent(); // Faz a comunicação com o banco de dados

	return $capsule; 

};




$app->get('/usuarios', function(Request $request, Response $response){

	$db = $this->get('db'); //para recuperar o banco de dados

*/



//Criando banco de dados e tabelas
/*
	//configurações do abnco de dados
	$db->schema()->dropIfExists('usuarios');  //remove tabela caso ela exista no banco
	$db->schema()->create('usuarios', function($table){

		$table->increments('id'); //cria campo auto_increment
	    $table->string('nome'); //cria campo de texto
	    $table->string('email'); //cria campo de texto
	    $table->timestamps(); //cria dois campos para sabermos quando foi criado um item ou atualizado


	});

*/


//Inserindo registros nas tabelas
/*
	$db->table('usuarios')->insert([
		'nome' => 'Jefferson Estevo',
		'email' => 'jefferson@test.com'
	]);
*/



//Atualizando registros nas tabelas
/*
	$db->table('usuarios')
				->where('id', 1) //deve ser sempre antes do update
				->update([
					'nome' => 'Estevo Jefferson'
				]);
*/


//Deletando registros nas tabelas
/*
	$db->table('usuarios')
				->where('id', 1)
				->delete();
	});

*/



//Listar registros nas tabelas
/*
	$usuarios = $db->table('usuarios')->get();  //get(); recupera as listagens
	foreach ($usuarios as $usuario){

		echo $usuario->nome . '<br>';
	}


});
*/


$app->run();

?>