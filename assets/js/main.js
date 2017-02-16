var substringMatcher = function(strs) {
    return function findMatches(q, cb) {
        var matches, substringRegex;
        matches = [];
        substrRegex = new RegExp(q, 'i');
        $.each(strs, function(i, str) {
            if (substrRegex.test(str)) {
                matches.push(str);
            }
        });
        cb(matches);
    };
};

var countries = [];
$.getJSON('countries.json').done(function (data) {
    var i=0;
    while (data[i]) {
        countries.push(data[i]);
        i=i+1;
    }
});

$('#productName').typeahead({
    hint: true,
    highlight: true,
    minLength: 1
},
{
    name: 'countries',
    source: substringMatcher(countries)
});

var subTotal = 0;
var afterDiscount = subTotal;
var discount = 0;
var total =0;
var myTableArray = [];
function addToCart(){
    var productName = document.getElementsByName('productName')[0].value;
    var productQuantity = document.getElementsByName('quantity')[0].value;
    var productPrice = document.getElementsByName('price')[0].value;
    total = productPrice*productQuantity;
    subTotal = subTotal + total;
    var cartTable = document.getElementById('cartTable');
    var cartRow = cartTable.insertRow(0);
    var cell1 = cartRow.insertCell(0);
    var cell2 = cartRow.insertCell(1);
    cell2.innerHTML = productName;
    var cell3 = cartRow.insertCell(2);
    cell3.innerHTML =  productQuantity;
    var cell4 = cartRow.insertCell(3);
    cell4.innerHTML = productPrice;
    var cell5 = cartRow.insertCell(4);
    cell5.innerHTML = total;
    var cell6 = cartRow.insertCell(5);
    $('.total_ammount h4').html(subTotal);
    $('.after_discoount h4').html(subTotal-discount);
    cell6.innerHTML = '<div><a href="#" class="row_remove" ><i class="ion-close-circled" style="color:red;"></i></a></div>';
    document.getElementById('checkout_ammount').value = subTotal;
    afterDiscount = subTotal - discount;
    // if(afterDiscount!=subTotal){

    // }
}

$('.crtTbl').on('click', '.row_remove', function(e){
    $(this).closest('tr').remove();


    $(this).closest('tr').each(function() {
        var arrayOfThisRow = [];
        var tableData = $(this).find('td');
        if (tableData.length > 0) {
            tableData.each(function() { arrayOfThisRow.push($(this).text()); });
            myTableArray.push(arrayOfThisRow);
        }
    });

    subTotal = subTotal - myTableArray[0][4];
    var tempDisc = $('.discount ul li a').innerHTML;
    console.log(tempDisc);
    if(afterDiscount==0){
        afterDiscount = subTotal;
    }else{
        afterDiscount = subTotal - discount;

    }
    $('.total_ammount h4').html(subTotal);
    $('.after_discoount h4').html(afterDiscount);
    document.getElementById('checkout_ammount').value = afterDiscount;

});

$('.new_customer').slideUp();
$(".newCustomerToggler").click(function(){
    $('.new_customer').slideToggle();
});
var tempDiscVal = 0;
function setDiscount(){
    $('.discount ul li a').remove('a');
    $('.discount ul li:nth-child(2)').html('<div class="input-group updateInput"><input type="number" name="updateDiscount" class="form-control" value="0" placeholder="Enter ammount"><span class="input-group-btn"><button class="btn btn-info" id="updateDiscount" type="button">Update</button></span></div>');
    tempDiscVal = document.getElementsByName('updateDiscount')[0].value;
    var tempDisc = $('.discount ul li div');

    var temp1 = document.getElementById('updateDiscount');
    temp1.onclick = urDis;
    // console.log(tempDiscVal);
    // $('.discount ul li button').onclick().remove('.updateInput');

}
function urDis(){
    tempDiscVal = document.getElementsByName('updateDiscount')[0].value;
    discount = tempDiscVal;
    $('.discount ul li div').remove();
    var cell3i = '<a href="#" onclick="setDiscount()">';
    cell3i = cell3i.concat(tempDiscVal);
    var cell3j = '</a>'
    cell3i = cell3i.concat(cell3j);
    $('.discount ul li:nth-child(2)').html(cell3i);
    afterDiscount = subTotal - tempDiscVal;
    $('.total_ammount h4').html(subTotal);
    $('.after_discoount h4').html(afterDiscount);
    document.getElementById('checkout_ammount').value = afterDiscount;
}
console.log(subTotal);
console.log(afterDiscount);