<!-- <!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.css">
        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>

    <form action="welcome" method = "get" >
    <section class="hero is-primary is-medium">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          Calculator installment
        </h1>
        <h2 class="subtitle">
          คำนวณเงินผ่อนชำระเป็นงวด
        </h2>
      </div>
    </div>
  </section>



  <section class="section">
  <div class="tile ">
 <div class="tile is-parent is-vertical is-flex-widescreen">
   <article class="tile is-child notification is-warning">
     <p class="title">Calculator</p>
     <p class="subtitle">คำนวณ</p>

     <div class="field is-horizontal">
       <div class="field-label is-medium">
         <label class="label">เงินต้น</label>
       </div>
       <div class="field-body">
         <div class="field">
           <div class="control">
             <input class="input is-medium" type="text" name="principle" placeholder="เงินต้น">
           </div>
         </div>
       </div>
       <div class="field-label is-medium">
         <label class="label">บาท</label>
       </div>
     </div>


     <div class="field is-horizontal">
       <div class="field-label is-medium">
         <label class="label">ระยะเวลาผ่อนชำระ</label>
       </div>
       <div class="field-body">
         <div class="field">
           <div class="control">
             <span class="select">
               <select name="month">
                 <option>เลือกเดือน</option>
                 <option>3</option>
                 <option>6</option>
                 <option>9</option>
                 <option>12</option>
                 <option>18</option>
                 <option>24</option>
                 <option>30</option>
                 <option>36</option>
                 <option>48</option>
                 <option>60</option>
               </select>
             </span>
           </div>
         </div>
       </div>
       <div class="field-label is-medium">
         <label class="label">เดือน</label>
       </div>
     </div>



     <div class="field is-horizontal">
       <div class="field-label is-medium">
         <label class="label" >ดอกเบี้ยต่อเดือน</label>
       </div>
       <div class="field-body">
         <div class="field">
           <div class="control">
             <input class="input is-medium" type="text" name="interest" placeholder="ดอกเบี้ยต่อเดือน">
           </div>
         </div>
       </div>
       <div class="field-label is-medium">
         <label class="label">%</label>
       </div>
     </div>


     <div class="field is-horizontal">
  <div class="field-label">
    <!-- Left empty for spacing -->
  </div>
  <div class="field-body">
    <div class="field">
      <div class="control">
        <button class="button is-primary" name="calbutton">
          คำนวณ
        </button>
      </div>
    </div>
  </div>
</div>



   </article>
</div>


<div class="tile is-parent is-vertical">
  <article class="tile is-child notification is-warning">
    <p class="title">Result</p>
    <p class="subtitle">ผลลัพธ์</p>

    <div class="field is-horizontal">
      <div class="field-label is-medium">
        <label class="label" >จำนวนเงินผ่อนชำระต่อเดือน</label>
      </div>
      <div class="field-body">
        <div class="field">
          <div class="control">
            <input class="input is-medium" name="result" type="text" placeholder={{$result}} disabled>
          </div>
        </div>
      </div>
      <div class="field-label is-medium">
        <label class="label">บาท</label>
      </div>
    </div>
  </article>
</div>

</div>
</section>


  <!-- <section class="section">
  <div class="container">
    <div class="heading">
      <h1 class="title">Section</h1>
      <h2 class="subtitle">
        A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
      </h2>

    </div>
  </div>
</section> -->
</form>
    </body>
</html>

<!-- <script>
    var data = <?php// echo $resBody; ?>;
    var vjson = new Vue({
        el: '#json-beautifier',
        data: data,
        computed: {
            json: function(){
                return JSON.stringify(this.data, null, 2);
            }
        }
    });

    var vm = new Vue({
        el: '#vue-app-albums',
        data: data
    });
</script> -->
