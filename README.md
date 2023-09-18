<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h1>Documentation</h1>

<h2>/profile</h2>
<b>store(Request $request)</b></br>
<b>Descrição:</b> Este método é responsável por criar um novo usuário e seus endereços associados no sistema.</br>
<b>Método HTTP:</b> POST</br>
<b>Endpoint:</b> /register</br>
<b>Parâmetros:</b> $request (Request): O objeto de requisição que contém os dados do usuário a ser registrado, incluindo nome, email, CPF e endereços.
<br>
<h2>show(string $id)</h2></br>
<b>Descrição:</b> Este método retorna os endereços associados a um usuário específico.</br>
<b>Método HTTP:</b> GET</br>
<b>Endpoint</b> /register/{id}</br>
<b>Parâmetros:</b> $id (string): O ID do usuário cujos endereços serão recuperados.</br>
<b>Respostas:</b>
200 OK: Retorna os endereços associados ao usuário.
404 Not Found: Retorna um erro se o usuário não for encontrado.
<br>
<h2>destroy(string $id)</h2><br>
<b>Descrição:</b> Este método exclui todos os endereços associados do sistema.</br>
<b>Método HTTP:</b> DELETE</br>
<b>Endpoint:</b> /register/{id}
<b>Parâmetros:</b>
$id (string): O ID do endereço que será excluído.
