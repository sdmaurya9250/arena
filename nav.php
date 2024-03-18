
<style>
  

ul {
  list-style-type: none;
  display: flex;
  padding: 18px 0;
  background-size: 400% 400%;
  background-image: linear-gradient(-45deg, #ff5959, #ff4040, #ff0d6e, #ff8033,#d74177);
  animation: 12s myGradient infinite;
  border-radius: 40px;
  box-shadow: 1px 1px 1px #ff3352;
  border-top-left-radius: 0px;
  border-bottom-right-radius: 0px;
}

.active {
  transition: 1s;
}

li a {
  color: #fff;
  text-decoration: none;
  padding: 45px 45px;
  font-family: verdana;
  font-weight: lighter;
  font-size: 24px;
  letter-spacing: 1px;
  opacity: 0.9;
}

.active:hover {
  color: #fff;
  animation: 1.5s myFlash linear infinite;
  text-shadow: 1px 1px 1px #fff;
  transition: 2s;
}

@keyframes myFlash {
  0% {
    opacity: 1;
    text-shadow: transparent;
  }
  
  50% {
    opacity: .1;
  }
  
  100% {
    opacity: 1;
    text-shadow: 2px 2px 20px #fff;
  }
}


@keyframes myFlash{
  0% {
    opacity: 1;
  }
  
  50%{
    opacity: .1;
  }
  
  100% {
    opacity: 1;
  }
}

nav ul li a {
  transition: 3s;
  animation: 3s myAnimation ease linear;
}


  

/*Ideal screen pixel 1317px*/


/*top: 71%*/

.Active {
  transition: 2s;
  margin-top: 1px;
}
    </style>

  
  <!--Write in body section the codes-->
  <!--Body section-->
  <body>
    <!--
       //code here...
     -->
            <nav>
              <ul class="nav-type">
                <li><a target="_blank" class="active">Home</a></li>
                  <div class="line"></div>
              </ul>
            </nav>
          
    
    
  </body>
  
<!--Html pade and program codes the end...-->
</html>
