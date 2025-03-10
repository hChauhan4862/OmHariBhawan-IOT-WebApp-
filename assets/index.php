<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Om Hari Bhawan</title>
    <style>
    body{
        background: #ebf5fc;
    }
    .ul {
        align-items: center;
        border-radius: 10px;
        padding: 5vw;
        width: 80vw;
        background: #ebf5fc;
        box-shadow: -2px -2px 5px white, 3px 3px 5px rgba(0, 0, 0, 0.1);
        max-width:500px;
    }
    .vertical-center {
        display: flex;align-items: center;
        background: #ebf5fc;
    }
            .hc_button {
                position: relative;
                list-style: none;
                text-align: center;
            }
            .hc_button label {
                position: relative;
                cursor: pointer;
                width: 100%;
            }
            .hc_button label input[type="checkbox"] {
                position: absolute;
                opacity: 0;
            }
            .hc_button label :checked ~ .icon-box {
                box-shadow: inset -2px -2px 5px white, inset 3px 3px 5px rgba(0, 0, 0, 0.1);
            }
            .hc_button label :checked ~ .icon-box .fa {
                transform: scale(0.95);
            }
            .hc_button label .icon-box {
                width: 100%;
                height: 100px;
                background: #ebf5fc;
                display: flex;
                justify-content: center;
                align-items: center;
                box-shadow: -2px -2px 5px white, 3px 3px 5px rgba(0, 0, 0, 0.1);
                border-radius: 10px;

                background-size: 95% 60%;background-repeat: no-repeat;background-position: center;
            }
            .hc_button label .icon-box .fa , .fas , .far , .fad {
                font-size: 30px;
                color: #6a9bd8;
            }
            .fa-spin{
                -webkit-animation:fa-spin 2s linear infinite;
                animation:fa-spin 2s linear infinite
            }
            @-webkit-keyframes fa-spin{
                0%{
                    -webkit-transform:rotate(0deg);transform:rotate(0deg)
                }to{
                    -webkit-transform:rotate(1turn);transform:rotate(1turn)
                }
            }
            @keyframes fa-spin{
                0%{
                    -webkit-transform:rotate(0deg);transform:rotate(0deg)
                }
                to{
                    -webkit-transform:rotate(1turn);transform:rotate(1turn)
                }
            }
            .blurry_text {
                color: transparent;
                text-shadow: 0 0 rgba(0,0,0,0.5);
                cursor: pointer;
            }
            #snackbar { visibility:hidden;min-width:250px;margin-left:-125px;color:#fff;text-align:center;border-radius:2px;padding:16px;position:fixed;z-index:1;left:50%;bottom:30px;font-size:17px; }
            #snackbar.show { visibility:visible;-webkit-animation:fadein 0.5s, fadeout 0.5s 2.5s;animation:fadein 0.5s, fadeout 0.5s 2.5s; }
            @-webkit-keyframes fadein { from { bottom:0;opacity:0; }
            to { bottom:30px;opacity:1; }
                
            }
            @keyframes fadein { from { bottom:0;opacity:0; }
            to { bottom:30px;opacity:1; }
            }
            @-webkit-keyframes fadeout { from { bottom:30px;opacity:1; }
            to { bottom:0;opacity:0; }
            }
            @keyframes fadeout { from { bottom:30px;opacity:1; }
            to { bottom:0;opacity:0; }
            }
            input[type=time] {
                background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><circle cx='20' cy='20' r='18.5' fill='none' stroke='%23222' stroke-width='3' /><path d='M20,4 20,8 M4,20 8,20 M36,20 32,20 M20,36 20,32' stroke='%23bbb' stroke-width='1' /><circle cx='20' cy='20' r='2' fill='%23222' stroke='%23222' stroke-width='2' /></svg>"), url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><path d='M18.5,24.5 19.5,4 20.5,4 21.5,24.5 Z' fill='%23222' style='transform:rotate(120deg); transform-origin: 50% 50%;' /></svg>"), url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><path d='M18.5,24.5 19.5,8.5 20.5,8.5 21.5,24.5 Z' style='transform:rotate(20deg); transform-origin: 50% 50%;' /></svg>");
                --color: #945;
                --bgColor: #d89;
                --size: 1.3rem;
                --border: calc(var(--size) * 0.125);
                --borderRadius: calc(var(--size) * 0.5);
                --labelSize: calc(var(--size) * 0.75);
                --margin: calc(var(--size) * 0.25);
                --marginLeft: calc(var(--size) + calc(var(--size) * 0.5));
                background-position: var(--margin) 50%;
                background-repeat: no-repeat;
                background-size: var(--size) var(--size);
                border: var(--border) solid var(--color);
                border-radius: var(--borderRadius);
                color: #222;
                font-size: var(--size);
                padding: var(--margin) var(--margin) var(--margin) var(--marginLeft);
                transition: backgroundImage 0.25s;
            }
            input[type=time]:focus {
                outline: 2px dashed #945;
                outline-offset: 3px;
            }
            .water_text{
                  position: relative;
                  top: 12px;
            }
            .water_level {
  height: 100%;
position: absolute;
margin: 0px;
  left: 0;
  border-radius: 25px;
}
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body style="background: #ebf5fc;">
        <div class="jumbotron vertical-center" style="background: #ebf5fc;">
            <div class="container ul" id="tab_1" style="display: none">
                <div class="row"><div class="col-12"><div class="alert alert-primary" role="alert" style="text-align:center"><b>माँ का आशियाना     </b> </div></div></div>
                <h4 class="text-center">Please Login</h4><br><br>
                <form onsubmit="return false;" autocomplete="off">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter login username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter login password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" onclick="user_login(this)">Login</button>
                    </div>
                </form>
                <br><br><br>
                <div class="text-center font-weight-bold font-italic"><hr style="margin:0rem">Chauhan's Family</div>
            </div>
            <div class="container ul" id="tab_2" style="display:none">
                <div class="col-12">
                    <div class="alert alert-primary" role="alert" style="text-align:center;margin-bottom: 5px;"><b>माँ का आशियाना</b> </div>
                    <h6 style="margin-bottom: 10px"><b>WELCOME:-</b> <span id="user_name"></span></span> <span onclick="logout()" style="color: red">Logout</span></h6>
                </div>
                <div class="row">
                    <div class="col-4 hc_button">
                        <label data-t="btn">
                            <input type="checkbox" name="power" />
                            <div class="icon-box img-div" style="background-image: url(power.png);background-size: 80% 80%;background-repeat: no-repeat;background-position: center;"  data-on="power-on.png" data-off="power.png"></div>
                        </label>
                    </div>
                    <div class="col-4 hc_button">
                        <label data-t="btn">
                            <input type="checkbox" name="LED_1" />
                            <div class="icon-box img-div" style="background-image: url(tv.svg);" data-on="tv-on.svg" data-off="tv.svg"></div>
                        </label>
                    </div>
                    <div class="col-4 hc_button">
                        <label data-t="btn">
                            <input type="checkbox" name="LED_2" />
                            <div class="icon-box img-div" data-on="fan-on.svg" data-spin="1" data-off="fan.svg">
                                <img src="fan-on.svg" style="width:95%;height:60%">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 hc_button">
                        <label data-t="btn">
                            <input type="checkbox" name="LED_3" />
                            <div class="icon-box img-div" style="background-image: url(lightbulb.svg);" data-on="lightbulb-on.svg" data-off="lightbulb.svg"></div>
                        </label>
                    </div>
                    <div class="col-4 hc_button">
                        <label data-t="btn">
                            <input type="checkbox" name="LED_4" />
                            <div class="icon-box img-div" style="background-image: url(cons.png);" data-on="cons-on.png" data-off="cons.png"></div>
                        </label>
                    </div>
                    <div class="col-4 hc_button">
                        <label data-t="btn">
                            <input type="checkbox" name="LED_5" />
                            <div class="icon-box img-div" style="background-image: url(cons.png);" data-on="cons-on.png" data-off="cons.png"></div>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 hc_button">
                        <label data-t="btn">
                            <input type="checkbox" name="LED_6" />
                            <div class="icon-box img-div" style="background-image: url(lightbulb.svg);" data-on="lightbulb-on.svg" data-off="lightbulb.svg"></div>
                        </label>
                    </div>
                    <div class="col-4 hc_button">
                        <label data-t="btn">
                            <input type="checkbox" name="LED_7" />
                            <div class="icon-box img-div" style="background-image: url(cons.png);" data-on="cons-on.png" data-off="cons.png"></div>
                        </label>
                    </div>
                    <div class="col-4 hc_button">
                        <label data-t="btn">
                            <input type="checkbox" name="LED_8" />
                            <div class="icon-box img-div" style="background-image: url(cons.png);" data-on="cons-on.png" data-off="cons.png"></div>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success" role="alert" style="text-align:center;height:50px;padding: 0px;border-radius: 20px;">
                            <span class="water_level">
                                
                            </span>
                            <span class="water_text">
                                <b> WATER LEVEL <span id="water_per">0</span>% </b>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="text-center font-weight-bold font-italic"><hr style="margin:0rem">Chauhan's Family</div>
            </div>
            <div class="container ul" id="tab_3" style="display: none">
                <h5 style="text-align: center">UPDATE DAILY SCHEDULE FOR <br> <span id="schedule_head_txt">LED 1</span></h5>
                <div class="row"><div class="col-12"><div class="alert alert-primary" role="alert" style="text-align:center;padding: .15rem .25rem"><b>FIRST SCHEDULE</b> </div></div></div>
                <div class="form-group row">
                    <div class="col-3 col-form-label"><label for="time_1" style="font-size: 1.3rem">ON</label></div>
                    <div class="col-8"><input type="time" name="time_1" class="form-control-plaintext time_selector" id="time_1"></div>
                    <div class="col-1" style="font-size: 200%;padding: 0px;margin-left: -10px;" onclick="$('#time_1').val('')">&times;</div>
                </div>
                <div class="form-group row">
                    <div class="col-3 col-form-label"><label for="time_2" style="font-size: 1.3rem">OFF</label></div>
                    <div class="col-8"><input type="time" name="time_2" class="form-control-plaintext time_selector" id="time_2"></div>
                    <div class="col-1" style="font-size: 200%;padding: 0px;margin-left: -10px;" onclick="$('#time_2').val('')">&times;</div>
                </div>
                
                <div class="row"><div class="col-12"><div class="alert alert-primary" role="alert" style="text-align:center;padding: .15rem .25rem"><b>SECOND SCHEDULE</b> </div></div></div>
                <div class="form-group row">
                    <div class="col-3 col-form-label"><label for="time_3" style="font-size: 1.3rem">ON</label></div>
                    <div class="col-8"><input type="time" name="time_3" class="form-control-plaintext time_selector" id="time_3"></div>
                    <div class="col-1" style="font-size: 200%;padding: 0px;margin-left: -10px;" onclick="$('#time_3').val('')">&times;</div>
                </div>
                <div class="form-group row">
                    <div class="col-3 col-form-label"><label for="time_4" style="font-size: 1.3rem">OFF</label></div>
                    <div class="col-8"><input type="time" name="time_4" class="form-control-plaintext time_selector" id="time_4"></div>
                    <div class="col-1" style="font-size: 200%;padding: 0px;margin-left: -10px;" onclick="$('#time_4').val('')">&times;</div>
                </div>
                <hr>
                <div class="form-group row">
                    <div class="col-6"><button type="button" class="btn btn-success"   onclick="save_schedule();"   id="sch_save_btn"  style="width: 100%">Save</button></div>
                    <div class="col-6"><button type="button" class="btn btn-secondary" onclick="cancel_schedule();"  style="width: 100%">Cancel</button></div>
                </div>
                <div class="text-center font-weight-bold font-italic"><hr style="margin:0rem">Chauhan's Family</div>
            </div>
        </div>
        <div id="snackbar"></div>
    <script src="jquery-3.5.1.min.js"     ></script>
    <script src="bootstrap.bundle.min.js" ></script>

    
    <script>
    var a={};
    var auth_token=null;
    var selected_bulb=null;
    var i;
    var times=[0,0,0,0];
    var schedule_saving=0;
    var refresh_time=2;
    var user={};
    var is_online=0;
    var online_timeout=null;
    var wt=0;var socket=null;
    led_numbers={
        1:"LED_1",
        2:"LED_2",
        3:"LED_3",
        4:"LED_4",
        5:"LED_5",
        6:"LED_6",
        7:"LED_7",
        8:"LED_8",
    };
    led_values={
        "LED_1":1,
        "LED_2":2,
        "LED_3":3,
        "LED_4":4,
        "LED_5":5,
        "LED_6":6,
        "LED_7":7,
        "LED_8":8,
    };
    led_names={
        "LED_1":"TV LIGHT",
        "LED_2":"FAN",
        "LED_3":"OUTSIDE BULB",
        "LED_4":"CONCEALED LIGHT 1",
        "LED_5":"CONCEALED LIGHT 2",
        "LED_6":"INSIDE BULB",
        "LED_7":"CONCEALED LIGHT 3",
        "LED_8":"CONCEALED LIGHT 4"
    };
    schedule_names={
        "LED_1":"SCHEDULE_1",
        "LED_2":"SCHEDULE_2",
        "LED_3":"SCHEDULE_3",
        "LED_4":"SCHEDULE_4",
        "LED_5":"SCHEDULE_5",
        "LED_6":"SCHEDULE_6",
        "LED_7":"SCHEDULE_7",
        "LED_8":"SCHEDULE_8"
    };
    var long_press_time=null;
    var schedulling=0;
    
    function long_press(e){
        clearTimeout(long_press_time);long_press_time=null;
        if(!is_online || null==socket){return;}
        var l=$(e.target).closest("label");
        var i=l.find("input");
        var n=i.attr('name');
        
        if(n=="power"){return;}
        schedulling=led_values[n];
        
        var m='{"resource":"'+schedule_names[n]+'","interval":0,"enabled":true}';    send(m);
        $('.time_selector').val('');
        $('#schedule_head_txt').text(led_names[n]);
        
        schedule_saving=0;
        $('#sch_save_btn').attr('disabled',false);
        
        $("#tab_2").slideUp(400,function(){
            $(this).hide();
            $('#tab_3').show(400,function(){
                $('#tab_3').slideDown();
            })
        });
    }
    function logout(){
        storage('auth_token',"");
        storage('user',"");
        location.reload();
    }
    function cancel_schedule(){
        schedulling=0;
        schedule_saving=0;
        $("#tab_3").slideDown(400,function(){
            $(this).hide();
            $('#tab_2').show(400,function(){
                $(this).slideDown();
            })
        });
    }
    function save_schedule(){
        if(schedulling){
            $(".time_selector").each(function(index) {
                t=$(this).val().split(":");
                times[index]=parseInt((t[0]*60))+parseInt(t[1]);
                if(isNaN(times[index])){times[index]=0;}
            });
            
            var a=times[0];
            var b=times[1];
            var c=times[2];
            var d=times[3];
            
            if(a==0 && b==0 && c!=0 && d!=0){
                a=c;
                b=d;
                c=0;
                d=0;
            }
            else if((a!=0 || b!=0) && (c!=0 || d!=0)){
                if(((a>b && (a>c && b<c)) || (a<b && (a<c && b>c))) || (a>b && (a>d && b<d)) || (a<b && (a<d && b>d))){
                    toast("Schedule Times are Invalid");return;
                }
            }
            
            n=(schedulling-1)*4+17
            var m='{"resource":"SCHEDULE_'+schedulling+'","in":{"S_'+n+'": '+a+', "S_'+(n+1)+'": '+b+', "S_'+(n+2)+'": '+c+', "S_'+(n+3)+'": '+d+'}}';
            schedule_saving=1;
            send(m);
            $('#sch_save_btn').attr('disabled',true);
        }
    }
    
    function user_login(e){
        var u=$('#username').val();
        var p=$('#password').val();
        if(u=='' || u.length<1){
            $('#username').focus();
            toast('Enter a username');
            return;
        }
        if(p=='' || p.length<1){
            $('#password').focus();
            toast('Enter a password');
            return;
        }
        e.disabled=true;e.innerHTML="Wait";

        $.ajax({
			type: "POST",
			url: "/user_login",
			timeout: 4000,
			data: {u:u,p:p}
		}).done(function (d, textStatus, jqXHR) {
		    e.disabled=false;e.innerHTML="Login";$('#password').val('');console.log(d);
		    
			if(d.code==100){
			    user=d.user;
			    storage("user",JSON.stringify(user));
			    storage("auth_token",user.token);
			    auth_token=user.token;
			    $('#user_name').text(user.name);
			    $("#tab_1").slideUp(400,function(){
			        $(this).hide();
			        $('#tab_2').show(400,function(){
			            $('#tab_2').slideDown();
			        })
			        create_socket();
			    });
			}
            else if(d.code==1){
                toast("Username or Password Error");
            }
            else if(d.code==2){
                toast("Account Deactivated");
            }
            else{
                toast('Technical Error');
            }
		}).fail(function(e){
			toast('Something Error');
		});
    }
    var toast_timeout=null;
    function toast(txt,color) {
        //background-color:#333
        var x = document.getElementById("snackbar");
        x.innerHTML=txt;
        x.className = "show";
        if(!color){color="#333";}
        x.style.backgroundColor =color;
        if(toast_timeout){clearTimeout(toast_timeout);toast_timeout=null;}toast_timeout=setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000); 
    }
    function storage(key,value){
        if(typeof(Storage) !== "undefined") {
            if(typeof(value) !== "undefined"){
                if(value===''){
                    return localStorage.removeItem(key);
                }
                return localStorage.setItem(key,value);
            }
            return localStorage.getItem(key);
        }
        return null;
    }
    
    function getColor(value){value/=100;var hue=((value)*120).toString(10);return ["hsl(",hue,",100%,50%)"].join("");}
    function fill_water(limit){
        if(limit==wt) return;
        
        wt=(limit>wt) ? wt+parseInt((limit-wt)/10)+1 : wt-(parseInt((wt-limit)/10)+1);
        
        $("#water_per").text(wt);
        $(".water_level").css("width",wt+"%");
        c=getColor(wt);
        $(".water_level").css("background-color",c);
        
        setTimeout(function(){ fill_water(limit); }, 200);
    }
    function create_socket(){
        if(auth_token==null) {if(online_timeout){clearTimeout(online_timeout);online_timeout=null;}setTimeout(function(){ create_socket(); }, 10000);return;}
        if(!navigator.onLine){if(online_timeout){clearTimeout(online_timeout);online_timeout=null;}setTimeout(function(){ create_socket(); }, 3000);return;}
        //return;
        socket = new WebSocket("wss://backend.thinger.io/v3/users/hc/devices/hcmain/resources?authorization="+auth_token);
        socket.onopen = function(e) {
            console.log("[open] Connection established, send -> server");
            socket.send('{"resource":"water","interval":0,"enabled":true}');
            socket.send('{"resource":"power","interval":'+refresh_time+',"enabled":true}');
            socket.send('{"resource":"LED_1","interval":'+refresh_time+',"enabled":true}');
            socket.send('{"resource":"LED_2","interval":'+refresh_time+',"enabled":true}');
            socket.send('{"resource":"LED_3","interval":'+refresh_time+',"enabled":true}');
            socket.send('{"resource":"LED_4","interval":'+refresh_time+',"enabled":true}');
            socket.send('{"resource":"LED_5","interval":'+refresh_time+',"enabled":true}');
            socket.send('{"resource":"LED_6","interval":'+refresh_time+',"enabled":true}');
            socket.send('{"resource":"LED_7","interval":'+refresh_time+',"enabled":true}');
            socket.send('{"resource":"LED_8","interval":'+refresh_time+',"enabled":true}');
        };
        socket.onmessage = function(event) {
            is_online=1;
            if(online_timeout){clearTimeout(online_timeout);online_timeout=null;}online_timeout=setTimeout(function(){ is_online=0; }, 5000); 
            
            var msg=JSON.parse(event.data);
            if(msg.error){
                console.log(msg);
                return;
            }
            else if(msg.resource.startsWith("SCHEDULE")){
                if(schedule_saving){
                     $("#tab_3").slideDown(400,function(){
                         $(this).hide();
                         $('#tab_2').show(400,function(){
                             $(this).slideDown();
                         })
                     });
                    toast("Schedule saved successfully");
                    schedule_saving=0;
                    $('#sch_save_btn').attr('disabled',false);
                }
                i=0;
                $.each(msg.in, function( index, value ) {
                    i++;
                    a[i]=value;
                    if(value!=0){
                        var h=('0'+parseInt(value/60).toString()).slice(-2);
                        var m=('0'+parseInt(value%60).toString()).slice(-2);
                        var t=h+":"+m;
                        $('#time_'+i).val(t);
                    }
                });
                if(!a[1] && a[2]){  $('#time_1').val("00:00");    }
                if(a[1] && !a[2]){  $('#time_2').val("00:00");    }
                if(!a[3] && a[4]){  $('#time_3').val("00:00");    }
                if(a[3] && !a[4]){  $('#time_4').val("00:00");    }
                
            }else if(msg.resource=='water'){
                fill_water(msg.out);
            }else{
                $('input:checkbox[name='+msg.resource+']').prop('checked',msg.in);
				img=$('input:checkbox[name='+msg.resource+']').next('.icon-box');
				if(msg.in){
					sr=img.data('on');
					if(img.data('spin')=="1"){
						img.find('img').addClass('fa-spin');
					}else{
						img.css('background-image', 'url('+sr+')');
					}
				}
				else{
					sr=img.data('off');
					if(img.data('spin')=="1"){
						img.find('img').removeClass('fa-spin');
					}else{
						img.css('background-image', 'url('+sr+')');
					}
				}
            }
            
        };
        socket.onclose = function(event) {
            is_online=0;
            setTimeout(function(){ create_socket(); }, 10000);
            if (event.wasClean) {
                console.log("[close] Connection closed cleanly, code="+event.code+" reason="+event.reason);
            } else {
                console.log("[close] Connection died");
            }
        };
        socket.onerror = function(error) {
            is_online=0;
            setTimeout(function(){ create_socket(); }, 10000);
            console.log("[error] "+error.message);
        };
    }
    function send(msg){
        if(socket==null) {return;}
        socket.send(msg);
    }
    
    window.addEventListener('offline', function(event){toast("You lost connection.",'red');});
    window.addEventListener('online', function(event){toast("You are now back online.",'green');});
    
    $().ready(function(){
        if(storage('auth_token')==null){
            $("#tab_1").show();
            $('#username').focus();
        }
        else{
            $("#tab_2").show();
            user=JSON.parse(storage('user'));
            auth_token=storage('auth_token');
            $('#user_name').text(user.name);
            create_socket();
        }
        
        $( "body" ).contextmenu(function(e) {e.preventDefault();});
        $("label").mouseleave(function () {if(long_press_time){clearTimeout(long_press_time);long_press_time = null;}});
        $("input:checkbox").on('click', function (e) {if(long_press_time){clearTimeout(long_press_time);long_press_time = null;}  if(!is_online || socket==null){e.preventDefault();return;}});
        $("body").on('mousedown touchstart','label[data-t="btn"]', function (e) {
            if(long_press_time){clearTimeout(long_press_time);long_press_time = null;}
            long_press_time=setTimeout(function(){ long_press(e); }, 750);
        });
        
        $('input:checkbox').on('change',function(e){
            if(!is_online || socket==null){return;}
            
            var n=$(this).attr('name');
            var v=$(this).is(":checked");
            var m='{"resource":"'+n+'","in":'+v+'}';
            send(m);
        })
        
        $('.time_selector').on('keyup change',function(e){
            const reTime = /^([0-1][0-9]|2[0-3]):[0-5][0-9]$/;
            const time = $(this).val();
            if (reTime.exec(time)) {
                const minute = Number(time.substring(3,5));
                const hour = Number(time.substring(0,2)) % 12 + (minute / 60);
                var t = `url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><circle cx='20' cy='20' r='18.5' fill='none' stroke='%23222' stroke-width='3' /><path d='M20,4 20,8 M4,20 8,20 M36,20 32,20 M20,36 20,32' stroke='%23bbb' stroke-width='1' /><circle cx='20' cy='20' r='2' fill='%23222' stroke='%23222' stroke-width='2' /></svg>"), url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><path d='M18.5,24.5 19.5,4 20.5,4 21.5,24.5 Z' fill='%23222' style='transform:rotate(${360 * minute / 60}deg); transform-origin: 50% 50%;' /></svg>"), url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><path d='M18.5,24.5 19.5,8.5 20.5,8.5 21.5,24.5 Z' style='transform:rotate(${360 * hour / 12}deg); transform-origin: 50% 50%;' /></svg>")`;
                $(this).css('backgroundImage',t);
            }
        })
        
        //fill_water(parseInt(Math.random()*100));
    })
    </script>
  </body>
</html>