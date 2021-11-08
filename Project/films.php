<?php
include 'index.php';
include 'Classes/Content_type.php';
$content="film";
$f=new Content($content);
echo "<form method='POST'> 
<label for='content_type'><b>Выберите действие</b></label>
  <select name='content_type' required onchange='this.form.submit()' >
  <option  value='empty'></option>
<option  value='READ'>Прочесть по ID</option>
<option  value='GETALL'>Выбрать все</option>
<option  value='DELETE'>Удалить по ID</option>
</select>
</form>";
if($_POST['content_type']==='empty') echo "";
elseif($_POST['content_type']==='READ') 
{
echo "<form method='GET'> Вывод информации о фильме с ID<br>";
echo "<input type='text' placeholder='Введите ID' name='curid' required ><br>";
echo "<button type='submit' class='btn btn-primary btn-rounded registerbtn'>Добавить</button></form>";
$f->READ($_GET['curid']);
}
elseif($_POST['content_type']==='GETALL')
{ echo "Вывод всей информации по фильмам<br>" ;
     $f->GETALL();
}
elseif($_POST['content_type']==='DELETE')
{ 
  echo "<form method='GET'> Удаление информации о фильме с ID<br>";
echo "<input type='text' placeholder='Введите ID' name='curid' required ><br>";
echo "<button type='submit' class='btn btn-primary btn-rounded registerbtn'>Добавить</button></form>";
$f->DELETE($_GET['curid']);
}
?>
</body>
</html>