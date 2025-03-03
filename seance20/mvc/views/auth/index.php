{{ include('layouts/header.php', {title:'Login'})}}
    <div class="container">
            {% if errors is defined %}
                <span class="error">
                    <ul>
                    {% for error in errors %}
                        <li>{{error}}</li>
                    {% endfor %}
                    </ul>
                </span>
            {% endif %}
        <form method="post">
            <h2>Login</h2>
            <label>Username
                <input type="email" name="username" value="{{user.username}}">
            </label>
            <label>Password
                <input type="password" name="password" >
            </label>
            <input type="submit" value="Save"class="btn">
        </form>
    </div>
    {{ include('layouts/footer.php')}}