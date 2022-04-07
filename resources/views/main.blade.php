<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  font-family: Arial;

}

.split {
 
 width: 100%;
  position: fixed;
  z-index: 1;
  top: 0%;
  overflow-x: hidden;

}

.left {
    /* padding:10px; */
 width: 93%;
  left: 0;
  background-color: #fff;
  height:100%;

}

.right {
 width: 7%;
  right: 0;
  background-color: #fff;
}


</style>
</head>
<body>
    
<div class="split left">
  <div class="centered">
  <div class="container">
  <div class="jumbotron">
  <h1 class="display-4">Hello, </h1>
  <p class="lead">Welcome to Retnet , Retnet is social network to  provide full independcy .</p>
  <hr class="my-4">
  <p>Rate  Your friends using ret newt.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Next</a>
  </p>
</div>
  </div>
   
  </div>
</div>
<!-- satuts secttion  -->
<div class="split right">
  <div class="centered">
  <style>
.main{
    width: 100%;
    padding: 40px 0;
    display: flex;
    justify-content: center;
    margin-top: 50px;
}

.wrapper{
    width: 100%;
    max-width: 100%;
    display: grid;
    grid-template-columns: 100% 0%;
    grid-gap: 30px;
}

.left-col{
    display: flex;
    flex-direction: column;
}

.status-wrapper{
    width: 100%;
    /* height: 120px; */
    background: #fff;
    border: 1px solid #dfdfdf;
    border-radius: 2px;
    padding: 10px;
    padding-right: 0;
    /* display: flex; */
    align-items: center;
    overflow: hidden;
    overflow-x: auto;
}

.status-wrapper::-webkit-scrollbar{
    display: none;
}

.status-card{
    flex: 0 0 auto;
    width: 82%;
    max-width:100%;
    /* display: flex; */
    flex-direction: column;
    align-items: center;
   
}

.profile-pic{
    width: 100%;
    height: 70px;
    border-radius: 50%;
    overflow: hidden;
    padding: 3px;
    background: linear-gradient(45deg, rgb(255, 230, 0), rgb(18 0 0) 80%);
}

.profile-pic img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid #fff;
}

.username{
    width: 100%;
    overflow: hidden;
    text-align: center;
    font-size: 12px;
    margin-top:5px;
    color: rgba(0, 0, 0, 0.5)
}

</style>


  <section class="main2">
    <div class="wrapper">
        <div class="float-right">
            <div class="status-wrapper">
                <div class="status-card">
                    <div class="profile-pic"><img src="https://cdn.dribbble.com/users/2199928/screenshots/11532918/media/5a7273b592ea860e6d0ff2931ecab4f3.png?compress=1&resize=400x300" alt=""></div>
                    <p class="username">user_name_1</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="https://cdn.dribbble.com/users/2479028/screenshots/13914601/media/5e04961d9e68a2d8dcb5710c15c1cd01.jpg?compress=1&resize=400x300&vertical=top" alt=""></div>
                    <p class="username">user_name_2</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="https://i.kinja-img.com/gawker-media/image/upload/t_original/ijsi5fzb1nbkbhxa2gc1.png" alt=""></div>
                    <p class="username">user_name_3</p>
                </div>

                <div class="status-card">
                    <div class="profile-pic"><img src="https://i.kinja-img.com/gawker-media/image/upload/t_original/ijsi5fzb1nbkbhxa2gc1.png" alt=""></div>
                    <p class="username">user_name_4</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="https://i.kinja-img.com/gawker-media/image/upload/t_original/ijsi5fzb1nbkbhxa2gc1.png" alt=""></div>
                    <p class="username">user_name_4</p>
                </div>
                <div class="status-card">
                    <div class="profile-pic"><img src="https://i.kinja-img.com/gawker-media/image/upload/t_original/ijsi5fzb1nbkbhxa2gc1.png" alt=""></div>
                    <p class="username">user_name_4</p>
                </div>
                
        </div>
    </div>
</section>
  </div>
</div>
<x-header/>  
</body>

</html> 
