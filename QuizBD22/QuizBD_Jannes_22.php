<html>
    <head>
        <title>QuizBD_Jannes_22</title>
    </head>

    <body>
        <form action="SC_QuizBD_Jannes_22.php" method="POST">
            <table>
                <tr>
                    <td> Kode Tiket </td>
                    <td><input type="Text" name="InputKT" placeholder="Masukkan Kode Tiket"></td>
                </tr>

                <tr>
                    <td> Nama Penumpang </td>
                    <td><input type="Text" name="InputNP" placeholder="Masukkan Nama Penumpang"></td>
                </tr>
                
                <tr>
                    <td>Pilih Maskapai</td>
                    <td><Select name="PilihMaskapai">
                    <option value = "GR">GR</option>
                    <option value = "LA">LA</option>
                    <option value = "BA">BA</option>
                    </select></td>
                </tr>

                <tr>
                    <td colspan=2 align=center><input type="submit" name="Proses" value="Proses"></td>
                </tr>
            </table>
        </form>
    </body>
</html>
