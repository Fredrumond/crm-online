$(document).ready(function(){
  //chamar mascara de tempo
  $('.time').mask('00:00:00');
});


//Calendario com dados em portugues
$(function(){
     $.datepicker.regional['pt-BR'] = {
      closeText: 'Fechar',
      prevText: '&#x3c;Anterior',
      nextText: 'Pr&oacute;ximo&#x3e;',
      currentText: 'Hoje',
      monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho',
      'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
      monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
      'Jul','Ago','Set','Out','Nov','Dez'],
      dayNames: ['Domingo','Segunda-feira','Ter&ccedil;a-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sabado'],
      dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
      dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
      weekHeader: 'Sm',
      dateFormat: 'dd/mm/yy',
      firstDay: 0,
      isRTL: false,
      showMonthAfterYear: false,
      yearSuffix: ''};
     $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
    });

    $( "#datepicker" ).datepicker( $.datepicker.regional[ "pt-BR" ]);

    //LIMITAR CARACTERES
    $("#descricao").bind("input keyup paste",function(){
      var maximo = 140;
      var disponivel = maximo - $(this).val().length;
      if(disponivel < 0 ){
        var texto = $(this).val().substr(0,maximo);
        $(this).val(texto);
        disponivel = 0;
      }
      $(".contagem").text(disponivel);
    });

    
