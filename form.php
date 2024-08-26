<!DOCTYPE html>
<html lang="en">
<style>
/*used for removing the default margin and padding*/
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #4070f4;
}
.container{
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}
.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container form button, .backBtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}
.container form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}


</style>
<body>
<div class="container">
<header>Registration</header>

<form action="#">
<div class="form first">
<div class="details personal">
<span class="title">Personal Details</span>

<div class="fields">
<div class="input-field">
<label>Full Name</label>
<input type="text" placeholder="Enter your name" required>
</div>

<div class="input-field">
<label>Date of Birth</label>
<input type="date" placeholder="Enter birth date" required>
</div>

<div class="input-field">
<label>Email</label>
<input type="text" placeholder="Enter your email" required>
</div>

<div class="input-field">
<label>Mobile Number</label>
<input type="number" placeholder="Enter mobile number" required>
</div>

<div class="input-field">
<label>Gender</label>
<select required>
<option disabled selected>Select gender</option>
<option>Male</option>
<option>Female</option>
<option>Others</option>
</select>
</div>

<div class="input-field">
<label>Occupation</label>
<input type="text" placeholder="Enter your occupation" required>
</div>
</div>
</div>

<div class="details ID">


<div class="fields">
<div class="input-field">
<label>Address</label>
<input type="text" placeholder="Enter Address" required>
</div>

<div class="input-field">
<label>Guardian</label>
<input type="number" placeholder="Enter Guardian Name" required>
</div>

<div class="input-field">
<label>Mobile Number</label>
<input type="number" placeholder="Enter mobile number" required>
</div>

<div class="input-field">
<label>Address</label>
<input type="text" placeholder="Enter Guardian Address" required>
</div>

<div class="input-field">
<label>Course</label>
<select required>
<option disabled selected>Select course</option>
<option>BCA</option>
<option>BBA</option>
<option>BCOM</option>
</select>
</div>

<div class="input-field">
<label>Degree</label>
<select required>
<option disabled selected>Select Degree</option>
<option>UG</option>
<option>PG</option>
<option>phd</option>
</select>
</div>
</div>
<button class="nextBtn">
<span class="btnText">Submit</span>

</button>
</div>
</div>
</form>
</div>
</body>
</html>

