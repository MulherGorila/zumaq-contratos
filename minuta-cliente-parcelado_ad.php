<?php
/**
 * Template Name: AD Minuta para cliente parcelado
 * Version: 0.3
 * Description: Modelo básico de minuta para cliente com pagamento parcelado
 * Author: Tiago Cordeiro
 * Author URI: https://www.mulhergorila.com
 * Group: Contratos Zumaq
 * License: GPLv2
 * Required PDF Version: 4.0
 * Tags: contrato, minuta, cliente
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

<h1 style="font-size: 24px; padding: 0px 40px 15px 40px;">CONTRATO DE COMPRA E VENDA DE EQUIPAMENTO<br>COM PAGAMENTO DE FORMA PARCELADA<br>COM RESERVA DE DOMÍNIO</h1>

<p>Pelo presente instrumento particular, de um lado,</p>

<p style="text-align: justify;"><strong>XK-TRON COMERCIO DE PECAS E ACESSORIOS ELETRONICOS EIRELI</strong>, pessoa Jurídica Brasileira de Direito Privado, inscrita no CNPJ/MF sob o nº 18.966.170/0001-90, Inscrição Estadual sob o nº 626.528.285.111, com domicílio em Santo André, Estado de São Paulo, onde tem sede na Rua Viena nº 150, Bairro Vila Metalúrgica, CEP 09220-700, neste ato denominada como <strong>"ZUMAQ"</strong>, doravante tratada simplesmente de <strong>"VENDEDORA"</strong></p>

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

<p style="text-align: justify;"><strong>1.</strong> <span style="font-weight: 400;"><strong>DO OBJETO</strong></span></p>

<p style="text-align: justify;"><strong>1.1.</strong> <span style="font-weight: 400;">O presente Contrato tem como objeto a venda da(s) máquina(s) industrial (is) identificada(s) na Cláusula 1.1.1 (abaixo) doravante denominada "Máquina", sendo esta venda condicionada ao efetivo pagamento integral do preço através da constituição de reserva de domínio na forma dos artigos 521 e seguintes do Código Civil.</span></p>

<p style="text-align: justify;"><i>“Na venda de coisa móvel, pode o vendedor reservar para si a propriedade, até que o preço esteja integralmente pago. Com a cláusula de reserva de domínio, pode o vendedor entregar a coisa ao comprador sem transferir-lhe o domínio”</i></p>

<p style="text-align: justify;"><strong>1.1.1.</strong> <span style="font-weight: 400;">A (s) máquina (s) será (ão) entregue (s) pela <strong>VENDEDORA</strong> à <strong>COMPRADORA</strong> com todos os acessórios que a ela integram, <strong>inclusive os Itens de Segurança exigidos pelas leis Brasileiras e pelas Normas Internacionais</strong>, de pleno conhecimento da <strong>COMPRADORA</strong>, tudo de acordo com o descrito no manual técnico que a acompanha. Certo ainda que estarão inclusos no preço aqui acertado conforme a cláusula 2.1, devendo ser confirmado no ato da entrega ou instalação, os seguintes itens:</span></p>

<p style="text-align: left;"><span style="font-weight: 400;">
{Itens do Pedido:49}
</span></p>

<p style="text-align: justify;"><strong>2.</strong> <span style="font-weight: 400;"><strong>DO PREÇO E PAGAMENTO</strong></span></p>

<p style="text-align: justify;"><strong>2.1.</strong> <span style="font-weight: 400;">O preço total dos objetos (Itens I,II e III) deste Contrato é de {Valor Total:32} (<?php echo extenso($valorExtenso, false); ?> ), que será pago pela <strong>COMPRADORA</strong> à <strong>VENDEDORA</strong> da seguinte forma:</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">{Forma de pagamento:31}</span></p>

<p style="text-align: justify;"><strong>2.1.1.</strong> <span style="font-weight: 400;">Forma de pagamento vinculada no Pedido: {Número Pedido:21}</span></p>

<p style="text-align: justify;"><strong>2.2.</strong> <span style="font-weight: 400;">Os pagamentos dos valores descritos no Pedido: {Número Pedido:21} serão realizados em forma de {Forma de pagamento:31} enviados por intermédio de instituição bancária indicada pela <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;"><strong>2.3.</strong> <span style="font-weight: 400;">Em caso de atraso no pagamento de qualquer uma das parcelas do preço, a dívida se tornará vencida e o valor em atraso será corrigido pela variação do IGP-M/FGV e, nos termos da legislação civil, será aplicada multa de 10% (dez por cento) sobre o valor em atraso, bem como juros moratórios de 1% (um por cento) ao mês, pro rata die, entre a data do vencimento e a data do efetivo pagamento, sem exclusão do disposto na Cláusula 3.3 abaixo.</span></p>

<p style="text-align: justify;"><strong>2.4.</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> desde já concorda e autoriza a emissão de títulos (Duplicatas Mercantis) representativos das parcelas acima, com valor e vencimentos nos termos aqui contratados, assim como reconhece que tais títulos poderão ser indicados para protesto (5) CINCO dias após vencimento em caso de não pagamentos.</span></p>

<p style="text-align: justify;"><strong>2.5.</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> tem ciência de quando a compra for FOB, ou seja, de uma máquina encomendada na China, faturada em moeda americana, o câmbio do dólar será de acordo/convertido para moeda nacional na data do faturamento da máquina à <strong>COMPRADORA</strong>.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>3.</strong> <span style="font-weight: 400;"><strong>DA RESERVA DE DOMÍNIO</strong></span></p>

<p style="text-align: justify;"><strong>3.1.</strong> <span style="font-weight: 400;">A venda da Máquina identificada na Cláusula 1.1.1 deste Contrato é feita com reserva de domínio em favor da <strong>VENDEDORA</strong>, na forma do artigo 521 e seguintes do Código Civil; ficando reservado à <strong>VENDEDORA</strong> o direito de propriedade da Máquina, até a total quitação, pela <strong>COMPRADORA</strong>, de todas as parcelas ajustadas pelas partes na Cláusula 2.1 acima.</span></p>

<p style="text-align: justify;"><strong>3.1.1.</strong> <span style="font-weight: 400;">A <strong>VENDEDORA</strong> será responsável pelo registro deste Contrato no Cartório de Registro de Títulos e Documentos com jurisdição sobre o local de sua sede, para os fins previstos no artigo 522 do Código Civil. Os custos do registro serão suportados exclusivamente pela <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;"><strong>3.1.2.</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> se obriga a providenciar identificação na Máquina, por meio de placa ou adesivo identificativo, fazendo menção que a Máquina é propriedade da <strong>XK-TRON COMERCIO DE PECAS E ACESSORIOS ELETRONICOS LTDA</strong>. Tal identificação deverá ser mantida até a integral quitação do preço da Máquina e subsequente cancelamento da reserva de domínio.</span></p>

<p style="text-align: justify;"><strong>3.2.</strong> <span style="font-weight: 400;">Integralizado o total pagamento do preço ajustado na Cláusula 2.1 do presente Contrato, extinguir-se-á automaticamente o ônus havido sobre a Máquina em favor da <strong>VENDEDORA</strong>, previsto na Cláusula 3.1 acima, independentemente da prática de qualquer ato por desta e/ou da <strong>COMPRADORA</strong>.</span></p>

<p style="text-align: justify;"><strong>3.2.1.</strong> <span style="font-weight: 400;">Após a quitação por parte da <strong>COMPRADORA</strong> obriga-se, se for o caso, a <strong>VENDEDORA</strong>, a adotar e a diligenciar todas as providências necessárias à desconstituição da reserva de domínio, efetivando-se a transferência definitiva da propriedade à <strong>COMPRADORA</strong> ou a quem ela designar, emitindo para tanto todos os documentos que se fizerem necessários.</span></p>

<p style="text-align: justify;"><strong>3.3.</strong> <span style="font-weight: 400;">Com base na reserva de domínio ora pactuada, em caso de inadimplemento da <strong>COMPRADORA</strong> no pagamento de qualquer das parcelas do preço da Máquina, a <strong>VENDEDORA</strong> poderá aplicar o disposto na Cláusula 7.2.</span></p>

<p style="text-align: justify;"><strong>3.3.1.</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> deverá abster-se de usar a Máquina para fins não previstos em suas especificações técnicas e a não efetuar qualquer alteração ou adaptação na Máquina, qualquer que seja a razão, sem a prévia e expressa autorização da <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;"><strong>3.4.</strong> <span style="font-weight: 400;">Durante a vigência deste Contrato e até a integral quitação do preço da Máquina, a <strong>COMPRADORA</strong> se obriga a permitir o acesso de representante da <strong>VENDEDORA</strong> em seu estabelecimento para fins de vistoria da Máquina, desde que solicitada com 24 (vinte e quatro) horas de antecedência.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>4.</strong> <span style="font-weight: 400;"><strong>DA CONTRATAÇÃO DE SEGURO.</strong></span></p>

<p style="text-align: justify;"><strong>4.1.</strong> <span style="font-weight: 400;">Concomitantemente ao recebimento da Nota Fiscal de Venda da Máquina objeto deste Contrato, e enquanto perdure a reserva de domínio supra, a <strong>COMPRADORA</strong> opta em contratar e pagar um seguro para a Máquina, com cobertura contra risco de roubo, furto, incêndio, raios, desmoronamentos, inundações e outros, junto a companhia de seguros de reconhecida idoneidade e por valor não inferior ao valor de mercado da Máquina, figurando a <strong>VENDEDORA</strong> como única beneficiária na apólice. A <strong>COMPRADORA</strong> deverá encaminhar cópia da respectiva apólice à <strong>VENDEDORA</strong>, dentro de 5 (cinco) dias úteis contados da data de recebimento da Nota Fiscal de Venda da Máquina, <strong>sob pena de não fazendo ser imediatamente interposta pela VENDEDORA ação de reintegração de posse prevista na cláusula 7.2</strong></span></p>

<p style="text-align: justify;"><strong>4.2.</strong> <span style="font-weight: 400;">Na hipótese de ocorrência de sinistro da Máquina antes da quitação total do preço ajustado, a <strong>COMPRADORA</strong> fica obrigada a comunicar tal fato à <strong>VENDEDORA</strong> imediatamente.</span></p>

<p style="text-align: justify;"><strong>4.3.</strong> <span style="font-weight: 400;">Pelo presente a <strong>COMPRADORA</strong> outorgar à <strong>VENDEDORA</strong> todos os poderes para que a <strong>VENDEDORA</strong> possa receber, nos termos do item 4.1 e 4.2, o valor da indenização junto à seguradora em montante suficiente para quitar todas as parcelas da Máquina ainda pendentes de pagamento e todos os custos incorridos pela <strong>VENDEDORA</strong>, certo que esta entregará à <strong>COMPRADORA</strong> o saldo remanescente da indenização, caso houver.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>5.</strong> <span style="font-weight: 400;"><strong>OBRIGAÇÕES DAS PARTES</strong></span></p>

<p style="text-align: justify;"><strong>5.1.</strong> <span style="font-weight: 400;">Fica acordado entre as Partes, que a partir do efetivo recebimento da Máquina pela <strong>COMPRADORA</strong>, esta responderá por todos os danos causados direta ou indiretamente a si ou a terceiros em virtude do uso da Máquina, bem como por todos os riscos a que a mesma estiver sujeita, assim como pelas consequências daí resultantes.</span></p>

<p style="text-align: justify;"><strong>5.2.</strong> <span style="font-weight: 400;">A máquina objeto do presente contrato será considerada entregue à <strong>COMPRADORA</strong> no ato da transferência de sua posse para qualquer de seus prepostos, após devidamente vistoriada com assinatura do respectivo termo/protocolo de recebimento.</span></p>

<p style="text-align: justify;"><strong>5.3.</strong> <span style="font-weight: 400;">Durante a vigência deste Contrato e até a integral quitação do preço da Máquina, a <strong>COMPRADORA</strong> deverá mantê-la em perfeito estado de funcionamento e conservação, providenciando às suas expensas todo e qualquer serviço de obra ou manutenção que vier a ser necessário para a correta instalação e operação em seu estabelecimento.</span></p>

<p style="text-align: justify;"><strong>5.3.1.</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> deverá abster-se de usar a Máquina para fins não previstos em suas especificações técnicas e a não efetuar qualquer alteração ou adaptação na Máquina, qualquer que seja a razão, sem a prévia e expressa autorização da <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;"><strong>5.4.</strong> <span style="font-weight: 400;">Durante a vigência deste Contrato e até a integral quitação do preço da Máquina, a <strong>COMPRADORA</strong> se obriga a permitir o acesso de representante da <strong>VENDEDORA</strong> em seu estabelecimento para fins de vistoria da Máquina, desde que solicitada com 24 (vinte e quatro) horas de antecedência.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>6.</strong> <span style="font-weight: 400;"><strong>DA GARANTIA TÉCNICA</strong></span></p>

<p style="text-align: justify;"><strong>6.1.</strong> <span style="font-weight: 400;">A <strong>VENDEDORA</strong> obriga-se a prestar à <strong>COMPRADORA</strong> garantia técnica à dita Máquina, citado abaixo pelo <strong>ANEXO I</strong> contados da data de assinatura deste Contrato, ressalvados os casos de exclusão ou extensão da garantia.</span></p>

<p style="text-align: justify;"><strong>Parágrafo único:</strong> <span style="font-weight: 400;">No caso de necessidade da substituição de peças dentro do prazo da garantia prevista, a <strong>COMPRADORA</strong> se compromete a trazer o equipamento às suas expensas, no endereço da <strong>VENDEDORA</strong>, para que esta possa confirmar através de laudo técnico o defeito alegado, e assim autorizar a sua substituição e ou reparo necessário, comunicando por escrito à <strong>COMPRADORA</strong>.</span></p>

<p style="text-align: justify;"><strong>6.1.1.</strong> <span style="font-weight: 400;">O prazo de garantia acima estipulado é fixo, sendo que eventual utilização da garantia técnica ora acordada pela <strong>COMPRADORA</strong> não implicará em suspensão da contagem ou em nova contagem do prazo de garantia de 2 anos.</span></p>

<p style="text-align: justify;"><strong>6.1.2.</strong> <span style="font-weight: 400;">De acordo com a máquinas sendo, Laser Co², Laser Fibra de Gravação, Laser Fibra de Corte e Router CNC, serão apresentados no <strong>ANEXO I</strong> ao final deste objeto presente.</span></p>

<p style="text-align: justify;"><strong>6.2.</strong> <span style="font-weight: 400;">Durante o prazo da garantia técnica, a <strong>VENDEDORA</strong> se obriga a reparar qualquer vício ou defeito das peças e/ou a substituição da própria máquina caso não seja possível o seu conserto, sem qualquer ônus para a <strong>COMPRADORA</strong>, exceto as despesas como: transporte da máquina, transporte de peças, locomoção, hospedagem e alimentação.</span></p>

<p style="text-align: justify;"><strong>6.3.</strong> <span style="font-weight: 400;">A presente garantia técnica limita-se a vícios e defeitos nas Máquinas, incluindo aqueles causados por deficiência de material e/ou de mão-de-obra utilizados em sua fabricação, e não inclui a substituição de peças e componentes sujeitos a desgaste natural decorrente do uso da Máquina.</span></p>

<p style="text-align: justify;"><strong>6.4.</strong> <span style="font-weight: 400;">A garantia técnica não poderá ser aplicada em caso de:</span></p>

<p style="text-align: justify;"><strong>(I)</strong> <span style="font-weight: 400;">defeitos ou problemas na Máquina causados por instalação ou uso incorreto feito pela <strong>COMPRADORA</strong>, em desacordo com as especificações técnicas da Máquina;</span></p>

<p style="text-align: justify;"><strong>(II)</strong> <span style="font-weight: 400;">defeitos ou problemas decorrentes de alterações ou modificações feitas pela <strong>COMPRADORA</strong> ou por terceiros na Máquina sem autorização pela <strong>VENDEDORA</strong>;</span></p>

<p style="text-align: justify;"><strong>(III)</strong> <span style="font-weight: 400;">outros casos de defeitos ou falhas causados pelo própria <strong>COMPRADORA</strong> ou terceiros;</span></p>

<p style="text-align: justify;"><strong>(IV)</strong> <span style="font-weight: 400;">No caso de inadimplemento da <strong>COMPRADORA</strong> no pagamento de quaisquer das parcelas do preço, em prazo superior a 05 (cinco) dias.</span></p>

<p style="text-align: justify;"><strong>7.</strong> <span style="font-weight: 400;"><strong>PRAZO E RESCISÃO MOTIVADA.</strong></span></p>

<p style="text-align: justify;"><strong>7.1.</strong> <span style="font-weight: 400;">Este Contrato obriga as partes a partir da data de sua assinatura e permanecerá em vigor até que todas as obrigações nele previstas tenham sido integralmente cumpridas pelas partes.</span></p>

<p style="text-align: justify;"><strong>7.2.</strong> <span style="font-weight: 400;">No caso de inadimplemento da <strong>COMPRADORA</strong> no pagamento de quaisquer das parcelas do preço, em prazo superior a 05 (cinco) dias, caberá à <strong>VENDEDORA</strong> optar, na forma da lei e a seu exclusivo critério, por:</span></p>

<p style="text-align: justify;"><strong>(I)</strong> <span style="font-weight: 400;">Manter vigente o Contrato e propor ação de execução contra a <strong>COMPRADORA</strong>, hipótese em que a dívida será atualizada pelo IGP-M/FGV e terá a incidência de juros e de multa conforme a Cláusula 2.3.</span></p>

<p style="text-align: justify;"><strong>(II)</strong> <span style="font-weight: 400;">Efetuar a rescisão motivada deste Contrato, requerendo a imediata reintegração da posse da Máquina. Neste caso, a <strong>VENDEDORA</strong> devolverá à <strong>COMPRADORA</strong> os valores já pagos até a data da rescisão, descontando deste montante valor suficiente para cobrir:</span></p>

<p style="text-align: justify;"><strong>a)</strong> <span style="font-weight: 400;">a depreciação verificada entre a data de venda (valor da Nota Fiscal) e o valor de mercado do equipamento na data da apreensão ou, a critério da <strong>VENDEDORA</strong> o valor correspondente à depreciação conforme estabelecido pela Instrução Normativa n. 162, de 31.12.1998, editada pela Receita Federal do Brasil (10% ao ano);</span></p>

<p style="text-align: justify;"><strong>b)</strong> <span style="font-weight: 400;">o valor que, por direito, é devido à <strong>VENDEDORA</strong> a título de indenização; perdas e danos ou lucro cessante, nos termos dos artigos 475 e 527, do Código Civil Brasileiro, durante o período em que a <strong>COMPRADORA</strong> esteve em posse do equipamento;</span></p>

<p style="text-align: justify;"><strong>c)</strong> <span style="font-weight: 400;">honorários advocatícios, nos termos do que dispõe o artigo 395 do Código Civil Brasileiro, tais sejam os contratados pela <strong>VENDEDORA</strong>, bem como aqueles decorrentes da sucumbência em um eventual processo.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Fica acordado que, caso os valores recebidos pela <strong>VENDEDORA</strong> não sejam suficientes para cobrir as quantias aqui acordadas, poderá buscar o recebimento pelas vias judiciais.</span></p>

<p style="text-align: justify;"><strong>7.3.</strong> <span style="font-weight: 400;">O presente contrato resolve-se com a distribuição do pedido de Recuperação Judicial ou falência da <strong>COMPRADORA</strong>.</span></p>

<p style="text-align: justify;"><strong>7.4.</strong> <span style="font-weight: 400;">Para o caso de desistência por parte da <strong>COMPRADORA</strong> em razão do estabelecido na <strong>Cláusula 2.5</strong>, perderá ela em favor da <strong>VENDEDORA</strong> a título de penalidade o valor referente a entrada, e ou equivalente a 40% do total do valor da máquina</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>8.</strong> <span style="font-weight: 400;"><strong>DA INSTALAÇÃO DO EQUIPAMENTO</strong></span></p>

<p style="text-align: justify;"><strong>8.1.</strong> <span style="font-weight: 400;">Ocorrendo instalação e assistência na garantia, implicará em custos com deslocamento de R$ 1,00/km para a <strong>COMPRADORA</strong>, considerando o endereço da <strong>VENDEDORA</strong> até o endereço da <strong>COMPRADORA</strong> somando a Quilometragem de ida e volta com um valor mínimo de R$ 70,00. Acima de 10 horas, os custos da equipe serão de responsabilidade da <strong>COMPRADORA</strong> e incluirão alimentação e aposentos condignos.</span></p>

<p style="text-align: justify;"><strong>8.2.</strong> <span style="font-weight: 400;">A máquina sempre será instalada no endereço constante no contrato e, sendo este diferente da sede da <strong>COMPRADORA</strong> constará no campo de observação do contrato.</span></p>

<p style="text-align: justify;"><strong>8.3.</strong> <span style="font-weight: 400;">É de obrigação da <strong>COMPRADORA</strong> adequar-se as normas americanas de elétrica (NTS) ou seja, neutro e terra separado. Em caso da corrente elétrica fornecida pela companhia de Luz for abaixo ou acima de 2% do citado no “Anexo I” será necessário um Nobreak Senoidal com o dobro da capacidade de consumo da máquina.</span></p>

<p style="text-align: justify;"><strong>9.</strong> <span style="font-weight: 400;"><strong>CONDIÇÕES GERAIS</strong></span></p>

<p style="text-align: justify;"><strong>9.1.</strong> <span style="font-weight: 400;">O presente Contrato é firmado em caráter irrevogável e irretratável, obrigando as Partes, seus herdeiros e sucessores.</span></p>

<p style="text-align: justify;"><strong>9.2.</strong> <span style="font-weight: 400;">Nenhuma tolerância por qualquer das Partes com a violação de qualquer das disposições deste Contrato pela outra Parte significará renúncia e nem estabelecerá precedente para qualquer outra situação.</span></p>

<p style="text-align: justify;"><strong>9.3.</strong> <span style="font-weight: 400;">O presente Contrato só poderá ser alterado mediante acordo por escrito assinado por ambas as Partes.</span></p>

<p style="text-align: justify;"><strong>9.4.</strong> <span style="font-weight: 400;">As Partes não poderão ceder a terceiros, parcial ou totalmente, o presente Contrato, sem o consentimento prévio e expresso da outra Parte.</span></p>

<p style="text-align: justify;"><strong>9.5.</strong> <span style="font-weight: 400;">Este Contrato representa todo o entendimento das Partes com relação ao negócio nele tratado, e anula todo e qualquer Contrato, acordo, proposta, carta, termo ou documento emitido até esta data, relacionados com o mesmo objeto aqui contratado.</span></p>

<p style="text-align: justify;"><strong>9.6.</strong> <span style="font-weight: 400;">Qualquer notificação a ser dada com relação a esse Contrato deverá ser feita por escrito, enviada por carta registrada ou fax, endereçada à parte a ser notificada nos endereços acima indicados deste Contrato.</span></p>

<p style="text-align: justify;"><strong>9.7.</strong> <span style="font-weight: 400;">Nenhuma das Partes poderá ser responsabilizada pelo não cumprimento de quaisquer cláusulas ou condições do presente Contrato desde que resultantes de caso fortuito ou de força maior, tal como definido no artigo 393 e seu parágrafo único, do Código Civil.</span></p>

<p style="text-align: justify;"><strong>9.8.</strong> <span style="font-weight: 400;">A <strong>VENDEDORA</strong> declara que o horário de atendimento é das 9:00 até 17:00 de Segunda a Sexta-Feira exceto feriados e recesso coletivo do dia 22 de dezembro de 2021 até 05 de janeiro de 2022.</span></p>

<p style="text-align: justify;"><strong>9.9.</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> declara ter pleno conhecimento sobre sistema operacional, bem como do sistema de segurança do maquinário objeto do presente Contrato.</span></p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><strong>10.</strong> <span style="font-weight: 400;"><strong>DO FORO</strong></span></p>

<p style="text-align: justify;"><strong>10.1.</strong> <span style="font-weight: 400;">Elegem as partes o foro da comarca da cidade de Santo André, Estado de São Paulo, como único competente para dirimir eventuais dúvidas ou questões oriundas do presente Contrato, com renúncia expressa a qualquer outro, ainda que mais privilegiado seja.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">E por estarem assim justos e contratados, as Partes firmam o presente instrumento em duas vias de igual teor e forma, e para um só efeito, juntamente com duas testemunhas, atribuindo ao mesmo, na forma do artigo 585, II, do Código de Processo Civil, a condição de título executivo extrajudicial.</span></p>

<p style="text-align: justify;">Santo André, {date_created:format:j \d\e F \d\e Y}</p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>VENDEDORA</strong></span></p>
<img style="width: 100px;" src="https://contratos.cnczumaq.com/wp-content/themes/Zumaq/images/alex_sign_580419cd9687fa9619.jpg" />
<p><span style="font-weight: 400;">XK-TRON COMERCIO DE PECAS E ACESSORIOS ELETRONICOS LTDA<br>
CNPJ/MF nº 18.966.170/0001-90 - Inscrição Estadual sob o nº 626.528.285.111<br>
Nome do Representante: Kun Zhao</span></p>
									
<p style="text-align: justify;">&nbsp;</p>

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

<!-- Basic Page Break -->
<pagebreak/>

<h2 style="font-size: 18px;">A N E X O  I</h2>

<p style="text-align: justify;"><strong>CONDIÇÕES PARA INSTALAÇÃO E DA PRESTAÇÃO DE ASSISTÊNCIA TÉCNICA DO EQUIPAMENTO</strong></p>

<p style="text-align: justify;"><strong>A)</strong> <span style="font-weight: 400;">A <strong>MÁQUINA</strong> sempre será instalado pela <strong>COMPRADORA</strong> sem qualquer ônus ou responsabilidade para a <strong>VENDEDORA</strong>.</span></p>

<p style="text-align: justify;"><strong>B)</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> está proibida de usar adaptadores e ou transformadores, não homologados pela norma Brasileira.</span></p>

<p style="text-align: justify;"><strong>C)</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> neste ato declara possuir uma estrutura elétrica em padrões internacionais (NTS), ou seja, a onde o neutro e terra é separado. A MÁQUINA E seus acessórios terão que ter aterramento dedicado para cada um deles. Quando a corrente for abaixo do solicitado será preciso um “Nobreak Senoidal” com o dobro do consumo de watts real da <strong>MÁQUINA</strong>.</span></p>

<p style="text-align: justify;"><strong>D)</strong> <span style="font-weight: 400;">A <strong>COMPRADORA</strong> tem obrigação alimentar a tensão da <strong>MÁQUINA</strong> direto da entrada de corrente fornecida pela companhia de energia elétrica, ou seja, não pode haver interferência de outros equipamentos na mesma corrente.</span></p>

<p style="text-align: justify;"><strong>E) Laser Co²</strong></p>

<p style="text-align: justify;"><span style="font-weight: 400;">É de obrigação da <strong>COMPRADORA</strong> neste ato declara possuir uma estrutura para adquirir a Máquina <strong>LASER CO²</strong>, Computador com entrada USB, ambiente climatizado de até 25°C, ambiente sem poeiras/sujeiras, piso nivelado, álcool etílico anidro para limpeza de lente e espelhos, água destilada para refrigeração do tubo laser Co². A variação da Corrente pode variar entre 215V até 240V, duas Linhas 220V separadas com disjuntores de 10 amperes sendo uma ligação para máquina CNC e a outra para motores, ou seja, exaustor.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>Parágrafo único:</strong><br>
- Da <strong>GARANTIA</strong> está acordado que a Máquina Laser Co² CNC tem 12 meses de garantia, fonte e tubo laser têm 3 meses de garantia, espelho e lente garantia no ato da entrega.<br>
- Da <strong>OPERAÇÃO</strong> por ser feixe de fótons transmitido através do Laser Co² é de suma importância o operador da máquina estar sempre ao seu lado.<br>
- Da <strong>SEGURANÇA</strong> exigimos o nível de NR06 e sempre extintor de Co² ao lado da máquina, calculando o perímetro necessário para atender em caso de incêndio.</span></p>

<p style="text-align: justify;"><strong>F) Router CNC</strong></p>

<p style="text-align: justify;"><span style="font-weight: 400;">É de obrigação da <strong>COMPRADORA</strong> neste ato declara possuir uma estrutura para adquirir a Máquina <strong>Router CNC</strong> Computador com entrada PCI, ambiente climatizado de até 35°C, piso nivelado, água destilada para refrigeração do spindle quando for água, duas Linhas separadas.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>Parágrafo único:</strong><br>
- Da <strong>GARANTIA</strong> está acordado que a Router CNC tem garantia completa de 12 meses.<br>
- Da <strong>OPERAÇÃO</strong> é de suma importância o operador da máquina estar sempre ao seu lado, pois ela pode colidir com seus eixos em caso de esquecer seu referenciamento adequado.<br>
- Da <strong>SEGURANÇA</strong> exigimos o nível de NR06 e sempre extintor de Co² ao lado da máquina, calculando o perímetro necessário para atender em caso de incêndio.</span></p>

<p style="text-align: justify;"><strong>G) Laser Fibra de Gravação</strong></p>

<p style="text-align: justify;"><span style="font-weight: 400;">É de obrigação da <strong>COMPRADORA</strong> uma estrutura para adquirir a Máquina Laser. Ambiente climatizado de até 30°C, Álcool Etílico Anidro para limpeza de lente, Estabilizador de Corrente podendo variar entre 215V até 240V, apenas uma linha 220V, Computador com entrada USB.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>Parágrafo único:</strong><br>
- Da <strong>GARANTIA</strong> está acordado que a Máquina Fibra a Laser CNC tem 12 meses de garantia, lente garantia no ato da entrega.<br>
- Da <strong>OPERAÇÃO</strong> por ser feixe de fótons transmitido através do Laser Fibra é de suma importância o operador da máquina estar sempre ao seu lado.<br>
- Da <strong>SEGURANÇA</strong> exigimos o nível de NR06 e sempre extintor de Co² ao lado da máquina, calculando o perímetro necessário para atender em caso de incêndio.</span></p>

<p style="text-align: justify;"><strong>H) Laser Fibra de Corte</strong></p>

<p style="text-align: justify;"><span style="font-weight: 400;">É de obrigação da <strong>COMPRADORA</strong> uma estrutura para adquirir a Máquina Fibra Laser necessita para o corte acabado Oxigênio e Nitrogênio ambos com a pureza de 99,999% e/ou um compressor com secador de ar maior que 14bar para cortes sem acabamento. Seu piso nivelado.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Por motivos de condensação, a temperatura do Chiller e do módulo da fibra não pode variar 15° C do ambiente. A máquina CNC instalada deve ser limitado até 35° do ambiente, Água Destilada para refrigeração do Cabeçote e Fonte da Fibra não pode passar de 35°C a umidade do ar não pode passar de 70%. A corrente tem que ser dividida em 4 partes, sendo; Geladeira Chiller, módulo da Fibra Laser, outra para máquina e outra ligação para o Exaustor de gases e odores.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">A potência do estabilizado do Modulo precisa ser 4 vezes maior que a potência nominal, sua potência é descrita no pedido de venda.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;">Para máquinas acima de 3000w considerar um piso reforçado de concreto.</span></p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>Parágrafo único:</strong><br>
- Da <strong>GARANTIA</strong> está acordado que a Máquina Laser Fibra CNC tem 12 meses de garantia, lente e ponteira garantia no ato da entrega.<br>
- Da <strong>OPERAÇÃO</strong> por ser feixe de fótons transmitido através do Laser Fibra é de suma importância o operador da máquina estar sempre ao seu lado.<br>
- Da <strong>SEGURANÇA</strong> exigimos o nível de NR06 e sempre extintor de Co² ao lado da máquina, calculando o perímetro necessário para atender em caso de incêndio.</span></p>

<p style="text-align: justify;">Santo André, {date_created:format:j \d\e F \d\e Y}</p>

<p style="text-align: justify;">&nbsp;</p>

<p style="text-align: justify;"><span style="font-weight: 400;"><strong>VENDEDORA</strong></span></p>
<img style="width: 100px;" src="https://contratos.cnczumaq.com/wp-content/themes/Zumaq/images/alex_sign_580419cd9687fa9619.jpg" />
<p><span style="font-weight: 400;">XK-TRON COMERCIO DE PECAS E ACESSORIOS ELETRONICOS LTDA<br>
CNPJ/MF nº 18.966.170/0001-90 - Inscrição Estadual sob o nº 626.528.285.111<br>
Nome do Representante: Kun Zhao</span></p>
									
<p style="text-align: justify;">&nbsp;</p>

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