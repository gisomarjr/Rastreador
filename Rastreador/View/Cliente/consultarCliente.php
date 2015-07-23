<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
-->
<script>
$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    //$("[data-toggle=tooltip]").tooltip();
});
</script>



<script type="text/javascript">
	
                function listar(){
                    
			jQuery.ajax({
				type: "POST",
				url: "../../Action/Cliente.php",
                                dataType : "json",
				data: {acao : "listar"},
				success: function( data )
                                 
				{
                                   $("#conteudo").html("");
                                   for(var i = 1; i <= data.indice; i++){ 
                                          
                                          $("#conteudo").append("<tr>\n\
                                                               <td >"+data[i].idCliente+"</td>\n\
                                                               <td >"+data[i].nome+"</td>\n\
                                                               <td >"+data[i].endereco+"</td>\n\
                                                               <td >"+data[i].cpf+"</td>\n\
                                                               <td >"+data[i].rg+"</td>\n\
                                                               <td><p data-placement='top' data-toggle='tooltip' title='Editar'><button onclick='consultarID("+data[i].idCliente+",\"editar\");' class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p></td>\n\
                                                               <td><p data-placement='top' data-toggle='tooltip' title='Excluir'><button onclick='consultarID("+data[i].idCliente+",\"excluir\");'  class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span></button></p></td>\n\
                                                               </tr>");

                                              }
                                   
                                }
           
                                            
                                                       
			});
			
			return false;
		}
	
	</script>
<script>
    jQuery(document).ready(function(){
        listar();
    });
</script>
<script type="text/javascript">
	
		function consultarID(idCliente,tipo){
			jQuery.ajax({
				type: "POST",
				url: "../../Action/Cliente.php",
                                dataType : "json",
				data: {acao : "consultarID", idCliente: idCliente},
				success: function( data )
                   
				{
                                   if(tipo === "editar"){ 
                                    for(var i = 1; i <= data.indice; i++)
                                    {

                                        $('#valorNomeCliente').val(data[i].nome);
                                        $('#valorRgCliente').val(data[i].rg);
                                        $('#valorCpfCliente').val(data[i].cpf);
                                        $('#valorEnderecoCliente').val(data[i].endereco);
                                        $('#idClienteEditar').val(data[i].idCliente);
                                       
                                    }
                                }
                                    else
                                    {
                                        for(var i = 1; i <= data.indice; i++)
                                        {
                                            $('#ExcluirNomeCliente').html("");
                                            $('#ExcluirCpfCliente').html("");
                                            $('#idClienteEditar').html("");
                                            $('#ExcluirNomeCliente').append(data[i].nome);
                                            $('#ExcluirCpfCliente').append(data[i].cpf);
                                            $('#idClienteEditar').val(data[i].idCliente);
                                        }
                                    }
                                }
                                   
                                
           
                                            
				
			});
			
			return false;
		
                                                   }
	</script>



<script type="text/javascript">
	
		
                function editar(){
                               
                        var idCliente = $('#idClienteEditar').val();
                        var endereco  = $('#valorEnderecoCliente').val();
                        var rg        = $('#valorRgCliente').val();
                        var cpf       = $('#valorCpfCliente').val();
                        var nome      = $('#valorNomeCliente').val();
                        
			jQuery.ajax({
				type: "POST",
				url: "../../Action/Cliente.php",
                                dataType : "json",
				data: {acao: "alterar",
                                       idCliente: idCliente,
                                       cpf: cpf,
                                       endereco: endereco,
                                       rg: rg,
                                       nome: nome},
                                    
				success: function( data )
                   
				{
                                  
                                   if(data.sucesso){
                                       
                                       $("#msgSucesso").html("");
                                                $("#msgSucesso").append("<div  class='container'>\n\
                                                                <div  class='row'>\n\
                                                  <div  class='col-md-6 col-md-offset-3 '>\n\
                                                  <div class='alert alert-success'>\n\
                                                  <span class='glyphicon glyphicon-ok'></span> <strong>Editar Cliente</strong><hr class='message-inner-separator'><p>Cliente editado com Sucesso!</p>\n\
                                                                  </div>\n\
                                                                  </div>\n\
                                                                  </div>\n\
                                                                  </div>");
                                                      
                                                     listar();
                                       
                                   }else{
                                       $("#msgErro").html("");
                                       $("#msgErro").append("<div  class='container'>\n\
                                                                <div  class='row'>\n\
                                                  <div  class='col-md-4 col-md-offset-4'>\n\
                                                  <div class='alert alert-danger'>\n\
                                                  <span class='glyphicon glyphicon-hand-right'></span> <strong>Erro :(</strong><hr class='message-inner-separator'><p>Não foi possível editar um cliente!</p>\n\
                                                                  </div>\n\
                                                                  </div>\n\
                                                                  </div>\n\
                                                                  </div>");
                                   }
                                }
                          	});
                                return false;
		  
                }
			
	          
	</script>
        
        
        <script type="text/javascript">
	
		
                function excluir(){
                               
                        var idCliente = $('#idClienteEditar').val();
                        
			jQuery.ajax({
				type: "POST",
				url: "../../Action/Cliente.php",
                                dataType : "json",
				data: {acao: "excluir",
                                       idCliente: idCliente,
                                      },
                                    
				success: function( data )
                   
				{
                                  
                                   if(data.sucesso){
                                       
                                       $("#msgSucesso").html("");
                                                $("#msgSucesso").append("<div  class='container'>\n\
                                                                <div  class='row'>\n\
                                                  <div  class='col-md-6 col-md-offset-3 '>\n\
                                                  <div class='alert alert-success'>\n\
                                                  <span class='glyphicon glyphicon-ok'></span> <strong>Excluir Cliente</strong><hr class='message-inner-separator'><p>Cliente excluído com Sucesso!</p>\n\
                                                                  </div>\n\
                                                                  </div>\n\
                                                                  </div>\n\
                                                                  </div>");
                                                      
                                                     listar();
                                       
                                   }else{
                                       $("#msgErro").html("");
                                       $("#msgErro").append("<div  class='container'>\n\
                                                                <div  class='row'>\n\
                                                  <div  class='col-md-4 col-md-offset-4'>\n\
                                                  <div class='alert alert-danger'>\n\
                                                  <span class='glyphicon glyphicon-hand-right'></span> <strong>Erro :(</strong><hr class='message-inner-separator'><p>Não foi possível excluir o cliente!</p>\n\
                                                                  </div>\n\
                                                                  </div>\n\
                                                                  </div>\n\
                                                                  </div>");
                                   }
                                }
                          	});
                                return false;
		  
                }
			
	          
	</script>

<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>Consultar Cliente</h4>
        
         <h5>lista de até 10 clientes</h5>
        <div class="table-responsive">
            
            <div align="center" id="msgSucesso"></div> <div align="center" id="msgErro"></div>
                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   
                   <th>Id</th>
                    <th>Nome do Cliente</th>
                     <th>Endereço</th>
                     <th>CPF</th>
                     <th>RG</th>
                      <th>Editar</th>
                      
                       <th>Excluir</th>
                   </thead>
                    
                   <tbody id="conteudo">
        
        
    
                   </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
	</div>
</div>

<!--Editar-->
<form action="#" id="ajax_form" method="post" class="form-horizontal">
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
              
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        
        <h4 class="modal-title custom_align" id="Heading">Editar Cliente</h4>
          
          </div>
          <div class="modal-body">
          <div class="form-group">
              
        Nome: <input id="valorNomeCliente" class="form-control" type="text" placeholder="Nome do Cliente">
        
        </div>
        
        <div class="form-group">
        
       CPF: <input id="valorCpfCliente" class="form-control " type="text" placeholder="CPF">
        </div>
        <div class="form-group">
        
       RG: <input id="valorRgCliente" class="form-control " type="text" placeholder="RG">

        </div>
       
        <div class="form-group">
        
        Endereço: <input id="valorEnderecoCliente" class="form-control " type="text" placeholder="Endereço">

        </div>
              
      </div>
          <div class="modal-footer ">
          <input type="hidden" name="acao" value="editar">
          <input type="hidden" id="idClienteEditar">
          <button type="button" data-dismiss="modal" onclick="editar();" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Atualizar</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    </form>
    
    <!--Excluir-->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Deletar o Cliente</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger">
           <span class="glyphicon glyphicon-warning-sign"></span> 
           Você deseja excluir o cliente: <b id="ExcluirNomeCliente" ></b> vinculado ao CPF: <b id="ExcluirCpfCliente"></b> ?
       </div>
       
      </div>
        <div class="modal-footer ">
            <button type="button" class="btn btn-success" onclick="excluir();" data-dismiss="modal" ><span class="glyphicon glyphicon-ok-sign"></span> Sim</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Não</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>