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
      if(data.redirect) {
        window.location.replace(data.redirect);
      } else {
        notyf.open({
          type: data.type,
          message: data.message
        });
      }
    }
  })
}

$('input[type=button]').on('click', function(){
  var response = sendAjax(this);
});

const notyf = new Notyf({
  duration: 3000,
  position: {
   x: 'right',
   y: 'top'
  },

  types: [
    {
      type: 'info',
      background: 'darkorange',
      icon: false,
      dismissible: true
    },
    {
      type: 'error',
      background: 'tomato',
      icon: false,
      dismissible: true
    },
    {
      type: 'success',
      background: 'mediumseagreen',
      icon: false,
      dismissible: true
    }
    
  ]
});

