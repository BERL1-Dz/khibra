
  //Edit
$('#edit').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  //var recipient = button.data('whatever') 
  var pname = button.data('pname')
  var phone = button.data('phone_number')
  var email = button.data('email')
  var address = button.data('addr')
  var description = button.data('des')
  var prof_id =button.data('profid')
  var modal = $(this)
  
  //modal.find('.modal-body input').val(recipient)
  modal.find('.modal-body #name').val(name)
  modal.find('.modal-body #phone').val(phone)
  modal.find('.modal-body #email').val(email)
  modal.find('.modal-body #address').val(address)
  modal.find('.modal-body #description').val(description)
  modal.find('.modal-body #prof_id').val(profid)

})
