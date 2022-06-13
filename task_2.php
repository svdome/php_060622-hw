<?php
// 2. Спросите у пользователя email с помощью формы. 
//Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email) при ее открытии поле email было автоматически заполнено.

if (empty($_GET)) {
?> 
<h4>Введите свой email !</h4>  
<form action="" method="get">
    <input type="email" name="email" placeholder="email"><br><br>
    <input type="submit" name="submit_1"><br><br>
</form>
<?php
} else {

?>
<h4>Введите свои данные:</h4>
<form action="" method="post">
    <input type="text" name="firstname" placeholder="Имя"><br><br>
    <input type="text" name="lastname" placeholder="Фамилия"><br><br>
    <input type="password" name="userpass" placeholder="пароль"><br><br>
    <input type="email" value= "<?php if (isset($_GET['email'])) echo $_GET['email'] ?>"><br><br>
    <input type="submit" name="submit_2">
</form>
<?php
}
?>