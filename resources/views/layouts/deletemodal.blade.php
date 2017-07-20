
<!-- 模态框（Modal） -->
<div class="modal fade" id="Delete" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               警告
            </h4>
         </div>
         <div class="modal-body">
            <p class="text-danger">确定删除？</p>
         </div>
         <div class="modal-footer">
            <input type='hidden' id='formid' value=''>
            <a class="btn btn-danger" onclick="mysubmit()">
               删除
            </a>
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">关闭
            </button>
         </div>
      </div><!-- /.modal-content -->
</div><!-- /.modal -->

<script type="text/javascript">
	function modal(formid){
		$('#formid').val(formid);
		$('#Delete').modal('show');
	}

	function mysubmit(){
		var formid = document.getElementById('formid').value;
		var form = document.getElementById(formid);
		form.submit();
	}

</script>
