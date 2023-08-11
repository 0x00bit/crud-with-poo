<?php
    class Server{
        public $server = "";
        public $user = "";
        public $passw = "";
        public $database = "";
        
        public function checker_Attr(){
            if(!empty($_POST['ip']) &&
            !empty($_POST['username']) &&
            !empty($_POST['password'])
            && !empty($_POST['database'])){
            $this->server = $_POST['ip'];
            $this->user = $_POST['username'];
            $this->passw = $_POST['password'];
            $this->database = $_POST['database'];
            } 
        }
    public function clear_Opts(){
        if($_POST['clear'] == "clear"){
            $this->server = "";
            $this->user = "";
            $this->passw = "";
            $this->database = "";
        }
    }
}
    $server = new Server;
    $server->checker_Attr();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel de configuração</title>
        <style>
            h1{
                font-family: monospace;
                text-align: center;
            }
            pre{
                color: green;
            }
            p{
                font-size: 18px;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <h1>Configurações do servidor</h1>
        <div id="form">
        <form action="server_conf.php" name="panel" method="POST">
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ip do servidor</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ip">
            <div id="emailHelp" class="form-text">Defina o IP do servidor</div>
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Usuário</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="username">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Banco de dados</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="database">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        </div>
        </br>
        </br>
        <h3>Variáveis definidas</h3>
        </br>
        <div class="container">
            <p>Servidor definido:</p><pre><?php echo "$server->server"?></pre>
            <p>Usuário definido:</p><pre><?php echo "$server->user"?></pre>
            <p>Banco de dados definido:</p><pre><?php echo "$server->database"?></pre>

            <form action="server_conf.php" name="clear" method="POST">
            <button type="submit" class="btn btn-primary" value="clear">Limpar</button>
        </form>
        </div>
        </div>
    </body>
</html>