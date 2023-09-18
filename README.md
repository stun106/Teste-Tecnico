<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

##Documentation

<h2>/profile</h2></br>
<b>store(Request $request)</b>
<b>Descrição:</b> Este método é responsável por criar um novo usuário e seus endereços associados no sistema.
<b>Método HTTP:</b> POST
<b>Endpoint:</b> /register
<b>Parâmetros:</b> $request (Request): O objeto de requisição que contém os dados do usuário a ser registrado, incluindo nome, email, CPF e endereços.
<br>
<h2>show</h2>(string $id)
<b>Descrição:</b> Este método retorna os endereços associados a um usuário específico.
<b>Método HTTP:</b> GET
<b>Endpoint</b> /register/{id}
<b>Parâmetros:</b> $id (string): O ID do usuário cujos endereços serão recuperados.
<b>Respostas:</b>
200 OK: Retorna os endereços associados ao usuário.
404 Not Found: Retorna um erro se o usuário não for encontrado.
<br>
destroy(string $id)
<h2>Descrição:</h2> Este método exclui todos os endereços associados do sistema.
<b>Método HTTP:</b> DELETE
<b>Endpoint:</b> /register/{id}
<b>Parâmetros:</b>
$id (string): O ID do endereço que será excluído.
