<link rel="stylesheet" href="complain.css" />
<style>
    input[type="radio"] {
        all:unset;
  display: inline;
  -webkit-appearance: radio;
  margin-left: 40px;
  margin-top:10px;
  position: absolute;
  transform: scale(1.3);
}


img{
    position: relative;
    margin:10px;
    margin-left: 10px;
    margin-top: -70px;
}

.lb{
    all:unset;
    display: inline;
    position: absolute;
    margin-left: 70px;
    margin-top: 5px;
}

</style>


<div class="main">
    <center>
        <h2>Enter Your Details Here</h2>
        <br><br>
        <br><br>
    </center>
  <form id="form">
  <label>First name</label><br />
        <input
          type="text"
          name="firstName"
          placeholder="Your First name"
          pattern="[a-zA-Z]+"
          title="Please Enter Alphabets Only"
          autofocus
          required
        /><br />


        <label>Last name</label><br />
        <input
          type="text"
          name="lastName"
          placeholder="Your Last name"
          pattern="[A-Za-z]+"
          title="Please Enter Alphabets Only"
          required
        /><br />
        <label>Phone</label><br />
        <input
          type="text"
          name="lastName"
          placeholder="Your working phone number"
          pattern="[0-9]+"
          title="Please Enter Numbers Only"
          required
        /><br />
        <label>Email</label><br>
            <input type="text" name="email"  placeholder="Your email here" required pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$">
        <br>

        <label>PickUp Address</label><br />
        <input
          type="text"
          name="locality"
          placeholder="Your locality here"
          pattern="[A-Za-z0-9]+"
          title="Please Enter Alphabets Only"
          required
        /><br />
        <label> Payment Method</label>
        <br> 
        <br> 
        <br> 
     
        <input type="radio" name="pay" value="Esewa">
        <label > <img src="icons/esewa.png" alt="esewaLogo" height= "78 px" width = "150 px"> </label>
        <input type="radio" name="pay"  value="Khalti">
        <label> <img src="icons/khalti.png" alt="khaltiLogo" height= "62 px" width = "150 px">  </label>
        <input type="radio" name="pay"  value="COD">
        <label class="lb"> Cash On PickUp </label>
      <br>
        <input type="submit" value="Send"/>
</form>

</div>

<script>
    //for popup form in the same page
//         // Get the button and form container elements
//         var button = document.getElementById("form-button");
//         var formContainer = document.getElementById("form");
//         var closeButton = document.getElementById("close-button");

//         // Add an event listener to the button that toggles the form
//         button.addEventListener("click", function() {
//             if (formContainer.style.display === "none") {
//             formContainer.style.display = "block";
//             } else {
//             formContainer.style.display = "none";
//             }
//         });
//         closeButton.addEventListener("click", function() {
//     formContainer.style.display = "none";
//   });

</script>