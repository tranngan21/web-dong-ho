function checkdk(){
    var name = document.getElementById('name').value;			
	var phone = document.getElementById('phone').value;
	var add = document.getElementById('address').value;

    if(name==""|| phone==""|| add ==""){
        alert("bạn cần điền đầy đủ thông tin!");
        return false;
    }
    else return true;
}
function checkspase(){
    var name=document.getElementById('name').value;
    var email=document.getElementById('email').value; 
    var mes=document.getElementById('mes').value;
    if(name==""|| email==""||mes==""){
        alert('bạn cần điền đầy đủ thông tin!');
        return false;
    }
    else return true;
}
function show(e){
    var tmp= document.getElementById('pass');
    if(tmp.type=="text"){
        tmp.type = "password";
        e.classList.remove("fa-eye-slash");
        e.classList.add('fa-eye');
        
    }
    else{
        tmp.type="text"; 
        e.classList.remove('fa-eye');
        e.classList.add("fa-eye-slash");
    } 
}
function show1(e){
    var tmp= document.getElementById('repass');
    if(tmp.type=="text"){
        tmp.type = "password";
        e.classList.remove("fa-eye-slash");
        e.classList.add('fa-eye');
        
    }
    else{
        tmp.type="text"; 
        e.classList.remove('fa-eye');
        e.classList.add("fa-eye-slash");
    } 
}
function checkpass(){
    var pass = document.getElementById('pass');			
			var re_pass = document.getElementById('repass');			
			if (pass.value == re_pass.value)
			{				
				return true; //cho form submit
			}
			else
			{	
				alert("Mật khẩu nhập lại chưa đúng");
				re_pass.focus();
				pass.classList.add("error");
				repass.classList.add("error");
				return false; //ngăn chặn form submit
			}
}