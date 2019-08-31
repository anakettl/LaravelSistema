<h1>Sistema Séries</h1>
<h3>Um sistema de séries construído em Laravel.</h3>

<b>Funcionalidades implementadas</b><br>
Visualizar, adicionar e remover séries.

<b>Recursos Utilizados</b>
<ul>
  <li>Laravel</li>
  <li>HTML</li>
  <li>CSS</li>
  <li>Javascript</li>
  <li>Bootstrap</li>
  <li>Font Awesome</li>
</ul>

<hr>
<b>Como Instalar</b><br>
Instalação do framework Laravel: https://laravel.com/docs/5.7/installation <br>

Baixe o arquivo zipado ou clone este repositório. <br>
Adicione um arquivo .env, conforme o arquivo .env.example com as informações da conexão com banco de dados que deseja utilizar.

<section>
<b>Para conexões com sqlite</b><br>
Adicionar no arquivo .env <br>
DB_CONNECTION=sqlite

Na pasta database criar um arquivo nomeado como database.sqllite <br>

No terminal entre na pasta do projeto e digite php artisan migrate <br>

<b>Para conexões com MySQL</b><br>
Adicionar no arquivo .env e preencher com os dados da sua conexao<br>
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1 <br>
DB_PORT=3306 <br>
DB_DATABASE=laravel <br>
DB_USERNAME=root <br>
DB_PASSWORD= <br>

No terminal entre na pasta do projeto e digite php artisan migrate <br>
</section>

<hr>

<b>Como Testar</b><br>
No terminal digite php artisan serve <br>

No navegador acesse <br>
http://localhost:8000/series

