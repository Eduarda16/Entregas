                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   <?php
 $cepOrigem=$_POST['cepOrigem'];
$cep=$_POST['cep'];
class ClassCorreios{
   
    
    public $retorno;
    public function pesquisaPreco($cepOrigem,$cep){
        $url="http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=08082650&sDsSenha=564321&sCepOrigem=".$cepOrigem."&sCepDestino=".$cep."&nVlPeso=1&nCdFormato=1&nVlComprimento=20&nVlAltura=20&nVlLargura=20&sCdMaoPropria=n&nVlValorDeclarado=0&sCdAvisoRecebimento=n&nCdServico=04014&nVlDiametro=0&StrRetorno=xml&nIndicaCalculo=3";
       $this->retorno= simplexml_load_string(file_get_contents($url));
 echo "Custo:".$this->retorno->cServico->Valor;
     //  var_dump($this->retorno);
        }
}



?>