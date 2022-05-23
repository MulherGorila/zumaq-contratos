<?php
/**
 * Template Name: Minuta para venda de Peças 25-01-2019
 * Version: 0.1
 * Description: Modelo básico de minuta para venda de peças
 * Author: Tiago Cordeiro
 * Author URI: https://www.mulhergorila.com
 * Group: Contratos Zumaq
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: contrato, minuta, peças
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

<h1 style="font-size: 24px; padding: 0px 40px 15px 40px;">CONTRATO DE COMPRA E VENDA DE PEÇAS COM RESERVA DE DOMÍNIO</h1>

<p>Pelo presente instrumento particular, de um lado,</p>

<p style="text-align: justify;"><strong>XK-TRON COMERCIO DE PECAS E ACESSORIOS ELETRONICOS LTDA</strong>, pessoa Jurídica Brasileira de Direito Privado, inscrita no CNPJ/MF sob o nº 18.966.170/0001-90, Inscrição Estadual sob o nº 626.528.285.111, com domicílio em Santo André, Estado de São Paulo, onde tem sede na Rua Viena nº 150, Bairro Vila Metalurgica, CEP 09220-700, neste ato denominada como <strong>"ZUMAQ"</strong>, doravante tratada simplesmente de <strong>"VENDEDORA"</strong></p>

<p>e, de outro,</p>

<p style="text-align: justify;"><strong>{Nome do Cliente:1}</strong>, pessoa
	[gravityforms action="conditional" merge_tag="{Física ou Jurídica:2}" condition="is" value="Física"]
		Física de Direito Privado, com sede na cidade de {Cidade:4}, Estado de {Estado:5}, {Endereço:3}, neste ato representada pelo(a) Sr(a). {Nome Representante Cliente:7}, inscrito no CPF sob o nº {CPF Cliente:37} e RG sob nº {Inscricao Estadual:6}, doravante denominada simplesmente <strong>"COMPRADORA"</strong>,</p>
		
	[/gravityforms]
	[gravityforms action="conditional" merge_tag="{Física ou Jurídica:2}" condition="is" value="Jurídica"]
		Jurídica de Direito Privado, com sede na cidade de {Cidade:4}, Estado de {Estado:5}, {Endereço:3}, inscrita no CNPJ sob nº {CNPJ:19}, Inscrição Estadual {Inscricao Estadual:6}, neste ato representada conforme seu contrato social pelo(a) Sr(a). {Nome Representante Cliente:7}, inscrito no CPF sob o nº {CPF Cliente:37}, doravante denominada simplesmente <strong>"COMPRADORA"</strong>,</p>
	[/gravityforms]
	
<p style="text-align: justify;"><span style="font-weight: 400;">têm entre si justo e contratado o presente Contrato de Compra e Venda de Peças com Reserva de Domínio doravante nominada "Contrato", que será regido conforme os termos e condições seguir declinados, que livremente estipulam e aceitam.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>1.</strong> <span style="font-weight: 400;"><strong>DO OBJETO</strong></span></p>

<p style="text-align: justify;"><strong>1.1.</strong> <span style="font-weight: 400;">O presente Contrato tem como objeto a venda da(s) peças(s) industrial(is) identificada(s) na Cláusula 1.1.1 (abaixo) doravante denominada "Peças", sendo esta venda condicionada ao efetivo pagamento integral do preço através da constituição de reserva de domínio na forma dos artigos 521 e seguintes do Código Civil.</span></p>

<p style="text-align: justify;"><strong>1.1.1.</strong> <span style="font-weight: 400;">A(s) peça(s) será(ão) entregue(s) pela <strong>VENDEDORA</strong> à <strong>COMPRADORA</strong> com todos os acessórios que a ela integram,<strong > <em>inclusive os Itens de Segurança exigidos pelas leis Brasileiras e pelas Normas Internacionais</em></strong>, de pleno conhecimento da <strong>COMPRADORA</strong>, tudo de acordo com o descrito no manual técnico que a acompanha. Certo ainda que estarão inclusos no preço aqui acertado conforme a cláusula 2.1, devendo ser confirmado no ato da entrega ou instalação, dos itens do pedido: <strong>{Pedido:21}</strong></span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>2.</strong> <span style="font-weight: 400;"><strong>DO PREÇO E PAGAMENTO</strong></span></p>

<p style="text-align: justify;"><strong>2.1.</strong> <span style="font-weight: 400;">O preço total dos objetos deste Contrato é de {Valor Total:32} (<?php echo extenso($valorExtenso, false); ?> ), que será pago pela <strong>COMPRADORA</strong> à <strong>VENDEDORA</strong> da seguinte forma:</span></p>

<p style="text-align: justify;"><strong>2.1.1.</strong> <span style="font-weight: 400;">Forma de pagamento vinculada no Pedido: {Número Pedido:21}</span></p>

<p style="text-align: justify;"><strong>2.2.</strong> <span style="font-weight: 400;">Os pagamentos dos valores descritos no Pedido: {Número Pedido:21} serão realizados em forma de {Forma de pagamento:31} enviados por intermédio de instituição bancária indicada pela <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;"><strong>2.3.</strong> <span style="font-weight: 400;">Em caso de atraso no pagamento de qualquer uma das parcelas do preço, o valor em atraso será corrigido pela variação do IGP-M/FGV e, nos termos da legislação civil, será aplicada multa de 10% (dez por cento) sobre o valor em atraso, bem como juros moratórios de 1% (um por cento) ao mês, pro rata die, entre a data do vencimento e a data do efetivo pagamento, sem exclusão do disposto na Cláusula 3.3 abaixo. </span></p>

<p style="text-align: justify;"><strong>2.4.</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> desde já concorda e autoriza a emissão de títulos (Duplicatas Mercantis) representativos das parcelas acima, com valor e vencimentos nos termos aqui contratados, assim como reconhece que tais títulos poderão ser indicados para protesto (5) CINCO dias após vencimento em caso de não pagamentos.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>3.</strong> <span style="font-weight: 400;"><strong>DA RESERVA DE DOMÍNIO</strong></span></p>

<p style="text-align: justify;"><strong>3.1.</strong> <span style="font-weight: 400;">A venda da(s) peça(s) identificada(s) na Cláusula 1.1.1 deste Contrato é feita com reserva de domínio em favor da <strong>VENDEDORA</strong>, na forma do artigo 521 e seguintes do Código Civil, pelo que fica reservado à <strong>VENDEDORA</strong> o direito de propriedade da(s) peça(s), até a total quitação, pela <strong>COMPRADORA</strong>, das parcelas do preço ajustadas pelas partes na Cláusula 2.1 acima.</span></p>

<p style="text-align: justify;"><strong>3.1.1.</strong> <span style="font-weight: 400;">A <strong>VENDEDORA</strong> será responsável pelo registro deste Contrato no Cartório de Registro de Títulos e Documentos com jurisdição sobre o local de sua sede, para os fins previstos no artigo 522 do Código Civil. Os custos do registro serão suportados exclusivamente pela <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;"><strong>3.1.2.</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> se obriga a providenciar identificação na(s) peça(s), por meio de placa ou adesivo identificativo, fazendo menção que a Máquina é propriedade da <strong>XK-TRON COMERCIO DE PECAS E ACESSORIOS ELETRONICOS LTDA</strong>. Tal identificação deverá ser mantida até a integral quitação do preço da Máquina e subseqüente cancelamento da reserva de domínio.</span></p>

<p style="text-align: justify;"><strong>3.2.</strong> <span style="font-weight: 400;">Integralizado o total pagamento do preço ajustado na Cláusula 2.1 do presente Contrato, extinguir-se-á automaticamente o ônus havido sobre a(s) peça(s) em favor da <strong>VENDEDORA</strong>, previsto na Cláusula 3.1 acima, independentemente da prática de qualquer ato por desta e/ou da <strong>COMPRADORA</strong>.</span></p>

<p style="text-align: justify;"><strong>3.2.1.</strong> <span style="font-weight: 400;">Obriga-se, se for o caso, a <strong>VENDEDORA</strong>, a adotar e a diligenciar todas as providências necessárias à desconstituição da reserva de domínio, efetivando-se a transferência definitiva da propriedade à <strong>COMPRADORA</strong> ou a quem ela designar, emitindo para tanto todos os documentos que se fizerem necessários.</span></p>

<p style="text-align: justify;"><strong>3.3.</strong> <span style="font-weight: 400;">Com base na reserva de domínio ora pactuada, em caso de inadimplemento da <strong>COMPRADORA</strong> no pagamento de qualquer das parcelas do preço da(s) peça(s), a <strong>VENDEDORA</strong> poderá aplicar o disposto na Cláusula 6.2.</span></p>

<p style="text-align: justify;"><strong>3.4.</strong> <span style="font-weight: 400;">Em caso de importação, a desistência da <strong>COMPRADORA</strong> acarretará em 50% do valor retido para a <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>4.</strong> <span style="font-weight: 400;"><strong>OBRIGAÇÕES DAS PARTES</strong></span></p>

<p style="text-align: justify;"><strong>4.1.</strong> <span style="font-weight: 400;">Fica acordado entre as Partes, que a partir do efetivo recebimento das peças pela <strong>COMPRADORA</strong>, esta responderá por todos os danos causados direta ou indiretamente a si ou a terceiros em virtude do uso das peças, bem como por todos os riscos a que a mesma estiver sujeita, assim como pelas consequências daí resultantes.</span></p>

<p style="text-align: justify;"><strong>4.2.</strong> <span style="font-weight: 400;">A Peça objeto do presente Contrato será considerada entregue à <strong>COMPRADORA</strong>no ato da transferência de sua posse para o preposto da <strong>COMPRADORA</strong> na forma da Cláusula 1.2, após vistoria e assinatura do respectivo termo de recebimento, por esta ou por seu preposto.</span></p>

<p style="text-align: justify;"><strong>4.3.</strong> <span style="font-weight: 400;">Durante a vigência deste Contrato e até a integral quitação do preço da Peça, a <strong>COMPRADORA</strong> deverá mantê-la em perfeito estado de funcionamento e conservação, providenciando às suas expensas todo e qualquer serviço de obra ou manutenção que vier a ser necessário para a correta instalação e operação em seu estabelecimento.</span></p>

<p style="text-align: justify;"><strong>4.3.1.</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> deverá abster-se de usar as peças para fins não previstos em suas especificações técnicas e a não efetuar qualquer alteração ou adaptação nas peças, qualquer que seja a razão, sem a prévia e expressa autorização da <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;"><strong>4.4.</strong> <span style="font-weight: 400;">O Prazo de Entrega de uma Importação é 60 dias, podendo ter atrasos fiscais previstos em 20% para mais ou para menos.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>5.</strong> <span style="font-weight: 400;"><strong>DA GARANTIA TÉCNICA</strong></span></p>

<p style="text-align: justify;"><strong>5.1.</strong> <span style="font-weight: 400;">A <strong>VENDEDORA</strong> obriga-se a prestar à <strong>COMPRADORA</strong> garantia técnica à dita peças, pelo prazo de 3 (meses), contados da data de entrega, ressalvados os casos de exclusão ou extensão da garantia. Havendo assistência técnica os encargos de locomoção efetuado pela <strong>COMPRADORA</strong> terá uma validade de 1 (mês).</span></p>

<p style="text-align: justify;"><strong>5.1.1.</strong> <span style="font-weight: 400;">O prazo de garantia acima estipulado é fixo, sendo que eventual utilização da garantia técnica ora acordada pela <strong>COMPRADORA</strong> não implicará em suspensão da contagem ou em nova contagem do prazo de garantia de 1 (ano).</span></p>

<p style="text-align: justify;"><strong>5.2.</strong> <span style="font-weight: 400;">A presente garantia técnica limita-se a vícios e defeitos nas peças, incluindo aqueles causados por deficiência de material e/ou de mão-de-obra utilizados em sua fabricação, e não inclui a substituição de peças e componentes sujeitos a desgaste natural decorrente do uso das peças como Tubo Laser, Fonte, Eixos, polias e Motores ou mal uso dos mesmos.</span></p>

<p style="text-align: justify;"><strong>5.3.</strong> <span style="font-weight: 400;">A garantia técnica não poderá ser aplicada em caso de: (I) defeitos ou problemas nas peças causados por instalação ou uso incorreto feito pela <strong>COMPRADORA</strong>, em desacordo com as especificações técnicas da peça;(II) defeitos ou problemas decorrentes de alterações ou modificações feitas pela <strong>COMPRADORA</strong> ou por terceiros nas peças sem autorização pela <strong>VENDEDORA</strong>; (III) outros casos de defeitos ou falhas causados pelo própria <strong>COMPRADORA</strong> ou terceiros; (IV) No caso de inadimplemento da <strong>COMPRADORA</strong> no pagamento de quaisquer das parcelas do preço, em prazo superior a 05 (cinco) dias..</span></p>

<p style="text-align: justify;"><strong>5.3.1.</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> deverá abster-se de usar a peças para fins não previstos em suas especificações técnicas e a não efetuar qualquer alteração ou adaptação nas peças, qualquer que seja a razão, sem a prévia e expressa autorização da <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>6.</strong> <span style="font-weight: 400;"><strong>DA GARANTIA TÉCNICA</strong></span></p>

<p style="text-align: justify;"><strong>6.1.</strong> <span style="font-weight: 400;">A <strong>VENDEDORA</strong> obriga-se a prestar à <strong>COMPRADORA</strong> garantia técnica à(s) dita(s) peça(s), pelo prazo de 3 (meses), contados da data de assinatura deste Contrato, ressalvados os casos de exclusão ou extensão da garantia.  Havendo assistência técnica os encargos de locomoção efetuado pela <strong>COMPRADORA</strong>.</span></p>

<p style="text-align: justify;"><strong>6.2.</strong> <span style="font-weight: 400;">No caso de inadimplemento da <strong>COMPRADORA</strong> no pagamento de quaisquer das parcelas do preço, em prazo superior a 05 (cinco) dias, caberá à <strong>VENDEDORA</strong> optar, na forma da lei e a seu exclusivo critério, por:</span></p>

<p style="text-align: justify;"><strong>(i)</strong> <span style="font-weight: 400;">Manter vigente o Contrato e propor ação de execução contra a <strong>COMPRADORA</strong>, hipótese em que a dívida será atualizada pelo IGP-M/FGV e terá a incidência de juros e de multa conforme a Cláusula 2.3.</span></p>

<p style="text-align: justify;"><strong>(ii)</strong> <span style="font-weight: 400;">Efetuar a rescisão motivada deste Contrato, requerendo a imediata reintegração da posse da Máquina. Neste caso, a <strong>VENDEDORA</strong> devolverá à <strong>COMPRADORA</strong> os valores já pagos até a data da rescisão, descontando deste montante valor suficiente para cobrir:</span></p>

<p style="text-align: justify;"><strong>(ii).1.</strong> <span style="font-weight: 400;">a depreciação verificada entre a data de venda (valor da Nota Fiscal)  e o valor de mercado do equipamento na data da apreensão ou, a critério da <strong>VENDEDORA</strong> o valor correspondente à depreciação conforme estabelecido pela Instrução Normativa n. 162, de 31.12.1998, editada pela Receita Federal do Brasil (10% ao ano);</span></p>

<p style="text-align: justify;"><strong>(ii).2.</strong> <span style="font-weight: 400;">o valor que, por direito, é devido à <strong>VENDEDORA</strong> a título de indenização; perdas e danos ou lucro cessante, nos termos dos artigos 475 e 527, do Código Civil Brasileiro,   durante o período em que a <strong>COMPRADORA</strong> esteve em posse dos peça(s);</span></p>

<p style="text-align: justify;"><strong>(ii).3.</strong> <span style="font-weight: 400;">honorários advocatícios, nos termos do que dispõe o artigo 395 do Código Civil Brasileiro, tais sejam os contratados pela <strong>VENDEDOR</strong>A, bem como aqueles decorrentes da sucumbência em um eventual processo.</span></p>

<p style="text-align: justify;"><strong>(ii).4.</strong> <span style="font-weight: 400;">Fica acordado que, caso os valores recebidos pela <strong>VENDEDORA</strong> não sejam suficientes para cobrir as quantias aqui acordadas, poderá buscar o recebimento pelas vias judiciais.</span></p>

<p style="text-align: justify;"><strong>6.3.</strong> <span style="font-weight: 400;">A presente garantia técnica limita-se a vícios e defeitos nas peças, incluindo aqueles causados por deficiência de material e/ou de mão-de-obra utilizados em sua fabricação, e não inclui a substituição de peças e componentes sujeitos a desgaste natural decorrente do uso das peças como Tubo Laser, Fonte, Eixos e Motores ou mal uso dos mesmos.</span></p>

<p style="text-align: justify;"><strong>6.4.</strong> <span style="font-weight: 400;">A garantia técnica não poderá ser aplicada em caso de: (I) defeitos ou problemas na peças causados por instalação ou uso incorreto feito pela <strong>COMPRADORA</strong>, em desacordo com as especificações técnicas das peças;(II) defeitos ou problemas decorrentes de alterações ou modificações feitas pela <strong>COMPRADORA</strong> ou por terceiros nas peças sem autorização pela <strong>VENDEDORA</strong>; (III) outros casos de defeitos ou falhas causados pelo própria <strong>COMPRADORA</strong> ou terceiros; (IV) No caso de inadimplemento da <strong>COMPRADORA</strong> no pagamento de quaisquer das parcelas do preço, em prazo superior a 05 (cinco) dias.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>7.</strong> <span style="font-weight: 400;"><strong>CONDIÇÕES GERAIS</strong></span></p>

<p style="text-align: justify;"><strong>7.1.</strong> <span style="font-weight: 400;">O presente Contrato é firmado em caráter irrevogável e irretratável, obrigando as Partes, seus herdeiros e sucessores.</span></p>

<p style="text-align: justify;"><strong>7.2.</strong> <span style="font-weight: 400;">Nenhuma tolerância por qualquer das Partes com a violação de qualquer das disposições deste Contrato pela outra Parte significará renúncia e nem estabelecerá precedente para qualquer outra situação.</span></p>

<p style="text-align: justify;"><strong>7.3.</strong> <span style="font-weight: 400;">O presente Contrato só poderá ser alterado mediante acordo por escrito assinado por ambas as Partes.</span></p>

<p style="text-align: justify;"><strong>7.4.</strong> <span style="font-weight: 400;">As Partes não poderão ceder a terceiros, parcial ou totalmente, o presente Contrato, sem o consentimento prévio e expresso da outra Parte.</span></p>

<p style="text-align: justify;"><strong>7.5.</strong> <span style="font-weight: 400;">Este Contrato representa todo o entendimento das Partes com relação ao negócio nele tratado, e anula todo e qualquer Contrato, acordo, proposta, carta, termo ou documento emitido até esta data, relacionados com o mesmo objeto aqui contratado.</span></p>

<p style="text-align: justify;"><strong>7.6.</strong> <span style="font-weight: 400;">Qualquer notificação a ser dada com relação a esse Contrato deverá ser feita por escrito, enviada por carta registrada ou fax, endereçada à parte a ser notificada nos endereços acima indicados no preâmbulo deste Contrato.</span></p>

<p style="text-align: justify;"><strong>7.7.</strong> <span style="font-weight: 400;">Nenhuma das Partes poderá ser responsabilizada pelo não cumprimento de quaisquer cláusulas ou condições do presente Contrato desde que resultantes de caso fortuito ou de força maior, tal como definido no artigo 393 e seu parágrafo único, do Código Civil.</span></p>

<p style="text-align: justify;"><strong>7.8.</strong> <span style="font-weight: 400;">A <strong>VENDEDORA</strong> declara que o horário de atendimento é das 9:00 até 17:00 de Segunda a Sexta-Feira exceto feriados e recesso coletivo do dia 20/12/2019 até 06/01/2020.</span></p>

<p style="text-align: justify;"><strong>7.9.</strong> <span style="font-weight: 400;"><strong>A COMPRADORA declara ter pleno conhecimento sobre sistema operacional, bem como do sistema de segurança do maquinário objeto do presente Contrato.</strong></span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>8.</strong> <span style="font-weight: 400;"><strong>DO FORO</strong></span></p>

<p style="text-align: justify;"><strong>8.1.</strong> <span style="font-weight: 400;">Elegem as partes o foro da comarca da cidade de Santo André, Estado de São Paulo, como único competente para dirimir eventuais dúvidas ou questões oriundas do presente Contrato, com renúncia expressa a qualquer outro, ainda que mais privilegiado seja.</span></p>

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

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>COMPRADORA</strong></span></p>

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