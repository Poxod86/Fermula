var owlProducts = $('.owl-products');
owlProducts.owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:3
        }
    }
});

var owlGarage = $('.owl-garage');
owlGarage.owlCarousel({
    items:1,
    loop:false,
    margin:10,
    nav:true,
    dots:false
});

function sendAjax(element) {
  var operation = $(element).parent().attr('data-operation');
  var data = $(element).parent().serialize();
  $.ajax({
    type: 'POST',
    url: '/core/handler.php',
    data: data + '&operation=' + operation,

    success: function (data) {
      var data = JSON.parse(data);

      switch(data.type) {
        case 'success':
          alert(data.message);
        break;
        case 'error':
          alert(data.message);
        break;
        default:
          alert("Сервер вернул ошибку обратитесь к системному администатору");
          break;
      }
     console.log(data);
    }
  })
  
}

$('input[type=button]').on('click', function(){
  var response = sendAjax(this);
});