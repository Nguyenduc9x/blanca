$( document ).ready(function() {
    console.log( "ready!" );
  $('#newpw').on('keyup', function(){
  compareInput();
});

$('#repeatnewpw').on('keyup', function(){
  compareInput();
});

function compareInput(){
  console.log('compare pw');
  var newpw = $('#newpw').val();
  var repnewpw = $('#repeatnewpw').val();
  if(newpw === repnewpw){
    $("#btn-sub").prop('disabled', false);
  }else{
    $("#btn-sub").prop('disabled', true);
  }
}
});