
    window.onload=function(){
        document.getElementById("download").addEventListener("click",()=>{
            const template=this.document.getElementById("template2");
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
