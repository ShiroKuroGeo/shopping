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

$('#addThisProductToCart').click(function(){
  prodcutAddThisToCart();
});


function prodcutAddThisToCart(){
  $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice:'doAddToCart',product:$('#productIDAddThisCart').val(),user:$('#usernameAddThisCart').val(),image:$('#imageAddThisCart').val(),title:$('#titleAddThisCart').val(),price:$('#priceAddThisCart').val(),qt:$('#quantityAddThisCart').val(),total:$('#totalAddThisCart').val()},
    success: function(data){
      alert(data);
    },
    error: function(xhr, ajaxOptions, thrownError){
      alert(thrownError);
    }
  });
}

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
          <div>'
            <button type="button" class='btn btn-success' onclick="toModal(${element.product_id});" data-bs-toggle="modal" data-bs-target="#addtocart">Add to cart</button>
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

function toModal(id){
  $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice: 'doClickProduct', Item:id},
    success: function(data){
      var json = JSON.parse(data);
      str = "";
      json.forEach(Element => {
        str = `
          <div class="input-group">
            <input type="text" id="productIDAddThisCart" class="form-control" value="${Element.product_id}">
          </div>
          <div class="input-group mt-2">
            <input type="text" id="usernameAddThisCart" class="form-control" placeholder="Enter Username">
          </div>
          <div class="input-group mt-2">
            <input type="text" id="imageAddThisCart" class="form-control" value="${Element.image_1}">
          </div>
          <div class="input-group mt-2">
            <input type="text" id="titleAddThisCart" class="form-control" value="${Element.title}">
          </div>
          <div class="input-group mt-2">
            <input type="text" id="priceAddThisCart" class="form-control" value="${Element.price}">
          </div>
          <div class="input-group mt-2">
            <input type="text" id="quantityAddThisCart" class="form-control" placeholder="Quantity value">
          </div>
          <div class="input-group mt-2">
            <input type="text" id="totalAddThisCart" class="form-control" value="${Element.price}">
          </div>
        `;
      });
      $('#addthisItemToCart').empty().append(str);
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