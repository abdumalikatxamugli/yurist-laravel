<style type="text/css">
	 * {
            font-family: DejaVu Sans, sans-serif;
            
        }
</style>
<h2 style="text-align: center;font-size:18px;">
	ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ <br>«VARIANT RETAIL FINANCE»
</h2>
<style type="text/css">
	#cred *{
		font-size: 13px;
	}
	.body{
		font-size: 14px;
	}
</style>
<table id="cred">
	<tr>
		<td>
			<div style="width:400px">
				Республика Узбекистан  город Ташкент
				<br>
				Юнусабадский район 
				<br>
				Пересечение улиц А.Темура ва
				<br>А.Дониша дом 7
				<br>
				Тел: + 998 78 777 70 09
			</div>
		</td>
		<td>
			ИНН 307490921 <br>
			ОКЭД 47420 <br>
			МФО 00444 
			АИКБ Ипак Йули «МАРКАЗ» <br>
			р/с20208000305242696001
		</td>
	</tr>
</table>
<hr>
<div style="text-align:right">
	<span style="font-size: 14px;">
		Гражданину {{$contract->LASTNAME}}
		{{$contract->FIRSTNAME}}
		{{$contract->PATRONYMIC}}
	</span>
	<br>
	<span style="font-size: 14px;">
		Адрес : {{$address}}
	</span>
</div>

<div style="text-align:center; margin-top: 30px;">
	<strong>ПРЕТЕНЗИЯ</strong> <br>
	по договору купли продажи товара в рассрочку
	<br>
	No{{$contract->CARD}} от {{date('d.m.Y', strtotime($contract->STARTDATE))}} года
	<br>
	<b>(далее по тексту-Договор)</b>
</div>

<div class="body">
	<p style="text-align:justify;">
		{{date('d.m.Y', strtotime($contract->STARTDATE))}} года между ООО«VARIANT RETAIL FINANCE» и Вами - {{$contract->LASTNAME}} {{$contract->FIRSTNAME}}
		{{$contract->PATRONYMIC}} был заключен договор купли продажи товара в рассрочку No {{$contract->CARD}} от {{date('d.m.Y', strtotime($contract->STARTDATE))}} года. Согласно пункту 1.1. Договора и Заявление Покупателя ООО «VARIANT RETAIL FINANCE» обязалось поставить для вас товар.
	</p>
	<p style="text-align:justify;">
		Согласно пункту 4.2. Договора, Вы обязались оплатить суммы рассрочки в порядке и сроки предусмотренные в Графике платежей, определенного в Заявления No{{$contract->CARD}} от {{date('d.m.Y', strtotime($contract->STARTDATE))}} года.
	</p>
	<p style="text-align:justify;">
		Факт исполнения обязательств по Договору со стороны ООО «VARIANT RETAIL FINANCE» подтверждается актом приема -передачи Товара {{$contract->CARD}} от {{date('d.m.Y', strtotime($contract->STARTDATE))}} года, согласно которого Вами получен Товар(ы): {{$contract->EXTGOODSNAME}} в  полном  объеме.  Замечаний  к  качеству,  количеству  и  ассортименту поставленной Товару у покупателя не имеется.
	</p>
	<p style="text-align:justify;">
		На {{date('d.m.Y')}} у  Вас перед ООО  «VARIANT RETAIL  FINANCE» по  Договору имеется  задолженность  по  оплате  за  Товар  в  размере {{$contract->ACC1BAL}} сум.
	</p>

	<b>На основании изложенного просим:</b>
	<p>
		1. В течении 5 дней погасить задолженность по договору No {{$contract->CARD}} от {{date('d.m.Y', strtotime($contract->STARTDATE))}} года в общей сумме {{$contract->ACC1BAL}}  сум.
	</p>
	<b>
		В случае игнорирования Вами настоящей претензии ООО «VARIANT RETAIL FINANCE» вынужден обратиться в суд с отнесением на вас судебные расходы.
	</b>
</div>
<table style="width: 100%;margin-top:50px;">
	<tr>
		<td >
		Директор
		</td>
		<td style="text-align: right;">
			_______________
		</td>
	</tr>
</table>