const bodyMain = document.querySelector("body")
const   modeToggle = bodyMain.querySelector(".mode-toggle");
const   sidebar = bodyMain.querySelector("nav");
const   sidebarToggle = bodyMain.querySelector(".sidebar-toggle");

let getMode = sessionStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    bodyMain.classList.toggle("dark");
}

let getStatus = sessionStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}


sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        sessionStorage.setItem("status", "close");
    }else{
        sessionStorage.setItem("status", "open");
    }
})


function get2FA(){
    let data = document.querySelector("#twofa").value.trim()
    document.querySelector("#rs2fa").value = ""
    data = data.split("\n")
    for (let index = 0; index < data.length; index++) {
        const temp = data[index];
        let tmp = temp.split("|")[temp.split("|").length - 1]
        let i = tmp.replaceAll(" ", "")
        $.ajax({
            type: 'GET',
            url: "/get-2fa-api.php?code=" + i,
           
        }).then(res=>{
            res = JSON.parse(res)
            document.querySelector("#rs2fa").value += (tmp+"|" + res.token + "\n")
        });
        
    }
  
}

setTimeout(()=>{
    

},3000)

function checkLiveUID(){
    let data = document.querySelector("#twofa").value.trim()
    document.querySelector("#livetx").value = ""
    document.querySelector("#dietx").value = ""
    document.querySelector(".live span").innerHTML = "0"
    document.querySelector(".die span").innerHTML = "0"
    data = data.split("\n")
    for (let index = 0; index < data.length; index++) {
        let temp = data[index];
        let i = temp.split("|")[0].replaceAll(" ", "")
        $.get("https://graph.facebook.com/"+i+"/picture?type=normal", function(data) {
        }).done(function() {
            document.querySelector("#livetx").value += (i + "\n")
            document.querySelector(".live span").innerHTML =  Number(document.querySelector(".live span").innerHTML) + 1;
        }).fail(function(data, textStatus, xhr) {
            document.querySelector("#dietx").value += (i + "\n")
            document.querySelector(".die span").innerHTML =  Number(document.querySelector(".die span").innerHTML) + 1;

        });

    }

}
function countLines() {
    var textarea = document.getElementById('twofa');
    var lines = textarea.value;
    var lineCount = lines.length;
    if(lineCount >= 500000){
        lineCount= lines.substring(0,500000).length;
        textarea.value = lines.substring(0,500000)
    }
    document.getElementById('line-count').innerHTML = lineCount;
}

function handleCreateNote(){
    $.ajax({
        type: 'GET',
        url: "/create-note-api.php",
    }).then(res=>{
        res = JSON.parse(res)
        window.location = "/create-note.php?id=" + res.id_edit
    });
}
if(document.querySelector(".handleNote"))
document.querySelector(".handleNote").addEventListener("click",(e)=>{
    e.preventDefault();
    if(!window.location.href.includes("create-note"))
    handleCreateNote();
})






let logout_bt=document.querySelector(".show-bt-logout")
if(logout_bt){
    logout_bt.addEventListener("click",(e)=>{
        e.preventDefault();
        console.log("Logout");
        document.querySelector(".logout_bt").click()
    })
}













if(document.querySelector(".handleCreateNote"))
document.querySelector(".handleCreateNote").addEventListener("click",(e)=>{
    handleCreateNote();
})


let id_note = document.querySelector(".hnbgvfdcsaqwdfn1234567123")



//hnbgvfdcsaqwdfn1234567123 id 
//hnbgvfdcsaqwdfn1234567 id_edit

if(document.querySelector(".update-role-note"))
document.querySelector(".update-role-note").addEventListener("click",(e)=>{
    let id_edit = document.querySelector(".hnbgvfdcsaqwdfn1234567").value
    let id_view_new = document.querySelector(".idViewNoteNew").value.trim()
    let id_edit_new = document.querySelector(".idEditNoteNew").value.trim()
    let oldV = document.querySelector(".old_view").value.trim()
    let oldE = document.querySelector(".old_edit").value.trim()
    
    let data = {id_edit}
    if(oldV !== id_view_new){
        data={
            ...data,
            id_view_new
        }
    }
    if(oldE !== id_edit_new){
        data={
            ...data,
            id_edit_new
        }
    }
    console.log(data,oldE,oldV);
    $.ajax({
        type: 'POST',
        url: "/update-note-api.php",
        data:{
            ...data,
            pass_note:sessionStorage.getItem('pass_note_'+id_note.value) || null
        }
    }).then(rs=>{
        if(rs==1){
            window.location = window.location.href.replace(id_edit, id_edit_new);
        }else{
            Swal.fire({
                icon: 'error',
                text: 'Đã có id này trong hệ thống!',
              })
        }
    })
})
if(document.querySelector(".update-pass-note"))
document.querySelector(".update-pass-note").addEventListener("click",(e)=>{
    let id_edit = document.querySelector(".hnbgvfdcsaqwdfn1234567").value
    let pass = document.querySelector(".pass-note").value

    $.ajax({
        type: 'POST',
        url: "/update-note-api.php",
        data:{
            id_edit,
            pass,
            pass_note:sessionStorage.getItem('pass_note_'+id_note.value) || null
        }
    }).then(rs=>{
        if(rs==1){
            Swal.fire({
                icon: 'success',
                text: 'Cập nhập mật khẩu thành công!',
              })
            sessionStorage.setItem("pass_note_"+id_note.value, pass)  
            document.querySelector(".close_update_note").click()
            Swal.fire({
                icon: 'success',
                text: 'Cập nhập mật khẩu thành công!',
              })
        }else{
            Swal.fire({
                icon: 'error',
                text: 'Có lỗi trong quá trình cập nhập thử lại!',
              })
        }
    })
})

if(document.querySelector(".save-note"))
document.querySelector(".save-note").addEventListener("mouseout",(e)=>{
    let id_edit = document.querySelector(".hnbgvfdcsaqwdfn1234567").value
    let content_note = document.querySelector(".content_note").value
    let title_note = document.querySelector(".title_note").value
    $.ajax({
        type: 'POST',
        url: "/update-note-api.php",
        data:{
            id_edit,
            content:content_note,
            title:title_note,
            pass_note:sessionStorage.getItem('pass_note_'+id_note.value) || null 
        }
    })
})



if(document.querySelector(".close_enter_pass")){
    document.querySelector(".close_enter_pass").addEventListener("click",()=>{
        window.location = "/"
    })
}
if(document.querySelector(".submit-pass-note"))
document.querySelector(".submit-pass-note").addEventListener("click",()=>{
    let pass = document.querySelector(".pass-note-enter").value;
    let id = document.querySelector(".hnbgvfdcsaqwdfn1234567123").value

    $.ajax({
        type: 'POST',
        url: "/get_note_by_pass.php",
        data:{
            id,
            pass
        }
    }).then(rs=>{
        rs = JSON.parse(rs);
        if(rs.status == "success"){
            sessionStorage.setItem("pass_note_"+id_note.value, pass);
            document.querySelector(".content_note").innerHTML = rs.content
            document.querySelector("#exampleModal4").style.display = "none"
        }else{
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Sai mật khẩu!',
              })
        }
    })  
})
