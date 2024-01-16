<!DOCTYPE html>
<html>
    <head>
        <title>NIK-Signup</title>
        <link rel="stylesheet" href="styling.css">
        <script>
            su=0
            function valid1()
            {
                first=document.getElementById("fn")
                for(i=0;i<first.value.length;i++)
                {
                    if(first.value[i]>="0" && first.value[i]<="9")
                    {
                        alert("Name dont contain numbers")
                        break    
                    }
                }
                su+=1
            }
            function valid2()
            {
                phno=document.getElementById("phn")
                if(phno.length()!=10)
                {
                    alert("Phone number must contain 10 digits")
                }
            }
            function valid3()
            {
                pass=document.getElementById("pw")
                n=0
                A=0
                a=0
                s=0
                if(pass.value.length>=8)
                {
                    for(i=0;i<pass.value.length;i++)
                    {
                        if(pass.value[i]>="0" && pass.value[i]<="9")
                        {
                            n+=1
                        }
                        if(pass.value.charCodeAt(i)>=65 && pass.value.charCodeAt(i)<=90)
                        {
                            A+=1
                        }
                        if(pass.value.charCodeAt(i)>=97 && pass.value.charCodeAt(i)<=122)
                        {
                            a+=1
                        }
                        if(!(pass.value.charCodeAt(i)>=65 && pass.value.charCodeAt(i)<=90) || (pass.value.charCodeAt(i)>=97 && pass.value.charCodeAt(i)<=122))
                        {
                            s+=1
                        }
                    }
                    if(n<2)
                    {
                        alert("password must contain atleast 2 numbers")
                    }
                    if(A<2)
                    {
                        alert("password must contain atleast 2 caps")
                    }
                    if(a<2)
                    {
                        alert("password must contain atleast 2 smalls")
                    }
                    if(s<2)
                    {
                        alert("password must contain atleast 2 special characters")
                    }

                }
                else
                {
                    alert("password must contain at least 8 char")

                }
                su+=1

            }
            function valid4()
            {
                cp=document.getElementById("cpw")
                pass=document.getElementById("pw")
                if(cp.value!=pass.value)
                {
                    alert("Not same as given password")
                    

                }
                su+=1

            }
            function valid5()
            {
                e=document.getElementById("em")
                
            
                for(i=0;i<e.value.length;i++)
                {
                    if(e.value[i]=="@")
                {
                    c=e.value.slice(0,i);
                }
                }
                for(i=0;i<c.length;i++)
                {
                    if(c.charCodeAt(i)>=65 && c.charCodeAt(i)<=90)
                    {
                        continue
                    }
                    else if(c.charCodeAt(i)>=97 && c.charCodeAt(i)<=122)
                    {
                        continue
                    }
                    else if(c[i]>="0" && c[i]<="9")
                    {
                        continue
                    }
                    else if(c[i]=="_")
                    {
                        continue
                    }
                    else
                    {
                        alert("invalid email")
                    }
                }
                su+=1
                
            }
            function valid6()
            {
                if(su==5)
                {
                    alert("welcome")
                }
            }
    </script>
    </head>
    <body class="imagehome">
        <img src="logo.png" class="logodesign">
        <form action="home.php" method="post">
            <div class="outter">
                <input type="text" placeholder="Name" class="inner" id="fn" name="username" onmouseout="valid1()"></input>
                <input type="email" placeholder="email" class="inner" id="em" name="email" onmouseout="valid5()"></input>
                <input type="text" placeholder="Phone Number" class="inner" id="phn" name="phno" onmouseout="valid2()"></input>
                <input type="text" placeholder="Address" class="inner" name="add"></input>
                <input type="date" placeholder="Date of birth" class="inner"></input>
                <input type="password" placeholder="Password" class="inner" id="pw" name="pas" onmouseout="valid3()"></input>
                <input type="password" placeholder="Confirm Password" class="inner" id="cpw" onmouseout="valid4()"></input>
                <button class="signup">Signup</button>
            </div> 
        </form>
    </body>
</html>