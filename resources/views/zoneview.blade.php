<html>
    <body>
        <form action="submit" method="POST">
            @csrf
            <input type="text" name="ldes" placeholder="Long Description">
            <br><br>
            <input type="text" name="sdes" placeholder="Short Description">
            <br><br>
            <button type="submit">Save</button>
        </form>
    </body>
</html>