
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>stor-team</title>
<meta charset="UTF-8" />
<meta name="description" content="test Web " />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link rel="icon" href="images/DC.jpg">
<link rel="shortcut icon" href="images/DC.jpg">
<link rel="apple-touch-icon" href="images/DC.jpg">
<style>
#myord{text-align: center;
    position: fixed;
   background-color: white;
    z-index: 999999;
    top: 26vh;
    width: 100%;
    display:none;
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}
table {
    border-collapse: collapse;
    width: 100%;
   
   
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
#myInput {
    position: relative;
    background-image: url(https://cms-assets.tutsplus.com/uploads/users/523/posts/27345/preview_image/search-icon-large.png);
    background-size: contain;
    background-position: 100%;
    background-repeat: no-repeat;
    width: 80%;
    right: -6%;
    text-align: center;
    font-size: 16px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-right: 2%;
    border-radius: 10px;
    margin-top: 1vh;
    margin-bottom: 1vh;
}
   #myUL{
        display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}
    #select{
            border: none;
    outline: none;
    }
    .w-100 {
    height: 90vh;
    width: auto;
}
.fa{
    display: inline-block;
    font-size: 35px;
   
    margin-left: 32%;
}
    .card  {
           

        display:block;
    margin: 2%;
         margin-top: .25vh;
    }
    @media screen and (max-width: 992px) {
    .w-100 {
    height: 70vh;
    width: auto;
}
}
.order {width:33%;
color: #000000b0;
    border: none;

    background-color: #f5f7f900;
     border-color: white; 
}
.order:hover {
color:#2196f3;
    background-color: #f4f5f7;
    border-color: #c4daea;
}
#num{
 
    color: white;
    position: absolute;
    top: 0vh;
    left: 21%;
    background-color: #ff00006e;
    padding: .00% .45%;
    border-radius: 21px;

}
.number{
        width: 33%;
    text-align: center;
    border: 1px solid #0000000a;
    border-radius: 10px;
    font-weight: bold;
}
</style>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<body>
    
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">DC Team</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">الرئيسية</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="core.html">دورات سابقة</a>
        </li>
       
         <li class="nav-item">
          <a class="nav-link" href="proj.php">مشاريع من تصميمنا </a>
        </li>
       
      </ul>
    <!--  <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav> 

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bg-Copy.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>DC-Team</h5>
        <p> مجالاتنا في الربوتات والالكترونيات والبرمجة  والطاقة وحلولها </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://scontent.famm3-2.fna.fbcdn.net/v/t1.0-9/73106911_688336255021649_1940683545383010304_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=a4a2d7&_nc_eui2=AeGTqu20GZp8nkpiYx4i3U4ds-B0QplBSD6z4HRCmUFIPuJgr6WPijuW7BCB7zjYMn7kh_GvXax2rAXacJArE9g4&_nc_ohc=sGy479TGFM0AX9_mXKR&_nc_ht=scontent.famm3-2.fna&oh=2534835bf3dcbe850054d905a0b4dc19&oe=60697DE7" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>DC-Team</h5>
        <p>بيع القطع الالكترونية</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/DC.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>DC-Team</h5>
        <p>للتدريب والتطوير</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<input  dir="rtl" type="text" id="myInput" onkeyup="myFunction()" placeholder="... بحث من خلال الاسم" title="Type in a name">
  <main>
      
      
      
      <div style="display:none" id="mm">
          <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/ar_AR/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="833716730170471">
      </div>
      </div>
      
      
      
      
     <div class="btn-group" role="group" aria-label="Basic example" style="
    position: fixed;
    z-index: 1500;
    width: 100%;
    bottom: 0;
    background-color:white;
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    height: 9vh;">
<button id="1" type="button" class="order" onclick="mm(1)">  <i class="fa fa-shopping-cart" style="border-radius: 20px; "></i> <span id= "num"> 1</span></button>
<button id="2" type="button" class="order" onclick="mm(2)"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
  <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
</svg></button>
<button onclick="mm(3)"type="button" class="order" id="3">
    <select id="select"class="form-select" aria-label="Default select example" onchange="my()">
  <option value="all">اختار التصنيف</option>
  <option value="0">الكترونيات </option>
  <option value="1">كتات</option>
  <option value="2">اردوينو & esp</option>
  <option value="3"> محركات & حساسات</option>
  <option value="4">عناصر اخرى  </option>
  <option value="all">الجميع</option>
</select></button>
</div>
       <span id="myUL"> 
<?php
$conn  = mysqli_connect("localhost","dcteam_edit","VpHqYKuT45cbV","dcteam_edit");  


    $sql="SELECT * FROM stor";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)) {
        $name=$row['name'];
        $price=$row['type'];
         $path=$row['oname'];
         $id=$row['id'];
         $CAT=$row['CAT'];
    
    ?>
    <div class="card all <?php  echo $CAT?> " style="width: 18rem;" >
  <img src="https://login.dc-team.team/uploads/<?php echo $path?>" class="card-img-top" style=" height: 25vh;" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $name; ?></h5>
    <p class="card-text"><?php echo $price." JD"; ?></p>
    <a href="item.php?id=<?php echo $id;?>" class="btn btn-primary"> عرض البيانات </a>
    <i class="fa fa-shopping-cart" style="font-size:32px;color:red" onclick="add('<?php echo $name; ?>','<?php echo $price?>')"></i>
    
  </div>
  </div>

<?php }?>

  </span>
  </main>
  </div>
 <script>
 function mm(num) {
 
     if(document.getElementById(num).style.color=="#2196f3"){
       
     for (i = 1; i < 4; i++) {
      document.getElementById(i).style.color="#000000b0" ;

 }
      
     }
     
     else
     {  
     for (i = 1; i < 4; i++) {
      document.getElementById(i).style.color="#000000b0" ;
       document.getElementById(num).style.color="#2196f3" ;    

 }
         
     }
     
     
      if(num==1){
 var dis1=  document.getElementById("myord").style.display ;
 if(dis1=="none"){
    document.getElementById("myord").style.display="block" ; 
 }
 else{
    document.getElementById("myord").style.display="none"  
 }
 }
     if(num==2){
 var dis=  document.getElementById("mm").style.display ;
 if(dis=="none"){
    document.getElementById("mm").style.display="block" ; 
 }
 else{
    document.getElementById("mm").style.display="none"  
 }
 }}
 function my() {
var   input1 = document.getElementById("select").value;

 ul = document.getElementById("myUL");
    li = ul.getElementsByClassName("card");
       pi = document.getElementsByClassName(input1);
     for (i = 0; i < li.length; i++) {
       li[i].style.display = "none";

 }
  for (i = 0; i < li.length; i++) {
       pi[i].style.display = "block";

 }

 }
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByClassName("card");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByClassName("card-title")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>  


<div id="myord">
    
 <h4> طلباتي</h4>
<table id= "tabel">
 <tr>
    <th> اسم القطعة</th>
    <th> سعر القطعة </th>
    <th> العدد</th>
            <th>  المجموع</th>
                <th>  حذف</th>
  </tr>  
  

</table>
<h5>  <span id="tot"></span> :المجموع</h5>
<button type="button" class="btn btn-outline-primary" style="
    margin: 3vh;
" onclick="mass()">ارسال</button>
<button type="button" class="btn btn-outline-danger" onclick="hidd()">اخفاء</button>
</div>


<script>
var x=4; //index of id item
var z= 0; // index of number of item

var q=document.getElementById("num");
document.getElementById("num").style.display = "none";
function add(name,price) {
  input = document.getElementById("tabel");
var btn = document.createElement("TR");   // Create a <button> element
att=document.createAttribute("id");       // Create a "class" attribute
att.value = ++x;                           // Set the value of the class 
btn.setAttributeNode(att);                   
btn.innerHTML = '<td>'+name+'</td> <td>'+price
+'jd </td> <td><input value="1" onchange ="total('+ x +','+price+')" type="number" class="number"/></td> <td class="total"> '+price+' jd</td> <td onclick="dele('+ x +' )"><i class="material-icons">delete</i></td>';                   // Insert text
input.appendChild(btn); 
 
 q.innerHTML=++z;
 if(z>0){
 q.style.display = "block";}
 else
 {
    q.style.display = "none";  
 }
 alltotal();
}
function total(id,price) {
   let dam=id-5;
let io=document.getElementsByClassName("number")[dam].value;
if(Number(io)){
  document.getElementsByClassName("total")[dam].innerText=price*io; 
   document.getElementsByClassName("number")[dam].style.border="1px solid  #0000000a";
  alltotal() ;
}
else{

   document.getElementsByClassName("number")[dam].style.border="1px solid #d61c1c66";
    alert('الرجاء ادخال العدد بشكل صحيح');
}
 
}
function dele(ele) {
     q.innerHTML=--z;
    
     if(z>0){
 q.style.display = "block";}
 else
 {
    q.style.display = "none";  
 }
    var myobj = document.getElementById(ele);
myobj.remove();
 alltotal() ;
}
function hidd() {
     document.getElementById("myord").style.display="none"
}

function alltotal() {
  var tyui=0;
    for (i = 0; i <z ; i++) {
        var str =document.getElementsByClassName("total")[i].innerText;
         var res = str.replace("jd", "");
  
   tyui= Number(tyui)+ Number(res);
    
    }
    document.getElementById("tot").innerText= " jd "+tyui;
    
}

function mass() {
    alert(' الرجاء تصوير الشاشة و ارسالها عبر رسائل الفيسبوك  ');
      document.getElementById("mm").style.display="block" ;
}
</script>




</body>