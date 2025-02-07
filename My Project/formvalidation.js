document.getElementById("submit").addEventListener("click", (e)=>
{
    e.preventDefault();
    let email=document.getElementById('email').value;
    let name=document.getElementById('username').value;
    let password=document.getElementById('password').value;
    isvalid=true;
    console.log(email)

    let email_pattern=/^([a-zA-Z0-9 \ .-]+)@([a-zA-Z0-9 -]+).([a-z]{2,20})$/
    let name_pattern=/^[a-zA-Z0-9-._]{2,20}$/

      let email_match=email_pattern.test(email)
      let name_match=name_pattern.test(name)
      console.log(email_match)

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
})