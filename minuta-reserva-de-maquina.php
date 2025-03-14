<?php
/**
 * Template Name: AD Minuta para reserva de máquina
 * Version: 0.0.1
 * Description: Modelo básico de minuta para reserva de máquina
 * Author: Tiago Cordeiro
 * Author URI: https://mulhergorila.com
 * Group: Contratos Zumaq
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: contrato, minuta, cliente, reserva
 */
/* Prevent direct access to the template (always good to include this) */
if ( ! class_exists( 'GFForms' ) ) {
	return;
}
?>

<?php
	$valorExtenso = $form_data['field'][36];
?>

<!-- Any PDF CSS styles can be placed in the style tag below -->
<style>
	h1 {
		text-align: center;
		text-transform: uppercase;
	/* 		color: #a62828; */
    /* border-bottom: 1px solid #999; */
	}
	@page {
	   margin: 10mm 10mm 10mm 10mm;
	}
/*
	tr:nth-child(even) {background-color: #f2f2f2}
	th, td {
    	padding: 5px;
    }
*/
</style>

<h1 style="font-size: 18px; padding: 0px 40px 10px 40px;">CONTRATO PARA RESERVA DE MÁQUINA</h1>

<p>Pelo presente instrumento particular, de um lado,</p>

<p style="text-align: justify;"><strong>XK-TRON COMERCIO DE PECAS E ACESSORIOS ELETRONICOS EIRELI</strong>, pessoa Jurídica Brasileira de Direito Privado, inscrita no CNPJ/MF sob o nº 18.966.170/0001-90, Inscrição Estadual sob o nº 626.528.285.111, com domicílio em Santo André, Estado de São Paulo, onde tem sede na Rua Itaguaí nº 22, Bairro Jardim Stella, CEP 09185-620, neste ato denominada como <strong>"ZUMAQ"</strong>, doravante tratada simplesmente de <strong>"VENDEDORA"</strong> e, de outro,</p>

<p style="text-align: justify;"><strong>{Nome do Cliente:1}</strong>, pessoa
	[gravityforms action="conditional" merge_tag="{Física ou Jurídica:2}" condition="is" value="Física"]
		Física de Direito Privado, com sede na cidade de {Cidade:4}, Estado de {Estado:5}, {Endereço:3}, neste ato representada pelo(a) Sr(a). {Nome Representante Cliente:7}, inscrito no CPF sob o nº {CPF Cliente:37} e RG sob nº {Inscricao Estadual:6}, doravante denominada simplesmente <strong>"COMPRADORA"</strong>,</p>
		
	[/gravityforms]
	[gravityforms action="conditional" merge_tag="{Física ou Jurídica:2}" condition="is" value="Jurídica"]
		Jurídica de Direito Privado, com sede na cidade de {Cidade:4}, Estado de {Estado:5}, {Endereço:3}, inscrita no CNPJ sob nº {CNPJ:19}, Inscrição Estadual {Inscricao Estadual:6}, neste ato representada conforme seu contrato social pelo(a) Sr(a). {Nome Representante Cliente:7}, inscrito no CPF sob o nº {CPF Cliente:37}, doravante denominada simplesmente <strong>"COMPRADORA"</strong>,</p>
	[/gravityforms]
	
<p style="text-align: justify;"><span style="font-weight: 400;">têm entre si justo e contratado o presente Contrato de Reserva de Equipamento que será regido conforme os termos e condições seguir declinados, que livremente estipulam e aceitam.</span></p>

<p style="text-align: justify;"><strong>1.</strong> <span style="font-weight: 400;"><strong>OBJETO DO CONTRATO</strong></span></p>

<p style="text-align: left;"><span style="font-weight: 400;">
MODELO: {Modelo:55} - PEDIDO: {Número do Pedido:21}<br/>
VALOR TOTAL DO EQUIPAMENTO: {Valor Total do Equipamento:32}<br/>
VALOR RESERVA (5%) SOBRE O TOTAL: {Valor de Reserva (5% sobre o total):56}<br/>
DATA PAGAMENTO: {Data Pagamento:57}<br/>
</span></p>

<p style="text-align: justify;"><strong>2.</strong> <span style="font-weight: 400;"><strong>PRAZO DE ENTREGA</strong></span></p>

<p style="text-align: justify;"><strong>2.1.</strong> <span style="font-weight: 400;">A <strong>VENDEDORA</strong> compromete-se a entregar a máquina no prazo estimado de 120 dias, contados a partir da confirmação do pagamento inicial.</span></p>

<p style="text-align: justify;"><strong>2.2.</strong> <span style="font-weight: 400;">O prazo de entrega pode variar em razão de atrasos alfandegários, problemas logísticos ou outros fatores alheios ao controle da <strong>VENDEDORA</strong>, sendo a <strong>COMPRADORA</strong> devidamente informada sobre quaisquer eventualidades.</span></p>

<p style="text-align: justify;"><strong>2.3.</strong> <span style="font-weight: 400;">A <strong>VENDEDORA</strong> sinalizando A <strong>COMPRADORA</strong> que o equipamento já está disponível, a mesma tem o prazo de 30 dias para finalizar o pagamento total do equipamento. Caso não haja esse comprimento a <strong>VENDEDORA</strong> fica autorizada a reter o valor do sinal pago no percentual de <strong>5% (cinco por cento)</strong> do valor total da compra.</span></p>

<p style="text-align: justify;"><strong>3.</strong> <span style="font-weight: 400;"><strong>DESISTÊNCIA DO PEDIDO</strong></span></p>

<p style="text-align: justify;"><strong>3.1.</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> declara ter ciência de que a máquina objeto deste contrato será importada da China. Caso haja desistência do pedido, está só será aceita ser formalizada por escrito no prazo de até 30 (trinta) dias a contar da data da encomenda.</span></p>

<p style="text-align: justify;"><strong>3.2.</strong> <span style="font-weight: 400;">Em caso de desistência, a <strong>COMPRADORA</strong> se compromete a ressarcir a <strong>VENDEDORA</strong> das despesas incorridas até o momento, no percentual de <strong>5% (cinco por cento)</strong> do valor total da compra. A <strong>VENDEDORA</strong> fica autorizada a reter o valor do sinal pago.</span></p>

<p style="text-align: justify;">Santo André, {date_created:format:j \d\e F \d\e Y}</p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>VENDEDORA</strong></span></p>
<img src="<?php echo esc_url( __DIR__ ); ?>/images/alex_sign_580419cd9687fa9619.jpg" width="100" />
<p><span style="font-weight: 400;">XK-TRON COMERCIO DE PECAS E ACESSORIOS ELETRONICOS LTDA<br>
CNPJ/MF nº 18.966.170/0001-90 - Inscrição Estadual sob o nº 626.528.285.111<br>
Nome do Representante: Kun Zhao</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>COMPRADORA</strong></span></p>
<img style="width: 200px;" src="{Assinatura do Comprador:51}" />
<p><span style="font-weight: 400;">{Cliente:1}<br>
[gravityforms action="conditional" merge_tag="{Física ou Jurídica:2}" condition="is" value="Física"]
    CPF: {CNPJ:37} -
[/gravityforms]  

[gravityforms action="conditional" merge_tag="{Física ou Jurídica:2}" condition="is" value="Jurídica"]
    CNPJ: {CNPJ:19} -
[/gravityforms]  

[gravityforms action="conditional" merge_tag="{Física ou Jurídica:2}" condition="is" value="Física"]
    RG: {RG:6}
[/gravityforms]

[gravityforms action="conditional" merge_tag="{Física ou Jurídica:2}" condition="is" value="Jurídica"]
    Inscrição Estadual: {Inscricao Estadual:6}
[/gravityforms]  <br>
Nome do Representante: {Representante Cliente:7}</span></p>

<?php
function extenso($valor=0, $maiusculas=false) {
       // verifica se tem virgula decimal
       if (strpos($valor, ",") > 0) {
               // retira o ponto de milhar, se tiver
               $valor = str_replace(".", "", $valor);

               // troca a virgula decimal por ponto decimal
               $valor = str_replace(",", ".", $valor);
       }
       $singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
       $plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões",
               "quatrilhões");

       $c = array("", "cem", "duzentos", "trezentos", "quatrocentos",
               "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
       $d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta",
               "sessenta", "setenta", "oitenta", "noventa");
       $d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze",
               "dezesseis", "dezesete", "dezoito", "dezenove");
       $u = array("", "um", "dois", "três", "quatro", "cinco", "seis",
               "sete", "oito", "nove");

       $z = 0;

       $valor = number_format($valor, 2, ".", ".");
       $inteiro = explode(".", $valor);
       $cont = count($inteiro);
       for ($i = 0; $i < $cont; $i++)
               for ($ii = strlen($inteiro[$i]); $ii < 3; $ii++)
               $inteiro[$i] = "0" . $inteiro[$i];

       $fim = $cont - ($inteiro[$cont - 1] > 0 ? 1 : 2);
       $rt = '';
       for ($i = 0; $i < $cont; $i++) {
               $valor = $inteiro[$i];
               $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
               $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
               $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";

               $r = $rc . (($rc && ($rd || $ru)) ? " e " : "") . $rd . (($rd &&
                       $ru) ? " e " : "") . $ru;
               $t = $cont - 1 - $i;
               $r .= $r ? " " . ($valor > 1 ? $plural[$t] : $singular[$t]) : "";
               if ($valor == "000"

               )$z++; elseif ($z > 0)
               $z--;
               if (($t == 1) && ($z > 0) && ($inteiro[0] > 0))
               $r .= ( ($z > 1) ? " de " : "") . $plural[$t];
               if ($r)
               $rt = $rt . ((($i > 0) && ($i <= $fim) &&
                       ($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
       }

       if (!$maiusculas) {
               return($rt ? $rt : "zero");
       } elseif ($maiusculas == "2") {
               return (strtoupper($rt) ? strtoupper($rt) : "Zero");
       } else {
               return (ucwords($rt) ? ucwords($rt) : "Zero");
       }
       }

?>