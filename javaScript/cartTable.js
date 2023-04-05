$(document).ready(function(){
    let tmp = localStorage.getItem('isloggedin');
    if (tmp == 404) {
        window.location.href = "./.";
    }
    viewCarts();
});

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
                <tr>
                    <th scope="row">${count++}</th>
                    <td> <img src="./user_dashboard/product_uploads/${element.image}" width="50" class="image"></td>
                    <td><input type="checkbox" id="checkPrice" value="${element.price}">${element.price}</td>
                    <td>${element.Qt}</td>
                    <td>${element.total_price}</td>
                    <td>
                        <button type="button" onclick="updateFunction()" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#updateModal">Update</button>
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

var updateFunction =()=>{
    let checkPrice = document.getElementById("checkPrice").value;
    alert(checkPrice);
}

var deleteFunction =(id)=>{
    alert(id);
}