
// function pushState()
// {
// 	bindFunctions();
// };


// function bindFunctions()
// {
//  $('.donateProduct input[data-price]').on('input', function()
//  {
//    calcDonateProductTotalPrices();
//  });
// }


// function calcDonateProductTotalPrices()
// {
//  var TotalPrice = 0;
//  $('.donateProduct input[data-price]').each(function()
//  {
//    var thisProductPrice = $(this).attr('data-price');
//      if(isNaN(thisProductPrice))
//      {
//        thisProductPrice = 0;
//      }
//    var thisProductTotal = $(this).val() * thisProductPrice;
//      if(isNaN(thisProductPrice))
//      {
//        thisProductTotal = 0;
//      }
//      // $(this).parents('.input').find('.addon').text(fitNumber(thisProductTotal));
//      TotalPrice += thisProductTotal;
//  });
//  $('#totalAmount').val(TotalPrice);
// }


$(function()
{
	responsiveSiteSidebar();
});

function responsiveSiteSidebar()
{
  $('body').on('click', function(_e)
  {
    if($(_e.target).is('#sitesidebarHandler'))
    {
      // click on hanlder, do nothing!
      $("body").attr('data-sidebar', 'dada');
    }
    else if($(_e.target).is('#sitesidebar') || $(_e.target).parents('#sitesidebar').lenght)
    {
      $("body").attr('data-sidebar', 'baba');
    }
    else if($('body').attr('data-sidebar') === undefined)
    {
      // do nothing because its none!
    }
    else
    {
      $("body").attr('data-sidebar', null);
    }
  });

  $('#sitesidebar a[href]').on('click', function()
  {
      setTimeout(function()
      {
        $("body").attr('data-sidebar', null);
      }, 500);
  })
}





