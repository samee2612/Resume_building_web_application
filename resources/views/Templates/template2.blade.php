<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Resume</title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/template2.css">
  
</head>
<body>
<button id="download"><i class="fa fa-download"></i>Download pdf</button>
<div class="container" id="template2" >
    <section>
      <div>
        <div><img src="{{asset('uploads/userimage/'.$resume->user_image)}}" alt="avatar" class="avatar"></img></div>
      </div>
      <div>
        <div class="my-name">{{$resume->name}}</div>
        <div class="my-title">{{$resume->institute}}</div>
        <div class="links">
          <div class="link-item">
          <i class="fa fa-map-marker"></i>&nbsp&nbsp
            <p>{{$resume->city}}</p>
          </div>
          <div class="link-item">
          <i class="fa fa-github"></i>&nbsp&nbsp
          <p>{{$resume->git}}</p>
          </div>
          <div class="link-item">
          <i class="fa fa-linkedin"></i>&nbsp
          <p>{{$resume->linked}}</p>
          </div>
          <div class="link-item">
          <i class="fa fa-fax"></i>&nbsp
          <p>{{$resume->email}}</p>
          </div>
          <div class="link-item">
          <i class="fa fa-phone"></i>&nbsp
           <p>{{$resume->tel}}</p>
          </div>
        
         <!-- end links -->

  </div>
    </section>
    <section>
      <div class="section-title">About Me</div>
      <div>
        {{$resume->aboutme}}
</div>
</section>

    <section>
      <div class="section-title">Education</div>
      <div>
        <div class="job">
          <div class="job-title-container">
            <div>
              <div class="job-company">{{$resume->edu1}}</div>
              <div class="job-title">{{$resume->uni}}</div>
              CGPA: {{$resume->cgpa}}
            </div>
            <div>
            Passing year: {{$resume->year}}<br>
            
            </div>
          </div> <!-- end job-title container -->
          
        </div> <!-- end job -->
      </div>
    </section>

    <section>
      <div class="section-title">Academic Projects</div>
      <div>
        <div class="job">
          <div class="job-title-container">
            <div>
              <div class="job-company">{{$resume->domain1}}</div>
              <div class="job-title">{{$resume->proj}}</div>
            </div>
            <div>
              Semester: {{$resume->sem}}
            </div>
            
          </div> <!-- end job-title container -->
          <div>
            <p>{{$resume->des}}</p>
            </div>
        </div> <!-- end job -->
    </section>

    <section>
      <div class="section-title">Training/Internship</div>
      <div>
        <div class="job">
          <div class="job-title-container">
            <div>
              <div class="job-company">{{$resume->domain}}</div>
              <div class="job-title">{{$resume->role}}</div>
            </div>
            <div>
            Duration: {{$resume->duration}} months
            </div>
            
          </div> <!-- end job-title container -->
          <div>
            <p>{{$resume->elab}}</p>
            </div>
        </div> <!-- end job -->
    </section>



    <section>
      <div class="section-title">Skills</div>
        <div class="skills-container">
          
          @foreach($resume->choice as $c)
          <li>{{$c}}</li>
          @endforeach
          
        </div> <!-- end skills-container -->
      
    </section>

    <section>
      <div class="section-title">Languages Known</div>
      <div class="skills-container">
                   
      @foreach($resume->lang as $l)
      <li>{{$l}}</li>
      @endforeach
     
      </div>
    </section>
 

</div>

  

  <script>
    window.onload=function(){
        document.getElementById("download").addEventListener("click",()=>{
            var template=this.document.getElementById("template2");
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