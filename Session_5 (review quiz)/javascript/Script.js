form.addEventListener("submit", function(event){
    // untuk mencegah browser reload saat form
    // disubmit > event.preventDefault()
    event.preventDefault()
    
    // ekstrak value dari html
    let username = document.getElementById("username").value
    let email = document.getElementById("email").value
    let gender = document.querySelector('input[name=gender]:checked')
    let terms = document.getElementById("terms")
    let pass = document.getElementById("pass").value
    let vpass = document.getElementById("vpass").value

    // validation kosong
    if (username === ''){
        document.getElementById("errorMessage").innerHTML = "Username cannot be empty"
    }
    else if (username.length < 3){
        document.getElementById("errorMessage").innerHTML = "Name must be more than 3"
    }
    else if (!email.endsWith("@gmail.com")){
        document.getElementById("errorMessage").innerHTML = "Email must be ended with @gmail.com"
    }
    else if (!terms.checked){
        document.getElementById("errorMessage").innerHTML = "Must agree to terms"
    }
    else if (gender === null){
        document.getElementById("errorMessage").innerHTML = "Gender must be selected"
    }
    else if (vpass !== pass){
        document.getElementById("errorMessage").innerHTML = "Password must match!"

    }

    else {
        document.getElementById("errorMessage").innerHTML = ""
        document.getElementById("successMessage").innerHTML = "Registration Success"
    }

    // console.log('======================');
    // console.log(username);
    // console.log(email);
    // console.log('======================');
    // CONSOLE BUAT PRINT
})

// function alnum
function isAlphanumeric(input){
    let isAlphabetic = false
    let isNumeric = false
    let inputToProcess = input.toLowercase()

    //  (START    ;      END         ; ACTION)
    for (let i = 0; i <= input.length; i++){
        if(inputToProcess[i] >= 'a' && inputToProcess[i] <= 'z'){
            isAlphabetic = true
            continue
        }
        if(inputToProcess[i] >= '0' && inputToProcess[i] <= '9'){
            isNumeric = true
            continue
        }
    }

    if (isAlphabetic && isNumeric){
        return true;
    } 
    else {
        return false;
    }   
}