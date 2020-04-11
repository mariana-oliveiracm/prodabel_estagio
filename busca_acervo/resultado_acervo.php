<HTML>
<HEAD>
	<TITLE>Resultado Busca</TITLE>  
	<meta charset = "utf-8">
    <link href='css/jquery-ui.min.css' rel="stylesheet" type='text/css'>
	  <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>    
    <link href='css/busca-atual.css' rel='stylesheet' type='text/css'> 
</HEAD>
<BODY>
<h4>RESULTADOS DA CONSULTA:</h4>
<?php

$produtos = array("NULLAM-PORTTITOR_FILE-01_2049.pdf","NULLAM-PORTTITOR_FILE-02_2049.pdf","NULLAM-PORTTITOR_FILE-03_2049.pdf","NULLAM-PORTTITOR_FILE-04_2049.pdf","NULLAM-PORTTITOR_FILE-05_2049.pdf","NULLAM-PORTTITOR_FILE-06_2049.pdf","NULLAM-PORTTITOR_FILE-07_2049.pdf","NULLAM-PORTTITOR_FILE-08_2049.pdf","NULLAM-PORTTITOR_FILE-09_2049.pdf","NULLAM-PORTTITOR_FILE-10_2049.pdf","NULLAM-PORTTITOR_FILE-11_2049.pdf","QUISQUE-ULTRICES-MAURIS_FILE-01_2053.pdf","QUISQUE-ULTRICES-MAURIS_FILE-02_2053.pdf","QUISQUE-ULTRICES-MAURIS_FILE-03_2053.pdf","PELLENTESQUE_FILE-01_2069.dwg", "PELLENTESQUE_FILE-02_2069.dwg","MORBI-PRETIUM_FILE-01_2033.pdf","MORBI-PRETIUM_FILE-02_2033.pdf","MORBI-PRETIUM_FILE-03_2048.pdf","MORBI-PRETIUM_FILE-04_2074.pdf","MORBI-PRETIUM_FILE-05_2074.pdf","INTERDUM-ET-MALESUADA_FILE-01_2031.pdf","INTERDUM-ET-MALESUADA_FILE-02_2031.pdf","INTERDUM-ET-MALESUADA_FILE-03_2067.pdf","INTERDUM-ET-MALESUADA_FILE-04_2067.pdf");

$descricoes = array("Nullam porttitor ante quis est facilisis, in blandit erat elementum. Nullam pellentesque est sed libero pulvinar, vitae tempus diam iaculis. Curabitur cursus consectetur mattis. Suspendisse vitae lobortis neque.","Nullam porttitor ante quis est facilisis, in blandit erat elementum. Nullam pellentesque est sed libero pulvinar, vitae tempus diam iaculis. Curabitur cursus consectetur mattis. Suspendisse vitae lobortis neque.","Nullam porttitor ante quis est facilisis, in blandit erat elementum. Nullam pellentesque est sed libero pulvinar, vitae tempus diam iaculis. Curabitur cursus consectetur mattis. Suspendisse vitae lobortis neque.","Nullam porttitor ante quis est facilisis, in blandit erat elementum. Nullam pellentesque est sed libero pulvinar, vitae tempus diam iaculis. Curabitur cursus consectetur mattis. Suspendisse vitae lobortis neque.","Nullam porttitor ante quis est facilisis, in blandit erat elementum. Nullam pellentesque est sed libero pulvinar, vitae tempus diam iaculis. Curabitur cursus consectetur mattis. Suspendisse vitae lobortis neque.","Nullam porttitor ante quis est facilisis, in blandit erat elementum. Nullam pellentesque est sed libero pulvinar, vitae tempus diam iaculis. Curabitur cursus consectetur mattis. Suspendisse vitae lobortis neque.","Nullam porttitor ante quis est facilisis, in blandit erat elementum. Nullam pellentesque est sed libero pulvinar, vitae tempus diam iaculis. Curabitur cursus consectetur mattis. Suspendisse vitae lobortis neque.","Nullam porttitor ante quis est facilisis, in blandit erat elementum. Nullam pellentesque est sed libero pulvinar, vitae tempus diam iaculis. Curabitur cursus consectetur mattis. Suspendisse vitae lobortis neque.","Nullam porttitor ante quis est facilisis, in blandit erat elementum. Nullam pellentesque est sed libero pulvinar, vitae tempus diam iaculis. Curabitur cursus consectetur mattis. Suspendisse vitae lobortis neque.","Nullam porttitor ante quis est facilisis, in blandit erat elementum. Nullam pellentesque est sed libero pulvinar, vitae tempus diam iaculis. Curabitur cursus consectetur mattis. Suspendisse vitae lobortis neque.","Nullam porttitor ante quis est facilisis, in blandit erat elementum. Nullam pellentesque est sed libero pulvinar, vitae tempus diam iaculis. Curabitur cursus consectetur mattis. Suspendisse vitae lobortis neque.","Quisque ultrices mauris aliquet tincidunt laoreet. Phasellus eu enim sed ex mollis suscipit sed quis libero. Pellentesque nisl sem, aliquam vitae varius sed, lacinia a ligula. Maecenas quis condimentum quam. Pellentesque eu hendrerit arcu, vel porta sapien. Vivamus quis erat mauris.","Quisque ultrices mauris aliquet tincidunt laoreet. Phasellus eu enim sed ex mollis suscipit sed quis libero. Pellentesque nisl sem, aliquam vitae varius sed, lacinia a ligula. Maecenas quis condimentum quam. Pellentesque eu hendrerit arcu, vel porta sapien. Vivamus quis erat mauris.","Quisque ultrices mauris aliquet tincidunt laoreet. Phasellus eu enim sed ex mollis suscipit sed quis libero. Pellentesque nisl sem, aliquam vitae varius sed, lacinia a ligula. Maecenas quis condimentum quam. Pellentesque eu hendrerit arcu, vel porta sapien. Vivamus quis erat mauris.","Pellentesque arcu lacus, dignissim iaculis metus tempus, porttitor rhoncus leo. Nunc gravida quam diam, ac mattis justo rhoncus a. Praesent felis felis, efficitur et diam congue, luctus pellentesque eros. Aenean sit amet elit non nisi feugiat vulputate. Nullam nec est dictum, euismod velit tempus, imperdiet justo. Morbi consectetur congue massa eget laoreet.","Pellentesque arcu lacus, dignissim iaculis metus tempus, porttitor rhoncus leo. Nunc gravida quam diam, ac mattis justo rhoncus a. Praesent felis felis, efficitur et diam congue, luctus pellentesque eros. Aenean sit amet elit non nisi feugiat vulputate. Nullam nec est dictum, euismod velit tempus, imperdiet justo. Morbi consectetur congue massa eget laoreet.", "Nunc efficitur mollis diam. Morbi pretium aliquam urna, in rhoncus sem tristique non. Interdum et malesuada fames ac ante ipsum primis in faucibus.","Nunc efficitur mollis diam. Morbi pretium aliquam urna, in rhoncus sem tristique non. Interdum et malesuada fames ac ante ipsum primis in faucibus.","Nunc efficitur mollis diam. Morbi pretium aliquam urna, in rhoncus sem tristique non. Interdum et malesuada fames ac ante ipsum primis in faucibus.","Nunc efficitur mollis diam. Morbi pretium aliquam urna, in rhoncus sem tristique non. Interdum et malesuada fames ac ante ipsum primis in faucibus.","Nunc efficitur mollis diam. Morbi pretium aliquam urna, in rhoncus sem tristique non. Interdum et malesuada fames ac ante ipsum primis in faucibus.", "Aenean in ex ultricies, placerat tortor vel, condimentum felis. Donec orci dolor, dictum in bibendum non, eleifend eget mauris. Etiam felis risus, vestibulum nec justo sed, malesuada eleifend felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque fringilla diam et mauris faucibus porttitor. Praesent dictum justo non erat convallis pharetra.","Aenean in ex ultricies, placerat tortor vel, condimentum felis. Donec orci dolor, dictum in bibendum non, eleifend eget mauris. Etiam felis risus, vestibulum nec justo sed, malesuada eleifend felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque fringilla diam et mauris faucibus porttitor. Praesent dictum justo non erat convallis pharetra.","Aenean in ex ultricies, placerat tortor vel, condimentum felis. Donec orci dolor, dictum in bibendum non, eleifend eget mauris. Etiam felis risus, vestibulum nec justo sed, malesuada eleifend felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque fringilla diam et mauris faucibus porttitor. Praesent dictum justo non erat convallis pharetra.","Aenean in ex ultricies, placerat tortor vel, condimentum felis. Donec orci dolor, dictum in bibendum non, eleifend eget mauris. Etiam felis risus, vestibulum nec justo sed, malesuada eleifend felis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque fringilla diam et mauris faucibus porttitor. Praesent dictum justo non erat convallis pharetra.");

$endereco = '';


//INÍCIO 

//FUNÇÕES PARA ABRIR E FECHAR O ACCORDION
function abreac($titulo){
    echo "<h3>".$titulo."<h3>";
    echo "<div>";
};

function fechaac(){
    echo "</div>";
};


//TIPO DE PRODUTO INICIALMENTE
$tipo = 'nenhum';


echo "<div class=separacao>"; //PRIMEIRA DECLARAÇÃO NECESSÁRIA PARA O ACCORDION

  for ($cont=0; $cont != count($produtos); $cont++){ //PERCORRE TODOS OS PRODUTOS E DESCRIÇÕES

      $produto = $produtos[$cont]; //PRODUTO ATUAL
      $descricao = $descricoes[$cont]; //DESCRIÇÃO ATUAL
      
      switch (true){  
      
        case (strpos ($produto,'NULLAM-PORTTITOR') !==false):
          if ($tipo == 'nenhum'){ //CONFIRMA SER A PRIMEIRA ITERAÇÃO DO CASE
            abreac('NULLAM PORTTITOR'); //ABERTURA DO ACCORDION COM TÍTULO
            echo $descricao;
              echo "<p>"; //INICIA O PREENCHIMENTO DO ACCORDION
                echo "<table id='tbl-lista-itens'><tr>"; //INICIA A TABELA  
                echo "<tr>";
                  echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                  echo "<td id='icon-acervo' width='10%'>";
                  echo "<a href=".$endereco.">";						 
                  echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                  echo "</a>";
                  echo "</td>";           
                echo "</tr>";
              echo "</p>";     
          } else { //SEGUNDA E SEGUINTES ITERAÇÕES
            echo "<p>";
                echo "<tr>";
                    echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                    echo "<td id='icon-acervo' width='10%'>";
                    echo "<a href=".$endereco.">";					 
                    echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                    echo "</a>";
                    echo "</td>";           
                echo "</tr>";
            echo "</p>";
          }
          $tipo = 'NULLAM-PORTTITOR'; //DEFINE O TIPO COM O TIPO ATUAL PARA A PRÓXIMA ITERAÇÃO
        break; 

        case (strpos ($produto,'QUISQUE-ULTRICES-MAURIS') !==false):
          if ($tipo !== 'QUISQUE-ULTRICES-MAURIS'){ //CONFIRMA SER A PRIMEIRA ITERAÇÃO DO CASE
            echo "</table>"; //FECHA A TABELA DO CASE ANTERIOR
            fechaac(); //FECHA O ACCORDION DO CASE ANTERIOR
            abreac('QUISQUE U. MAURIS');
            echo $descricao;
              echo "<p>";
                echo "<table id='tbl-lista-itens'><tr>";  
                echo "<tr>";
                  echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                  echo "<td id='icon-acervo' width='10%'>";
                  echo "<a href=".$endereco.">";					 
                  echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                  echo "</a>";
                  echo "</td>";           
                echo "</tr>";
              echo "</p>";     
          } else {
            echo "<p>";
              echo "<tr>";
                echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                echo "<td id='icon-acervo' width='10%'>";
                echo "<a href=".$endereco.">";					 
                echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                echo "</a>";
                echo "</td>";           
              echo "</tr>";
            echo "</p>";
          }
          $tipo = 'QUISQUE-ULTRICES-MAURIS';
        break; 


        case (strpos ($produto,'PELLENTESQUE') !==false):
          if ($tipo !== 'PELLENTESQUE'){
            echo "</table>";
            fechaac();
            abreac('PELLENTESQUE ARCU LACUS');
            echo $descricao;
              echo "<p>";
                echo "<table id='tbl-lista-itens'><tr>";  
                echo "<tr>";
                  echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                  echo "<td id='icon-acervo' width='10%'>";
                  echo "<a href=".$endereco.">";					 
                  echo "<img src='imagem/dwg.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                  echo "</a>";
                  echo "</td>";           
                echo "</tr>";
              echo "</p>";     
          } else {
            echo "<p>";
              echo "<tr>";
                echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                echo "<td id='icon-acervo' width='10%'>";
                echo "<a href=".$endereco.">";					 
                echo "<img src='imagem/dwg.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                echo "</a>";
                echo "</td>";           
              echo "</tr>";
            echo "</p>";
          }
          $tipo = 'PELLENTESQUE';
        break;

        case (strpos ($produto,'MORBI-PRETIUM') !==false):
          if ($tipo !== 'PRETIUM'){
            echo "</table>";
            fechaac();
            abreac('PRETIUM MORBI');
            echo $descricao;
              echo "<p>";
                echo "<table id='tbl-lista-itens'><tr>";  
                echo "<tr>";
                  echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                  echo "<td id='icon-acervo' width='10%'>";
                  echo "<a href=".$endereco.">";					 
                  echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                  echo "</a>";
                  echo "</td>";           
                echo "</tr>";
              echo "</p>";     
          } else {
            echo "<p>";
              echo "<tr>";
                echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                echo "<td id='icon-acervo' width='10%'>";
                echo "<a href=".$endereco.">";					 
                echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                echo "</a>";
                echo "</td>";           
              echo "</tr>";
            echo "</p>";
          }
          $tipo = 'PRETIUM';   
        break;

        case (strpos ($produto,'INTERDUM') !==false):
          if ($tipo !== 'INTERDUM'){
            echo "</table>";
            fechaac();
            abreac('ET MALESUADA (INTERDUM)');
            echo $descricao;
              echo "<p>";
                echo "<table id='tbl-lista-itens'><tr>";  
                echo "<tr>";
                  echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                  echo "<td id='icon-acervo' width='10%'>";
                  echo "<a href=".$endereco.">";					 
                  echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                  echo "</a>";
                  echo "</td>";           
                echo "</tr>";
              echo "</p>";     
          } else {
            echo "<p>";
              echo "<tr>";
                echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                echo "<td id='icon-acervo' width='10%'>";
                echo "<a href=".$endereco.">";					 
                echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                echo "</a>";
                echo "</td>";           
              echo "</tr>";
            echo "</p>";
          }
          $tipo = 'INTERDUM';
        break;
      
        case (strpos ($produto,'FOTO') !==false):
          if ($tipo!== 'FOTO'){
            echo "</table>";
            fechaac();
            abreac('IMAGEM AÉREA');
            echo $descricao;
              echo "<p>";
                echo "<table id='tbl-lista-itens'><tr>";  
                echo "<tr>";
                  echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                  echo "<td id='icon-acervo' width='10%'>";
                  echo "<a href=".$endereco.">";					 
                  echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                  echo "</a>";
                  echo "</td>";           
                echo "</tr>";
              echo "</p>";     
          } else {
            echo "<p>";
              echo "<tr>";
                echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                echo "<td id='icon-acervo' width='10%'>";
                echo "<a href=".$endereco.">";					 
                echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                echo "</a>";
                echo "</td>";           
              echo "</tr>";
            echo "</p>";
          }
          $tipo = 'FOTO'; 
        break;        

        case (strpos ($produto,'PED') !==false):
          if ($tipo !== 'PED'){
            echo "</table>";
            fechaac();
            abreac('PLANTA DE EDIFICAÇÕES / NUMERAÇÃO');
            echo $descricao;
              echo "<p>";
              echo "<table id='tbl-lista-itens'><tr>";  
                echo "<tr>";
                  echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                  echo "<td id='icon-acervo' width='10%'>";
                  echo "<a href=".$endereco.">";					 
                  echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                  echo "</a>";
                  echo "</td>";           
                echo "</tr>";
              echo "</p>";     
          } else {
            echo "<p>";
              echo "<tr>";
                echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                echo "<td id='icon-acervo' width='10%'>";
                echo "<a href=".$endereco.">";					 
                echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                echo "</a>";
                echo "</td>";           
              echo "</tr>";
            echo "</p>";
          }
          $tipo = 'PED';  
        break;

        case (strpos ($produto,'SATELITE') !==false):
          if ($tipo !== 'SATELITE'){
            echo "</table>";
            fechaac();
            abreac('IMAGEM SATÉLITE');
            echo $descricao;
              echo "<p>";
                echo "<table id='tbl-lista-itens'><tr>";  
                echo "<tr>";
                  echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                  echo "<td id='icon-acervo' width='10%'>";
                  echo "<a href=".$endereco.">";					 
                  echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                  echo "</a>";
                  echo "</td>";           
                echo "</tr>";
              echo "</p>";     
          } else {
            echo "<p>";
              echo "<tr>";
                echo "<td id='item-acervo' width='90%'>".$produto."</td>";
                echo "<td id='icon-acervo' width='10%'>";
                echo "<a href=".$endereco.">";					 
                echo "<img src='imagem/pdf.png' alt='Download' title='download do arquivo ".$produto."' width=37 height=37>";
                echo "</a>";
                echo "</td>";           
              echo "</tr>";
            echo "</p>";
          }
              $tipo = 'SATELITE';
            break;
      
      };
    };
  echo "</div>"; //ÚLTIMA DECLARAÇÃO NECESSÁRIA PARA O ACCORDION




//FINAL 

						 
?>

<script>
$(function() {
  var icons = {
    header: "ui-icon-circle-plus",
    activeHeader: "ui-icon-circle-minus",
  }
  $( ".separacao" ).accordion({        
    icons: icons,
    collapsible: true,
    active: false,
    heightStyle: "content",
		
  });
});

function info(obj,conteudo,codigo){
		var divPop = document.getElementById("pop");
		var divIm1 = document.getElementById("im1");
		divPop.style.display = "";
		divPop.childNodes[1].firstChild.nodeValue = "";
		divIm1.src = codigo;
		divPop.childNodes[3].firstChild.nodeValue = conteudo;
		obj.appendChild(divPop);
	}

	function fechar(){
		var divPop = document.getElementById("pop");
		divPop.style.display = "none";
		}
</script>


</body>
</html>
