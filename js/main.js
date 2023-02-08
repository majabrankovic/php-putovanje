$('#dodajForm').submit(function () {
  event.preventDefault();
  console.log("Dodavanje");
  const $form = $(this);
  const $input = $form.find('input, select, button, textarea');

  const serijalizacija = $form.serialize();
  console.log(serijalizacija);

  $input.prop('disabled', true);

  req = $.ajax({
    url: 'handler/dodajDestinaciju.php',
    type: 'post',
    data: serijalizacija
  });

  req.done(function (res, textStatus, jqXHR) {
    if (res.indexOf("Ok") != -1) {
      alert("Destinacija je dodata");
      location.reload(true);
    } else console.log("Destinacija nije dodata" + res);
});

  req.fail(function (jqXHR, textStatus, errorThrown) {
    console.error('Desila se greska: ' + textStatus, errorThrown)
  });
});



$('#btn').click(function () {
  $('#pregled').toggle();
});

$('#btnDodaj').submit(function () {
  $('#myModal').modal('toggle');
  return false;
});

$('#btnIzmeni').submit(function () {
  $('#myModal').modal('toggle');
  return false;
});

$("#vrsta").change(function(){
  var vrstaId =  $('#vrsta').val();
  $('#vrstaId').val(vrstaId);
  
});

//Edit
$('.btn-info').click(function () {

  const trenutni = $(this).attr('data-id2');
  console.log(trenutni);
  var nazivDestinacije = $(this).closest('tr').children('td[data-target=nazivDestinacije]').text();
  console.log(nazivDestinacije);
  var brojLjudi = $(this).closest('tr').children('td[data-target=brojLjudi]').text();
  var cena = $(this).closest('tr').children('td[data-target=cena]').text();
  console.log(cena);
  var vrstaId = $(this).closest('tr').children('td[data-target=vrstaId]').text();
  console.log(vrstaId);
  

  $('#destinacijaId').val(trenutni);
  $('#nazivDestinacije').val(nazivDestinacije);
  $('#brojLjudi').val(brojLjudi);
  document.getElementById('vrstaOznaceni').value = vrstaId;
});




