	function limparFormulario() {
   		document.getElementById('bairro').value = ("");
    	document.getElementById('cidade').value = ("");
    	document.getElementById('uf').value = ("");
	}


	function meu_callback(endereco) {
		if (!("erro" in endereco)) {
    	document.getElementById('bairro').value=(endereco.bairro);
    	document.getElementById('cidade').value=(endereco.localidade);
    	document.getElementById('uf').value=(endereco.uf);
	} else {
		limparFormulario();
		alert("CEP não encontrado");
	}
}

	function pesquisacep(valor) {
		var cep = valor.replace(/\D/g, '');

		if (cep != ""){
			var validacep = /^[0-9]{8}$/;
			
			if(validacep.test(cep)) {
				document.getElementById('bairro').value="...";
				document.getElementById('cidade').value="...";
				document.getElementById('uf').value="...";

				var script = document.createElement('script');

				script.src = 'https://viacep.com.br/ws/'+ cep +'/json/?callback=meu_callback';

				document.body.appendChild(script);

			} else {

				limparFormulario();
				alert("Formato de CEP inválido");
			}
		} else{
			limparFormulario();
		}
	};



/*

const eNumero = (numero) => /^[0-9]+$/.test(numero);

const cepValido = (cep) => cep.length == 8 && eNumero(cep); 

const pesquisarCep = async() => {
    limparFormulario();
    
    const cep = document.getElementById('cep').value.replace("-","");
    const url = `https://viacep.com.br/ws/${cep}/json/`;
    if (cepValido(cep)){
        const dados = await fetch(url);
        const endereco = await dados.json();
        if (endereco.hasOwnProperty('erro')){
            document.getElementById('endereco').value = 'CEP não encontrado!';
        }else {
            preencherFormulario(endereco);
        }
    }else{
        document.getElementById('endereco').value = 'CEP incorreto!';
    }
     
}

document.getElementById('cep')
        .addEventListener('focusout',pesquisarCep);


/*

let cep = document.querySelector('#cep');
let bairro = document.querySelector('#bairro');
let localidade = document.querySelector('#localidade');
let uf = document.querySelector('#uf');

cep.value = '01001000';

cep.addEventListener('blur', function(e){
	let cep = e.target.value;
	let script = document.createElement('script');
	script.src = 'https://viacep.com.br/ws/'+$cep+'/json/?callback=callback_name';
	document.body.appendChild(script);
});

function popularForm(resposta){
	if("erro" in resposta){
		alert('CEP não encontrado');;
		return;
	}

	console.log(resposta);
	bairro.value = resposta.bairro
	localidade.value = resposta.localidade;
	uf.value = respota.uf;
}
*/