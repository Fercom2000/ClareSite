<DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/exam.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="Banner">
        <img class="Logo" id="Logo1" src="./gpx/UoS.png" alt="Arlice Skills">
        <span class="ExamName">Exam I</span>
    </div>
    <div class="Nav">
        <div class="Reference">
            <div class="BTitle">Reference #</div>
            dsv3423
        </div>
        <div class="Timer" id="Timer" name="Timer">
            <div class="BTitle">Timer</div>
            200 sec
        </div>
        <div class="Foward"></div>
        <div class="Help">?</div>
    </div>

    <div class="Scenario2" style="position: fixed;top: 23vh;left: .5vw;width: 30vw;height: 70vh;max-width: 30vw;">
        <div class="BTitle">Task Specific Instructions: </div>
        <div class="ChatRoom">
            <div class="MessageBox" id="MessageBox" name="MessageBox">
            
            <?php include('pag3.php'); ?>  
                
            </div>
        </div>
        <div class="Instructions"></div>
        <div class="ChoiceButtons" style="width: 99%;border: 1px solid #193e72;margin-top: 2vh; ">
            <div class="BTitle">Choose an Option:</div>
            
            <a class="Button BG" href="GTemplatev2.php">
            <button class="Button BG" name="B1" id="B1" style="width: 99%;min-width: 99%;">A</button>
            
            <a class="Button BB" href="pag1.php">
            <button class="Button BB" name="B2" id="B2" style="width: 99%;min-width: 99%;">B</button>
            
            <a class="Button BR" href="boton3.php">
            <button class="Button BR" name="B3" id="B3" style="width: 99%;min-width: 99%;">C</button>
        </div>
    </div>
    <div class="ProgBar" 
        style="margin: 2vh;
        border: 1vh solid #193e72;
        position: fixed;
        top:11vh;
        right: 30vw;
        min-width: 40vw;
        min-height: 8vh;
        max-width: 40vw;
        padding: 0;
        ">      
        <table 
            style="
                min-width: 25vw;
                font-size: 12px;
                line-height: 1;
                border-collapse: collapse;
                border-spacing: 0;
            ">
            <tr style="height: 3vh;min-height: 3vh;">
                <td style="width: 20%;max-width: 18vw;background-color: #00d478;border-right: 1vh solid #193e72;border-bottom: .2vh dotted #193e72;padding: 1vh;">Prog Team A</td>      
                <td style="width: 2%;max-width: 2vw;border-bottom: .2vh dotted #193e72; ">X:</td>
                <td style="width: 40%;max-width: 15vw;border-bottom: .2vh dotted #193e72;   ">
                    <div class="w3-grey w3-round-large">
                        <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
                     </div>
                </td>
                <td style="width: 2%;max-width: 2vw;border-bottom: .2vh dotted #193e72; ">Y:</td>
                <td style="width: 40%;max-width: 15vw;border-bottom: .2vh dotted #193e72;   ">
                    <div class="w3-grey w3-round-large">
                        <div class="w3-container w3-blue w3-round-large" style="width:15%">15%</div>
                     </div>
                        </td>
            </tr>
            <tr style="height: 3vh;min-height: 3vh;">
                <td style="width: 20%;max-width: 18vw;background-color: #00d478;border-right: 1vh solid #193e72;padding: 1vh;">Prog Team B</td>     
                <td style="width: 2%;max-width: 2vw;">X:</td>
                <td style="width: 40%;max-width: 15vw;">
                    <div class="w3-grey w3-round-large">
                        <div class="w3-container w3-blue w3-round-large" style="width:33%">33%</div>
                     </div>
                </td>
                <td style="width: 2%;max-width: 2vw;">Y:</td>
                <td style="width: 40%;max-width: 15vw;">
                    <div class="w3-grey w3-round-large">
                        <div class="w3-container w3-blue w3-round-large" style="width:50%">50%</div>
                     </div>
                        </td>
            </tr>
        </table>
    </div>
    <!--<div class="ProgBars" style="border-bottom: none;position: fixed;top: 11vh;right: 27vh;width: 45vw;min-width: 45vw;height: 20vh;min-height: 20vh;">
        <div class="Scenario2" style="margin: 2vh; width: 30vw;max-height: 20vh; max-width: 30vw;min-height:20vh;">
            <div class="ProgBars" style="height: 20%;max-height: 20%;font-size: .6rem; line-height: 1;">
            <div class="PBar">
                <table style="width: 100%;min-width: 100%;font-size: 12px;line-height: .3;">
                    <tr style="width: 100%;min-width: 100%;">
                        <td style="width: 10%;min-width: 100%;">X:</td>
                        <td style="width: 40%;min-width: 100%;">
                            <div class="w3-grey w3-round-large">
                                <div class="w3-container w3-blue w3-round-large" style="width:25%">25%</div>
                             </div>
                        </td>
                        <td style="width: 10%;min-width: 100%;">Y:</td>
                        <td style="width: 40%;min-width: 100%;">
                            <div class="w3-grey w3-round-large">
                                <div class="w3-container w3-blue w3-round-large" style="width:15%">15%</div>
                             </div>
                        </td>
                    </tr>
                    <tr style="width: 100%;min-width: 100%;">
                        <td colspan="4" style="line-height: .5; border-bottom: .2vh dashed #193e72;"><br></td>
                    </tr>
                    <tr style="width: 100%;min-width: 100%;">
                        <td style="width: 10%;min-width: 100%;">Z:</td>
                        <td style="width: 40%;min-width: 100%;">
                            <div class="w3-grey w3-round-large">
                                <div class="w3-container w3-blue w3-round-large" style="width:33%">33%</div>
                             </div>
                        </td>
                        <td style="width: 10%;min-width: 100%;">You:</td>
                        <td style="width: 40%;min-width: 100%;">
                            <div class="w3-grey w3-round-large">
                                <div class="w3-container w3-blue w3-round-large" style="width:50%">50%</div>
                             </div>
                        </td>
                    </tr>
                    <tr style="width: 100%;min-width: 100%;">                   </tr>
                </table>
            </div>
        </div>
    </div>
</div>-->
<div id="h" name="h"></div>
<script type="text/javascript">
    $(document).ready(function () {
      // Handler for .ready() called.
    });

    $(document).ready(function(){       
        //$("#msg1").delay(1000).fadeIn();
        setTimeout(() => {  
            //document.getElementById("h").innerHTML = 5 + 6; 
            $('#msg1').fadeIn();
            var element = document.getElementById("MessageBox");
            element.scrollTop = element.scrollHeight;
        }, 1100);
        //$("#msg2").delay(3000).fadeIn();
        setTimeout(() => {  
            //document.getElementById("h").innerHTML = 1 + 6; 
            $('#msg2').fadeIn();
            var element = document.getElementById("MessageBox");
            element.scrollTop = element.scrollHeight;
        }, 3100);
        //$("#msg3").delay(4100).fadeIn();
        setTimeout(() => {  
            //document.getElementById("h").innerHTML = 3 + 6; 
            $('#msg3').fadeIn();
            var element = document.getElementById("MessageBox");
            element.scrollTop = element.scrollHeight;
        }, 4200);
        //$("#msg4").delay(5500).fadeIn();
        setTimeout(() => {  
            //document.getElementById("h").innerHTML = 4 + 6; 
            $('#msg4').fadeIn();
            var element = document.getElementById("MessageBox");
            element.scrollTop = element.scrollHeight;
        }, 5600);
        var t=20;
        function sTime(){
            if(t>0){
            t=t-1;
            }else{
                document.getElementById("B1").disabled = true;
                document.getElementById("B2").disabled = true;
                document.getElementById("B3").disabled = true;
                document.getElementById("B1").style.opacity = "0.5";
                document.getElementById("B2").style.opacity = "0.5";
                document.getElementById("B3").style.opacity = "0.5";
                alert("Your time is over please continue to the next page");
                sTime.clearTimeout();
            }
            //var s=concat("<div class='BTitle'>Hola</div>",toString(t)," sec");
            document.getElementById("Timer").innerHTML = "<div class='BTitle'>Timer</div>".concat(t," sec");
            setTimeout(sTime,1000);
        }
        sTime();
    });
</script>
</body>
</html>