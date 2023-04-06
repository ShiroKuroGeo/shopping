$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == 404) {
        window.location.href = "./.";
    }
    viewCarts();
    viewCartsNumber();viewTotalCost()
});

function viewTotalCost(){

    var checkedPrice = $('#checkPrice');
    var totalCost = $('#totalCostOfCart');

    checkedPrice.addEventListener("keyup", function(e){
        totalCost.innerHTML = checkedPrice.value;
    });
}

var viewCarts =()=>{
    $.ajax({
    type: "POST",
    url: "./source/router.php",
    data: {choice: 'doGetCart'},
    success: function(data){
        var json = JSON.parse(data);
        var str = "";
        var count = 1;
        json.forEach(element => {
            str += 
            `
                <tr style="height: -10px;">
                    <th scope="row">${count}</th>
                    <td> <img src="./user_dashboard/product_uploads/${element.image}" width="50" class="image"></td>
                    <td><input type="checkbox" id="checkPrice" value="${element.price}"> ${element.price}</td>
                    <td><input type="text" id="updateNumber" value="${element.Qt}"></td>
                    <td>${element.price * element.Qt}</td>
                    <td>
                        <button type="button" onclick="updateFunction(${element.id})" class="btn btn-sm btn-outline-info">Update</button>
                        <button class="btn btn-sm btn-outline-danger" onclick="deleteFunction(${element.id});">Delete</button>
                    </td>
                </tr>
            `;
            count++;
        });
        $('#tblCart').append(str);
    },
    error: function(xhr, ajaxOptions, thrownError){
        alert(thrownError);
    }
    });
}

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
  
var updateFunction =(id)=>{
    if(confirm("Are you sure you want to update this item")){
        $.ajax({
            type: "POST",
            url: "./source/router.php",
            data: {choice: 'doUpdateCartQuery', Quantity:$('#updateNumber').val(), ID:id},
            success: function(data){
                if(data == 200){
                    window.location.href = "./dashCartTable.html";
                }else{
                    alert("Updated Failed!");
                }
            },
            error: function(xhr, ajaxOptions, thrownError){
              alert(thrownError);
            }
        });
    }else{
        window.location.href = "dashCartTable.html";
    }
}

var deleteFunction =(id)=>{
    if(confirm("Are you sure you want to delete this item")){
        $.ajax({
            type: "POST",
            url: "./source/router.php",
            data: {choice: 'doDeleteCartQuery', ID:id},
            success: function(data){
                if(data == 200){
                    window.location.href = "./dashCartTable.html";
                }else{
                    alert("Deleted Failed!");
                }
            },
            error: function(xhr, ajaxOptions, thrownError){
                alert(thrownError);
            }
        });
    }
}