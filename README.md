<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h1>Api Documentation</h1>

<h2>/profile</h2>
<h3>store(Request $request)</h3>
<b>Descrição:</b> Este método é responsável por criar um novo usuário e seus endereços associados no sistema.</br>
<b>Método HTTP:</b> POST</br>
<b>Endpoint:</b> /register</br>
<b>Parâmetros:</b> $request (Request): O objeto de requisição que contém os dados do usuário a ser registrado, incluindo nome, email, CPF e endereços.
<br>
<h3>show(string $id)</h3>
<b>Descrição:</b> Este método retorna os endereços associados a um usuário específico.</br>
<b>Método HTTP:</b> GET</br>
<b>Endpoint</b> /register/{id}</br>
<b>Parâmetros:</b> $id (string): O ID do usuário cujos endereços serão recuperados.</br>
<b>Respostas:</b>
200 OK: Retorna os endereços associados ao usuário.
404 Not Found: Retorna um erro se o usuário não for encontrado.
<br>
<h3>destroy(string $id)</h3>
<b>Descrição:</b> Este método exclui todos os endereços associados do sistema.</br>
<b>Método HTTP:</b> DELETE</br>
<b>Endpoint:</b> /register/{id}
<b>Parâmetros:</b>
$id (string): O ID do endereço que será excluído.<br>
<h2>/user</h2>
<h3>index(Request $request)</h3><br>
<b>Descrição:</b> Este método retorna uma lista de todos os usuários no sistema ou filtra os usuários criados dentro de um intervalo de datas especificado.<br>
<b>Método HTTP:</b> GET<br>
<b>Endpoint:</b> /user<br>
<b>Parâmetros:</b>
<b>$request (Request):</b> O objeto de requisição que pode conter os parâmetros data_inicio e data_fim para filtrar os usuários por data de criação.<br>
<h3>show(string $id)</h3><br>
<b>Descrição:</b> Este método retorna detalhes de um usuário com base em seu CPF ou nome.<br>
<b>Método HTTP:</b> GET<br>
<b>Endpoint:</b> /user/{id}<br>
<b>Parâmetros:</b>
$id (string): O CPF ou nome do usuário para o qual deseja recuperar detalhes.<br>
<b>Respostas:</b>
200 OK: Retorna os detalhes do usuário.
404 Not Found: Retorna um erro se o usuário não for encontrado.
<br>
<h3>update(Request $request, string $id)</h3><br>
<b>Descrição:</b> Este método permite atualizar os dados de um usuário, incluindo nome, email e CPF.<br>
<b>Método HTTP:</b> PUT<br>
<b>Endpoint:</b> /user/{id}<br>
<b>Parâmetros:</b><br>
$request (Request): O objeto de requisição que contém os novos dados do usuário.
$id (string): O ID do usuário cujos dados estão sendo atualizados.<br>
<h3>destroy(string $id)</h3><br>
<b>Descrição:</b> Este método exclui o endereço de um usuário com base em seu ID.<br>
<b>Método HTTP:</b> DELETE<br>
<b>Endpoint:</b> /user/{id}<br>
<b>Parâmetros:</b>
$id (string): O ID do endereço que será excluído.<br>
<b>Respostas:</b>
200 OK: Retorna uma mensagem de sucesso após a exclusão do endereço.
