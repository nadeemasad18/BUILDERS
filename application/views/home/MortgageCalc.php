

<body>

    <!---- This is NavBar group-->





<!----This is the CALC-->

      <div class="container justify-content-center bg-white p-5 rounded m-5" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <h1 class="text-center m-3" style="font-weight: 900;">Mortgage Calculator</h1>
      <p class="text-center text-muted">Suck at math but need to calculate your mortgage? Not to worry stupid, we got you covered!</p>
        <span class="text-danger fw-normal" id="errMsg"></span>
        <span class="text-success fw-normal" id="msg"></span>
        <div class="row justify-content-center">
        <div class="col-sm-4 col-md-6 col-lg-12 m-3">
          <input placeholder="Enter your loan amount" id="principal">
     
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-4 col-md-6 col-lg-12 m-3">
          <input placeholder="Enter your apr rate" id="apr" >
    
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-4 col-md-6 col-lg-12 m-3">
          <input placeholder="Enter loan term (in years) " id="term" >
     
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-4 col-md-6 col-lg-12 m-3">
          <button class="btn btn-outline-dark" onclick="calculateMortgage()">Calculate</button>
          </div>

      </div>

      <div class="row justify-content-center">
        <div class="col-sm-4 col-md-6 col-lg-12 m-3">
          <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Home Affordability
          </button>
          
      </div>
      </div>


      <div class="row justify-content-center">
        <span id="msg"></span>
      </div>
      </div>


  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="font-weight: 900;" id="exampleModalLabel">Home Affordability</h5>
        <span id="success" class="fw-normal text-success"></span>
        <span class="fw-normal text-danger m-5" id="errorMessage"></span>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row justify-content-center">
          <div class="col-sm-4 col-md-6 col-lg-12">
            <input id="name" placeholder="Enter your name">
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-sm-4 col-md-6 col-lg-12 m-3">
            <input id="income" placeholder="Enter your annual income">
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-sm-4 col-md-6 col-lg-12 m-3">
           <button class="btn btn-dark mt-3" onclick="calculateAffordability()">Calculate</button>
          </div>


  

        </div>

      </div>
   
    </div>
  </div>
</div>
<!--End of modal -->


<!--End of Calc-->




                                       <!--Start of Js-->      

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
  </script>

    <script>


      function calculateMortgage(){
        
        let msg = document.getElementById("msg");
        let errMsg = document.getElementById("errMsg");

        const principal = document.getElementById("principal").value;
        const apr = document.getElementById("apr").value;
        const term = document.getElementById("term").value;
        
        if(principal==="" || apr==="" || term===""){
          errMsg.innerHTML="All Fields are Required";
          msg.innerHTML="";
        }
        else{
        

        let mortgage =Math.round (principal*( Math.pow((1 + apr), term))/(Math.pow((1 + apr), term) - 1)/12/term);
       // let mortgage = principal*(Math.pow((1+apr), term))/(Math.pow(1+apr), term)-1));
       
        msg.innerHTML="Your monthly mortgage rate is $" + mortgage + " per month for " + term + " years";
        errMsg.innerHTML="";
        }
      }

      function calculateAffordability(){
        let name=document.getElementById('name').value;

        let income=document.getElementById('income').value;

        let success = document.getElementById('success');
        let errorMessage=document.getElementById("errorMessage");
        const homeValue = income * 3;

        if(name ==="" || income===""){
          errorMessage.innerHTML="All fields are required";
          success.innerHTML="";
        }
        else{
          errorMessage.innerHTML="";
          success.innerHTML= name + ", with your income of $"+income+ ", you can afford a house up to $"+ homeValue;
        }
      }

    </script>









 
</body>