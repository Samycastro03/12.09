<?php
// Obtém o caminho real do diretório raiz do documento
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

// Inclui o arquivo necessário que contém a definição da classe Cadastro
require_once("$root/projetoWeb/model/cadastro.php");

// Classe responsável por lidar com envios de formulários e interações com o banco de dados
class ControllerCadastro
{
    private $cadastro;

    // Construtor
    public function __construct()
    {
        // Cria uma instância da classe Cadastro
        $this->cadastro = new Cadastro();
        
        // Chama o método incluir para processar os dados do formulário e inserir no banco de dados
        $this->incluir();
    }

    // Método privado para lidar com a inserção de dados do formulário no banco de dados
    private function incluir()
    {
        // Define os atributos do objeto Cadastro com dados do formulário
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setTelefone($_POST['telefone']);
        $this->cadastro->setOrigem($_POST['origem']);
        
        // Transforma e define a data no formato 'Y-m-d'
        $this->cadastro->setData_contato(date('Y-m-d', strtotime($_POST['dataContato'])));
        
        $this->cadastro->setObservacao($_POST['observacao']);
        
        // Insere os dados no banco de dados usando o objeto Cadastro
        $result = $this->cadastro->incluir();
        
        // Exibe uma mensagem de sucesso ou erro usando alertas JavaScript
        if ($result >= 1) {
            echo "<script>alert('Registro incluído com sucesso!');document.location='../index.php'</script>";
        } else {
            echo "<script>alert('Erro ao gravar registro!');</script>";
        }
    }
}

// Cria uma instância da classe ControllerCadastro para iniciar o processamento do formulário
new ControllerCadastro();
?>
