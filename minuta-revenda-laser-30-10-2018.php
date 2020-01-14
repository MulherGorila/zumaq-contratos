<?php
/**
 * Template Name: Minuta para revenda Laser 30-10-2018
 * Version: 0.2
 * Description: Modelo básico de minuta para Revenda de máquina laser
 * Author: Tiago Cordeiro
 * Author URI: https://www.mulhergorila.com
 * Group: Contratos Zumaq
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: contrato, minuta, laser, revenda
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
		border-bottom: 1px solid #999;
	}
	@page {
	   margin: 10mm 15mm 10mm 20mm;
	}
/*
	tr:nth-child(even) {background-color: #f2f2f2}
	th, td {
    	padding: 5px;
    }
*/
</style>

<h1 style="font-size: 24px; padding: 0px 40px 15px 40px;">CONTRATO DE COMPRA E VENDA DE EQUIPAMENTO PARA REVENDA</h1>

<p>Pelo presente instrumento particular, de um lado,</p>

<p style="text-align: justify;"><strong>XK-TRON COMERCIO DE PECAS E ACESSORIOS ELETRONICOS LTDA</strong>, pessoa Jurídica Brasileira de Direito Privado, inscrita no CNPJ/MF sob o nº 18.966.170/0001-90, Inscrição Estadual sob o nº 626.528.285.111, com domicílio em Santo André, Estado de São Paulo, onde tem sede na Rua Viena nº 150, Bairro Vila Metalurgica, CEP 09220-700, neste ato denominada como <strong>"ZUMAQ"</strong>, doravante tratada simplesmente de <strong>"VENDEDORA"</strong></p>

<p>e, de outro,</p>

<p style="text-align: justify;"><strong>{Nome do Cliente:1}</strong>, pessoa
	[gravityforms action="conditional" merge_tag="{Física ou Jurídica:2}" condition="is" value="Física"]
		Física de Direito Privado, com sede na cidade de {Cidade:4}, Estado de {Estado:5}, {Endereço:3}, neste ato representada pelo(a) Sr(a). {Nome Representante Cliente:7}, inscrito no CPF sob o nº {CPF Cliente:37} e RG sob nº {Inscricao Estadual:6}, doravante denominada simplesmente <strong>"REVENDEDORA"</strong>,</p>
		
	[/gravityforms]
	[gravityforms action="conditional" merge_tag="{Física ou Jurídica:2}" condition="is" value="Jurídica"]
		Jurídica de Direito Privado, com sede na cidade de {Cidade:4}, Estado de {Estado:5}, {Endereço:3}, inscrita no CNPJ sob nº {CNPJ:19}, Inscrição Estadual {Inscricao Estadual:6}, neste ato representada conforme seu contrato social pelo(a) Sr(a). {Nome Representante Cliente:7}, inscrito no CPF sob o nº {CPF Cliente:37}, doravante denominada simplesmente <strong>"REVENDEDORA"</strong>,</p>
	[/gravityforms]
	
<p style="text-align: justify;"><span style="font-weight: 400;">têm entre si justo e contratado o presente Contrato de Compra e Venda de Equipamento com Reserva de Domínio doravante nominada "Contrato", que será regido conforme os termos e condições seguir declinados, que livremente estipulam e aceitam.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>1.</strong> <span style="font-weight: 400;"><strong>DO OBJETO</strong></span></p>

<p style="text-align: justify;"><strong>1.1.</strong> <span style="font-weight: 400;">O presente Contrato tem como objeto a venda da(s) máquina(s) industrial(is) identificada(s) na Cláusula 1.1.1 (abaixo) doravante denominada "Máquina", sendo esta venda condicionada ao efetivo pagamento integral do preço através da constituição de reserva de domínio na forma dos artigos 521 e seguintes do Código Civil.</span></p>

<p style="text-align: justify;"><strong>1.1.1.</strong> <span style="font-weight: 400;">A(s) máquina(s) será(ão) entregue(s) pela <strong>VENDEDORA</strong> à <strong>REVENDEDORORA</strong> com todos os acessórios que a ela integram,<strong > <em>inclusive os Itens de Segurança exigidos pelas leis Brasileiras e pelas Normas Internacionais</em></strong>, de pleno conhecimento da <strong>REVENDEDORORA</strong>, tudo de acordo com o descrito no manual técnico que a acompanha. Certo ainda que estarão inclusos no preço aqui acertado conforme a cláusula 2.1, devendo ser confirmado no ato da entrega ou instalação, dos seguintes itens:</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: left;"><span style="font-weight: 400;">
Máquina: <strong>{Maquina:38}</strong><br>
Eixo Z: <strong>{Eixo Z:40}</strong><br>
Número de Série: <strong>{Número de Série:41}</strong><br>
Software: <strong>{Software:42}</strong><br>
Potência: <strong>{Potência:43}</strong><br>
Refrigeração: <strong>{Refrigeração:44}</strong><br>
Exaustor: <strong>{Exaustor:45}</strong><br>
Bomba de Ar: <strong>{Bomba de Ar:46}</strong><br>
Distância Focal: <strong>{Distância Focal:47}</strong><br>
Opcionais: <strong>{Opcionais:48}</strong><br>
</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>2.</strong> <span style="font-weight: 400;"><strong>DO PREÇO E PAGAMENTO</strong></span></p>

<p style="text-align: justify;"><strong>2.1.</strong> <span style="font-weight: 400;">O preço total dos objetos deste Contrato é de {Valor Total:32} (<?php echo extenso($valorExtenso, false); ?> ), que será pago pela <strong>REVENDEDORORA</strong> à <strong>VENDEDORA</strong> da seguinte forma:</span></p>

<p style="text-align: justify;"><strong>2.1.1.</strong> <span style="font-weight: 400;">Forma de pagamento vinculada no Pedido: {Número Pedido:21}</span></p>

<p style="text-align: justify;"><strong>2.2.</strong> <span style="font-weight: 400;">Os pagamentos dos valores descritos no Pedido: {Número Pedido:21} serão realizados em forma de {Forma de pagamento:31} enviados por intermédio de instituição bancária indicada pela <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;"><strong>2.3.</strong> <span style="font-weight: 400;">Em caso de atraso no pagamento de qualquer uma das parcelas do preço, o valor em atraso será corrigido pela variação do IGP-M/FGV e, nos termos da legislação civil, será aplicada multa de 10% (dez por cento) sobre o valor em atraso, bem como juros moratórios de 1% (um por cento) ao mês, pro rata die, entre a data do vencimento e a data do efetivo pagamento, sem exclusão do disposto na Cláusula 3.3 abaixo. </span></p>

<p style="text-align: justify;"><strong>2.4.</strong> <span style="font-weight: 400;">A <strong>REVENDEDORORA</strong> desde já concorda e autoriza a emissão de títulos (Duplicatas Mercantis) representativos das parcelas acima, com valor e vencimentos nos termos aqui contratados, assim como reconhece que tais títulos poderão ser indicados para protesto (5) CINCO dias após vencimento em caso de não pagamentos.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>3.</strong> <span style="font-weight: 400;"><strong>OBRIGAÇÕES DAS PARTES</strong></span></p>

<p style="text-align: justify;"><strong>3.1.</strong> <span style="font-weight: 400;">Fica acordado entre as Partes, que a partir do efetivo recebimento da Máquina pela <strong>REVENDEDORORA</strong>, esta responderá por todos os danos causados direta ou indiretamente a si ou a terceiros em virtude do uso da Máquina, bem como por todos os riscos a que a mesma estiver sujeita,  assim como pelas consequências daí resultantes.</span></p>

<p style="text-align: justify;"><strong>3.2.</strong> <span style="font-weight: 400;">A Máquina objeto do presente Contrato será considerada entregue à <strong>REVENDEDORORA</strong> no ato da transferência de sua posse para o preposto da <strong>REVENDEDORORA</strong> na forma da Cláusula 1.2, após vistoria e assinatura do respectivo termo de recebimento, por esta ou por seu preposto.</span></p>

<p style="text-align: justify;"><strong>3.3.</strong> <span style="font-weight: 400;">Durante a vigência deste Contrato e até a integral quitação do preço da Máquina, a <strong>REVENDEDORORA</strong> deverá mantê-la em perfeito estado de funcionamento e conservação, providenciando às suas expensas todo e qualquer serviço de obra ou manutenção que vier a ser necessário para a correta instalação e operação em seu estabelecimento.</span></p>

<p style="text-align: justify;"><strong>3.3.1.</strong> <span style="font-weight: 400;">A <strong>REVENDEDORORA</strong> deverá abster-se de usar a Máquina para fins não previstos em suas especificações técnicas e a não efetuar qualquer alteração ou adaptação na Máquina, qualquer que seja a razão, sem a prévia e expressa autorização da <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;"><strong>3.4.</strong> <span style="font-weight: 400;">Durante a vigência deste Contrato e até a integral quitação do preço da Máquina, a <strong>REVENDEDORORA</strong> se obriga a permitir o acesso de representante da <strong>VENDEDORA</strong> em seu estabelecimento para fins de vistoria da Máquina, desde que solicitada com 24 (vinte e quatro) horas de antecedência.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>4.</strong> <span style="font-weight: 400;"><strong>DA GARANTIA TÉCNICA</strong></span></p>

<p style="text-align: justify;"><strong>4.1.</strong> <span style="font-weight: 400;">A <strong>VENDEDORA</strong> obriga-se a prestar à <strong>REVENDEDORORA</strong> garantia técnica à dita Máquina, pelo prazo de 12 (meses) e 3 (meses) para tubo de laser e fontes, contados da data de assinatura deste Contrato, ressalvados os casos de exclusão ou extensão da garantia.</span></p>

<p style="text-align: justify;"><strong>4.1.1,</strong> <span style="font-weight: 400;">O prazo de garantia acima estipulado é fixo, sendo que eventual utilização da garantia técnica ora acordada pela <strong>REVENDEDORORA</strong> não implicará em suspensão da contagem ou em nova contagem do prazo de garantia de 2 anos.</span></p>

<p style="text-align: justify;"><strong>4.2.</strong> <span style="font-weight: 400;">Durante o prazo da garantia técnica, a <strong>REVENDEDORORA</strong> se obriga a consertar qualquer vício ou defeito na Máquina ou, em não sendo possível o conserto, a substituir a Máquina defeituosa, sem qualquer ônus para a <strong>VENDEDORA</strong>, exceto despesas com locomoção, hospedagem e alimentação.</span></p>

<p style="text-align: justify;"><strong>4.3.</strong> <span style="font-weight: 400;">A presente garantia técnica limita-se a vícios e defeitos nas Máquinas, incluindo aqueles causados por deficiência de material e/ou de mão-de-obra utilizados em sua fabricação, e não inclui a substituição de peças e componentes sujeitos a desgaste natural decorrente do uso da Máquina como Tubo Laser, Fonte, Eixos, Motores, Lentes e Espelhos ou mal uso dos mesmos.</span></p>

<p style="text-align: justify;"><strong>4.4.</strong> <span style="font-weight: 400;">A garantia técnica não poderá ser aplicada em caso de: (I) defeitos ou problemas na Máquina causados por instalação ou uso incorreto feito pela <strong>REVENDEDORORA</strong>, em desacordo com as especificações técnicas da Máquina;(II) defeitos ou problemas decorrentes de alterações ou modificações feitas pela <strong>REVENDEDORORA</strong> ou por terceiros na Máquina sem autorização pela <strong>VENDEDORA</strong>; (III) outros casos de defeitos ou falhas causados pelo própria <strong>REVENDEDORORA</strong> ou terceiros; (IV) No caso de inadimplemento da <strong>REVENDEDORORA</strong> no pagamento de quaisquer das parcelas do preço, em prazo superior a 05 (cinco) dias.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>5.</strong> <span style="font-weight: 400;"><strong>PRAZO E RESCISÃO MOTIVADA</strong></span></p>

<p style="text-align: justify;"><strong>5.1.</strong> <span style="font-weight: 400;">Este Contrato obriga as partes a partir da data de sua assinatura e permanecerá em vigor até que todas as obrigações nele previstas tenham sido integralmente cumpridas pelas partes.</span></p>

<p style="text-align: justify;"><strong>5.2.</strong> <span style="font-weight: 400;">No caso de inadimplemento da <strong>REVENDEDORORA</strong> no pagamento de quaisquer das parcelas do preço, em prazo superior a 05 (cinco) dias, caberá à <strong>VENDEDORA</strong> optar, na forma da lei e a seu exclusivo critério, por:</span></p>

<p style="text-align: justify;"><strong>(i)</strong> <span style="font-weight: 400;">Manter vigente o Contrato e propor ação de execução contra a <strong>REVENDEDORORA</strong>, hipótese em que a dívida será atualizada pelo IGP-M/FGV e terá a incidência de juros e de multa conforme a Cláusula 2.3.</span></p>

<p style="text-align: justify;"><strong>(ii)</strong> <span style="font-weight: 400;">Efetuar a rescisão motivada deste Contrato, requerendo a imediata reintegração da posse da Máquina. Neste caso, a <strong>VENDEDORA</strong> devolverá à <strong>REVENDEDORORA</strong> os valores já pagos até a data da rescisão, descontando deste montante valor suficiente para cobrir:</span></p>

<p style="text-align: justify;"><strong>(ii).1.</strong> <span style="font-weight: 400;">a depreciação verificada entre a data de venda (valor da Nota Fiscal)  e o valor de mercado do equipamento na data da apreensão ou, a critério da <strong>VENDEDORA</strong> o valor correspondente à depreciação conforme estabelecido pela Instrução Normativa n. 162, de 31.12.1998, editada pela Receita Federal do Brasil (10% ao ano);</span></p>

<p style="text-align: justify;"><strong>(ii).2.</strong> <span style="font-weight: 400;">o valor que, por direito, é devido à <strong>VENDEDORA</strong> a título de indenização; perdas e danos ou lucro cessante, nos termos dos artigos 475 e 527, do Código Civil Brasileiro,   durante o período em que a <strong>REVENDEDORORA</strong> esteve em posse do equipamento;</span></p>

<p style="text-align: justify;"><strong>(ii).3.</strong> <span style="font-weight: 400;">honorários advocatícios, nos termos do que dispõe o artigo 395 do Código Civil Brasileiro, tais sejam os contratados pela <strong>VENDEDOR</strong>A, bem como aqueles decorrentes da sucumbência em um eventual processo.</span></p>

<p style="text-align: justify;"><strong>(ii).4.</strong> <span style="font-weight: 400;">Fica acordado que, caso os valores recebidos pela <strong>VENDEDORA</strong> não sejam suficientes para cobrir as quantias aqui acordadas, poderá buscar o recebimento pelas vias judiciais.</span></p>

<p style="text-align: justify;"><strong>5.3.</strong> <span style="font-weight: 400;"><strong><em>O presente contrato resolve-se com a distribuição do pedido de Recuperação Judicial ou falência da COMPRADORA.</em></strong></span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>6.</strong> <span style="font-weight: 400;"><strong>DA INSTALAÇÃO E ASSISTÊNCIA TÉCNICA DO EQUIPAMENTO</strong></span></p>

<p style="text-align: justify;"><strong>6.1.</strong> <span style="font-weight: 400;">Ocorrendo instalação e assistência técnica na garantia, implicará em custos com deslocamento de R$ 1,00/km para a <strong>REVENDEDORORA</strong>, considerando o endereço da <strong>VENDEDORA</strong> até o endereço da <strong>REVENDEDORORA</strong> somando a Quilometragem de ida e volta com um valor mínimo de R$ 70,00. Acima de 10 horas, os custos da equipe serão de responsabilidade da <strong>REVENDEDORORA</strong> e incluirão alimentação e aposentos condignos. (Sujeito à alteração, de acordo com a inflação de transportes e derivados).</span></p>

<p style="text-align: justify;"><strong>6.2.</strong> <span style="font-weight: 400;">A máquina sempre será instalada no endereço constante no contrato e, sendo este diferente da sede da <strong>REVENDEDORORA</strong> constará no campo de observação do contrato.</span></p>

<p style="text-align: justify;"><strong>6.3.</strong> <span style="font-weight: 400;">É de obrigação da <strong>REVENDEDORORA</strong> uma estrutura para adquirir a Maquina Laser. Ambiente climatizado de até 25°C, Álcool Etílico com o teor superior a 99% para limpeza de lente e espelhos, Água Destilada para refrigeração do Tubo Laser, Estabilizador de Corrente podendo variar entre 215V até 240, Aterramento, Computador com entrada USB, duas Linhas 220V separadas com disjuntores de 15 Amperes e alimentada direto da entrada de corrente fornecida pela companhia de Energia Elétrica. Quando a Corrente for abaixo de 220V será preciso um “Nobreak”.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>7.</strong> <span style="font-weight: 400;"><strong>CONDIÇÕES GERAIS</strong></span></p>

<p style="text-align: justify;"><strong>7.1.</strong> <span style="font-weight: 400;">O presente Contrato é firmado em caráter irrevogável e irretratável, obrigando as Partes, seus herdeiros e sucessores.</span></p>

<p style="text-align: justify;"><strong>7.2.</strong> <span style="font-weight: 400;">Nenhuma tolerância por qualquer das Partes com a violação de qualquer das disposições deste Contrato pela outra Parte significará renúncia e nem estabelecerá precedente para qualquer outra situação.</span></p>

<p style="text-align: justify;"><strong>7.3.</strong> <span style="font-weight: 400;">O presente Contrato só poderá ser alterado mediante acordo por escrito assinado por ambas as Partes.</span></p>

<p style="text-align: justify;"><strong>7.4.</strong> <span style="font-weight: 400;">As Partes não poderão ceder a terceiros, parcial ou totalmente, o presente Contrato, sem o consentimento prévio e expresso da outra Parte.</span></p>

<p style="text-align: justify;"><strong>7.5.</strong> <span style="font-weight: 400;">Este Contrato representa todo o entendimento das Partes com relação ao negócio nele tratado, e anula todo e qualquer Contrato, acordo, proposta, carta, termo ou documento emitido até esta data, relacionados com o mesmo objeto aqui contratado.</span></p>

<p style="text-align: justify;"><strong>7.6.</strong> <span style="font-weight: 400;">Qualquer notificação a ser dada com relação a esse Contrato deverá ser feita por escrito, enviada por carta registrada ou fax, endereçada à parte a ser notificada nos endereços acima indicados no preâmbulo deste Contrato.</span></p>

<p style="text-align: justify;"><strong>7.7.</strong> <span style="font-weight: 400;">Nenhuma das Partes poderá ser responsabilizada pelo não cumprimento de quaisquer cláusulas ou condições do presente Contrato  desde que resultantes de caso fortuito ou de força maior, tal como definido no artigo 393 e seu parágrafo único, do Código Civil.</span></p>

<p style="text-align: justify;"><strong>7.8.</strong> <span style="font-weight: 400;">A <strong>VENDEDORA</strong> declara que o horário de atendimento é das 9:00 até 17:00 de Segunda a Sexta-Feira exceto feriados e recesso coletivo do dia 21/12/2018 até 06/01/2019.</span></p>

<p style="text-align: justify;"><strong>7.9.</strong> <span style="font-weight: 400;"><strong><em>A COMPRADORA declara ter pleno conhecimento sobre sistema operacional, bem como do sistema de segurança do maquinário objeto do presente Contrato.</em></strong></span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>8.</strong> <span style="font-weight: 400;"><strong>DO FORO</strong></span></p>

<p style="text-align: justify;"><strong>8.1.</strong> <span style="font-weight: 400;">Elegem as partes o foro da comarca da cidade de Santo André, Estado de São Paulo,  como único competente para dirimir eventuais dúvidas ou questões oriundas do presente Contrato, com renúncia expressa a qualquer outro, ainda que mais privilegiado seja.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">E por estarem assim justos e contratados, as Partes firmam o presente instrumento em duas vias de igual teor e forma, e para um só efeito, juntamente com duas testemunhas, atribuindo ao mesmo, na forma do artigo 585, II, do Código de Processo Civil, a condição de título executivo extrajudicial.</span></p>


<p style="text-align: justify;">
	<?php
	
		$meses = array (1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");
		
		$diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");
		
		$hoje = getdate();
		
		$dia = $hoje["mday"];
		
		$mes = $hoje["mon"];
		
		$nomemes = $meses[$mes];
		
		$ano = $hoje["year"];
		
		$diadasemana = $hoje["wday"];
		
		$nomediadasemana = $diasdasemana[$diadasemana];
		
		echo "Santo André, " . "$dia de $nomemes de $ano";
	
	?>
</p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>VENDEDORA</strong></span></p>

<p style="text-align: justify;">&nbsp;</p>

<p><span style="font-weight: 400;">____________________________________________________________________________________________________<br>
XK-TRON COMERCIO DE PECAS E ACESSORIOS ELETRONICOS LTDA<br>
CNPJ/MF nº 18.966.170/0001-90 - Inscrição Estadual sob o nº 626.528.285.111<br>
Nome do Representante: Kun Zhao</span></p>
									
<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>REVENDEDORORA</strong></span></p>

<p style="text-align: justify;">&nbsp;</p>

<p><span style="font-weight: 400;">____________________________________________________________________________________________________<br>
{Cliente:1}<br>
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

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>TESTEMUNHAS</strong></span></p>

<p style="text-align: justify;">&nbsp;</p>

<table>
  <tr>
    <td>1. __________________________________________</td>
    <td>&nbsp;</td>
    <td>2. __________________________________________</td>
  </tr>
  <tr>
    <td>{Nome Vendedor:26}</td>
    <td>&nbsp;</td>
    <td>{Testemunha Cliente:28}</td>
  </tr>
  <tr>
    <td>{CPF Vendedor:27}</td>
    <td>&nbsp;</td>
    <td>{CPF Testemunha Cliente:29}</td>
  </tr>
</table>

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