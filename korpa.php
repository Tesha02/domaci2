<html>
<style>
    table {
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid red;
    }
</style>

<body>
    <h1>Cart</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>Ukupno:</td>
                <td>800</td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Laptop</td>
                <td>500</td>
            </tr>
            <tr>
                <td>Kisobran</td>
                <td>200</td>
            </tr>
            <tr>
                <td>Lopta</td>
                <td>100</td>
            </tr>
        </tbody>
    </table>
    <p>Vasa korpa je prazna</p>
    <form method="post" action="?">
        <p>
            <a href="?">Nastavi sa kupovinom</a>
            <input type="submit" name="submit" value="Isprazni">
        </p>
    </form>
</body>

</html>