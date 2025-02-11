{{ include('layouts/header.php', {title:'Client Create'})}}
    <div class="container">
        <form action="client-store.php" method="post">
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
            <input type="submit" value="Save"class="btn">
        </form>
    </div>
    {{ include('layouts/footer.php')}}