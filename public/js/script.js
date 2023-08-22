var n = 0;
window.addEventListener("load",()=>{
    const input = document.getElementById("uploaded-files");
    const filecontainer1 = document.getElementById("file-container");
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
     
    
    
    

    // btnauthor.addEventListener('click',()=>{
       
    // })

  
      
    
})

var i=1;
function tambahAuthor() {
  const authorcontainer = document.getElementById('author-container');
  const jumlahauthor = document.getElementById('jumlahauthor');
  const namadepan = document.querySelector('#nama-depan').value;
  const namabelakang = document.querySelector('#nama-belakang').value;
  const namalengkap = namadepan + ' ' + namabelakang;
  document.getElementById('author-container').style.display = 'block';

  //nambah list author
  const authorlistElem = document.createElement('div');
  authorlistElem.classList.add('authors-list');
  const leftElem = document.createElement('div');
  leftElem.classList.add('left-author');
  const namaauthor = document.createElement('p');
  namaauthor.innerHTML = namalengkap;
  const inputnamadepan = document.createElement('input');
  inputnamadepan.setAttribute('type','hidden');
  inputnamadepan.setAttribute('class','harus')
  inputnamadepan.setAttribute('name','namadepan'+i);
  inputnamadepan.setAttribute('value',namadepan);
  const inputnamabelakang = document.createElement('input');
  inputnamabelakang.setAttribute('type','hidden');
  inputnamabelakang.setAttribute('class','harus')
  inputnamabelakang.setAttribute('name','namabelakang'+i);
  inputnamabelakang.setAttribute('value',namabelakang);
  leftElem.append(namaauthor);
  leftElem.append(inputnamadepan);
  leftElem.append(inputnamabelakang);
  authorlistElem.append(leftElem);
  const rightElem = document.createElement('div');
  rightElem.classList.add('right-author');
  const buttonElem = document.createElement('button');
  buttonElem.innerHTML = 'Delete';
  rightElem.append(buttonElem);
  authorlistElem.append(rightElem);
  authorcontainer.append(authorlistElem);
  var x = i;

  buttonElem.addEventListener('click',()=>{
    authorcontainer.removeChild(authorlistElem);
    x = x-1;
    jumlahauthor.setAttribute('value',x);
  })
  jumlahauthor.setAttribute('value',i);
  i = i+1;  
}


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

function adaLampiran() {
  var b = 1;
  const adalampiran = document.getElementById("adalampiran");
  adalampiran.setAttribute('value',b);
}

const valform = document.getElementById("listerror");
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
    document.getElementById("nextBtn").style.display = "none";
    if(!validateForm()){
      if(notjurusan){
        document.getElementById("validasi-form").style.display = "block";
        document.getElementById("errorjur").style.display = "block";
      }
      if(nosubjek){
        document.getElementById("validasi-form").style.display = "block";
        document.getElementById("errorsub").style.display = "block";
      }
      if(nodetail){
        document.getElementById("validasi-form").style.display = "block";
        document.getElementById("errordet").style.display = "block";
      }
      if(nofile){
        document.getElementById("validasi-upload").style.display = "block";
      }
      
    }else{
      document.getElementById("validasi-upload").style.display = "none";
      document.getElementById("validasi-form").style.display = "none";
      document.getElementById("submitFile").style.display = "inline";
      document.getElementById("perintah-form").style.display = "none";
      document.getElementById("validasi-sukses").style.display = "block";
    }
    
  } else {
    document.getElementById("nextBtn").style.display = "inline";
    document.getElementById("nextBtn").innerHTML = "Next";
    document.getElementById("submitFile").style.display = "none";
  }
  // ... and run a function that displays the correct step indicator:
//   fixStepIndicator(n
  navigateToFormStep(n);
}

var nodetail = false;
var nosubjek = false;
var nofile = false;
var notjurusan = false;
function validateForm(){
  nodetail = false;
  nosubjek = false;
  nofile = false;
  notjurusan = false;
  document.getElementById("validasi-form").style.display = "none";
  document.getElementById("errorsub").style.display = "none";
  document.getElementById("errordet").style.display = "none";
  document.getElementById("validasi-upload").style.display = "none";
  var i, valid = true;
  var x = document.getElementsByClassName("tab");
  var tab1 = x[0].getElementsByTagName("select");
  var tab2 = x[1].getElementsByClassName("harus");
  var tab3 = x[2].getElementsByTagName("select");
  var jurusanuser = document.getElementById("jurusan-user");
  var jurusaninput = document.getElementById("jurusan");
  //cek apakah pilih jurusan sudah sesuai dengan jurusan user
  if(jurusanuser.value != jurusaninput.value){
    notjurusan = true;
    valid = false;
  }
  //cek apakah tab upload file sudah diisi
  for (i = 0; i< tab1.length; i++){
    if(tab1[i].value == ""){
      nofile = true;
      valid = false;
    }
  }
  //cek apakah tab detail sudah diisi
  for(i = 2; i<tab2.length; i++){
    if(tab2[i].value == ""){
      nodetail = true;
      valid = false;
    }
  }
  //cek apakah tab subjek sudah diisi
  if(tab3[1].value == "" && tab3[2].value == ""){
    nosubjek = true;
    valid = false;
  }
  return valid;
}

//untuk remove error biar gak double
// valform.remove(document.getElementsByTagName("p"));


function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
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

function navigateToFormStep(stepNumber){
  document.querySelectorAll(".form-stepper-list").forEach((formStepHeader) => {
      formStepHeader.classList.add("form-stepper-unfinished");
      formStepHeader.classList.remove("form-stepper-active", "form-stepper-completed");
  });
  const formStepCircle = document.querySelector('li[step="' + stepNumber + '"]');
  formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-completed");
  formStepCircle.classList.add("form-stepper-active");
  for (let index = 0; index < stepNumber; index++) {
      const formStepCircle = document.querySelector('li[step="' + index + '"]');
      if (formStepCircle) {
          formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-active");
          formStepCircle.classList.add("form-stepper-completed");
      }
  }
};

function pergiKe(step){
  var x = document.getElementsByClassName("tab");
  x[currentTab].style.display = "none";
  currentTab = step;
  showTab(currentTab);
}


function previewButton(){
  document.getElementById("preview-button").style.backgroundColor = '#A2CD9C';
  document.getElementById("details-button").style.backgroundColor = 'white';
  document.getElementById("content-detail").style.display = "none";
  document.getElementById("content-preview").style.display = "block";
}

function detailButton(){
  document.getElementById("details-button").style.backgroundColor = '#A2CD9C';
  document.getElementById("preview-button").style.backgroundColor = 'white';
  document.getElementById("content-preview").style.display = "none";
  document.getElementById("content-detail").style.display = "block";
}