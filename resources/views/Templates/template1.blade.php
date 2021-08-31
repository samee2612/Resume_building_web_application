<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="/css/template1.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head> 
<body >
    <button id="download"><i class="fa fa-download"></i>Download pdf</button>

    <main class="main-content" id="template1">
        <section class="left-section">
            <div class="left-content">
                <div class="profile">
                    <div class="image">
                        <img src="{{asset('uploads/userimage/'.$resume->user_image)}}" alt="profile_img"></img>
                    </div>
                    <h2 class="name">{{$resume->name}}</h2>
                    
                </div>
                <div class="contact-info">
                    <h3 class="main-title">Contact Info</h3>
                    <ul>
                        <li>
                            <i class="fa fa-phone"></i>
                            {{$resume->tel}}
                        </li>
                        <li>
                            <i class="fa fa-fax"></i>
                            {{$resume->email}}
                        </li>
                        <li>
                            <i class="fa fa-linkedin"></i>
                            {{$resume->linked}}
                        </li>
                        <li>
                            <i class="fa fa-github"></i>
                            {{$resume->git}}
                        </li>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            {{$resume->city}}
                        </li>
                    </ul>
                </div>
                <div class="skills-section">
                    <h3 class="main-title">Skills</h3>
                    <ul>
                    
                    @foreach($resume->choice as $c)
                        <li>
                            <p class="skill-title">{{$c}}</p>
                        </li>
                    @endforeach
                    </ul>
                </div>

                <div class="skills-section">
                    <h3 class="main-title">Language known</h3>
                    <ul>
                    
                    @foreach($resume->lang as $l)
                        <li>
                            <p class="skill-title">{{$l}}</p>
                        </li>
                    @endforeach
                    </ul>
                </div>
                
            </div>
        </section>
        <section class="right-section">
            <div class="right-main-content">
                <section class="about sect">
                    <h2 class="right-title">About Me</h2>
                    <p class="para">
                    {{$resume->aboutme}}
                    </p>
                </section>

                <section class="education sect">
                    <h2 class="right-title">Education</h2>
                    <div class="timeline">
                        <div class="left-tl-content">
                            <h5 class="tl-title">{{$resume->edu1}}</h5>
                            <p class="para">{{$resume->year}}</p>
                        </div>
                        <div class="right-tl-content">
                            <div class="tl-content">
                                <h5 class="tl-title-2">{{$resume->institute}}</h5>
                                <p class="para">
                                {{$resume->uni}}
                                </p>
                                <p class="para">CGPA:
                                {{$resume->cgpa}}
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="experince sect">
                    <h2 class="right-title">Academic<br>Projects</h2>
                    <div class="timeline">
                        <div class="left-tl-content">
                            <h5 class="tl-title">{{$resume->domain1}}</h5>
                            <p class="para">Sem: {{$resume->sem}}</p>
                        </div>
                        <div class="right-tl-content">
                            <div class="tl-content">
                                <h5 class="tl-title-2">{{$resume->proj}}</h5>
                                <p class="para">
                                {{$resume->des}}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </section>
                
                <section class="awards sect">
                    <h2 class="right-title">Training/<br>Internship:</h2>
                    <div class="timeline">
                        <div class="left-tl-content">
                            <h5 class="tl-title">{{$resume->domain}}</h5>
                            <p class="para">{{$resume->duration}} months</p>
                        </div>
                        <div class="right-tl-content">
                            <div class="tl-content">
                                <h5 class="tl-title-2">{{$resume->role}}</h5>
                                <p class="para">
                                {{$resume->elab}}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </section>
            </div>
        </section>

    </main>



<script>
 
    window.onload=function(){
        document.getElementById("download").addEventListener("click",()=>{
            var template=this.document.getElementById("template1");
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