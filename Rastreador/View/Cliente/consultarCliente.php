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
	jQuery(document).ready(function(){
		
 
			jQuery.ajax({
				type: "POST",
				url: "../../Action/Cliente.php",
                                dataType : "json",
				data: {acao : "listar"},
				success: function( data )
                   
				{
                                    
                                   for(var i = 1; i <= data.indice; i++){ 
                                       
                                       
                                       
                                       
                                        $("#conteudo").append("<tr>\n\
                                                               <td >"+data[i].idCliente+"</td>\n\
                                                               <td >"+data[i].nome+"</td>\n\
                                                               <td >"+data[i].endereco+"</td>\n\
                                                               <td >"+data[i].cpf+"</td>\n\
                                                               <td >"+data[i].rg+"</td>\n\
                                                               <td><p data-placement='top' data-toggle='tooltip' title='Editar'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button></p></td>\n\
                                                               <td><p data-placement='top' data-toggle='tooltip' title='Excluir'><button class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete' ><span class='glyphicon glyphicon-trash'></span></button></p></td>\n\
                                                               </tr>");
                                       
                                       
                                              }
                                   
                                }
           
                                            
				
			});
			
			return false;
		
	});
	</script>




<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>Consultar Cliente</h4>
        
         <h5>lista de até 10 clientes</h5>
        <div class="table-responsive">

                
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


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>