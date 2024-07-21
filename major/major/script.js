
const loginForm =document.getElementById( 'loginForm');

const messageDiv =document.getElementById('message');

loginForm.addEventListener('submit', function(event) {

event.preventDefault();

const email =loginForm.email.value;

const password =loginForm.password.value;

if (username == 'user' && password == 'password') {

messageDiv.innerText ='Login successful!';

messageDiv.style.color='green';

} else {

messageDiv. InnerText= "Invalid username or password";

messageDiv.style.color ='red';

}

});