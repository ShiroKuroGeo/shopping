$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == 404) {
        window.location.href = "./.";
    }
    viewCategory();
    viewCartsNumber();
    doEcoProduct();
    doModalGetEcoProduct();
});

$('#btnSearch').click(function(){
  doSearch();
});

//Ongoing
function addToCart(){
  // $.ajax({
  //   type: "POST",
  //   url: "./source/router.php",
  //   data: {choice:'doAddToCart',product:$('#Firstname').val(),user:$('#Lastname').val(),image:$('#Username').val(),title:$('#Address').val(),price:$('#phone').val(),qt:$('#Email').val(),total:$('#Password').val()},
  //   success: function(data){
  //     alert(data);
  //   },
  //   error: function(xhr, ajaxOptions, thrownError){
  //     alert(thrownError);
  //   }
  // });
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
          <div>
            <button type="button" class='btn btn-success' id="addtocart" data-bs-toggle="modal" data-bs-target="#addtocart">Add to cart</button>
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

//get product via modal
var doModalGetEcoProduct =()=>{
  $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice: 'doEcoProduct'},
    success: function(data){
      var json = JSON.parse(data);
      var str = "";
      json.forEach(element => {
      str =
      `
      <div class="input-group input-group-sm ">
        <input type="text" class="form-control" id="inp${element.product_id}" value="${element.product_id}">
      </div>
      <div class="input-group input-group-sm mt-2">
        <input type="text" class="form-control" id="inputUsername" placeholder="Enter Your name">
      </div>
      <div class="input-group input-group-sm mt-2">
        <input type="text" class="form-control" id="inp${element.image_1}" value="${element.image_1}">
      </div>
      <div class="input-group input-group-sm mt-2">
        <input type="text" class="form-control" id="inp${element.title}" value="${element.title}">
      </div>
      <div class="input-group input-group-sm mt-2">
        <input type="text" class="form-control" id="inp${element.price}" value="${element.price}">
      </div>
      <div class="input-group input-group-sm mt-2">
        <input type="text" class="form-control" id="inpQuantity" placeholder="Enter Quantity">
      </div>
      <div class="input-group input-group-sm mt-2">
        <input type="text" class="form-control" id="inp${element.price}" value="${element.price}">
      </div>
      `;
      });
      $('#addthisItemToCart').append(str);
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