var n = 0;
window.addEventListener("load",()=>{
    const input = document.getElementById("uploaded-files");
    const filecontainer = document.getElementById("file-container");
    const namaarr = [];
    const sizearr = [];

    input.addEventListener("change",(e)=>{
        let fileName = e.target.files[0].name;
        let split = fileName.split('.');
        split.pop();
        let finalName = split.join("."); 
        const fsize = e.target.files[0].size;
        const filesize = Math.round((fsize / 1024));
        if (n<5){
          fileshow(finalName,filesize);
        }
        
   })
   
    const fileshow=(finalName,filesize)=>{
       var x = n;
       
        const showfileboxElem = document.createElement("div");
        showfileboxElem.classList.add("files-list");
        const leftElem = document.createElement("div");
        leftElem.classList.add("left");
        // const judulElem = document.createElement("input");
        // judulElem.setAttribute("value",finalName);
        // judulElem.setAttribute("id","file");
        // judulElem.setAttribute("name","file");
        // judulElem.innerHTML = finalName;
        const judulElem = document.createElement("p");
        judulElem.innerHTML = finalName;
        // const idfile = document.createElement("input");
        // idfile.setAttribute("value",finalName);
        // idfile.setAttribute("type","hidden");
        // idfile.setAttribute("id","file"+x);
        leftElem.append(judulElem);
        // leftElem.append(idfile);
        showfileboxElem.append(leftElem);
        const settingtext = "Settings";
        const deletetext = "Delete";
        const settingbutElem = document.createElement("button");
        settingbutElem.classList.add("settingbtn");
        const deletebutElem = document.createElement("button");
        deletebutElem.classList.add("deletebtn");
        const rightElem = document.createElement("div");
        rightElem.classList.add("right");
        settingbutElem.innerHTML = settingtext;
        settingbutElem.setAttribute("class","settingbtn");
        settingbutElem.setAttribute("id","buttonformodal"+n);
        settingbutElem.setAttribute("type","button");
        settingbutElem.setAttribute("data-toggle","modal");
        settingbutElem.setAttribute("data-target","#settingModal"+n);
        settingbutElem.setAttribute("data-name",finalName);
        namaarr.push(finalName);
        sizearr.push(filesize);
        settingbutElem.setAttribute("onclick",showModal(namaarr[n],sizearr[n]));
        settingbutElem.style.marginRight = "5px";
        deletebutElem.innerHTML = deletetext;
        deletebutElem.setAttribute("class","deletebtn");
        rightElem.append(settingbutElem);
        rightElem.append(deletebutElem);
        showfileboxElem.append(rightElem);
        filecontainer.append(showfileboxElem);
        
        //masukin nama file dan size ke arr
        // namafilearr.push(finalName);
        // sizefilearr.push(filesize);

        deletebutElem.addEventListener("click",()=>{
          filecontainer.removeChild(showfileboxElem);
          namaarr.pop();
          sizearr.pop();
          n = n-1;
        })

        // for(let i=0;i<n;i++){
        //   var buttonopenmodal = document.getElementById('buttonformodal'+i);
        //   buttonopenmodal.addEventListener('click',function(){
        //     var judulmodal = document.querySelector('#settingModalLabel');
        //     var namauploadfile = document.querySelector('#namauploadfile');
        //     var sizeuploadfile = document.querySelector('#sizeuploadfile');

        //     judulmodal.textContent = finalName;
        //     namauploadfile.setAttribute("value",finalName);
        //     sizeuploadfile.setAttribute("value", filesize);
        //   });
        // }
        
      n = n+1;  
    }
    // for(let a=0;a<5;a++){
    //   if(namaarr[a]){
    //     var tombol = document.getElementById('buttonformodal'+a);
    //     tombol.addEventListener('click',()=>{
    //     var judulmodal = document.querySelector('#settingModalLabel'+a);
    //     var namauploadfile = document.querySelector('#namauploadfile'+a);
    //     var sizeuploadfile = document.querySelector('#sizeuploadfile'+a);
      
    //     judulmodal.textContent = namaarr[a];
    //     namauploadfile.setAttribute("value",namaarr[a]);
    //     sizeuploadfile.setAttribute("value", sizearr[a]);
    //   })
    //   }
    // }
      
      
    
})


function showModal(filename,filesize){
  var judulmodal = document.querySelector('#settingModalLabel');
  var namauploadfile = document.querySelector('#namauploadfile');
  var sizeuploadfile = document.querySelector('#sizeuploadfile');

  judulmodal.textContent = filename;
  namauploadfile.setAttribute("value",filename);
  sizeuploadfile.setAttribute("value", filesize);
}


var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == 3) {
    document.getElementById("submitFile").style.display = "inline";
    document.getElementById("nextBtn").style.display = "none";
  } else {
    document.getElementById("nextBtn").style.display = "inline";
    document.getElementById("nextBtn").innerHTML = "Next";
    document.getElementById("submitFile").style.display = "none";
  }
  // ... and run a function that displays the correct step indicator:
//   fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  console.log(currentTab);
  // if you have reached the end of the form... :
//   if (currentTab >= x.length) {
//     //...the form gets submitted:
//     // document.getElementById("regForm").submit();
//     // tombol upload item muncul 
//     return false;
//   }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}
// function fixStepIndicator(n) {
//     // This function removes the "active" class of all steps...
//     var i, x = document.getElementsByClassName("step");
//     for (i = 0; i < x.length; i++) {
//       x[i].className = x[i].className.replace(" active", "");
//     }
//     //... and adds the "active" class to the current step:
//     x[n].className += " active";
//   }


// const settingModal = document.getElementById('settingModal');
//         if (settingModal) {
//           settingModal.addEventListener('show.bs.modal', event => {
//             // Button that triggered the modal
//             const button = event.relatedTarget;
//             // Extract info from data-bs-* attributes
//             const recipient = button.getAttribute('data-whatever');
//             // If necessary, you could initiate an Ajax request here
//             // and then do the updating in a callback.

//             // Update the modal's content.
//             //const modalTitle = settingModal.querySelector('.modal-title');
//             const modalTitle = document.getElementById('exampleModalLabel');
//             const modalBodyInput = settingModal.querySelector('.modal-body input');

//             modalTitle.innerHTML = recipient;
//             modalBodyInput.value = recipient;
//           })
//         }