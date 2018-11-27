<!DOCTYPE html>
<html>
  <header>
  
    <title>Egressos</title>
	
    <img src="src/imagem/logo_if.png" alt="Logo if">
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
	<meta charset="utf-8">

	<nav>
		<li>EGRESSOS</li>
        <li><a href="index.html">Início</a></li>
		<li><a href="sobre.html">Sobre</a></li>
		<li><a href="encontro_de_egressos.html">Encontro de Egressos</a></li>
		<li><a href="contato.html">Contato</a></li> <br>
    </nav>

    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	
	<script type="text/javascript">
    $(document).ready(function(){
     
    <!-- Carrega os Paises -->
	
    $('#btnPais').click(function(e){
        $('#btnPais').hide();  
         
        $.getJSON('consulta.php?opcao=pais', function (dados){
            
           if (dados.length > 0){    
              var option = '<option>Paises</option>';
              $.each(dados, function(i, obj){
                  option += '<option value="'+obj.idPais+'">'+obj.nomePais+'</option>';
              })
              $('#cmbPais').html(option).show();
           }else{
               Reset();
           }
        })
    })
     
    <!-- Carrega os Estados -->
    $('#cmbPais').change(function(e){
        var pais = $('#cmbPais').val();
         
        $.getJSON('consulta.php?opcao=estado&valor='+pais, function (dados){ 
         
           if (dados.length > 0){    
              var option = '<option>Estados</option>';
              $.each(dados, function(i, obj){
                  option += '<option value="'+obj.idEstado+'">'+obj.nomeEstado+'</option>';
              }) 
           }else{
              Reset();
           }
           $('#cmbEstado').html(option).show(); 
        })
    })
     
    <!-- Carrega as Cidades -->
    $('#cmbEstado').change(function(e){
        var estado = $('#cmbEstado').val();
         
        $.getJSON('consulta.php?opcao=cidade&valor='+estado, function (dados){
             
            if (dados.length > 0){   
                var option = '<option>Cidades</option>';
                $.each(dados, function(i, obj){
                    option += '<option>'+obj.nomeCidade+'</option>';
                })
            }else{
                Reset();  
            }
            $('#cmbCidade').html(option).show();
        })
    })
     
    <!-- Resetar Selects -->
    function Reset(){
		
        $('#cmbPais').empty().append('<option>Carregar Países</option>>');
        $('#cmbEstado').empty().append('<option>Carregar Estados</option>>');
        $('#cmbCidade').empty().append('<option>Carregar Cidades</option>');
    }
});
</script> 

  </header>

<body>
  <section class="container" align="left">
		<div class="alinhar">

	   <div id="conteudo">
			<br/>
			 
			<div id="pais">
			  <label>Selecione o País:</label>
			  <select id="cmbPais">
				  <option>Carregar Paises</option>
			  </select>
			  <input type="button" value="Carregar Pais" id="btnPais" class="botao"/>
			</div>
	 
			<div id="estado">
			  <label>Selecione o Estado:</label>
			  <select id="cmbEstado">
				  <option>Carregar Estados</option>
			  </select>
			</div>
			 
			<div id="cidade">
			  <label>Selecione a Cidade:</label>
			  <select id="cmbCidade">
				  <option>Carregar Cidades</option>
			  </select>
			</div>
      </div>
	  
	  <br/>
	  
	  <a href='cadastrar.html'>Enviar</a>
	  
    </section>
		<div class="footer">
			<a href="https://pt-br.facebook.com/ifgoianoceresoficial"><img src="src/imagem/facebook.png" alt="Facebook"></a>/ifgoianoceresoficial
			<a href="https://www.instagram.com/ifgoianoceres"><img src="src/imagem/instagram.png" alt="Instagram"></a>@ifgoianoceres
			<img src="src/imagem/telefone.png" alt="Telefone">(62) 3307-7100
			<a href="https://www.ifgoiano.edu.br/ceres"><img src="src/imagem/site.png" alt="Site"></a>www.ifgoiano.edu.br/ceres
      </div>
	  
   </div>
</body> 
</html>