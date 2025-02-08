document.getElementById("submit").addEventListener("click", (e)=>
{
    e.preventDefault();
    let email=document.getElementById('email').value;
    let name=document.getElementById('username').value;
    let password=document.getElementById('password').value;
    isvalid=true;
    console.log(email)
    console.log(name)
    console.log(password)

    let email_pattern=/^([a-zA-Z0-9 \ .-]+)@([a-zA-Z0-9 -]+).([a-z]{2,20})$/
    let name_pattern=/^[a-zA-Z0-9-._]{2,20}$/
    let password_pattern=/^[a-zA-Z0-9]{4,6}$/

      let email_match=email_pattern.test(email)
      let name_match=name_pattern.test(name)
      let password_match=password_pattern.test(password)
      console.log(email_match)
      console.log(name_match)
      console.log(password_match)

    if(!email_match)
        {
            document.getElementById("emailerror").innerHTML="Email is not valid";
            isvalid=false;
        }  

    if(!name_match)
        {
            document.getElementById("nameerror").innerHTML="Username is not valid";
            isvalid=false;
        }   
    if(!password_match)
        {
            document.getElementById("passworderror").innerHTML="Password is not valid";
            isvalid=false;
        }     
})