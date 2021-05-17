<template>
  <div class="container">
    <div class="header">
      <div class="header-container">
        
        <div class="nav-bar">
          <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
              <a href="#" class="breadcrumbs__link">TRIPS</a>
            </li>
            <li class="breadcrumbs__item">
              <a href="#" class="breadcrumbs__link">RECENTLY VIEWED</a>
            </li>
            <li class="breadcrumbs__item">
             <a href="#" class="breadcrumbs__link">BOOKINGS</a>
            </li>
            <li class="breadcrumbs__item">
              <img src="../assets/avatar.png" width="70" height="70">
            </li>
          </ul>      
        </div>
      
      </div>
      <hr style="color: #808080;">
    </div>
    <div class="payment"> 
      <div class="payment-info">
        <h1> Payment Information </h1>
        <p> Choose your method of Payment </p>
      </div>
      
      <span><img src="../assets/paypal.jpeg" height="60" width="60"></span>
      <span><img src="../assets/discover.jpeg" width="60" height="60"></span>
      <span><img src="../assets/visa.jpeg" width="60" height="60"></span>
      
    </div>
    <div class="payment-form">
      <img src="../assets/card.jpeg" width="500" height="300">
      <div class="Name">
        <div class="credit-card">
          <label for="exampleFormControlInput1" class="form-label">Credit card number</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="4324 5433 9382 1030">
        </div>
        <div class="security">
          <label for="exampleFormControlInput1" class="form-label">Security code</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="03/24">
        </div>
      </div>
      <div class="Email">
        <div class="expiration">
          <label for="exampleFormControlInput1" class="form-label">Expiration date</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="420">
        </div>
        <div class="postal">
          <label for="exampleFormControlInput1" class="form-label">Postal code</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="10119">
        </div>
        <div class="radio">
          <input type="radio" name="user" > 
          <!-- <span class="circle"></span> -->
          <label for="exampleFormControlInput1" class="form-label">Use this card for next time purchase</label>
        </div>
        <button> Add card </button> 
      </div>   
    </div>
    <hr style="color: 1px #808080">
    <div class="footer">
      <div class="total">
        <p style="margin-left: -160px;">Subtotal</p>
        <p style="margin-left: -110px;">Estimated TAX </p>
        <p>Promtional Code: <b>Z4KXLM9A</b> </p>
      </div>
      <div class="total-money">
        <p>$2,497.00</p>
        <p>$119.64</p>
        <p>$-60.00</p>
      </div>
    </div>
    <hr style="color: 1px #808080">
    <div class="footer-total">
      <div class="complete">
        <button>Complete payment</button>
      </div> 
      <div class="footer-money">
        <p><strong>TOTAL:$2556.64</strong></p>
      </div>
    </div>
  </div>
 
  
    

  
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    
    
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

.container{
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.header-container{
    justify-content: space-between;
    display: flex;
    width: 500px;
    padding-top: 30px;
    margin-left: 700px;
    padding-bottom: 10px;
    
}
.header-container img{
    padding-left: 80px;
    margin-top: -30px;
    
}
.breadcrumbs{
    padding: 10px;
    justify-content: space-between;
    width: 600px;
    display: flex;
    
    
}
.breadcrumbs__item{
    display: inline-block;
}
.breadcrumbs__link{
    text-decoration: none;
    color: #000;
    font-weight: 540;
    font-size: large;
}
.payment-info h1{
  float: left;
  margin-left: 100px;

}
.payment-info p{
  float: left;
  color: #808080;
  font-weight: 400;
  margin-top: 70px;
  margin-left: -335px;
}
.payment span{
 float: right;
 margin-right: 50px;
}

.payment-form{
  display: flex;
  margin-top: 150px;
  width: 1000px;
  justify-content: space-between;
  margin-left: 100px;
  margin-bottom: 15px;
}
.credit-card input{
  width: 280px;
  height: 40px;
  border:0.5px solid #808080;
  border-radius: 3px;
  margin-top: 10px;
  margin-left: 90px;
  margin-bottom: 30px;
  background: #ccc;
  padding-left: 20px;
  color: #000;
  font-weight: 500;
}
.security input{
  width: 280px;
  height: 40px;
  border:0.5px solid #808080;
  border-radius: 3px;
  margin-top: 10px;
  margin-left: 90px;
  background: #ccc;
  padding-left: 20px;
  color: #000;
  font-weight: 500;
}
.expiration input{
  width: 280px;
  height: 40px;
  border:0.5px solid  #808080;
  border-radius: 3px;
  margin-top: 10px;
  margin-left: 50px;
  background: #ccc;
  margin-bottom: 30px;
  padding-left: 20px;
  color: #000;
  font-weight: 500;
  
}
.postal input{
  width: 280px;
  height: 40px;
  border:0.5px solid #808080;
  border-radius: 3px;
 margin-top: 10px;
  margin-left: 50px;
  background: #ccc;
  padding-left: 20px;
  color: #000;
  font-weight: 500px;
}
.postal label{
  margin-left: -85px;
  font-weight: 500;
  font-size: 15px;
}
.expiration label{
  margin-left: -87px;
  font-weight: 500;
  font-size: 15px;
}
.security label{
  margin-left: -100px;
  font-weight: 500;
  font-size: 15px;
}
.credit-card label{
  margin-left: -40px;
  font-weight: 500;
  font-size: 15px;
}
.payment-form button{
  margin-top: 30px;
  margin-left: -310px;
  width: 650px;
  height: 40px;
  border: #fff;
  background: #2196fc;
  color: #fff;
  font-weight: 500;
  border-radius: 3px;
}
.footer {
  justify-content: space-between;
  display: flex;
  width: 1150px;
  margin-left: 100px;
  margin-bottom: 20px;
}

.footer p{
  font-weight: 600;
}
.footer b{
  color: #ccc;
;
}
.footer-total{
  justify-content: space-between;
  display: flex;
  width: 1150px;
  margin-left: 80px;
  margin-top: 20px;

}
.complete button{
  width: 200px;
  height: 40px;
  border: #fff;
  color: #fff;
  background: #2196fc;
  font-weight: 550;
  border-radius: 3px;
  margin-top: 20px;
}
.footer-money p{
  font-weight: bolder;
  font-size: large;
}
.radio{
 margin-top: 30px;
  margin-left: -680px;
}
.radio label{
  font-size: 15px;
  font-weight: 550;
}
/* .radio input{
  display: none;
}
.radio .circle{
  display: inline-block;
  width: 20px;
  height: 20px;
  background-color: #ccc;
  left: 0;
  top: 0;
  border-radius: 50%;
}
.radio:hover .circle{
  background-color: #ccc;
}
.radio input:checked + .circle{
  background-color: #2196fc;
}
.radio input:checked + .circle::after{
  content: "";
  height: 10px;
  width: 1opx;
  background-color: #fff;
  position: absolute;
  border-radius: 50%;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
} */
</style>
