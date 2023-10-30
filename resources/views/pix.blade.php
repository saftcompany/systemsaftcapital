<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagamento Pix</title>


<style>
	
	body{
		background-color: #303030;
		display: flex;
		justify-content: center;
		align-content: center;
	}

.card-pix{
	background-color: #fff;
	width: 350px;
	height: 530px;
	border-radius: 1rem;
}
.card-title{
	display: flex;
	justify-content: center;
	align-content: center;
	padding-bottom: 20px;
}


.contents{
	display: flex;
	justify-content: space-around;
	padding-bottom: 20px;
}


hr{
	width: 75%;
	border: .2px solid #000;
}

.qr{

	display: flex;
	justify-content: center;
	padding-top: 15px;
}

.code{
	text-align: center;
	font-size: 50%;
	line-height: 1.5;
}

.buttons{
	display: flex;
	justify-content: center;
	gap: 20px;
}

input[type="button"]{
	padding: 7px;
	color: #fff;
	border: none;
	border-radius: 5px;
	width: 30%;
	cursor: pointer;
}

#copy{
	background-color: gray;
}
#next{
	background-color: #59106B;
	width: 100%;
}


</style>


</head>
<body style="padding-top: 50px">



<div class="card-pix">
<div class="card-title">
	<h5>Detalhes do pagamento</h5>
</div>



<div class="contents">

	<img src="{{ asset('assets/images/gateway/pix-106.png') }}" style="width: 30%">
	<h5>R$ {{ $result['0']['qr_codes'][0]["amount"]["value"] }}</h5>

</div>

<hr>

<div class="qr">
	<img src="{{ $result['0']['qr_codes'][0]['links']['0']['href'] }}" style="width: 50%;">
</div>

<p class="code">
{{ $result['0']['qr_codes'][0]['text'] }}
</p>

<hr>

<div class="buttons" style="padding-top: 20px;">

	<input type="button" name="copy" value="Copiar chave" id="copy" onclick="copyToClipboard()">
	<a href="{{ url('/app/deposit/history') }}"><input type="button" name="next" value="Prosseguir" id="next"></a>	


</div>


	<script type="text/javascript">
		function copyToClipboard() {
    const textToCopy = document.querySelector('.code').innerText;

    const textarea = document.createElement('textarea');
    textarea.value = textToCopy;
    document.body.appendChild(textarea);

    textarea.select();
    document.execCommand('copy');

    document.body.removeChild(textarea);

}	</script>

</body>
</html>