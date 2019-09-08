   //edit code 
$('#edit').on('show.bs.modal', function (event) {

    console.log('js sucks!');
  var button = $(event.relatedTarget) 
  var name  = button.data('name')
  var description = button.data('des')
  var cat_id = button.data('catid')
  
    
  var modal = $(this)
  
  modal.find('.modal-body #name').val(name)
  modal.find('.modal-body #description').val(description)
  modal.find('.modal-body #cat_id').val(cat_id)
  
  
})
//delete code 
$('#delete').on('show.bs.modal', function (event) {

    
  var button = $(event.relatedTarget) 
  var cat_id = button.data('catid')
  var modal = $(this)
  
  modal.find('.modal-body #cat_id').val(cat_id);
  
})
