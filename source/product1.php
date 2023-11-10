<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root{
    --blue:#04AFA1;
    --black:#192a56;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
}

*{
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none; 
    border:none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 5.5rem;
    scroll-behavior: smooth;
}  
.btn{
    margin-top: 1rem;
    display: inline-block;
    font-size: 1.7rem;
    color:#fff;
    background: var(--black);
    border-radius: .5rem;
    cursor: pointer;
    padding:.8rem 3rem;
}

.btn:hover{
    background: var(--blue);
    letter-spacing: .1rem;
}
.row{
    display: flex;
    flex-wrap: wrap;
    gap:2rem;
    align-items: center;
}
.row .image{
    flex:1 1 50rem;
}

.row .image img{ 
    width: 80%;
}

.row .content{
    flex:1 1 45rem;
}

.row .content h3{
    text-align: center;
    color:var(--black);
    font-size: 3.5rem;
    padding:.5rem 0;
}

.row h2{
    text-align: center;
    color:black;
    font-size: 3.5rem;
    padding:.5rem 0;
}

.row .content p{
    
    color:var(--light-color);
    font-size: 2rem;
    padding:2rem 2rem;
    line-height: 2;
}
.content .stars{
    padding-bottom: 1rem;
}
.content .stars i{
   font-size: 1.7rem;
   color:var(--blue);
}



</style>
</head>
<body>
    <br><br> <br><br>
    <div class="row">
    <div class="image">
        <img src="burger1.png" alt="">
    </div>
    <div class="content">
        <h3>Aloo Tikki Burger</h3>
        <center>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
    <br>
        <h2>₹110</h2>
    </center>
        <p>Our burgers are well-known across town for their outstanding taste. 
            They'll leave your mouth watering with their distinct blend of sauces and seasonings.</p>
        <center>
            <a href="Order1.html" class="btn">Add to cart</a>
        </center>
    </div>
</div>
</body>
</html>