<template>
  <div class="container-fluid m-0 p-0">
      <div id="nav-bar" class="nav-height p-4">
     <nav class="nav">
        <div class="container">
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                       <li><a href="">TRIPS</a></li>
                       <li><a href="">RECENTLY VIEWED</a></li>
                       <li><a href="">BOOKINGS</a></li>
                       <img src="../assets/avatar.jpg" alt="" class="image-cover">
                      
                   </ul>

                
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
        </nav>
        </div>
        <div class="hr-line">
          <hr class="divider">
        </div>

         
      <div id="payment" class=" full-height bg-white p-4">
          <div class="container pt-3">
              <div class=" row pb-5"> 
                    <div class="col-lg-6">
                        <div class="first-text pt-4 ml-auto">
                            <h5 class="display-5">{{title}}</h5>
                            <h6 class="move-left">Choose your method of payment</h6>
                         </div>
                   
                    </div>

                    <div class="col-lg-6">
                         <div class="right  my-auto d-none  d-lg-block">
                              <div class="card-provider">
                        <div class="visa c-image">
                            <img src="https://i.imgur.com/NN9t7UH.png" alt="visa">
                        </div> 

                        <div class="mastercard c-image">
                            <img src="https://i.imgur.com/bma7TBS.png" alt="mastercard">
                        </div>
                        </div>
                   
                   </div>
                      </div>
                        
              </div>
          </div>
           <div class="container pt-3">
              <div class=" row pb-5"> 
                    <div class="col-lg-6">
                       <div class="image " >
                        <img id="debit-card" src="../assets/card.png" class="img-fluid">
                    </div> 
                    </div>

                    <div class="col-lg-6">
                         <div class="right  my-auto ">
                            <div class="wrapper">
                            <div class="container">
                            <form action="">
                                <div class="name ">
                                    <div>
                                        <label for="f-name">Credit card number</label>
                                        <input class="form-control" type="text" name="f-name" placeholder="4324 5433 9383 1030">
                                        
                                    </div>
                                    <div>
                                        <label for="l-name">Expiration date</label>
                                        <input class="form-control" type="text" name="f-name" placeholder="03/24">
                                    </div>
                                </div>
                            <div class="cc-info">
                                    <div>
                                        <label for="card-num">Security code</label>
                                        <input class=" form-control" type="text" name="expire" placeholder="420">
                                    </div>
                                    <div>
                                        <label for="card-num">Postal Code</label>
                                        <input class="form-control" type="text" name="security" placeholder="10119">
                                    </div>
                                   
                                </div>
                                <div class="form">
                                   <div class="form-check">
                                        <input class="form-check-input " type="radio" name="flexRadioDefault" id="flexRadioDefault">
                                        <label class="form-check-label" for=" flexRadioDefault">
                                         Use this card for next time purchase </label>
                                    
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                    <button class="btn btn-success btn-lg btn-block" type="submit">Add card</button>
                                    </div>
                                    </div>
                               
                            </form>
                         </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
                <div class="hr-line mt-5">
                    <hr class="divider">
                    </div>
     
            <div class="col-lg-12 my-auto  p-5">
                <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                    <div class="d-flex justify-content-between">
                    <strong class="text-end">Subtotal</strong>
                    <p class="text-end">#2,497.00</p>
                    </div>
                    <div class="d-flex justify-content-between">
                    <strong class="text-end">Estimated TAX</strong>
                    <p class="text-end">#119.64</p>
                    </div>
                    <div class="d-flex justify-content-between">
                    <strong class="text-end">Promotional Code:<span class="text-muted"> Z4KXLMBA</span></strong>
                    <p class="text-end">-60.00</p>
                    </div>
                </div>
                
                
                
            </div>
            <div class="col-lg-12 my-auto p-5 mt-0" id="payment-button">
                <div class="pb-3 mb-0 small lh-sm  w-100">
                    <div class="d-flex justify-content-between">
                     <a href="#" class="btn btn-primary my-2">Complete payment</a>
                    <p class="text-payment"> TOTAL: #2,556.64</p>
                    </div>
                </div>
        </div>
  </div>
</div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return{
        title:'Payment information'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

.nav {
    width: 100%;
    height: 65px;
    position: relative;
    line-height: 65px;
    text-align: center;
    z-index: 1;
}

.nav div.logo a:hover {
    color: #00E676;
}

.nav div.main_list {
    height: 65px;
    float: right;
}

.nav div.main_list ul {
    width: 100%;
    height: 65px;
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav div.main_list ul li {
    width: auto;
    height: 65px;
    padding: 0;
    padding-right: 3rem;
}

.nav div.main_list ul li a {
    text-decoration: none;
    color: rgb(0, 0, 0);
    line-height: 65px;
    font-size: 15px;
    font-family: 'Poppins', sans-serif;;
    
}

.nav div.main_list ul li a:hover {
    color: #08daff;
}
.main_list{
    margin-right: -3px;
 
}
.navTrigger {
    display: none;
}

.nav {
    padding-top: 20px;
    padding-bottom: 20px;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
@media screen and (max-width:768px) {
    .navTrigger {
        display: block;
    }
    .nav div.logo {
        margin-left: 15px;
    }
    .nav div.main_list {
        width: 100%;
        height: 0;
        overflow: hidden;
    }
    .nav div.show_list {
        height: auto;
        display: none;
    }
    .nav div.main_list ul {
        flex-direction: column;
        width: 100%;
        height: 100vh;
        right: 0;
        left: 0;
        bottom: 0;
        background-color: rgb(251, 245, 245);
        /*same background color of navbar*/
        background-position: center top;
        
    }
    .nav div.main_list ul li {
        width: 100%;
        text-align: right;
        position: relative;
    }
    .nav div.main_list ul li a {
        text-align: center;
        width: 100%;
        font-size: 3rem;
        padding: 20px;
        color: #111;
    }
    .nav div.media_button {
        display: block;
    }
}

.navTrigger {
    cursor: pointer;
    width: 30px;
    height: 25px;
    margin: auto;
    position: absolute;
    right: 30px;
    top: 10px;
    bottom: 0;
}

.navTrigger i {
    background-color: rgb(10, 10, 10);
    border-radius: 2px;
    content: '';
    display: block;
    width: 100%;
    height: 4px;
}

.navTrigger i:nth-child(1) {
    -webkit-animation: outT 0.8s backwards;
    animation: outT 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger i:nth-child(2) {
    margin: 5px 0;
    -webkit-animation: outM 0.8s backwards;
    animation: outM 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger i:nth-child(3) {
    -webkit-animation: outBtm 0.8s backwards;
    animation: outBtm 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger.active i:nth-child(1) {
    -webkit-animation: inT 0.8s forwards;
    animation: inT 0.8s forwards;
}

.navTrigger.active i:nth-child(2) {
    -webkit-animation: inM 0.8s forwards;
    animation: inM 0.8s forwards;
}

.navTrigger.active i:nth-child(3) {
    -webkit-animation: inBtm 0.8s forwards;
    animation: inBtm 0.8s forwards;
}

@-webkit-keyframes inM {
    50% {
        -webkit-transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(45deg);
    }
}

@keyframes inM {
    50% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(45deg);
    }
}

@-webkit-keyframes outM {
    50% {
        -webkit-transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(45deg);
    }
}

@keyframes outM {
    50% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(45deg);
    }
}

@-webkit-keyframes inT {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(9px) rotate(135deg);
    }
}

@keyframes inT {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(9px) rotate(0deg);
    }
    100% {
        transform: translateY(9px) rotate(135deg);
    }
}

@-webkit-keyframes outT {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(9px) rotate(135deg);
    }
}

@keyframes outT {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(9px) rotate(0deg);
    }
    100% {
        transform: translateY(9px) rotate(135deg);
    }
}

@-webkit-keyframes inBtm {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(-9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(-9px) rotate(135deg);
    }
}

@keyframes inBtm {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-9px) rotate(0deg);
    }
    100% {
        transform: translateY(-9px) rotate(135deg);
    }
}

@-webkit-keyframes outBtm {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(-9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(-9px) rotate(135deg);
    }
}

@keyframes outBtm {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-9px) rotate(0deg);
    }
    100% {
        transform: translateY(-9px) rotate(135deg);
    }
}
.image-cover{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    
}
.pt-4 h5{
    font-size:28px ;
    font-family: 'Poppins', sans-serif !important;
}
.pt-4 h6{
    font-size:15px ;
    font-family: 'Poppins', sans-serif !important;
     color: rgb(92, 91, 91);
     
}
.pt-4{
    text-align: center;
    margin-right: 30%;
}
   
#payment-img{
    width:30px;
    margin: 30px;
    float: right;
}
.img-fluid{
    width: 100%;
    
}
 .wrapper {
	 margin-top: 1%;
	 height:47vh ;
	 display: flex;
	 justify-content: center;
	 font-family: 'Poppins', sans-serif;
	 animation: slideUp 2000ms ease;
}
 @keyframes slideUp {
	 0% {
		 -webkit-transform: translateY(100%);
		 transform: translateY(100%);
		 visibility: visible;
	}
	 100% {
		 -webkit-transform: translateY(0);
		 transform: translateY(0);
	}
}
 .hr-line {
    color: inherit;
   
    background-color: currentColor;
    border: 0;
    opacity: 0.25;
    margin: 0  3rem 0 3rem;
    margin-top: -30px;
    
 }
 h1 {
	 align-self: center;
     font-size: 'Poppins', sans-serif;
}
 form {
	 width: 100%;
     padding-left: 40px;
}
 form > * {
	 margin-top: 17px;
     
}
 form input {
	
	 font-size: 1rem;
	 letter-spacing: 0.15rem;
	 font-family: "Arimo";
	 margin-top: 0;
	 color: #e9e5e3;
     border-radius: 0px;
     font-size: 'Poppins', sans-serif;
     
     
}
 form label {
	 font-size: 12px;
	 letter-spacing: 2px;
	 color: #1f1e1e;
     float: left;
    
}
 form h1 {
	 font-size: 24px;
	 line-height: 10px;
	 color: #493b76;
	 letter-spacing: 1px;
     font-size: 'Poppins', sans-serif;
}
 form h1:nth-of-type(2) {
	 margin-top: 10%;
}
 .name {
	 justify-content: space-between;
	 display: flex;
	 width: 100%;
}
 .name div {
	 width: 45%;
}

 .cc-info {
	 display: flex;
     
	 justify-content: space-between;
}
 .cc-info div {
	 width: 45%;
}
 .btns {
	 display: flex;
	 flex-direction: column;
	 align-items: flex-end;
}
 .btn-success {
	 margin: 3px 0;
	 height: 50px;
	 width: 100%;
	 color: #fefeff;
	 background-color: #1b7bf8;
	 border: 0;
	 border-radius: 0.1rem;
	 letter-spacing: 2px;
     font-size: 'Poppins', sans-serif;
}
 .btns button:hover {
	 animation-name: btn-hov;
	 animation-duration: 550ms;
	 animation-fill-mode: forwards;
}
 @keyframes btn-hov {
	 100% {
		 background-color: #cfc9e1;
		 color: #4a3b76;
		 transform: scale(1.05);
	}
}
 input:focus, button:focus {
	 outline: none;
}
 @media (max-width: 736px) {
	 .wrapper {
		 width: 100%;
	}
	 .container {
		 width: 100%;
	}
	 .btns {
		 align-items: center;
	}
	 .btns button {
		 width: 100%;
	}
	 form h1 {
		 text-align: center;
	}
	 .name, .address-info, .cc-info {
		 flex-direction: column;
		 width: 100%;
		 justify-content: space-between;
	}
	 .name div, .address-info div, .cc-info div {
		 align-items: center;
		 flex-direction: column;
		 width: 100%;
		 display: flex;
	}
	 .street, .cc-num {
		 text-align: center;
	}
	 input {
		 margin: 5px 0;
		 
	}
}
.card-provider{
	text-align: right;
	min-height: 40px;
}

.card-provider .c-image{
	display: inline-block;
	vertical-align: middle;
	margin-left: 18px;		
}
.form-control{
    border: 1px solid;
    border-radius: 4px;
    background-color: #ececec;
    font-size: 10px;
    height: 50px;
    font-family: 'Poppins', sans-serif;
    margin-top:20px;
}
.bs{
    margin:20px;
} 
.footerNavWrap{
    margin-top: 50px
}
.pull-left{
    float: left;
    font-family: 'poppins';
    font-weight: bold ;
}
.pull-right{
    float: right;
    font-family: 'poppins';
    font-weight: bold ;
}
@media screen and (max-width:991px){
    .mt-5{
        margin-top: 100px !important;
    }
    .first-text{
        margin-right: 0;
    }
}
@media screen and (max-width:737px){
    .mt-5{
        margin-top:70px !important;
    }
    .first-text{
        margin-right: 0;
    }
}
@media screen and (max-width:736px){
    .mt-5{
        margin-top:340px !important;
    }
    .first-text{
        margin-right: 0;
    }
}
@media screen and (max-width:321px){
    .btn-success{
        width:100px;
        margin-right: 40px;
        float: right;
        margin-top: 30px;
        font-size: 10px;
    
    }

}
.text-end{
    font-weight: bold;
    font-family: 'Poppins';  
    line-height: 1rem;
}
#payment-button{ 
    margin-top: -63px !important;
}
.text-payment{
    font-family: 'poppins';
    font-size: 20px;
    font-weight: bold;
}
.btn-primary{
    padding: auto;
}
@media screen and (max-width:737px){
    .p-5{
        padding: 0 !important;
    }
    #payment-button{
        margin-top: 20px !important;
    }
}
</style>
