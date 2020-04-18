/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var firstName;
var lastName;
var name;
var email;
var birthday;

var street;
var city;
var province;
var postalCode;
var address;

var shipping;

function storeUserInfo() {
    firstName = document.getElementById('first-name').value;
    lastName = document.getElementById('last-name').value;
    name = firstName + " " + lastName;
    email = document.getElementById('email').value;
    birthday = document.getElementById('birthday').value;
}
function sendName() {
    document.getElementById('welcome').innerHTML = "Now we'll need your address " + name;
}
function storeAddress() {
    street = document.getElementById('street').value;
    city = document.getElementById('city').value;
    province = document.getElementById('province').value;
    postalCode = document.getElementById('postalCode').value;
    address = street + ", " + city + ", " + province + ", " + postalCode;
}
function storeShippingInfo() {
    vshipping = document.getElementById('shipping').value;
}

function sendInfo() {
    document.getElementById('name').innerHTML = "Name: " + name;
    document.getElementById('email').innerHTML = "Email: " + email;
    document.getElementById('birthday').innerHTML = "Birthday: " + birthday;
    document.getElementById('address').innerHTML = "Address: " + address;
    document.getElementById('shipping').innerHTML = "Shipping Method: " + shipping;
}