<?php
include 'index.php';
echo htmlspecialchars(basename(__FILE__))."<br>";
?>
<form action="scriptupd" method="POST">
<div class="container" >
  <h1>Форма обновления существующего объекта БД</h1>
  <hr>
  <label for="content_type"><b>Тип записи</b></label>
  <select name="content_type" required>
  <option  value=""></option>
<option  value="film">Фильмы</option>
<option  value="serial">Сериалы</option>
</select>
<br>
  <label for="name"><b>ID</b></label>
  <input type="text" placeholder="Введите ID" name="ID" required>
  <label for="name"><b>Новое название</b></label>
  <input type="text" placeholder="Введите название" name="name" required>
  <label for="descriptions"><b>Новое описание</b></label>
  <input type="text" placeholder="Введите описание" name="descriptions" required>
  <label for="partner"><b>Новый партнер</b></label>
  <input type="text" placeholder="Введите партнера" name="partner" required>
  <label for="year_create"><b>Новая дата создания</b></label>
  <input type="date" placeholder="Введите дату" name="year_create" required>
<div class="d-grid gap-2 col-6 mx-auto">
<button type="submit" class="btn btn-primary btn-rounded registerbtn">Добавить</button>
</div>
</div>
</div>
</form>
</body>
</html>