<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Студенческая библиотека</title>
</head>
<body>

<!-- Форма для добавления новой книги -->
<div class="form-pair">
<form action="add_book.php" method="post">
  <h2>Добавить новую книгу</h2>
  <label for="genre">Жанр:</label>
  <input type="text" id="genre" name="genre" required>
  <label for="title">Название:</label>
  <input type="text" id="title" name="title" required>
  <label for="inventory_number">Инвентарный номер:</label>
  <input type="text" id="inventory_number" name="inventory_number" required>
  <label for="authors">Автор(ы):</label>
  <input type="text" id="authors" name="authors" required>
  <label for="year">Год издания:</label>
  <input type="text" id="year" name="year" required>
  <label for="publisher">Издательство:</label>
  <input type="text" id="publisher" name="publisher" required>
  <label for="place_of_publication">Место издания:</label>
  <input type="text" id="place_of_publication" name="place_of_publication" required>
  <label for="number_of_pages">Количество страниц:</label>
  <input type="text" id="number_of_pages" name="number_of_pages" required>
  <label for="price">Цена:</label>
  <input type="text" id="price" name="price" required>
  <input type="submit" value="Добавить книгу">
</form>

<form action="edit_book.php" method="post">
  <h2>Редактировать книгу</h2>
  <label for="book_id">ID книги:</label>
  <input type="text" id="book_id" name="book_id" required>
  
  <label for="title">Новое название:</label>
  <input type="text" id="title" name="title">
  
  <label for="genre">Жанр:</label>
  <input type="text" id="genre" name="genre">
  
  <label for="inventory_number">Инвентарный номер:</label>
  <input type="text" id="inventory_number" name="inventory_number">
  
  <label for="authors">Автор(ы):</label>
  <input type="text" id="authors" name="authors">
  
  <label for="year">Год издания:</label>
  <input type="text" id="year" name="year">
  
  <label for="publisher">Издательство:</label>
  <input type="text" id="publisher" name="publisher">
  
  <label for="place_of_publication">Место издания:</label>
  <input type="text" id="place_of_publication" name="place_of_publication">
  
  <label for="number_of_pages">Количество страниц:</label>
  <input type="text" id="number_of_pages" name="number_of_pages">
  
  <label for="price">Цена:</label>
  <input type="text" id="price" name="price">
  
  <input type="submit" value="Редактировать книгу">
</form>
</div>


<!-- Форма для добавления новой записи о выдаче/возврате книги -->
<div class="form-pair">
<form action="add_transaction.php" method="post">
  <h2>Добавить запись о выдаче/возврате книги</h2>
  <label for="book_id">ID книги:</label>
  <input type="text" id="book_id" name="book_id" required>
  <label for="student_id">ID студента:</label>
  <input type="text" id="student_id" name="student_id" required>
  <label for="issue_date">Дата выдачи:</label>
  <input type="date" id="issue_date" name="issue_date" required>
  <label for="return_date">Дата возврата:</label>
  <input type="date" id="return_date" name="return_date" required>
  <input type="submit" value="Добавить запись">
</form>

<!-- Форма для редактирования существующей записи о выдаче/возврате книги -->
<form action="edit_transaction.php" method="post">
  <h2>Редактировать запись о выдаче/возврате книги</h2>
  <label for="transaction_id">ID транзакции:</label>
  <input type="text" id="transaction_id" name="transaction_id" required>
  <label for="issue_date">Новая дата выдачи:</label>
  <input type="date" id="issue_date" name="issue_date">
  <label for="return_date">Новая дата возврата:</label>
  <input type="date" id="return_date" name="return_date">
  <input type="submit" value="Редактировать запись">
</form>
</div>

<div class="form-pair">
<!-- Форма для добавления новой записи о списании книги -->
<form action="add_write_off.php" method="post">
  <h2>Добавить запись о списании книги</h2>
  <label for="book_id">ID книги:</label>
  <input type="text" id="book_id" name="book_id" required>
  
  <label for="write_off_date">Дата списания:</label>
  <input type="date" id="write_off_date" name="write_off_date" required>
  
  <label for="reason">Причина списания:</label>
  <input type="text" id="reason" name="reason" required>

  <input type="submit" value="Добавить запись">
</form>


<!-- Форма для редактирования существующей записи о списании книги -->
<form action="edit_write_off.php" method="post">
  <h2>Редактировать запись о списании книги</h2>
  <label for="write_off_id">ID списания:</label>
  <input type="text" id="write_off_id" name="write_off_id" required>
  
  <label for="write_off_date">Новая дата списания:</label>
  <input type="date" id="write_off_date" name="write_off_date">

  <label for="reason">Новая причина списания:</label>
  <input type="text" id="reason" name="reason">

  <input type="submit" value="Редактировать запись">
</form>
</div>
</body>
</html>