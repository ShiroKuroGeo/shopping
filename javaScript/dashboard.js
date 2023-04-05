$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == 404) {
        window.location.href = "./.";
    }
    viewCategory();
    viewCartsNumber();
    doEcoProduct();
});

$('#btnSearch').click(function(){
  doSearch();
});

//View Category
var viewCategory =()=>{
  $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice: 'category'},
    success: function(data){
      var json = JSON.parse(data);
      var str = "";
      json.forEach(element => {
          str += `<div class="hoverItemCat col-2 text-center m-2 p-2 border">
                    <a href='shop.php?category=${element.id}'> <img src='./user_dashboard/uploads/${element.image}' width="120"></a>
                    <p style="font-size: 16px;">${element.category_title}</p>
                  </div>`;
      });
      $('#getCategory').append(str);
    },
    error: function(xhr, ajaxOptions, thrownError){
      alert(thrownError);
    }
  });
}

//View Carts Number
var viewCartsNumber =()=>{
  $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice: 'cartsNumber'},
    success: function(data){
      var json = JSON.parse(data);
      $('#cartNumber').append(json.length);
    },
    error: function(xhr, ajaxOptions, thrownError){
      alert(thrownError);
    }
  });
}

//View Eco Products
var doEcoProduct =()=>{
  $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice: 'doEcoProduct'},
    success: function(data){
      var json = JSON.parse(data);
      var str = "";
      json.forEach(element => {
      str += `
      <div class="hoverItemCat col-2 text-center m-2 p-2 border">
        <a href='product_details.php?product_id= ${element.product_id}'><img src='./user_dashboard/product_uploads/${element.image_1}' width="120" class='card-img-top' alt='${element.title}'></a>
        <p style="font-size: 16px;">${element.title}</p>
        <p style="font-size: 16px;">${element.price}</p>
         <div class='stars m-2'>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star'></i>
            <i class='fas fa-star-half-alt'></i>
          </div>
          <div>
            <a href='#' class='btn btn-success'>Add to cart</a>
            <a href='product_details.php?product_id= ${element.product_id}' class='btn btn-primary'>View me</a>
          </div>
      </div>`;
      });
      $('#getProducts').append(str);
    },
    error: function(xhr, ajaxOptions, thrownError){
      alert(thrownError);
    }
  });
}
//View Get Products
var doSearch =()=>{
  $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice: 'doSearch', Item:$('#searchProduct').val()},
    success: function(data){
      var json = JSON.parse(data);

      if(json.length > 0){
        var str = "";
        json.forEach(element =>{
          // str = ${Headers("location:")} element.title;
          str = 'search.php?search='+element.title+'&search_now=search';
        });
        window.location.href = str;
      }else{
        alert("The product is not found!");
      }
    },
    error: function(xhr, ajaxOptions, thrownError){
      alert(thrownError);
    }
  });
}