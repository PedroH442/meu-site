<?php include("cabecalhoo.php"); ?>
<div class="produto-back">	
	<div class="container">
		<div class="produto">
			<h1>Blusa Fck Versate</h1>
			<p>por apenas R$ 79,99</p>
			<form action="checkoutt.php" method="POST">
				
						<img src="camisa_versate1.jpeg" >
					</label>
				</fieldset>
				<fieldset class="tamanhos">
					<legend>Escolha o tamanho:</legend>
					<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
					<output for="tamanho" name="valortamanho">42</output>
				</fieldset>
				<input type="submit" class="comprar" value="Comprar">
				<input type="hidden" name="nome" value="Camisa Branca ">
				<input type="hidden" name="preco" value="79,99">
				
			</form>
		</div>
		<div class="detalhes">
			<h2>Detalhes do produto</h2>
			<p>Nossa linha traz peças de streetwear, com cortes ousados e designs arrojados,
               misturando elementos da cultura urbana, do punk e do grunge, com uma pegada de atitude, 
	           como estampas provocativas, frases contundentes, e o logo inconfundível da marca.</p>
			<table>
				<thead>
						<tr>
							<th>Característica</th>
							<th>Detalhe</th>
						</tr>
				</thead>
				<tbody>
						<tr>
							<td>Modelo</td>
							<td>Cardigã 7845</td>
						</tr>
						<tr>
							<td>Material</td>
							<td>Algodão e poliester</td>
						</tr>
						<tr>
							<td>Cores</td>
							<td>Branco e Preto</td>
						</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar a mão</td>
						</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>



<script>
var inputTamanho = document.querySelector('[name=tamanho]')
var outputTamanho = document.querySelector('[name=valortamanho]')
function mostraTamanho(){
outputTamanho.value = inputTamanho.value
}
inputTamanho.oninput = mostraTamanho
</script>
</body>

</html>