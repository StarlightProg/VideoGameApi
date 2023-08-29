Установка:
1) Создать .env и вписать свои данные для подключения к БД
2) composer install
3) php artisan migrate --seed
4) php artisan serve

Ссылка для api: http://127.0.0.1:8000/api/v1/

<h2>API Documentation</h2>

<h3>GET /games</h3>
<p>Получить информацию о всех видеоиграх</p>
<p>Пример запроса: http://127.0.0.1:8000/api/v1/games</p>

<h3>GET /games/{game_id}</h3>
<p>Получить информацию об определенной игре</p>
<p>Пример запроса: http://127.0.0.1:8000/api/v1/games/2</p>

<h3>POST /games</h3>
<p>Создаёт новую видеоигру в таблице games</p>
<p>Пример запроса: http://127.0.0.1:8000/api/v1/games</p>
<p>
Request Body:
{
    "title": "Warcraft",
    "company": "Blizzard",
    "genres": [4, 6]
}
</p>

<h4>Parameters<h4>
<table>
  <thead>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Required</th>
        <th>Description</th>
    </tr>
  </thead>
  <tbody>
     <tr>
        <th>title</th>
        <th>string</th>
        <th>True</th>
        <th>Название Игры</th>
    </tr>
      <tr>
        <th>company</th>
        <th>string</th>
        <th>True</th>
        <th>Название Компании</th>
    </tr>
       <tr>
        <th>genres</th>
        <th>array</th>
        <th>False</th>
        <th>Массив id жанров</th>
    </tr>
  </tbody>
</table>

<h3>PUT /games/{game_id}</h3>
<p>Обновить информацию у игры</p>
<p>Пример запроса: http://127.0.0.1:8000/api/v1/games/2</p>
<p>
Request Body:
{
    "title": "DMC",
    "company": "CapCom",
    "genres": [2, 3]
}
</p>
<h4>Parameters<h4>
<table>
  <thead>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Required</th>
        <th>Description</th>
    </tr>
  </thead>
  <tbody>
     <tr>
        <th>title</th>
        <th>string</th>
        <th>False</th>
        <th>Название Игры</th>
    </tr>
      <tr>
        <th>company</th>
        <th>string</th>
        <th>False</th>
        <th>Название Компании</th>
    </tr>
       <tr>
        <th>genres</th>
        <th>array</th>
        <th>False</th>
        <th>Массив id жанров</th>
    </tr>
  </tbody>
</table>

<h3>GET /games/genres/{genre_name}</h3>
<p>Выводит все игры определённого жанра</p>
<p>Пример запроса: http://127.0.0.1:8000/api/v1/games/genres/RPG</p>
<h4>Parameters<h4>
<table>
  <thead>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Required</th>
        <th>Description</th>
    </tr>
  </thead>
  <tbody>
     <tr>
        <th>genre_name</th>
        <th>string</th>
        <th>True</th>
        <th>Название жанра</th>
    </tr>
  </tbody>
</table>

<br>

<h3>GET /genres</h3>
<p>Получить информацию о всех жанрах</p>
<p>Пример запроса: http://127.0.0.1:8000/api/v1/genres</p>

<h3>GET /genres/{genre_id}</h3>
<p>Получить информацию об определенном жанре</p>
<p>Пример запроса: http://127.0.0.1:8000/api/v1/genres/3</p>

<h3>POST /genres</h3>
<p>Создаёт новую видеоигру в таблице genres</p>
<p>Пример запроса: http://127.0.0.1:8000/api/v1/genres</p>
<p>
Request Body:
{
    "genre_name": "MMORPG"
}
</p>

<h4>Parameters<h4>
<table>
  <thead>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Required</th>
        <th>Description</th>
    </tr>
  </thead>
  <tbody>
     <tr>
        <th>genre_name</th>
        <th>string</th>
        <th>False</th>
        <th>Название жанра</th>
    </tr>
  </tbody>
</table>

<h3>PUT /genres/{genres_id}</h3>
<p>Обновить информацию у жанра</p>
<p>Пример запроса: http://127.0.0.1:8000/api/v1/genres/2</p>
<p>
Request Body:
{
    "genre_name": "Shooter"
}
</p>

<h4>Parameters<h4>
<table>
  <thead>
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Required</th>
        <th>Description</th>
    </tr>
  </thead>
  <tbody>
     <tr>
        <th>genre_name</th>
        <th>string</th>
        <th>False</th>
        <th>Название жанра</th>
    </tr>
  </tbody>
</table>
