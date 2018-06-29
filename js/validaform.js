/* Atribui ao evento submit do formulário a função de validação de dados */
var form = document.getElementById("form-contato");
if (form.addEventListener) {                   
    form.addEventListener("submit", validaCadastro);
} else if (form.attachEvent) {                  
    form.attachEvent("onsubmit", validaCadastro);
}

/* Atribui ao evento keypress do input data de contato a função para formatar o numero DDD NNNNN-NNNN */
var inputContato = document.getElementById("contato");
if (inputContato.addEventListener) {                   
    inputContato.addEventListener("keypress", function(){mascaraTexto(this, '## #####-####')});
} else if (inputContato.attachEvent) {                  
    inputContato.attachEvent("onkeypress", function(){mascaraTexto(this, '## #####-####')});
}

/* Função para validar os dados antes da submissão dos dados */
function validaCadastro(evt){
	var nome = document.getElementById('nome');
	var contato = document.getElementById('contato');
	var redesocial = document.getElementById('redesocial');
	var carronegociado = document.getElementById('carronegociado');
	var detalhesdenegociacao = document.getElementById('detalhesdenegociacao');
	var vendedor = document.getElementById('vendedor');
	var loja = document.getElementById('loja');
  var canal = document.getElementById('canal');
  var status = document.getElementById('status');
	var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var contErro = 0;


	/* Validação do campo nome */
	caixa_nome = document.querySelector('.msg-nome');
	if(nome.value === ""){
		caixa_nome.innerHTML = "Favor preencher o Nome";
		caixa_nome.style.display = 'block';
		contErro += 1;
	}else{
		caixa_nome.style.display = 'none';
	}

	/* Validação do campo contato */
	caixa_contato = document.querySelector('.msg-contato');
	if(contato.value === ""){
		caixa_contato.innerHTML = "Favor preencher o contato";
		caixa_contato.style.display = 'block';
		contErro += 1;
	}else if(filtro.test(contato.value)){
		caixa_contato.style.display = 'none';
	}else{
		caixa_contato.innerHTML = "Formato do contato inválido";
		caixa_contato.style.display = 'block';
		contErro += 1;
	}	

	/* Validação do campo carro negociado */
	caixa_carronegociado = document.querySelector('.msg-carronegociado');
	if(carronegociado.value === ""){
		caixa_carronegociado.innerHTML = "Favor preencher o carro a ser negociado";
		caixa_carronegociado.style.display = 'block';
		contErro += 1;
	}else{
		caixa_carronegociado.style.display = 'none';
	}

	/* Validação do campo detalhes de negociação */
	caixa_detalhesdenegociacao = document.querySelector('.msg-detalhesdenegociacao');
	if(detalhesdenegociacao.value === ""){
		caixa_detalhesdenegociacao.innerHTML = "Favor preencher os detalhes da negociação";
		caixa_detalhesdenegociacao.style.display = 'block';
		contErro += 1;
	}else{
		caixa_detalhesdenegociacao.style.display = 'none';
	}

	/* Validação do campo telefone */
	caixa_vendedor = document.querySelector('.msg-vendedor');
	if(vendedor.value === ""){
		caixa_vendedor.innerHTML = "Favor preencher o nome do Vendedor";
		caixa_vendedor.style.display = 'block';
		contErro += 1;
	}else{
		caixa_vendedor.style.display = 'none';
	}

	/* Validação do campo status */
	caixa_status = document.querySelector('.msg-status');
	if(status.value === ""){
		caixa_status.innerHTML = "Favor preencher o Status";
		caixa_status.style.display = 'block';
		contErro += 1;
	}else{
		caixa_status.style.display = 'none';
	}

	if(contErro > 0){
		evt.preventDefault();
	}
}

/* Função para formatar dados conforme parâmetro enviado, CELULAR */
function mascaraTexto(t, mask){
	var i = t.value.length;
	var saida = mask.substring(1,0);
	var texto = mask.substring(i);

	if (texto.substring(0,1) != saida){
		t.value += texto.substring(0,1);
	}
}

/* Função para exibir a imagem selecionada no input file na elemento <img>  
function loadFoto(file, img){
    if (file.files && file.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
           img.src = e.target.result;
        }
        reader.readAsDataURL(file.files[0]);
    }
}*/