<style>
    table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
}

th, td {
  text-align: left;
  padding: 8px;
  border-bottom: 1px solid #ddd;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

th {
  background-color: #4CAF50;
  color: white;
}

td img {
  width: 80px;
  height: 80px;
}

td button {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

td button:hover {
  background-color: #4CAF50;
}
</style>

<h1>My Game Downloads</h1>
<table>
  <thead>
    <tr>
      <th>Game Image</th>
      <th>Game Name</th>
      <th>Buy Time</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="game_image.jpg" alt="Game Image"></td>
      <td>Game Name</td>
      <td>2023-05-03 14:30:00</td>
      <td><button>Download</button></td>
    </tr>
    <!-- add more rows for additional games as needed -->
  </tbody>
</table>