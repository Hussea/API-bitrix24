
<!DOCTYPE HTML>  
<html>
<head>
<style>
.myDiv {
  
  background-color: lightblue;    
  text-align: center;
  height: 400px;
  border: 1px solid #4CAF50;
  margin: auto;
  width: 60%;
}
</style>
</head>
<body> 

<div class="myDiv">
<form action="send.php" method="post" enctype="multipart/form-data">
<h3 class="form-title formModal-form__title">ОСТАВЬТЕ ЗАЯВКУ</h3>
      <p class="form-text formModal-form__text">И мы свяжемся с вами</p>
    
    <br>
    <label for="formModal__name" class="form-label form-label__name formModal-label__name">Ваше имя:</label>
     <input type="text" name="name" placeholder="name" required>
      <br>
      <br>
      <label for="formModal__phone" class="form-label form-label__phone  formModal-label__phone">Ваш телефон:</label>
      <input type="text" name="tliphon" placeholder="+7 298 12 10" required>
      <br>
      <br>
      <label for="formModal__phone" class="form-label form-label__phone  formModal-label__phone">комментарий:</label>
      <input type="text" name="coomnt" placeholder=".........." required>
      <br>
      <br>
      <input type="submit" name="submit" value="оставить заявку">  
      <br>      
</form>

</div>
</body>
</html>