<!DOCTYPE html>
<html>
<head>
 <title>Resume</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/template3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<button id="download"><i class="fa fa-download"></i>Download pdf</button>





 <div class="col-md-offset-2 col-md-8" style="background: #E4E5E9"; id="wrapper" >
  <div id="header">
   <div>
   <img src="{{asset('uploads/userimage/'.$resume->user_image)}}" alt="profile_img" id="image"></img>
   </div>
   <div>
    <h2 id="name">{{$resume->name}}</h2>
    <p id="underline"></p>
    <h5 id="web">{{$resume->institute}}</h5>
   </div>
  </div><!--  end header -->
  <div class="row">
   <div class="col-md-12">
    <h4 id="exp">ABOUT ME</h4>
    
      
       
       <div><p style="padding:10px;">{{$resume->aboutme}}</p></div>
</div>
</div>
      
      <!-- end section 1 -->
     

  <div class="row">
   <div class="col-md-12">
    <h4 id="exp">EDUCATION</h4>
    <div id="experience">
     <div id="exp1">
      <div>
       <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 438.536 438.536" style="enable-background:new 0 0 438.536 438.536;"
       xml:space="preserve">
       <path d="M433.113,5.424C429.496,1.807,425.215,0,420.267,0H18.276C13.324,0,9.041,1.807,5.425,5.424
       C1.808,9.04,0.001,13.322,0.001,18.271v401.991c0,4.948,1.807,9.233,5.424,12.847c3.619,3.614,7.902,5.428,12.851,5.428h401.991
       c4.948,0,9.229-1.813,12.847-5.428c3.614-3.613,5.421-7.898,5.421-12.847V18.271C438.534,13.319,436.73,9.04,433.113,5.424z"/>
      </div>
      <div>
       <span id="head">{{$resume->edu1}}</span>
       <p>{{$resume->year}}</p>
      </div>
      <div>
       <h4 id="ent">{{$resume->uni}}</h4>
       <p>CGPA: {{$resume->cgpa}}</p>
      </div>
     </div> <!-- end section 1 -->
     
     
    </div>
   </div>
  </div> <!-- end row 1 -->
  <div class="row">
   <div class="col-md-12">
    <h4 id="exp">ACADEMIC PROJECTS</h4>
    <div id="experience">
     <div id="exp1">
      <div>
       <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 438.536 438.536" style="enable-background:new 0 0 438.536 438.536;"
       xml:space="preserve">
       <path d="M433.113,5.424C429.496,1.807,425.215,0,420.267,0H18.276C13.324,0,9.041,1.807,5.425,5.424
       C1.808,9.04,0.001,13.322,0.001,18.271v401.991c0,4.948,1.807,9.233,5.424,12.847c3.619,3.614,7.902,5.428,12.851,5.428h401.991
       c4.948,0,9.229-1.813,12.847-5.428c3.614-3.613,5.421-7.898,5.421-12.847V18.271C438.534,13.319,436.73,9.04,433.113,5.424z"/>
      </div>
      <div>
       <span id="head">Domain: {{$resume->domain1}}</span>
       <p>Sem: {{$resume->sem}}</p>
      </div>
      <div>
       <h4 id="ent">{{$resume->proj}}</h4>
       <p>{{$resume->des}}</p>
      </div>
     </div> <!-- end section 1 -->

     <div class="row">
   <div class="col-md-12">
    <h4 id="exp">TRAINING/INTERNSHIP</h4>
    <div id="experience">
     <div id="exp1">
      <div>
       <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 438.536 438.536" style="enable-background:new 0 0 438.536 438.536;"
       xml:space="preserve">
       <path d="M433.113,5.424C429.496,1.807,425.215,0,420.267,0H18.276C13.324,0,9.041,1.807,5.425,5.424
       C1.808,9.04,0.001,13.322,0.001,18.271v401.991c0,4.948,1.807,9.233,5.424,12.847c3.619,3.614,7.902,5.428,12.851,5.428h401.991
       c4.948,0,9.229-1.813,12.847-5.428c3.614-3.613,5.421-7.898,5.421-12.847V18.271C438.534,13.319,436.73,9.04,433.113,5.424z"/>
      </div>
      <div>
       <span id="head">{{$resume->domain}}</span>
       <p>{{$resume->duration}} months</p>
      </div>
      <div>
       <h4 id="ent">{{$resume->role}}</h4>
       <p>{{$resume->elab}}</p>
      </div>
     </div> <!-- end section 1 -->
     
    </div>
   </div>
  </div> <!-- end row 1 -->
  <div class="row">
   <div class="col-md-12">
    <h4 id="exp">LANGUAGES KNOWN</h4>
    <div id="experience">
     <div id="exp1">
      <div>
       <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 438.536 438.536" style="enable-background:new 0 0 438.536 438.536;"
       xml:space="preserve">
       <path d="M433.113,5.424C429.496,1.807,425.215,0,420.267,0H18.276C13.324,0,9.041,1.807,5.425,5.424
       C1.808,9.04,0.001,13.322,0.001,18.271v401.991c0,4.948,1.807,9.233,5.424,12.847c3.619,3.614,7.902,5.428,12.851,5.428h401.991
       c4.948,0,9.229-1.813,12.847-5.428c3.614-3.613,5.421-7.898,5.421-12.847V18.271C438.534,13.319,436.73,9.04,433.113,5.424z"/>
      </div>
      <div>
       
      @foreach($resume->lang as $l)
                       
                            <p class="skill-title">{{$l}}</p>
                      
                    @endforeach
      </div>
     </div> <!-- end section 1 -->
  <div class="row">
   <div class="col-md-30">
    <h4 id="contacts">&nbsp&nbsp&nbspCONTACTS</h4>
    
    <ul>
                        
                            <i class="fa fa-phone"></i>
                            {{$resume->tel}}<br><br>
                        
                            <i class="fa fa-fax"></i>
                            {{$resume->email}}<br><br>
                      
                            <i class="fa fa-linkedin"></i>
                            {{$resume->linked}}<br><br>
                        
                            <i class="fa fa-github"></i>
                            {{$resume->git}}<br><br>
                        
                            <i class="fa fa-map-marker"></i>
                            {{$resume->city}}
                        
                    </ul>
      
                            
    </div>
   </div>
   <div class="col-md-50">
    <h4 id="skills">SKILLS</h4>
    
    @foreach($resume->choice as $c)
    <ul>
    <div class="skills">
     
      <div id="ui">
       
       <li>{{$c}}

    
</ul>
@endforeach
     </div>
    </div>
   </div>
   
  </div>
  
</div>



 <script>
    window.onload=function(){
        document.getElementById("download").addEventListener("click",()=>{
            var template=this.document.getElementById("wrapper");
            var opt = {
                margin: 0,
                filename: 'Myresume.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(template).set(opt).save();
        })
    }
</script>
</body>
</html>