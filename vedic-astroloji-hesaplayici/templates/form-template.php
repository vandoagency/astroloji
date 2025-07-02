<form method="post">
    <label>Isim: <input type="text" name="name" required></label><br>
    <label>E-posta: <input type="email" name="email"></label><br>
    <label>Dogum Tarihi: <input type="date" name="birth_date" required></label><br>
    <label>Dogum Saati: <input type="time" name="birth_time" required></label><br>
    <label>Dogum Yeri: <input type="text" name="birth_place" required></label><br>
    <input type="hidden" name="vah_form_submitted" value="1">
    <button type="submit">Gonder</button>
</form>
