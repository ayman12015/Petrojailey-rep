
                                                          
                                                          <!-- مؤسسة برجي التقني  للإتصالات وتقنية المعلومات!-->
                                                                        <!--نظام المبيعات!-->

<!-- كود شاشة المبيعات!-->


<!-- بداية الكود!-->

<html lang="en">
   <head>
        <meta charset="utf-8" />
        <!-- عنوان الصفحة!-->
<title>نظام مبيعات</title>

<!--ملفات تعريف البرنامج!-->

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="نظام إدارة مبيعات  من شركة برجي التقني" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- شعار البرنامج علي عنوان الشاشة -->
        <link rel="شعار النظام" href="green-rtl/image/logo.png" src="image/logo.png">
        <link rel="shortcut icon" href="green-rtl/image/logo.png" />
        <!-- ملفات التصميم سي اس اس -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />
        
        <link href="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<!--  تعريف نوع الخط!-->

    <link href="font/font_face.css" rel="stylesheet" type="text/css">
    <link href="font/mystyle.css" rel="stylesheet" type="text/css">
    </head>

    <!--  جسم شاشة البرنامج!-->


    <body class="sidebar-disable enlarged" style="font-family: 'Droid Arabic Kufi';">

        <!-- بداية الصفحة شريط العنوان زو اللون الوردي -->
        <div id="wrapper">
       
            <!-- Topbar Start -->
            <div class="" style="background-color: #E80458;">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                </ul>
                <!-- مكان لوضع الشعار -->
              
            </div>
            <!-- نهاية شريط العنوان الوردي -->
          
   
            <!-- ============================================================== -->
            <!-- الكود ادناه يمثل تنسيق شاشة المبيعت -->
            <!-- ============================================================== -->
            <br>
                <div class="content">
                    
                    <!-- بداية تسنيق قالب شاشة المبيعات-->
                    <div class="container-fluid">
                   
                    <div class="row">
                    
                         <div class="col-12">
               <!-- استدعاء شاشة المبيعات!-->

                
<!--دالة المبلغ المدفوع مع المبلغ المتبقي !-->
<script>
var x = 0;
var y = 0;
var z = 0;
    function calc(obj) {
        var e = obj.id.toString();
            if (e == 'tb1') {
            x = Number(obj.value);
            y = Number(document.getElementById('tb2').value);
            } else {
                x = Number(document.getElementById('tb1').value);
                y = Number(obj.value);
                }
                z = x - y;
                document.getElementById('total').value = z;
                document.getElementById('update').innerHTML = z;
            }
        </script>

<!--نهاية الدالة!-->




<!--بداية فورم المبيعات!-->
    <!-- كود العنوان-->
      <div class="container-fluid">
              <div class="row">

<!--كود تعريف قيمة الفاتورة!-->
 
            </strong>
<!--  نهاية الكود --> 
</div>     


<!-- كود فورم استخراج فاتورة البيع  --> 
<div class="row">
    <div class="col-md-10 col-lg-10">
        <div class="card-box">

        <form action="posss.php" method="POST">
        <!-- كود جدول اضافة بيانات الفاتورة --> 
<table class="table table-bordered">

<tr>
    <td style="width:58%;"><div class="input-group">
    <input type="text" class="form-control" style="font-size:15px; color:red;" placeholder="أدخل كلمة البحث" name="search"   class=" btn-rounded">

</td>
<!-- نهاية حقل بيانات العميل --> 



<!-- بداية حقل التاريخ --> 
<td style="width:10%;"><div class="input-group">
    <button class="btn btn" name="add_search" style="width: 100%; background-color: #1FAF2E;  font-family: 'Droid Arabic Kufi'; ">بحث <i class="fa fa-search"></i></button>
</td>
<td  style="width: 12%;">رقم الفاتورة</td>
<td style="width: 20%;">
<input type="text" class="form-control" style="font-size: 15px; color:red;" value="202000019" name="b" class=" btn-rounded">
</td>

    </tr>
    </table>
        </form>
    <!-- نهاية كود الجدول --> 


    <form action="poss.php" method="POST">

<input type="hidden" class="form-control" style="font-size: 10px;" value="202000019" name="b" class=" btn-rounded">
<input type="hidden" name="c" class="form-control" style="font-size: 10px;"  value="2020-08-27" class=" btn-rounded"><!-- نهاية حقل التاريخ --> 
<!-- مؤسسة برجي التقني نظام المبيعات --> 


<!-- بداية جدول بيانات الأصناف المستدعاه بالبحث أو الباركود --> 
<!-- كود تسنيق الفاتورة علي شاشة المبيعات --> 
<style>
.my-custom-scrollbar {
position: absolute;
height: 100px;
overflow: auto;
font-size: 2px;
}
.table-wrapper-scroll-y {
display: block;
}
</style>
<!--نهاية كود التنسيق  --> 


<style>
  .my-custom-scrollbar {
position: relative;
height: 300px;
overflow: auto;
}
.table-wrapper-scroll-y {
display: block;
}
</style>

            <div id="maintable"><div style="margin-top: -19px; margin-bottom: 21px; font-size:25px;">
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
<!-- كود جدول الفاتورة   --> 
<table class="table table-bordered tab-content table-embed-responsive" 
style="background-color: #eff5fc; width: 100%; font-family: 'Droid Arabic Kufi'; font-size:12px; ">


<!--بداية حقول العنوان --> 

<tr align="center">
<td>رقم</td>
<td>الصنف</td>
<td>الوحده</td>
<td>الكمية</td>
<td>السعر</td>
<td>المبلغ</td>
<td>إزالة</td>
</tr>

<!-- نهاية حقول العنوان --> 




<tr>
    <!--حقول المبيغات المستدعاة --> 

<td>1</td>
<td></td>
<td></td>
<td align="center" style="width:18%;">

<div class="container-fluid">
    <div class="row">
        <div class="col-3"><a href="me.php?max=&max2=1&transaction_id=">
<img src="1.png" style="width:20px;"></a></div>

<div class="col-6" align="center">
<input type="text"  value="" class="form-control" style="font-size:20px;width:62px; color:red; height:33px;">
</div>
<div class="col-3">
<a href="me2.php?min=&max2=1&transaction_id=">
<img src="2.png" style="width:20px;"></a>
</div>
    </div></div></td>
<td style="font-size:14px;"></td>

<td style="font-size:14px;" align="center">0</td>

<td align="center"><a href="poss.php?del="><i style="color:red;font-size:20px;" class="fas fa-times-circle"></i></a></td>
</tr>
</table>
<!--نهاية الجدول الخاص بفاتورة المبيعات  --> 

</div>
<!-- نهاية الجزء الأول من شاشة المبيعات  --> 


<!-- بداية الجزء الثاني المتعلق بإزرار العمليات --> 

</div>
</div>
            </div></div>


   <div class="col-md-2 col-lg-2">
   <div class="card-box">       
<table class="table table-bordered" style="background-color: #eff5fc; font-family: 'Droid Arabic Kufi'; font-size:14px; ">
    <tr>
<td style="width:16.6%;">
<a href="print.php?print=202000019">
<button type="button" 
style="background-color:#1FAF2E; font-size:12px; height:33px; width:100%; font-family: 'Droid Arabic Kufi';" class="btn btn-succes">
 <i class="fas fa-print "></i> طباعة </button>
</a></td>


    </tr>

    <tr>
    <td style="width:16.6%;">
<a href="exe.php">
<button type="button" 
style="background-color:#707070; font-size:12px; height:33px; width:100%; font-family: 'Droid Arabic Kufi';" class="btn btn-primary">
 <i class="fas fa-plus "></i> جديد </button>
</a></td>
    </tr>
    <tr>
    <td style="width:16.6%;">
    <a href="posss.php?invoice=202000019"><button type="button" 
style="background-color:#F6B00A; font-size:12px; height:33px;  width:100%;  font-family: 'Droid Arabic Kufi';" class="btn form-control"><i class=" fas fa-search  "></i>
 بحث</button></a></td>

</tr>
    <tr>

<td style="width:16.6%;">
<a href="poss.php?delete=202000019&&maxi=" onclick="return confirm('هل تريد حذف الفاتورة');">
<button type="button" style="background-color:#DD5706; font-size:12px; height:33px;  width:100%;  font-family: 'Droid Arabic Kufi';" class="btn btn-succes">
<i class=" fas fa-times-circle  "></i> إزالــة</button>
</a></td>

</tr>
    <tr>

    <td style="width:16.6%;">
    <a href="exe.php" target="_blank"><button type="button"
 style="background-color:#1E1170; font-size:10px; height:33px; width:100%;  font-family: 'Droid Arabic Kufi';" class="btn btn-succes"> 
 <i class=" far fa-stop-circle "></i>  تعليق</button>
</a></td>

    </tr>
</table>
   </div>
   </div>                   
                            <!-- بداية كود الالة الحاسبه والبحث بالصنف والباركود --> 

<div class="col-md-5 col-lg-4">
        <div class="card" style=" border-radius:1.7em;">
                <div class="container">
<!-- بداية الجدول!-->
<table class="table table-bordered table-hover" style="font-size:15px; padding:05rem;  background-color:#EAE3E3; font-family: Droid Arabic Kufi;  border-radius:1.1em;">
  
<!-- بداية حقل الباركود ونتائج الاله الحسابة!-->
<tr>
        <td colspan="3">
        <input type="text" name="info" autofocus style="font-size:15px;"  class="cal-display  form-control btn-rounded " required id="search" placeholder="اختر الصنف" list="searchrxt" autocomplete="off">
    	<datalist id="searchrxt">
                        <option></option>
                        <option value="85151555" >عطور <i class="fa fa-shopping-bag"></i> 85151555</option>
                        <option value="444" >500 <i class="fa fa-shopping-bag"></i> 444</option>
                        <option value="222" >22 <i class="fa fa-shopping-bag"></i> 222</option>
                        <option value="10" >50000 <i class="fa fa-shopping-bag"></i> 10</option>
                        <option value="333" >زبادي <i class="fa fa-shopping-bag"></i> 333</option>
            </datalist>
</td></tr>
<!-- نهاية حقل الباركود والاله الحسابه!-->

<!-- بداية الازرار للقيم 1 - 2- 3  !-->
<tr align="center">
<td style="width:33.3%;"><button type="button" class="num btn-rounded form-control" value="1"><strong>1</strong></button></td>
<td style="width:33.3%;"><button type="button" class="num btn-rounded form-control" value="2"> <strong>2</strong></button></td>
<td style="width:33.3%;"><button type="button" class="num btn-rounded form-control" value="3"><strong>3</strong></button></td>
<!--<td><button style="background-color: #1FAF2E;" class="btn-blue op form-control btn-rounded" value="*"> *</button></td>!-->
</tr>
<!-- نهاية الازرار للقيم 1 - 2- 3  !-->


<!-- بداية الازرار للقيم 4 - 5 - 6    !-->

<tr align="center">
<td style="width: 23%;"><button class="num btn-rounded form-control" type="button" value="4"><strong>4</strong> </button></td>
<td style="width: 23%;"><button class="num btn-rounded form-control" type="button" value="5"><strong>5</strong></button></td>
<td style="width: 23%;"><button class="num btn-rounded form-control" type="button" value="6"><strong>6</strong></button></td>
<!--<td><button style="background-color: #1FAF2E;" class="op form-control btn-rounded" value="-"> -</button></td>!-->
</tr>

<!-- نهاية الازرار للقيم 4 - 5 - 6    !-->


<!-- بداية الازرار للقيم 7 - 8 - 9     !-->

<tr align="center" style="height: 10px;">
<td><button    class="num  btn-rounded form-control" type="button" value="7"><strong>7</strong></button></td>
<td><button    class="num  btn-rounded form-control" type="button" value="8"><strong>8</strong></button></td>
<td><button    class="num  btn-rounded form-control" type="button" value="9"><strong>9</strong></button></td>
<!--<td><button style="background-color: #1FAF2E;" class="op form-control  btn-rounded" value="+"> +</button></td>!-->
</tr>

<!-- نهاية الازرار للقيم  7-8-9     !-->


<!-- بداية الازرار للقيم   0 - + - delete     !-->

<tr align="center">

<!--<td><button class="num form-control btn-rounded" value="."> .</button></td>!-->
<td><button style="background-color: green;COLOR:#ffffff;" class="btn-equal form-control  btn-rounded" type="submit" value="="><strong>ENT</strong> </button></td>
<td><button class="num  btn-rounded form-control" type="button" value="0"><strong> 0</strong></button></td>
<td><button style="background-color: RED;COLOR:#ffffff;" class="form-control  btn-rounded" id="clear" type="button" value=" "><strong>DEL</strong></button></td>
<!--<td><button class="op form-control  btn-rounded" value="/"> /</button></td>!-->
</tr>
<tr>


<!-- بداية الازرار للقيم   0 - + - delete     !-->
    </table>
</div>
    </div>
        </div>
<!-- نهاية جدول الاله الحسابه  !-->


<!-- كود تسنيق الفاصل الخاصة بملخص الحساب الاجمالي  !-->
<!-- نهاية تسنيق الفاصل الخاصة بملخص الحساب الاجمالي  !-->




<br><Br><Br>

<!-- كود التنسيق الخاص بالضريبة والأجمالي وطريقة السداد والمبلغ المدفوع  !-->

<div class="col-md-5 col-lg-6">
    <div align="center" style="font-size:16px; border-radius:0.7em;  color:#707070;" class="card-box">
     
    
<!-- بداية جدول الحسابات !-->
<table class="table table-borderd" style="background-color: #eff5fc; font-family: 'Droid Arabic Kufi'; font-size:14px; ">
    <tr>

    <td style="width: 25%;"> <button type="button" style="background-color:#1FAF2E; font-size:12px;  width:100%;  font-family: 'Droid Arabic Kufi';" 
class="btn  btn"> <strong>المبلغ</strong> </button></td>
            <td style="width:25%;">
                    
            <strong style="font-family: Droid Arabic Kufi; font-size:18px; color:#000000;">
                    </strong></td>
                                            
        <!--نهاية كود عرض اجمالي الفاتورة فقط بدون قمية مضافة   !-->


        <!-- الحقل الثانية عرض اجمالي القيمة المضافة  !-->

        <td style="width: 25%;"> <button type="button" style="background-color:#DD5656; font-size:12px;  width:100%;  font-family: 'Droid Arabic Kufi';" 
class="btn  btn"><strong>الضريبة</strong> </button></td>
     <td style="width:25%;">
     <strong style="font-family: Droid Arabic Kufi; font-size:18px; color:#000000;">
            0</strong></td>

            <!-- نهاية كود الضريبة  !-->

    </tr>

<!-- بداية حقل طريقة الدفع  !-->



 
<tr   name="addem" action="" id="addem"><td colspan="4" align="center">
<select name="type" dir="rtl" class="selectpicker m-b-0" data-style="btn-primary" style="width:100%; border-radius:0.7em;" required>
        <option  data-icon="mdi mdi-account-circle" value="نقــــداً<"><i class=" fab fa-cc-visa "></i> نقــــداً</option>
        <option  data-icon="mdi mdi-account-circle" value="2"><i class=" fab fa-cc-visa "></i> شبكـة</option>
        <option  data-icon="mdi mdi-account-circle" value="3"><i class=" fab fa-cc-visa "></i> أجــــل</option>
  </select>
</td></tr>

  <!-- بداية عنوان حقول الجدول  !-->
  <tr align="center">
        <td colspan="2">  <button type="button" style="background-color:#1FAF2E; font-size:12px;  width:100%;  font-family: 'Droid Arabic Kufi';" 
class="btn  btn">المدفوع </button></td>
            <td  colspan="2">   <button type="button" style="background-color:#DD5656; font-size:12px;  width:100%;  font-family: 'Droid Arabic Kufi';" 
class="btn  btn"></i> المتبقي </button></td>
                </tr>
  <!-- نهاية عناون حقول الجدول  !-->


<tr align="center">
      <!-- حقل اضافة المبلغ ويحسب تلقائيا !-->

<input name="prices" id="prices" type="hidden" value="0" />
<input type="hidden" id="total" name="total" value="0" />
<td  colspan="2">
   <input type="number" step="00.01" id="tb1" name="tb1" style="border-color:silver; width:100%;font-size:15px; color:green;" class="btn btn-card btn-rounded btn" onkeyup="calc(this)"/></td>
        <input type="hidden" id="tb2" value="0" name="tb2" onkeyup="calc(this)"/> 

          <!-- عرض المبلغ المتبقي  !-->

<td  colspan="2"><button  style="border-color:silver; width:100%;  font-size:15px; color:red;" class="btn btn-card btn-rounded btn">
    <strong style="color:#DD5656;">
        <span id="update">0</span></button></td>
</tr>
<td colspan="4">
    <button type="button" class="btn  btn-rounded form-control" style="height: 40px; font-family: 'Droid Arabic Kufi'; background-color: #1E1170;" data-toggle="modal" data-target="#sideModalTR">
<i class=" fas fa-qrcode "> </i> (غير معروفه) إصناف غير مسجله </button>

    </td>
</tr>
  <!-- نهاية الحقول  !-->
</table> 
  <!-- نهاية الجدول  !-->
    </div> 
</div>         
                             
<br><br><br>
  <!-- عرض المبلغ الاجمالي بناء علي متغير معرف مسبقاً  !-->

<div  class="col-md-2 col-lg-2 round">
    <div align="center"  class="card-box" style="border-radius:2.7em;">
                <button type="button" class="btn btn-round" 
                style="border-color:#707070; color:#707070; width:100%; font-family: 'Droid Arabic Kufi'; font-size:19px; border-radius:0.7em;">
        الإجمالي <br ><strong style="color:red;">المبلغ : 0<br> الاصناف : 1</p></button>
</div>
<br><br><br>

<div align="center"  class="card-box" style="border-radius:2.7em;">
<table class="table table-bordered tab-content table-embed-responsive" style="background-color: #eff5fc; width: 100%; font-family: 'Droid Arabic Kufi'; font-size:15px; ">
        
                 <tr>
                     <td><a href="../System/index.php"><button type="button" 
style="background-color:#707070; color:#eff5fc; font-size:15px; height:28px;  width:100%;  font-family: 'Droid Arabic Kufi';" 
class="btn btn-succes btn">
 <i class=" fas fa-home "></i>  </button>
</a></td>
                 </tr>
                 <tr>
                     <td><a href="logout.php"><button type="button" 
style="background-color:#DD5656; color:#eff5fc; font-size:15px; height:28px;  width:100%;  font-family: 'Droid Arabic Kufi';"
 class="btn btn-succes">
 <i class=" fas fa-lock "></i>  </button>
</a></td>
                 </tr>
             </table>
</div>

</div>

</div>
  <!-- نهاية التعريف  !-->
    
                            
                         
    
                             
                              
    
                </div><!-- نهاية العمليات -->
        </div> <!-- نهاية التنيسق -->
</div> <!-- نهاية التصميم -->


<!-- كود جافا سكربت لعمل الاله الحاسبه!-->
<script>
    // تعريف المعاملات 
const result = document.querySelector('.cal-display')
const clear =  document.querySelector('#clear')
const compute =  document.querySelector('.btn-equal')
// تعريف الازرار الخاصه بالادخال
const buttons = document.querySelectorAll('.num, .op')
let input = [];
Array.from(buttons).forEach((button)=>{
//تعريف المعاملات الرياضيه
button.addEventListener('click', ()=>{
 const operator = ['+', '-', '/', '*']
//التحقق من صحة النتائج
 if (input[input.length-1] == '=' && !operators.includes(button.value)){
     result.value  = button.value;
 }else{
     result.value += button.value;
 }
input.push(button.value)
})})

// الشرط(=)
compute.addEventListener('click', ()=>{
 input.push('=');
 //التحقق 
 if(result.value.length == 0){
     return false
 }else{
     result.value = eval(result.value)
 }})
// مسح شاشة الاله الحسابه
clear.addEventListener('click', () =>{
    result.value=''
})
 </script>
<!-- نهاية كود جافا سكربت للاله الحسابه!-->

<!-- تنسيق الاله الحاسبه !-->
<style>
body{
    margin: 0;
         padding: 0;
            box-sizing: border-box;
                height: 100vh;
                    display: flex;
                        justify-content: center;
                                align-items: center; }
                </style>
<!-- نهاية التنسيق!-->
</form>
<!-- نهاية الفورم!-->


<!-- Side Modal Top Right -->

<!-- Button trigger modal -->

<!-- To change the direction of the modal animation change .right class -->
<div class="modal fade right" id="sideModalTR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
<form action="poss.php" method="POST">
  <!-- Add class .modal-side and then add class .modal-top-right (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-side modal-top-right" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel" style="font-family: 'Droid Arabic Kufi';" >إضافة صنف غير معروف</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
            <tr>
                <td colspan="2">قائمة المبيعات 202000020</tr>
       
                <input type="hidden" class="form-control" style="font-size: 10px;" value="202000019" name="it5" class=" btn-rounded">
        
                <tr>
                    <Td>الصنف</Td>
                    <td><input type="text" value="غير معروف" name="it1"  class="form-control btn-rounded" required></td>
                </tr>
                <tr>
                    <Td>الكمية</Td>
                    <td><input type="number" min="1" value="1" max="10000000" autofocus autocomplete="off" required  name="it2" class="form-control btn-rounded"></td>
                </tr>
                <tr>
                    <Td>السعر</Td>
                    <td><input type="number" min="1" value="1" max="10000000" autocomplete="off" required name="it3" class="form-control btn-rounded"></td>
                </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" style="background-color: #DD5656; width:120px; font-family: 'Droid Arabic Kufi';" class="btn btn-rounded " data-dismiss="modal"><i class=" fas fa-times "></i> الغاء  </button>
        <button type="submit" name="okpos" style="background-color: #1FAF2E; width: 120px; font-family: 'Droid Arabic Kufi';" class="btn btn-rounded "><i class=" fab fa-accusoft "></i> حفظ</button>
      </div>
    </div>
  </div>
</div>
<!-- Side Modal Top Right --></form>

                <!-- نهاية شاشة المبيعات!-->

  
        <!-- ملفات جافا سكربت -->
        <script src="green-rtl/assets/js/vendor.min.js"></script>

         <script src="green-rtl/assets/libs/chart-js/Chart.bundle.min.js"></script>

        <script src="green-rtl/assets/js/pages/dashboard.init.js"></script>

        <!-- ملفات جافا سكربت لوضع تطبيقات الجوال -->
        <script src="green-rtl/assets/js/app.min.js"></script>
              
        <script src="green-rtl/assets/libs/switchery/switchery.min.js"></script>
        <script src="green-rtl/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <script src="green-rtl/assets/libs/select2/select2.min.js"></script>
        <script src="green-rtl/assets/libs/jquery-mockjax/jquery.mockjax.min.js"></script>
        <script src="green-rtl/assets/libs/autocomplete/jquery.autocomplete.min.js"></script>
        <script src="green-rtl/assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="green-rtl/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="green-rtl/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="green-rtl/assets/libs/bootstrap-filestyle2/bootstrap-filestyle.min.js"></script>
        <script src="green-rtl/assets/js/pages/form-advanced.init.js"></script>
    </body>

</html>

<!-- كود تنفيذ عملية البيع!-->

  <!-- بداية كود المبيعات!-->

   <!-- نهاية كود المبيعات!-->
  
  
  
  
    <!-- بداية كود حذف صنف من الفاتورة!-->

    <!-- نهاية كود حذف صنف من الفاتورة!-->



    <!-- بداية كود الحذف لكل الفاتورة!-->

  <!-- نهاية كود حذف الكل!-->


<!-- بداية كود المرتجعات!-->
  <!-- نهاية كود المرتجعات!-->
<!-- نهاية الكود البرمجي!-->

 <!-- Central Modal Medium Success -->
 <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-success" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead">نظام المبيعات</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-times fa-4x mb-3 animated rotateIn"></i>
           <p>تم حذف الفاتورة  بنجاح</p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         <a href="exe.php" type="button" class="btn btn-Primary waves-effect" style="width: 50%; font-family: 'Droid Arabic Kufi';" data-dismiss="">موافـق <i class=" fas fa-user-shield "></i></a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Success-->





 <!-- نهاية الكود البرمجي!-->

 <!-- Central Modal Medium Success -->
 <div class="modal fade" id="centralModalSuccesd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-success" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead">نظام المبيعات</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-times fa-4x mb-3 animated rotateIn"></i>
           <p>الكمية المطلوبة غير متوفرة</p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         <a href="exe.php" type="button" class="btn btn-Primary waves-effect" style="width: 50%; font-family: 'Droid Arabic Kufi';" data-dismiss="">موافـق <i class=" fas fa-user-shield "></i></a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Success-->


 






