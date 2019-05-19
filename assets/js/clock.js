        
        function timer()
        {
        var t = new Date();
        var day = t.getDay();
        var month = t.getMonth()+1;
        var year = t.getFullYear();
        
        var hour = t.getHours();
        var minute = t.getMinutes();
        var second = t.getSeconds();
        if (second < 10){second= "0"+second;}
        
        document.getElementById("clock").innerHTML = day+"/"+month +"/"+year+" | "+hour+":"+minute+":"+second;
        
        setTimeout("timer()", 1000);
        
        
        }

