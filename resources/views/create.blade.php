@extends('layout.layout')
@section('content')
<div class="topnav">
<a href="">Live Project - Resume Builder</a>
</div>
<div class="wrapper create-form">
  <h1>Fill the required details</h1>
  <form action="/your_resume" method="POST" enctype="multipart/form-data">
  @csrf

    <label for="name">Full Name:</label>
    <input type="text" name="name" id="name" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

    <label for="city">City:</label>
    <input type="text" name="city" id="city" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

   <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

    <label for="tel">Mobile No:</label>
    <input type="tel" name="tel" id="tel" required><br><br>

    <label for="git">Github link:</label>
    <input type="text" name="git" id="git" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

    <label for="linked">Linkedin link:</label>
    <input type="text" name="linked" id="linked" required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

    <label for="user_image">Upload photo: </label>
    <input type="file" name='user_image'><br><br>

    <label for="aboutme">Introduce yourself:</label><br>
    <textarea id="aboutme" name="aboutme" rows="4" cols="50"></textarea><br><br>

    <label for="edu1">Education details:</label><br>

    <div class="education">
    <label for="edu1">Highest Qualification:</label>
    <input list="edu" name="edu1" id="edu1" size="3" >
    <datalist id="edu">
    <option value="B.A">
    <option value="BSc">
    <option value="B.E">
    <option value="MCA">
    <option value="BCom">
    </datalist>&nbsp
    <label for="institute">Institute name:</label>
    <input type="text" name="institute" id="institute" required>&nbsp
    <label for="uni">University:</label>
    <input list="uni1" name="uni" id="uni">
    <datalist id="uni1">
    <option value="Mumbai University">
    <option value="Savitribai Phule university">
    <option value="MNM">
    <option value="DY patil">
    <option value="Ruia">
    </datalist> &nbsp
    <label for="cgpa">CGPA:</label>
    <input type="text" name="cgpa" id="cgpa"  size="10" required> &nbsp
    <label for="year">Passing Year:</label>
    <input type="text" name="year" id="year" size="10" required><br> &nbsp

    <!--<input type="file" id="myFile" name="filename">-->
</div>

<label for="domain1">Academic Projects:</label><br>
    <label for="domain1">Domain:</label>
    <input type="text" name="domain1" id="domain1" required>&nbsp
    <label for="sem">Semester:</label>
    <input type="number" name="sem" id="sem" required>&nbsp
    <label for="proj">Project Name:</label>
    <input type="text" name="proj" id="proj" required>&nbsp
    <label for="des">Project Description:</label>
    <textarea id="des" name="des" rows="1" cols="28"></textarea><br><br>

<label for="domain">Training/Internship:</label><br>
    <label for="domain">Domain:</label>
    <input type="text" name="domain" id="domain" required>&nbsp
    <label for="duration">Duration(in months):</label>
    <input type="number" name="duration" id="duration" required>&nbsp
    <label for="role">Role:</label>
    <input type="text" name="role" id="role" required>&nbsp
    <label for="elab">Elaborate:</label>
    <textarea id="elab" name="elab" rows="1" cols="35"></textarea><br><br>


<fieldset>
      <label>Technical Skills:</label><br>
      <input type="checkbox" name="choice[]" value="Python">Python<br>
      <input type="checkbox" name="choice[]" value="Ruby">Ruby<br>
      <input type="checkbox" name="choice[]" value="Java">Java<br>
      <input type="checkbox" name="choice[]" value="C">C<br>
      <input type="checkbox" name="choice[]" value="Mysql">MySql<br>
      <input type="checkbox" name="choice[]" value="Wordpress">Wordpress<br><br>
</fieldset>


<fieldset>
  <label>Languages known:</label><br>
  <input type="checkbox" name="lang[]" value="English">English<br>
  <input type="checkbox" name="lang[]" value="Hindi">Hindi<br>
  <input type="checkbox" name="lang[]" value="Marathi">Marathi<br>
  <input type="checkbox" name="lang[]" value="French">French<br>
  <input type="checkbox" name="lang[]" value="German">German<br><br>
  </fieldset>   

  <fieldset>
  <label>Choose one template:</label><br>
  
  <input type="radio" name="temp" value="template1">
  <label for="template1">Template1</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="radio" name="temp" value="template2">
  <label for="template2">Template2</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <input type="radio" name="temp" value="template3">
  <label for="template3">Template3</label>
  <img src="img/template1.png" alt="template1" style="border: 1px solid #555;">&nbsp&nbsp&nbsp&nbsp&nbsp
  
<img src="img/template2.png"  alt="template2" style="border: 1px solid #555;">&nbsp&nbsp&nbsp&nbsp&nbsp
  
<img src="img/template3.png" alt="template3" style="border: 1px solid #555;"><br><br>
  
  </fieldset> 
    <input type="submit" value="Build My Resume">
  </form>
  
</div>
@endsection