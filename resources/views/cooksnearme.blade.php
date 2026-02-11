@extends('WebsiteMaster')
@section('title', 'Rasoi Wala: आपके नजदीकी शेफ से स्वादिष्ट खाना')
@section('content')

<style>
    body {
  background-color:  #eee;
}
.title {
 
    margin-bottom: 50px;
    text-transform: uppercase;
}
.card:hover{
  background: #fff ;
}
.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
     
}
.card {
    font-size: 1em;
    overflow: hidden;
    padding: 5;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
    margin-top:20px;
    border-radius: 25px;
}

.carousel-indicators li {
    border-radius: 12px;
    width: 12px;
    height: 12px;
    background-color: #404040;
}
.carousel-indicators li {
    border-radius: 12px;
    width: 12px;
    height: 12px;
    background-color: #404040;
}
.carousel-indicators .active {
    background-color: white;
    max-width: 12px;
    margin: 0 3px;
    height: 12px;
}
.carousel-control-prev-icon {
 background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}

.bg-c i {
  background: #ffbc00;
    padding: 35px;
    border-radius: 50%;
    color: #fff;
}
.form-check-input {
    position: relative; 
    /* margin-top: -1rem; */
    margin-left: -1.25rem;
    height: 50px;
    width: 40px;
    border-radius: 30px !important;
}
.btn {
  margin-top: auto;
}
.icon {
    color: #ffbc00;
    font-size: 17px;
    margin: 6px 3px;
}
.div0 {
    float: left;
    width: 50%;
}
.div1 {
    float: right;
}
</style>
<main>
    <!--? Hero Start -->
    {{-- <div class="slider-area">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2">
                            <h2> Cooks Near Me </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Hero End -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d7227.881751194317!2d85.129341!3d25.069993!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDA0JzEyLjAiTiA4NcKwMDcnNDUuNiJF!5e0!3m2!1sen!2sus!4v1743572505033!5m2!1sen!2sus" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
  
     
       
</main>

  <div class="container py-5">
      <div class="row">
        <div class="col-lg-6">
            <div class="card py-5">
                <div class="row align-items-center">
                  <div class=" div0">
                    {{-- <img class="d-block w-100" src="https://picsum.photos/150?image=641" alt="" style="border-radius: 50%;
            width: 75% !important;
            margin: auto;"> --}}
                      <div class="bg-c" style="text-align: center">
                        <i class="fa fa-home" aria-hidden="true"></i>
                      </div>
                  </div>
                  <div class=" div1">
                    <div class="div2">
                      <h4>Ranjeet Kumar</h4>
                      <span><i class="fa fa-map-marker icon" aria-hidden="true"></i> india</span><br>
                      <span><i class="fa fa-star icon" aria-hidden="true"></i>  4.3  </span><br>
                      <span style="color: green;">NonVeg</span><br>
                      <span><i class="fa fa-phone icon"></i> +91 8989898988</span>
                    </div>
                  </div>
                
                 
           
                </div>
              </div> 
        </div>
        <div class="col-lg-6">
            <div class="card py-5">
                <div class="row align-items-center">
                  <div class=" div0">
                
                      <div class="bg-c" style="text-align: center">
                        <i class="fa fa-home" aria-hidden="true"></i>
                      </div>
                  </div>
                  <div class=" div1">
                    <div class="div2">
                      <h4>Subham Gupta</h4>
                      <span><i class="fa fa-map-marker icon" aria-hidden="true"></i> india</span><br>
                      <span><i class="fa fa-star icon" aria-hidden="true"></i>  4.3  </span><br>
                      <span style="color: green;">NonVeg</span><br>
                      <span><i class="fa fa-phone icon"></i> +91 8989898999</span>
                    </div>
                   
                  </div>
                
                 
           
                </div>
              </div> 
        </div>
        <div class="col-lg-6">
          <div class="card py-5">
              <div class="row align-items-center">
                <div class=" div0">
              
                    <div class="bg-c" style="text-align: center">
                      <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                </div>
                <div class=" div1">
                  <div class="div2">
                    <h4>Satish Gupta</h4>
                    <span><i class="fa fa-map-marker icon" aria-hidden="true"></i> india</span><br>
                    <span><i class="fa fa-star icon" aria-hidden="true"></i>  4.3  </span><br>
                    <span style="color: red;">Veg</span> <br>
                    <span><i class="fa fa-phone icon"></i> +91 8989898111</span>
                  </div>
                 
                </div>
              
               
         
              </div>
            </div> 
      </div>
      <div class="col-lg-6">
        <div class="card py-5">
            <div class="row align-items-center">
              <div class=" div0">
            
                  <div class="bg-c" style="text-align: center">
                    <i class="fa fa-home" aria-hidden="true"></i>
                  </div>
              </div>
              <div class=" div1">
                <div class="div2">
                  <h4>Ashok Kumar</h4>
                  <span><i class="fa fa-map-marker icon" aria-hidden="true"></i> india</span><br>
                  <span><i class="fa fa-star icon" aria-hidden="true"></i>  4.3  </span><br>
                 <span style="color: green;">NonVeg</span><br>
                  <span><i class="fa fa-phone icon"></i> +91 6449898999</span>
                </div>
               
              </div>
            
             
       
            </div>
          </div> 
    </div>
    <div class="col-lg-6">
      <div class="card py-5">
          <div class="row align-items-center">
            <div class=" div0">
          
                <div class="bg-c" style="text-align: center">
                  <i class="fa fa-home" aria-hidden="true"></i>
                </div>
            </div>
            <div class=" div1">
              <div class="div2">
                <h4>Vijay Rathore</h4>
                <span><i class="fa fa-map-marker icon" aria-hidden="true"></i> india</span><br>
                <span><i class="fa fa-star icon" aria-hidden="true"></i>  4.3  </span><br>
                <span style="color: red;">Veg</span> <br>
                <span><i class="fa fa-phone icon"></i> +91 6666898999</span>
              </div>
             
            </div>
          
           
     
          </div>
        </div> 
  </div>
  <div class="col-lg-6">
    <div class="card py-5">
        <div class="row align-items-center">
          <div class=" div0">
        
              <div class="bg-c" style="text-align: center">
                <i class="fa fa-home" aria-hidden="true"></i>
              </div>
          </div>
          <div class=" div1">
            <div class="div2">
              <h4>Chandan Gupta</h4>
              <span><i class="fa fa-map-marker icon" aria-hidden="true"></i> india</span><br>
              <span><i class="fa fa-star icon" aria-hidden="true"></i>  4.3  </span><br>
               <span style="color: green;">NonVeg</span><br>
              <span><i class="fa fa-phone icon"></i> +91 6669898999</span>
            </div>
           
          </div>
        
         
   
        </div>
      </div> 
</div>
<div class="col-lg-6">
  <div class="card py-5">
      <div class="row align-items-center">
        <div class=" div0">
      
            <div class="bg-c" style="text-align: center">
              <i class="fa fa-home" aria-hidden="true"></i>
            </div>
        </div>
        <div class=" div1">
          <div class="div2">
            <h4>Santosh Kumar</h4>
            <span><i class="fa fa-map-marker icon" aria-hidden="true"></i> india</span><br>
            <span><i class="fa fa-star icon" aria-hidden="true"></i>  4.3  </span><br>
            <span style="color: red;">Veg</span> <br>
            <span><i class="fa fa-phone icon"></i> +91 6559898999</span>
          </div>
         
        </div>
      
       
 
      </div>
    </div> 
</div>
<div class="col-lg-6">
  <div class="card py-5">
      <div class="row align-items-center">
        <div class=" div0">
      
            <div class="bg-c" style="text-align: center">
              <i class="fa fa-home" aria-hidden="true"></i>
            </div>
        </div>
        <div class=" div1">
          <div class="div2">
            <h4>Rahul Pal</h4>
            <span><i class="fa fa-map-marker icon" aria-hidden="true"></i> india</span><br>
            <span><i class="fa fa-star icon" aria-hidden="true"></i>  4.3  </span><br>
            <span style="color: green;">NonVeg</span><br>
            <span><i class="fa fa-phone icon"></i> +91 8999898999</span>
          </div>
         
        </div>
      
       
 
      </div>
    </div> 
</div>
<div class="col-lg-6">
  <div class="card py-5">
      <div class="row align-items-center">
        <div class=" div0">
      
            <div class="bg-c" style="text-align: center">
              <i class="fa fa-home" aria-hidden="true"></i>
            </div>
        </div>
        <div class=" div1">
          <div class="div2">
            <h4>Sujeet Sahu</h4>
            <span><i class="fa fa-map-marker icon" aria-hidden="true"></i> india</span><br>
            <span><i class="fa fa-star icon" aria-hidden="true"></i>  4.3  </span><br>
            <span style="color: red;">Veg</span> <br>
            <span><i class="fa fa-phone icon"></i> +91 7777898999</span>
          </div>
         
        </div>
      
       
 
      </div>
    </div> 
</div>
<div class="col-lg-6">
  <div class="card py-5">
      <div class="row align-items-center">
        <div class=" div0">
      
            <div class="bg-c" style="text-align: center">
              <i class="fa fa-home" aria-hidden="true"></i>
            </div>
        </div>
        <div class=" div1">
          <div class="div2">
            <h4>Utkarsh Gapta</h4>
            <span><i class="fa fa-map-marker icon" aria-hidden="true"></i> india</span><br>
            <span><i class="fa fa-star icon" aria-hidden="true"></i>  4.3  </span><br>
             <span style="color: green;">NonVeg</span><br>
            <span><i class="fa fa-phone icon"></i> +91 8989898999</span>
          </div>
         
        </div>
      
       
 
      </div>
    </div> 
</div>
      </div>
    
    </div>
   

   
@endsection
