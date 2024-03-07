<?php
/*  
 * Função que converte os parâmetros  
 * de requisições HTTP  
 * POST e PUT em um Hábito  
 */
function f_parametro_to_habito()
{
    // Obtém o conteúdo da requisição     
    $dados = file_get_contents("php://input");
    // Converte para Json e retornar    
    $habito = json_decode($dados, true);
    return $habito;
}

/*  
 * Função que retorna os hábitos  
 */
function f_select_habito()
{
    echo "Esta função irá buscar hábitos!";
}

/*  
 * Insere um novo hábito na tabela habito  
 */
function f_insert_habito()
{
    echo "Esta função irá inserir um novo hábito!";
}

/*  
 * Atualiza um hábito existente  
 */
function f_update_habito()
{
    echo "Esta função irá alterar um hábito existente!";
}

/*  
 * Exclui um hábito existente  
 */
function f_delete_habito()
{
    echo "Esta função irá deletar um hábito existente!";
}

// A variável de servidor REQUEST_METHOD 
// contém o nome do método HTTP através 
// qual o arquivo solicitado foi 
// acessado 
$metodo = $_SERVER['REQUEST_METHOD'];

// Verifica qual ação a ser tomada 
// de acordo com o método HTTP 
// que foi utilizado para acessar 
// este recurso 
switch ($metodo) {
        // Se foi GET     
        // deve consultar  
    case "GET":
        f_select_habito();
        break;
        // Se foi POST  
        // deve inserir  
    case "POST":
        f_insert_habito();
        break;
        // Se foi put  
        // deve alterar  
    case "PUT":
        f_update_habito();
        break;
        // Se foi DELETE
        // deve excluir
    case "DELETE":
        f_delete_habito();
        break;
}
