var substringMatcher = function(strs) {
    return function findMatches(q, cb) {
        var matches, substringRegex;

// an array that will be populated with substring matches
matches = [];

// regex used to determine if a string contains the substring `q`
substrRegex = new RegExp(q, 'i');

// iterate through the pool of strings and for any string that
// contains the substring `q`, add it to the `matches` array
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
var total =0;
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
// var cell3i = '<a href="#" >';
// cell3i = cell3i.concat(productQuantity);
// var cell3j = '</a>'
// cell3i = cell3i.concat(cell3j);
cell3.innerHTML =  productQuantity;

var cell4 = cartRow.insertCell(3);
cell4.innerHTML = productPrice;

var cell5 = cartRow.insertCell(4);
cell5.innerHTML = total;
var cell6 = cartRow.insertCell(5);
$('.sub_total ul li h4').html(subTotal);
cell6.innerHTML = '<div><a href="#" class="row_remove" ><i class="ion-close-circled" style="color:red;"></i></a></div>';
}

$('.crtTbl').on('click', '.row_remove', function(e){
    $(this).closest('tr').remove();
// var test = $(this).closest('tr').text();
var myTableArray = [];

$(this).closest('tr').each(function() {
    var arrayOfThisRow = [];
    var tableData = $(this).find('td');
    if (tableData.length > 0) {
        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
        myTableArray.push(arrayOfThisRow);
    }
});

subTotal = subTotal - myTableArray[0][4];
$('.sub_total ul li h4').html(subTotal);

});

$('.new_customer').slideUp();
$(".newCustomerToggler").click(function(){
    $('.new_customer').slideToggle();
});
var tempDiscVal = 0;
function setDiscount(){
    $('.discount ul li a').remove('a');
    $('.discount ul li:nth-child(2)').html('<div class="input-group updateInput"><input type="number" name="updateDiscount" class="form-control" value="0" placeholder="Enter ammount"><span class="input-group-btn"><button class="btn btn-info" type="button">Update</button></span></div>');
    tempDiscVal = document.getElementsByName('updateDiscount')[0].value;
    var tempDisc = $('.discount ul li div');

    tempDisc.addEventListener('click',function(){
        tempDiscVal = document.getElementsByName('updateDiscount')[0].value;
        $('.discount ul li div').remove();
    })
    console.log(tempDiscVal);
    var cell3i = '<a href="#" >';
    cell3i = cell3i.concat(tempDisc);
    var cell3j = '</a>'
    cell3i = cell3i.concat(cell3j);
    // $('.discount ul li button').onclick().remove('.updateInput');

}
