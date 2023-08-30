document.querySelector(".cut_string .process").addEventListener('click',()=>{
   let data = document.querySelector(".cut_string textarea").value.split("\n")
   let check = document.querySelector(".cut_string .flexCheckChecked").checked
   let denvitri = document.querySelector(".cut_string .denvitri").value
   let batdau = document.querySelector(".cut_string .batdau").value
   let boqua = document.querySelector(".cut_string .boqua").value == "" ? -1 : Number(document.querySelector(".cut_string .boqua").value) - 1 
   let kitungangcach = document.querySelector(".cut_string .kitungangcach").value
   let rs = ""
   data.map(tmp=>{
        tmp = tmp.split(kitungangcach)
        let rsTmp = ''
        let denvitriTmp = denvitri;
        if(Number(denvitri) >= tmp.length)
        denvitriTmp = tmp.length - 1
        else
        denvitriTmp = Number(denvitri) - 1
        for (let index = Number(batdau) - 1; index <= denvitriTmp; index++) {
            if(boqua !== index){
                rsTmp +=  tmp[index] +"|" 
            }
        }
        rs+= rsTmp.substring(0, rsTmp.length-1) + "\n"
   })
   if(check){
    let mangGiaTri = rs.split("\n")
    const tapHopGiaTri = new Set(mangGiaTri);
    rs = Array.from(tapHopGiaTri).join("\n");
   }
  
   document.querySelector(".cut_string .rs_textarea").textContent = rs

})


document.querySelector(".insert_string .process").addEventListener('click',()=>{
    let data = document.querySelector(".insert_string textarea").value.split("\n")
    let check = document.querySelector(".insert_string .flexCheckChecked").checked
    let ketthuc = document.querySelector(".insert_string .ketthuc").value
    let batdau = document.querySelector(".insert_string .batdau").value

    let rs = ""
    data.map(tmp=>{
        tmp = batdau + tmp + ketthuc         
         rs+= tmp + "\n"
    })
    if(check){
     let mangGiaTri = rs.split("\n")
     const tapHopGiaTri = new Set(mangGiaTri);
     rs = Array.from(tapHopGiaTri).join("\n");
    }
   
    document.querySelector(".insert_string .rs_textarea").textContent = rs
 
 })


 document.querySelector(".graft .process").addEventListener('click',()=>{
    let data = document.querySelector(".graft textarea").value.split("\n")
    let check = document.querySelector(".graft .flexCheckChecked").checked
    let ngancach = document.querySelector(".graft .ngancach").value
    let mode = document.querySelector(".graft .mode").selectedIndex

    let rs = ""
    if(mode == 0){
        data.map(tmp=>{
             rs+= tmp + ngancach
        })
        rs = rs.substring(0,rs.length - ngancach.length )

    }else{
        for (let index = 0; index < data.length; index++) {
            const element = data[index];
            const element2 = data[++index] ?? "";
            rs += element + ngancach + element2 + "\n"
        }
      
    }
  
    if(check && mode == 1){
     let mangGiaTri = rs.split("\n")
     const tapHopGiaTri = new Set(mangGiaTri);
     rs = Array.from(tapHopGiaTri).join("\n");
    }
    
    document.querySelector(".graft .rs_textarea").textContent = rs
 
 })


 document.querySelector(".filter_string .process").addEventListener('click',()=>{
    let data = document.querySelector(".filter_string textarea").value.split("\n")
    const tapHopGiaTri = new Set(data);
    let rs = Array.from(tapHopGiaTri).join("\n");
   
    document.querySelector(".filter_string .rs_textarea").textContent = rs
 
 })

 document.querySelector(".random_string .process").addEventListener('click',()=>{
    let data = document.querySelector(".random_string textarea").value.split("\n")
    let start = Number(document.querySelector(".random_string .start").value)- 1
    let end = Number(document.querySelector(".random_string .end").value) - 1
    let ngancach = document.querySelector(".random_string .ngancach").value
    let check = document.querySelector(".random_string .flexCheckChecked").checked


    let rs =''
    data.map(tmp=>{
        tmp = tmp.split(ngancach)
        let b = tmp[end];
        tmp[end] = tmp[start];
        tmp[start] = b;
        tmp = Array.from(tmp).join(ngancach);
        rs+= tmp + "\n"
    })

    if(check ){
        let mangGiaTri = rs.split("\n")
        const tapHopGiaTri = new Set(mangGiaTri);
        rs = Array.from(tapHopGiaTri).join("\n");
       }
    document.querySelector(".random_string .rs_textarea").textContent = rs
 
 })

 
 document.querySelector(".search_string .process").addEventListener('click',()=>{
    let data = document.querySelector(".search_string textarea").value
    let search_key = document.querySelector(".search_string .search_key").value
    let replate = document.querySelector(".search_string .replate").value
    let check = document.querySelector(".search_string .flexCheckChecked").checked
    
    if(check ){
        let regex = new RegExp(search_key, 'gi');
        data= data.replace(regex, replate)
       }else{
        data= data.replaceAll(search_key, replate)

       }
    document.querySelector(".search_string .rs_textarea").textContent = data
 
 })
 
 document.querySelector(".filter_content .process").addEventListener('click',()=>{
    let data = document.querySelector(".filter_content textarea").value
    let filter_data = document.querySelector(".filter_content .filter_tx").value.split("\n")
    let rs =''
    filter_data.map(tmp=>{
        data = data.replaceAll(tmp, "")
    })
    document.querySelector(".filter_content .rs_textarea").textContent = data
 
 })

 document.querySelector(".end_tab .process").addEventListener('click',()=>{
    let data = document.querySelector(".end_tab textarea").value.split("\n")
    let giu = document.querySelector(".end_tab .giu").value
    let xoa = document.querySelector(".end_tab .xoa").value

    let check = document.querySelector(".end_tab .flexCheckChecked").checked
    let rs =''
    data =data.map((tmp, index)=>{
        console.log(tmp);
        if(check){
            let checkTmp = tmp.toLowerCase()
            let checkGiu = giu.toLowerCase()

            if (checkTmp.includes(checkGiu)) {
                return tmp;
            }
        }else{
            if (tmp.includes(giu)) {
                return tmp;
            }
        }
       
    })
    if(xoa!= ""){
        data =data.map((tmp, index)=>{
            console.log(tmp);
            if(tmp != undefined)
            if(check){
                let checkTmp = tmp.toLowerCase()
                let checkX = xoa.toLowerCase()
    
                if (checkTmp.includes(checkX)) {
                }else{
                    return tmp;
                }
            }else{
                if (tmp.includes(xoa)) {
                }else{
                    return tmp;
                }
            }

            
        })
    }
    
    data.map(tmp=>{
        if(tmp != undefined)
        rs += tmp + "\n"
    })

    

    document.querySelector(".end_tab .rs_textarea").textContent = rs
 
 })


 document.querySelector(".cookie_get_uid .process").addEventListener('click',()=>{
    let check = document.querySelector(".cookie .flexCheckChecked").checked
    let data = document.querySelector(".cookie_get_uid textarea").value.split("\n")
    let sort = document.querySelector(".cookie_get_uid .sort").value
    let rs =''
    data.map(tmp=>{
        let keyValuePairs = tmp.split(';').map(pair => pair.split('='));
        let jsonObject = Object.fromEntries(keyValuePairs);
        if(jsonObject.c_user){
            rs+= jsonObject.c_user + "\n"
        }


    })
    rs = rs.substring(0, rs.length-1)
    if(check ){
        let mangGiaTri = rs.split("\n")
        const tapHopGiaTri = new Set(mangGiaTri);
        rs = Array.from(tapHopGiaTri).join("\n");
    }
    if(sort == 1){
        rs = rs.split("\n");
        rs.sort((a,b) => a-b);
        rs = Array.from(rs).join("\n");

    }
    if(sort == 2){
        rs = rs.split("\n");
        rs.sort((a,b) => a-b);
        rs.reverse();
        rs = Array.from(rs).join("\n");
    }
    document.querySelector(".cookie_get_uid .rs_textarea").textContent = rs
    
 })

 document.querySelector(".sort-by-uid .process").addEventListener('click',()=>{
    let check = document.querySelector(".cookie .flexCheckChecked").checked
    let data = document.querySelector(".sort-by-uid textarea").value.trim().split("\n")
    let sort = document.querySelector(".sort-by-uid .sort").value
    let rs =''
    
    if(sort == 1){
        data.sort((a,b) => a-b);

    }
    if(sort == 2){
        data.sort((a,b) => a-b);
        data.reverse();
    }
    if(check ){
        const tapHopGiaTri = new Set(data);
        data = Array.from(tapHopGiaTri).join("\n");
    }else
    data = Array.from(data).join("\n");

    document.querySelector(".sort-by-uid .rs_textarea").textContent = data
    
 })

 document.querySelector(".sort-uid .process").addEventListener('click',()=>{
    let check = document.querySelector(".cookie .flexCheckChecked").checked
    let data = document.querySelector(".sort-uid textarea").value.trim().split("\n")
    let sort = document.querySelector(".sort-uid .sort").value
    let rs =''
    
    if(sort == 1){
        data.sort((a,b) => a-b);

    }
    if(sort == 2){
        data.sort((a,b) => a-b);
        data.reverse();
    }
    if(check ){
        const tapHopGiaTri = new Set(data);
        data = Array.from(tapHopGiaTri).join("\n");
    }else
    data = Array.from(data).join("\n");

    document.querySelector(".sort-uid .rs_textarea").textContent = data
    
 })

 document.querySelector(".delete-cookie .process").addEventListener('click',()=>{
    let check = document.querySelector(".cookie .flexCheckChecked").checked
    let data = document.querySelector(".delete-cookie textarea").value.trim().split("\n")
    let sort = document.querySelector(".delete-cookie .sort").value
    let rs =''
    data.map(tmp=>{
        tmp = tmp.split("|")
        tmp.map((t,index) =>{
            if(t.includes(";")){
            }else{
                rs+= t + "|"
            }
        })
        rs = rs.substring(0, rs.length-1)
        rs +='\n'
    })
    rs = rs.substring(0, rs.length-1)
    if(check ){
        let mangGiaTri = rs.split("\n")
        const tapHopGiaTri = new Set(mangGiaTri);
        rs = Array.from(tapHopGiaTri).join("\n");
    }
    if(sort == 1){
        rs = rs.split("\n");
        rs.sort((a,b) => a-b);
        rs = Array.from(rs).join("\n");

    }
    if(sort == 2){
        rs = rs.split("\n");
        rs.sort((a,b) => a-b);
        rs.reverse();
        rs = Array.from(rs).join("\n");
    }
    document.querySelector(".delete-cookie .rs_textarea").textContent = rs
    
 })

 document.querySelector(".get-token .process").addEventListener('click',()=>{
    let check = document.querySelector(".cookie .flexCheckChecked").checked
    let data = document.querySelector(".get-token textarea").value.trim().split("\n")
    let sort = document.querySelector(".get-token .sort").value
    let vitri = document.querySelector(".get-token .vitri").value

    let rs =''
    data.map(tmp=>{
        tmp = tmp.split("|")
        if(tmp[Number(vitri)]){
            rs += tmp[Number(vitri)] + '\n'
        }
    })
    rs = rs.substring(0, rs.length-1)
    if(check ){
        let mangGiaTri = rs.split("\n")
        const tapHopGiaTri = new Set(mangGiaTri);
        rs = Array.from(tapHopGiaTri).join("\n");
    }
    if(sort == 1){
        rs = rs.split("\n");
        rs.sort();
        rs = Array.from(rs).join("\n");

    }
    if(sort == 2){
        rs = rs.split("\n");
        rs.sort();
        rs.reverse();
        rs = Array.from(rs).join("\n");
    }
    document.querySelector(".get-token .rs_textarea").textContent = rs
    
 })

 document.querySelector(".cut-line .process").addEventListener('click',()=>{
    let data = document.querySelector(".cut-line textarea").value.trim().split("\n")
    let vitri = document.querySelector(".cut-line .vitri").value

    let rs =''
    data = data.slice(0, Number(vitri) || 0)
    rs = Array.from(data).join("\n");
    document.querySelector(".cut-line .rs_textarea").textContent = rs
    
 })

 document.querySelector(".trung-lap .process").addEventListener('click',()=>{
    let data = document.querySelector(".trung-lap textarea").value.trim().split("\n")
    let rs =''
    let mangGiaTri = data
        const tapHopGiaTri = new Set(mangGiaTri);
        rs = Array.from(tapHopGiaTri).join("\n");
    document.querySelector(".trung-lap .rs_textarea").textContent = rs
    
 })

 document.querySelector(".daotu .process").addEventListener('click',()=>{
    let data = document.querySelector(".daotu textarea").value.trim().split("\n")
    data = data.reverse()
    data = Array.from(data).join("\n");
    document.querySelector(".daotu .rs_textarea").textContent = data
    
 })

 document.querySelector(".copyfile .process").addEventListener('click',()=>{
    let data = document.querySelector(".copyfile textarea").value
    let start = document.querySelector(".copyfile .start").value
    let end = document.querySelector(".copyfile .end").value
    let name = document.querySelector(".copyfile .name").value
    let dot = document.querySelector(".copyfile .dot").value
    let zip = new JSZip();

    for(let i = Number(start); i <= Number(end) ; i++){
        zip.file(name+i+"."+dot, data);

    }
    zip.generateAsync({type:"blob"}).then(function(content) {
        var link = document.createElement('a');
        link.href = URL.createObjectURL(content);
        link.download = name+".zip";
        link.click();
      });
 })
 document.querySelector(".anhhtml .process").addEventListener('click',()=>{
    let data = document.querySelector(".anhhtml textarea").value.trim().split("\n")
    let link = document.querySelector(".anhhtml input").value.trim()

    let rs =''
    data.map(tmp=>{
        var regex = /<img.*?src=['"](.*?)['"]/;
        let match = regex.exec(tmp);
        tmp = match[1];
        if(tmp.includes(link))
            rs+= tmp+"\n"
        else
            rs+= link+ tmp + "\n"
    })
    
    document.querySelector(".anhhtml .rs_textarea").textContent = rs
    
 })

 document.querySelector(".linkhtml .process").addEventListener('click',()=>{
    let data = document.querySelector(".linkhtml textarea").value.trim().split("\n")
    let link = document.querySelector(".linkhtml input").value.trim()

    let rs =''
    data.map(tmp=>{
        var regex = /<a.*?href=['"](.*?)['"]/;
        let match = regex.exec(tmp);
        tmp = match[1];
        if(tmp.includes(link))
            rs+= tmp+"\n"
        else
            rs+= link+ tmp + "\n"
    })
    
    document.querySelector(".linkhtml .rs_textarea").textContent = rs
    
 })
 document.querySelector(".tinhsub .process").addEventListener('click',()=>{
    let data = document.querySelectorAll(".tinhsub textarea")[0].value.trim().split("\n")
    let data2 = document.querySelectorAll(".tinhsub textarea")[1].value.trim().split("\n")
    let ngancach = document.querySelector(".tinhsub .ngancach").value
    let rs =''
   data.map((tmp,index)=>{
        tmp = tmp.split("|")
        let tmp2 = data2.filter(t=>t.includes(tmp[0]))
        let max = tmp2[0]?.split("|")[1]
        if(!max)
        max = 0
        let sum = Number(tmp[1] )+ Number(tmp[2])
        rs += tmp[0] + "|" + (max-sum) + "\n"
   })
    
    document.querySelector(".tinhsub .rs_textarea").textContent = rs
    
 })


 document.querySelector(".ghepfile .process").addEventListener('click',()=>{
    let data = document.querySelectorAll(".ghepfile textarea")[0].value.trim().split("\n")
    let data2 = document.querySelectorAll(".ghepfile textarea")[1].value.trim().split("\n")
    let ngancach = document.querySelector(".ghepfile .ngancach").value

    let rs =''
    let max = Math.max(data.length, data2.length)
    for (let index = 0; index < max; index++) {
        let i = data[index] 
        let i2 = data2[index]
        if(!i)
        i = ""
        if(!i2)
        i2= ""
        rs+= i +ngancach+ i2  + "\n"
    }
    
    document.querySelector(".ghepfile .rs_textarea").textContent = rs
    
 })
 document.querySelector(".json .process").addEventListener('click',()=>{
    let data = document.querySelector(".json textarea").value
    data = JSON.parse(data)
    
    document.querySelector(".json .rs_textarea").textContent = JSON.stringify(data)
    
 })

 document.querySelector(".loctag .process").addEventListener('click',()=>{
    let data = document.querySelector(".loctag textarea").value.trim().split("\n")
    let start = document.querySelector(".loctag .start").value
    let end = document.querySelector(".loctag .end").value
    let rs = ''
    data.map(tmp=>{
        if(tmp.includes(start) && tmp.includes(end)){
            tmp = tmp.split(end)[0]
            tmp= tmp.split(start)[1]
            rs+= tmp + "\n"
        }
    })
    document.querySelector(".loctag .rs_textarea").textContent = rs
    
 })

 document.querySelector(".locchu .process").addEventListener('click',()=>{
    let data = document.querySelector(".locchu textarea").value.trim().split("\n")
    let startK = document.querySelector(".locchu .start").value
    let endK = document.querySelector(".locchu .end").value
    let option = document.querySelector(".locchu select").value
    let rs = ''
    data.map(tmp=>{
        let start = tmp.indexOf(startK); 
        let end = tmp.indexOf(endK, start); 
        let result = ""
        if(option == 0){
           result = tmp.substring(0, start) + tmp.substring(end + 1); 
        }else{
           result = tmp.substring(start, end+1) 

        }
        rs += result + "\n"
    })
    document.querySelector(".locchu .rs_textarea").textContent = rs
    
 })