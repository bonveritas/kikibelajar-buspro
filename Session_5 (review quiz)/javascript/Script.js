form.addEventListener("submit", function(event){
    event.preventDefault()
    
    // ekstrak value dari html
    let username = document.getElementById("username").value
    let email = document.getElementById("email").value
    let gender = document.querySelector('input[name=gender]:checked')
    let terms = document.getElementById("terms")
    let pass = document.getElementById("pass").value
    let vpass = document.getElementById("vpass").value

    // validation
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
})
