{{ include('layouts/header.php', {title:'User Create'})}}
    <div class="container">
        <form method="post">
            <h2>New User</h2>
            <label>Name
                <input type="text" name="name" value="{{user.name}}">
            </label>
            {% if errors.name is defined %}
                <span class="error"> {{errors.name}}</span>
            {% endif %}
            <label>Username
                <input type="email" name="username" value="{{user.username}}">
            </label>
            {% if errors.username is defined %}
                <span class="error"> {{errors.username}}</span>
            {% endif %}
            <label>Password
                <input type="password" name="password" >
            </label>
            {% if errors.password is defined %}
                <span class="error"> {{errors.password}}</span>
            {% endif %}
            <label>Privilege
               <select name="privilege_id">
                {% for privilege in privileges %}
                <option value="{{ privilege.id}}">{{ privilege.privilege}}</option>
                {% endfor %}
                </select>
            </label>
            {% if errors.privilege_id is defined %}
                <span class="error"> {{errors.privilege_id}}</span>
            {% endif %}
            <input type="submit" value="Save"class="btn">
        </form>
    </div>
    {{ include('layouts/footer.php')}}