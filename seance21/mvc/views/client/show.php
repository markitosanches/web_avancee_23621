{{ include('layouts/header.php', {title:'Client'})}}
    <div class="container">
        <h1>Client</h1>
        <p><strong>Name: </strong>{{ client.name }}</p>
        <p><strong>Address: </strong>{{ client.address }}</p>
        <p><strong>Phone: </strong>{{ client.phone }}</p>
        <p><strong>Email: </strong>{{ client.email }}</p>
        <p><strong>Zip Code: </strong>{{ client.zip_code }}</p>
        <a href="{{base}}/client/edit?id={{ client.id }}" class="btn">Edit</a>
    </div>
{{ include('layouts/footer.php')}}