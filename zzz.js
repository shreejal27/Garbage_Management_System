
const name = document.getElementById('name').value;
const form = document.getElementById("form");
const password = document.getElementById("password");
const errorElement = document.getElementById("password");

form.addEventListener('submit', (e)=>{
    let messages=[]
    if (name === "" name == null){
        messages.push('Name is required')
    }
    if (messages.length >0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')

    }
})
