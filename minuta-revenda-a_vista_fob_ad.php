<?php
/**
 * Template Name: AD Minuta para revenda a vista FOB
 * Version: 0.8.4
 * Description: Modelo básico de minuta para revenda
 * Author: Tiago Cordeiro
 * Author URI: https://www.mulhergorila.com
 * Group: Contratos Zumaq
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: contrato, minuta, revenda
 */
/* Prevent direct access to the template (always good to include this) */
if (!class_exists('GFForms')) {
    return;
}
?>

<!-- Any PDF CSS styles can be placed in the style tag below -->
<style>
	h1 {
		text-align: center;
		text-transform: uppercase;
		/* color: #a62828; */
		border-bottom: 1px solid #999;
	}
	@page {
		margin: 10mm 15mm 10mm 20mm;
	}
/*
	tr:nth-child(even) {background-color: #f2f2f2}
	th, td { padding: 5px; }
*/
</style>

<h1 style="font-size: 24px; padding: 0px 40px 30px 40px;">COMPROMISSO DE COMPRA E VENDA DE MÁQUINAS E EQUIPAMENTOS A VISTA</h1>

<p>Pelo presente instrumento particular, de um lado,</p>

<p style="text-align: justify;"><strong>XK-TRON COMERCIO DE PECAS E ACESSORIOS ELETRONICOS EIRELI</strong>, pessoa Jurídica Brasileira de Direito Privado, inscrita no CNPJ/MF sob o nº 18.966.170/0001-90, Inscrição Estadual sob o nº 626.528.285.111, com domicílio em Santo André, Estado de São Paulo, onde tem sede na Rua Itaguaí nº 22, Bairro Jardim Stella, CEP 09185-620, neste ato denominada como <strong>"ZUMAQ"</strong>, doravante tratada simplesmente de <strong>"VENDEDORA"</strong></p>

<p>e, de outro,</p>

<p style="text-align: justify;"><strong>{Nome do Cliente:1}</strong>, pessoa
	[gravityforms action="conditional" merge_tag="{Física ou Jurídica:2}" condition="is" value="Física"]
		Física de Direito Privado, com sede na cidade de {Cidade:4}, Estado de {Estado:5}, {Endereço:3}, neste ato representada pelo(a) Sr(a). {Nome Representante Cliente:7}, inscrito no CPF sob o nº {CPF Cliente:37} e RG sob nº {Inscricao Estadual:6}, doravante denominada simplesmente <strong>"COMPRADORA"</strong>,</p>

	[/gravityforms]
	[gravityforms action="conditional" merge_tag="{Física ou Jurídica:2}" condition="is" value="Jurídica"]
		Jurídica de Direito Privado, com sede na cidade de {Cidade:4}, Estado de {Estado:5}, {Endereço:3}, inscrita no CNPJ sob nº {CNPJ:19}, Inscrição Estadual {Inscricao Estadual:6}, neste ato representada conforme seu contrato social pelo(a) Sr(a). {Nome Representante Cliente:7}, inscrito no CPF sob o nº {CPF Cliente:37}, doravante denominada simplesmente <strong>"COMPRADORA"</strong>,</p>
	[/gravityforms]

<p style="text-align: justify;"><span style="font-weight: 400;">têm entre si justo e contratado o presente Contrato de Compra e Venda de Equipamento com Reserva de Domínio doravante nominada "Contrato", que será regido conforme os termos e condições seguir declinados, que livremente estipulam e aceitam.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>PREÂMBULO</strong></span></p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>A VENDEDORA na qualidade de importadora de máquinas e equipamentos objeto do presente contrato, celebra a sua venda com preço diferenciado, inferior ao praticado para o consumidor final, tendo em vista que a COMPRADORA se compromete e desde já se responsabiliza que será a única responsável para prestar toda a assistência técnica da máquina e ou equipamento ao consumidor final que dela vier adquirir; assistência esta que faz parte integrante do presente contrato como ANEXO I, devidamente  assinado pelas partes</strong></span></p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>O presente contrato com a totalidade de suas cláusulas, terá validade para compras efetuadas pela COMPRADORA durante o corrente ano e a findar na data de 31 de dezembro de {date_created:format:Y}.</strong></span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>1.</strong> <span style="font-weight: 400;"><strong>DO OBJETO</strong></span></p>

<p style="text-align: justify;"><strong>1.1.</strong> <span style="font-weight: 400;">O presente Contrato tem como objeto a venda da(s) máquina(s) industrial(is) identificada(s) na Cláusula 1.1.1 (abaixo) doravante denominada "Máquina", sendo esta venda condicionada ao efetivo pagamento integral do preço.</span></p>

<p style="text-align: justify;"><strong>1.1.1.</strong> <span style="font-weight: 400;">A(s) máquina(s) e ou equipamento(s) será(ão) entregue(s) pela <strong>VENDEDORA</strong> à <strong>COMPRADORA</strong> que se qualifica como uma empresa/profissional, apta a resolver qualquer tipo de ajuste, com todos os acessórios que a ela integram,<strong > <em>inclusive os Itens de segurança exigidos pelas legislação Brasileira e pelas Normas Internacionais;</em></strong> também é de pleno/inteiro conhecimento da <strong>COMPRADORA</strong>, as orientações para manutenções e consertos constantes/descritas no manual técnico que acompanha a máquina e ou equipamento, que também faz parte integrante do presente contrato. Estando inclusos no preço aqui ajustado e descrito na cláusula 2.1, devendo, portanto, ser confirmado/conferido no ato da entrega ou instalação, cujos dados e descrição completa constarão da Nota Fiscal de compra a ser emitida pela <strong>VENDEDORA</strong></span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>2.</strong> <span style="font-weight: 400;"><strong>DO PREÇO E PAGAMENTO</strong></span></p>

<p style="text-align: justify;"><strong>2.1.</strong> <span style="font-weight: 400;">O preço total de cada máquina e ou equipamento constará das notas fiscais a serem emitidas pela <strong>VENDEDORA</strong> no período de sua aquisição constante do preâmbulo, sendo que a sua entrega e ou retirada pela <strong>COMPRADORA</strong>, somente se dará com a confirmação do pagamento à vista através de boleto bancário enviados por intermédio de instituição bancária indicada pela <strong>VENDEDORA</strong></span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">{Forma de pagamento:31}</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>3.</strong> <span style="font-weight: 400;"><strong>OBRIGAÇÕES DAS PARTES</strong></span></p>

<p style="text-align: justify;"><strong>3.1.</strong> <span style="font-weight: 400;">Fica acordado entre as partes, que uma vez confirmado o recebimento do preço pela <strong>VENDEDORA</strong>, será procedido a entrega da máquina/equipamento à <strong>COMPRADORA</strong> que a partir do efetivo recebimento, responderá única e exclusivamente por todos os danos causados direta ou indiretamente a si ou a terceiros em virtude do seu uso, bem como por todos os riscos a que a mesma estiver sujeita, assim como pelas consequências daí resultantes.</span></p>

<p style="text-align: justify;"><strong>3.2.</strong> <span style="font-weight: 400;">A máquina objeto do presente contrato será considerada entregue à <strong>COMPRADORA</strong> no ato da transferência de sua posse para qualquer de seus prepostos, após devidamente vistoriada, cuja vistoria se consumará com a assinatura do respectivo termo/protocolo de recebimento.</span></p>

<p style="text-align: justify;"><strong>3.3.</strong> <span style="font-weight: 400;">Durante a vigência deste contrato e até a sua final revenda, pela <strong>COMPRADORA</strong> deverá esta mantê-la em perfeito estado de funcionamento e conservação, providenciando às suas expensas todo e qualquer serviço de obra ou manutenção preventiva que vier a ser necessário para a correta instalação e operação.</span></p>

<p style="text-align: justify;"><strong>3.3.1.</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> deverá abster-se bem como de informar a terceiros de não utilizar a máquina e ou equipamento para fins não previstos em suas especificações técnicas, bem como  não efetuar qualquer alteração ou adaptação na máquina e ou equipamento sob hipótese alguma.</span></p>

<p style="text-align: justify;"><strong>3.4.</strong> <span style="font-weight: 400;">Durante a vigência deste contrato e até a sua final revenda de cada máquina e ou equipamento pela <strong>COMPRADORA</strong>, se obriga esta a permitir o acesso de representante da <strong>VENDEDORA</strong> em seu estabelecimento para vistoria da máquina, desde que solicitada com 24 (vinte e quatro) horas de antecedência.</span></p>

<p style="text-align: justify;"><strong>3.5.</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> declara que tem plena ciência de que a presente compra trata-se de uma máquina a ser importada da China pela <strong>VENDEDORA</strong>, sendo que havendo desistência do pedido só será aceito por escrito no prazo limite de 30 (trinta) dias a contar da data da encomenda, se comprometendo a <strong>COMPRADORA</strong> a ressarcir as despesas da <strong>VENDEDORA</strong> que equivalem a 5% do valor da compra, autorizando desde já a <strong>VENDEDORA</strong> a reter o valor do sinal pago e constante das cláusulas 1.1.1. e 2.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>COMPRADORA</strong></span></p>
<img style="width: 200px;" src="{Assinatura do Comprador:38}" />
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

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>4.</strong> <span style="font-weight: 400;"><strong>DA GARANTIA TÉCNICA</strong></span></p>

<p style="text-align: justify;"><strong>4.1.</strong> <span style="font-weight: 400;">A <strong>VENDEDORA</strong> obriga-se a prestar à <strong>COMPRADORA</strong> garantia técnica à dita Máquina, citado abaixo pelo <strong>ANEXO I</strong> contados da data de assinatura deste Contrato, ressalvados os casos de exclusão ou extensão da garantia.</span></p>

<p style="text-align: justify;"><strong>Parágrafo único:</strong> <span style="font-weight: 400;">No caso de necessidade da substituição de peças dentro do prazo da garantia prevista, a <strong>COMPRADORA</strong> se compromete a encaminhar a máquina e ou  equipamento às suas expensas, até o endereço da <strong>VENDEDORA</strong>, para que esta possa confirmar através de laudo técnico o defeito alegado, e assim autorizar a sua substituição e ou reparo necessário, comunicando por escrito à <strong>COMPRADORA</strong>.</span></p>

<p style="text-align: justify;"><strong>4.1.1.</strong> <span style="font-weight: 400;">O prazo de garantia acima estipulado é fixo, sendo que eventual utilização da garantia técnica ora acordada pela <strong>COMPRADORA</strong> não implicará em suspensão da contagem ou em nova contagem do prazo de garantia que é de 12 meses a contar da emissão da Nota Fiscal de venda correspondente.</span></p>

<p style="text-align: justify;"><strong>4.1.2.</strong> <span style="font-weight: 400;">Com relação  a garantia especificamente das maquinas e ou equipamentos =  Laser Co², Laser Fibra de Gravação, Laser Fibra de Corte e Router CNC, prevalecerá os prazos constantes no <strong>ANEXO I</strong> que faz parte integrante deste contrato.</span></p>

<p style="text-align: justify;"><strong>4.2.</strong> <span style="font-weight: 400;">Durante o prazo da garantia técnica, a <strong>VENDEDORA</strong> se obriga a consertar qualquer vício ou defeito das peças e/ou a substituição da própria máquina caso não seja possível o seu conserto, sem qualquer ônus para a <strong>COMPRADORA</strong>, exceto as despesas como: transporte da máquina, transporte de peças, locomoção, hospedagem e alimentação. A <strong>COMPRADORA</strong> concorda plenamente, que o direito final de interpretação e atestado técnico de garantia pertence a <strong>VENDEDORA</strong></span></p>

<p style="text-align: justify;"><strong>4.3.</strong> <span style="font-weight: 400;">A presente garantia técnica limita-se a vícios e defeitos nas Máquinas, incluindo aqueles causados por deficiência de material e/ou de mão-de-obra utilizados em sua fabricação, e não inclui a substituição de peças e componentes sujeitos a desgaste natural decorrente do uso da Máquina.</span></p>

<p style="text-align: justify;"><strong>4.4.</strong> <span style="font-weight: 400;">A garantia técnica não será abrangida e ou reclamada nos casos de:</span></p>

<p style="text-align: justify;"><strong>(I)</strong> <span style="font-weight: 400;">defeitos ou problemas na máquina causados por instalação ou uso incorreto feito pela <strong>COMPRADORA</strong>, em desacordo com as especificações técnicas da máquina;</span></p>

<p style="text-align: justify;"><strong>(II)</strong> <span style="font-weight: 400;">defeitos ou problemas decorrentes de alterações ou modificações na máquina feitas pela <strong>COMPRADORA</strong> ou por terceiros a quem vier a revendê-la;</span></p>

<p style="text-align: justify;"><strong>(III)</strong> <span style="font-weight: 400;">outros casos de defeitos ou falhas causados pelo manuseio indevido da máquina pela <strong>COMPRADORA</strong> ou por terceiros a quem vier a revendê-la;</span></p>

<p style="text-align: justify;"><strong>(IV)</strong> <span style="font-weight: 400;">No caso de inadimplemento da <strong>COMPRADORA</strong> de quaisquer cláusulas do presente contrato.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>5.</strong> <span style="font-weight: 400;"><strong>PRAZO E RESCISÃO MOTIVADA</strong></span></p>

<p style="text-align: justify;"><strong>5.1.</strong> <span style="font-weight: 400;">No caso de inadimplemento da <strong>COMPRADORA</strong> no pagamento de qualquer valor constante  do preço, em prazo superior a 05 (cinco) dias, caberá à <strong>VENDEDORA</strong> optar, na forma da lei e a seu exclusivo critério, por:</span></p>

<p style="text-align: justify;"><strong>(I)</strong> <span style="font-weight: 400;">Manter vigente o Contrato e propor ação de execução contra a <strong>COMPRADORA</strong>, hipótese em que a dívida será atualizada pelo IGP-M/FGV e terá a incidência de juros e de multa conforme a Cláusula 2.1.</span></p>

<p style="text-align: justify;"><strong>(II)</strong> <span style="font-weight: 400;">Efetuar a rescisão motivada deste Contrato, requerendo a imediata reintegração da posse da Máquina. Neste caso, a <strong>VENDEDORA</strong> devolverá à <strong>COMPRADORA</strong> os valores já pagos até a data da rescisão, descontando deste montante valor suficiente para cobrir:</span></p>

<p style="text-align: justify;"><strong>(a)</strong> <span style="font-weight: 400;">a depreciação verificada entre a data de venda (valor da Nota Fiscal) e o valor de mercado do equipamento na data da apreensão ou, a critério da <strong>VENDEDORA</strong> o valor correspondente à depreciação conforme estabelecido pela Instrução Normativa n. 1700 de 2017, editada pela Receita Federal do Brasil (10% ao ano);</span></p>

<p style="text-align: justify;"><strong>(b)</strong> <span style="font-weight: 400;">o valor que, por direito, é devido à <strong>VENDEDORA</strong> a título de indenização; perdas e danos ou lucro cessante, nos termos dos artigos 475 e 527, do Código Civil Brasileiro, durante o período em que a Compradora esteve em posse do equipamento;</span></p>

<p style="text-align: justify;"><strong>(c)</strong> <span style="font-weight: 400;">honorários advocatícios, nos termos do que dispõe o artigo 395 do Código Civil Brasileiro, tais sejam os contratados pela <strong>VENDEDORA</strong>, bem como aqueles decorrentes da sucumbência em um eventual processo.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Fica acordado que, caso os valores recebidos pela <strong>VENDEDORA</strong> não sejam suficientes para cobrir as quantias aqui acordadas, poderá buscar o recebimento pelas vias judiciais.</span></p>

<p style="text-align: justify;"><strong>5.2.</strong> <span style="font-weight: 400;">O presente contrato resolve-se com a distribuição do pedido de Recuperação Judicial ou falência da <strong>COMPRADORA</strong>.</span></p>

<p style="text-align: justify;"><strong>5.3.</strong> <span style="font-weight: 400;">Para o caso de desistência da por parte da <strong>COMPRADORA</strong>, perderá ela em favor da <strong>VENDEDORA</strong> a título de penalidade o valor referente a entrada, e ou equivalente a 40% do total do valor da máquina.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>6.</strong> <span style="font-weight: 400;"><strong>DA INSTALAÇÃO DO EQUIPAMENTO</strong></span></p>

<p style="text-align: justify;"><strong>6.1.</strong> <span style="font-weight: 400;">É de responsabilidade da <strong>COMPRADORA</strong> a instalação do equipamento. Em caso de necessidade técnica o mesmo enquadrará na Cláusula 6.4</span></p>

<p style="text-align: justify;"><strong>6.2.</strong> <span style="font-weight: 400;">A máquina sempre será instalada no endereço constante no contrato e, sendo este diferente da sede da <strong>COMPRADORA</strong> constará no campo de observação do contrato.</span></p>

<p style="text-align: justify;"><strong>6.3.</strong> <span style="font-weight: 400;">É de obrigação da COMPRADORA adequar-se ao ANEXO I, deste mesmo contrato.</span></p>

<p style="text-align: justify;"><strong>6.4.</strong> <span style="font-weight: 400;">Ocorrendo instalação e assistência na garantia, implicará em custos com deslocamento de R$ 1,75/km para a <strong>COMPRADORA</strong>, considerando o endereço da <strong>VENDEDORA</strong> até o endereço da <strong>COMPRADORA</strong> somando a Quilometragem de ida e volta com um valor mínimo de R$ 70,00 será cobrado R$ 1.000,00 por dia de manutenção/instalação. Acima de 10 horas, os custos da equipe serão de responsabilidade da <strong>COMPRADORA</strong> e incluirão alimentação e aposentos condignos.</span></p>

<p style="text-align: justify;"><strong>6.5.</strong> <span style="font-weight: 400;">Cabe a <strong>COMPRADORA</strong> transportar e organizar a entrega da <strong>MÁQUINA</strong>, sem qualquer ônus ou responsabilidade para a <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>7.</strong> <span style="font-weight: 400;"><strong>CONDIÇÕES GERAIS</strong></span></p>

<p style="text-align: justify;"><strong>7.1.</strong> <span style="font-weight: 400;">O presente Contrato é firmado em caráter irrevogável e irretratável, obrigando as Partes, seus herdeiros e sucessores.</span></p>

<p style="text-align: justify;"><strong>7.2.</strong> <span style="font-weight: 400;">Nenhuma tolerância por qualquer das Partes com a violação de qualquer das disposições deste Contrato pela outra Parte significará renúncia e nem estabelecerá precedente para qualquer outra situação.</span></p>

<p style="text-align: justify;"><strong>7.3.</strong> <span style="font-weight: 400;">O presente Contrato só poderá ser alterado mediante acordo por escrito assinado por ambas as Partes.</span></p>

<p style="text-align: justify;"><strong>7.4.</strong> <span style="font-weight: 400;">As Partes não poderão ceder a terceiros, parcial ou totalmente, o presente Contrato, sem o consentimento prévio e expresso da outra Parte.</span></p>

<p style="text-align: justify;"><strong>7.5.</strong> <span style="font-weight: 400;">Este Contrato representa todo o entendimento das Partes com relação ao negócio nele tratado, e anula todo e qualquer Contrato, acordo, proposta, carta, termo ou documento emitido até esta data, relacionados com o mesmo objeto aqui contratado.</span></p>

<p style="text-align: justify;"><strong>7.6.</strong> <span style="font-weight: 400;">Qualquer notificação a ser dada com relação a esse Contrato deverá ser feita por escrito, enviada por carta registrada endereçada à parte a ser notificada nos endereços acima indicados no preâmbulo deste Contrato.</span></p>

<p style="text-align: justify;"><strong>7.7.</strong> <span style="font-weight: 400;">Nenhuma das Partes poderá ser responsabilizada pelo não cumprimento de quaisquer cláusulas ou condições do presente Contrato desde que resultantes de caso fortuito ou de força maior, tal como definido no artigo 393 e seu parágrafo único, do Código Civil.</span></p>

<p style="text-align: justify;"><strong>7.8.</strong> <span style="font-weight: 400;">A <strong>VENDEDORA</strong> declara que o horário de atendimento é das 9:00 até 17:00 de Segunda a Sexta-Feira exceto feriados e recesso coletivo</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>8.</strong> <span style="font-weight: 400;"><strong>DO FORO</strong></span></p>

<p style="text-align: justify;"><strong>8.1.</strong> <span style="font-weight: 400;">Elegem as partes o foro da comarca da cidade de Santo André, Estado de São Paulo, como único competente para dirimir eventuais dúvidas ou questões oriundas do presente Contrato, com renúncia expressa a qualquer outro, ainda que mais privilegiado seja.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">E por estarem assim justos e contratados, as Partes firmam o presente instrumento em duas vias de igual teor e forma, e para um só efeito, atribuindo ao mesmo, na forma do artigo 784, III, do Código de Processo Civil, a condição de título executivo extrajudicial.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;">Santo André, {date_created:format:j \d\e F \d\e Y}</p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>VENDEDORA</strong></span></p>
<img src="<?php echo esc_url( __DIR__ ); ?>/images/alex_sign_580419cd9687fa9619.jpg" width="100" />
<p><span style="font-weight: 400;">XK-TRON COMERCIO DE PECAS E ACESSORIOS ELETRONICOS LTDA<br>
CNPJ/MF nº 18.966.170/0001-90 - Inscrição Estadual sob o nº 626.528.285.111<br>
Nome do Representante: Kun Zhao</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>COMPRADORA</strong></span></p>
<img style="width: 200px;" src="{Assinatura do Comprador:38}" />
<p>{Cliente:1}<br>
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

<!-- Basic Page Break -->
<pagebreak/>


<h2 style="font-size: 18px;">A N E X O  I</h2>

<p style="text-align: justify;"><strong>CONDIÇÕES PARA INSTALAÇÃO E DA PRESTAÇÃO DE ASSISTÊNCIA TÉCNICA DO EQUIPAMENTO</strong></p>

<p style="text-align: justify;"><strong>A)</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> assumirá todos os custos, administração e treinamento com o <strong>CLIENTE</strong> para executar o pós-vendas. Sem qualquer ônus ou responsabilidade para a <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;"><strong>B)</strong> <span style="font-weight: 400;">A <strong>MÁQUINA</strong> sempre será instalado pela <strong>VENDEDORA</strong> sem qualquer ônus ou responsabilidade para a <strong>COMPRADORA</strong></span></p>

<p style="text-align: justify;"><strong>C)</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> neste ato declara-se e qualifica-se como uma empresa/profissional, apta a resolver qualquer tipo de ajustes do equipamento/máquina, com todos os acessórios que a ela integram, <strong>inclusive os Itens de segurança exigidos pelas leis Brasileiras e pelas Normas Internacionais</strong>; também é de seu pleno/inteiro conhecimento, toda as orientações para manutenções e consertos constantes/descritas no manual técnico que a acompanha e também faz parte integrante do presente contrato</span></p>

<p style="text-align: justify;"><strong>D)</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> está proibida de usar adaptadores e ou transformadores, não homologados pela norma Brasileira.</span></p>

<p style="text-align: justify;"><strong>E)</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> neste ato declara possuir uma estrutura elétrica em padrões internacionais (NTS), ou seja, a onde o neutro e terra é separado. A MÁQUINA E seus acessórios terão que ter aterramento dedicado para cada um deles. Quando a corrente for abaixo do solicitado será preciso um “Nobreak Senoidal” com o dobro do consumo de watts real da <strong>MÁQUINA</strong>.</span></p>

<p style="text-align: justify;"><strong>F)</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> tem obrigação alimentar a tensão da <strong>MÁQUINA</strong> direto da entrada de corrente fornecida pela companhia de energia elétrica, ou seja, não pode haver interferência de outros equipamentos na mesma corrente.</span></p>

<p style="text-align: justify;"><strong>G) Laser Co²</strong></p>

<p style="text-align: justify;"><span style="font-weight: 400;">É de obrigação da <strong>COMPRADORA</strong> neste ato declara possuir uma estrutura para adquirir a Máquina <strong>LASER CO²</strong>, Computador com entrada USB, ambiente climatizado de até 25°C, ambiente sem poeiras/sujeiras, piso nivelado, álcool etílico anidro para limpeza de lente e espelhos, água destilada para refrigeração do tubo laser Co². A variação da Corrente pode variar entre 215V até 240V, duas Linhas 220V separadas com disjuntores de 10 amperes sendo uma ligação para máquina CNC e a outra para motores, ou seja, exaustor.</span></p>

<p style="text-align: justify;"><strong>Parágrafo único:</strong></p>

<p style="text-align: justify;"><span style="font-weight: 400;">- Da <strong>GARANTIA</strong> está acordado que a Máquina Laser Co² CNC tem 12 meses de garantia, fonte, tubo laser e se houver computador têm 3 (três) meses de garantia, espelho e lente garantia no ato da entrega.<br>
- Da <strong>OPERAÇÃO</strong> por ser feixe de fótons transmitido através do Laser Co² é de suma importância o operador da máquina estar sempre ao seu lado.<br>
- Da <strong>SEGURANÇA</strong> exigimos o nível de NR06 e sempre extintor de Co² ao lado da máquina, calculando o perímetro necessário para atender em caso de incêndio.</span></p>

<p style="text-align: justify;"><strong>H) Router CNC</strong></p>

<p style="text-align: justify;"><span style="font-weight: 400;">É de obrigação da <strong>COMPRADORA</strong> neste ato declara possuir uma estrutura para adquirir a Máquina <strong>Router CNC</strong> Computador com entrada PCI, ambiente climatizado de até 35°C, piso nivelado, água destilada para refrigeração do spindle quando for água, duas Linhas separadas, estabilizador de corrente, podendo variar entre 215V até 240V (ou 380V até 410V), apenas uma linha 220V (ou 380V)</span></p>

<p style="text-align: justify;"><strong>Parágrafo único:</strong></p>

<p style="text-align: justify;"><span style="font-weight: 400;">- Da <strong>GARANTIA</strong> está acordado que a Router CNC tem garantia completa de 12 meses, se houver computador têm 3 (três) meses de garantia.<br>
- Da <strong>OPERAÇÃO</strong> é de suma importância o operador da máquina estar sempre ao seu lado, pois ela pode colidir com seus eixos em caso de esquecer seu referenciamento adequado.<br>
- Da <strong>SEGURANÇA</strong> exigimos o nível de NR06 e sempre extintor de Co² ao lado da máquina, calculando o perímetro necessário para atender em caso de incêndio.</span></p>

<p style="text-align: justify;"><strong>I) Laser Fibra de Gravação</strong></p>

<p style="text-align: justify;"><span style="font-weight: 400;">É de obrigação da <strong>COMPRADORA</strong> uma estrutura para adquirir a Máquina Laser. Ambiente climatizado de até 30°C, Álcool Etílico Anidro para limpeza de lente, Estabilizador de Corrente podendo variar entre 215V até 240V, apenas uma linha 220V, Computador com entrada USB.</span></p>

<p style="text-align: justify;"><strong>Parágrafo único:</strong></p>

<p style="text-align: justify;"><span style="font-weight: 400;">- Da <strong>GARANTIA</strong> está acordado que a Máquina Fibra a Laser CNC tem 12 meses de garantia, lente garantia no ato da entrega, se houver computador têm 3 (três) meses de garantia.<br>
- Da <strong>OPERAÇÃO</strong> por ser feixe de fótons transmitido através do Laser Fibra é de suma importância o operador da máquina estar sempre ao seu lado.<br>
- Da <strong>SEGURANÇA</strong> exigimos o nível de NR06 e sempre extintor de Co² ao lado da máquina, calculando o perímetro necessário para atender em caso de incêndio.</span></p>

<p style="text-align: justify;"><strong>J) Laser Fibra de Corte</strong></p>

<p style="text-align: justify;"><span style="font-weight: 400;">É de obrigação da <strong>COMPRADORA</strong> uma estrutura para adquirir a Máquina Fibra Laser necessita para o corte acabado Oxigênio e Nitrogênio ambos com a pureza de 99,999% e/ou um compressor com secador de ar maior que 14bar para cortes sem acabamento. Seu piso nivelado.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Por motivos de condensação, a temperatura do Chiller e do módulo da fibra não pode variar 15° C do ambiente. A máquina CNC instalada deve ser limitado até 35° do ambiente, Água Destilada para refrigeração do Cabeçote e Fonte da Fibra não pode passar de 35°C a umidade do ar não pode passar de 70%. A corrente tem que ser dividida em 4 partes, sendo; Geladeira Chiller, módulo da Fibra Laser, outra para máquina e outra ligação para o Exaustor de gases e odores.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">A potência do estabilizado do Modulo precisa ser 4 vezes maior que a potência nominal, sua potência é descrita no pedido de venda.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Para máquinas acima de 3000w considerar um piso reforçado de concreto.</span></p>

<p style="text-align: justify;"><strong>Parágrafo único:</strong></p>

<p style="text-align: justify;"><span style="font-weight: 400;">- Da <strong>GARANTIA</strong> está acordado que a Máquina Laser Fibra CNC tem 12 meses de garantia, fonte de laser fibra de 1000W até 2000W garantia de 12 meses, de 3000W até 6000W garantia de 24 meses, se houver computador têm 3 (três) meses de garantia, lente e ponteira garantia no ato da entrega.<br>
- Da <strong>OPERAÇÃO</strong> por ser feixe de fótons transmitido através do Laser Fibra é de suma importância o operador da máquina estar sempre ao seu lado.<br>
- Da <strong>SEGURANÇA</strong> exigimos o nível de NR06 e sempre extintor de Co² ao lado da máquina, calculando o perímetro necessário para atender em caso de incêndio.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">E por estarem assim justos e contratados, as Partes firmam o presente instrumento em duas vias de igual teor e forma, e para um só efeito, atribuindo ao mesmo, na forma do artigo 784, III, do Código de Processo Civil, a condição de título executivo extrajudicial.</span></p>

<p style="text-align: justify;">Santo André, {date_created:format:j \d\e F \d\e Y}</p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>VENDEDORA</strong></span></p>
<img src="<?php echo esc_url( __DIR__ ); ?>/images/alex_sign_580419cd9687fa9619.jpg" width="100" />
<p><span style="font-weight: 400;">XK-TRON COMERCIO DE PECAS E ACESSORIOS ELETRONICOS LTDA<br>
CNPJ/MF nº 18.966.170/0001-90 - Inscrição Estadual sob o nº 626.528.285.111<br>
Nome do Representante: Kun Zhao</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>COMPRADORA</strong></span></p>
<img style="width: 200px;" src="{Assinatura do Comprador:38}" />
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
