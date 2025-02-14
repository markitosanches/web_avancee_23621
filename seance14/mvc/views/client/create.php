{{ include('layouts/header.php', {title:'Client Create'})}}
    <div class="container">
        <form method="post">
            <h2>New client</h2>
            <label>Name
                <input type="text" name="name">
            </label>
            <label>Address
                <input type="text" name="address">
            </label>
            <label>Phone
                <input type="text" name="phone">
            </label>
            <label>Zip Code
                <input type="text" name="zip_code">
            </label>
            <label>Email
                <input type="email" name="email">
            </label>
            <label>Actif
                <input type="checkbox" name="actif" value="1">
            </label>
            <input type="submit" value="Save"class="btn">
        </form>
    </div>
    {{ include('layouts/footer.php')}}