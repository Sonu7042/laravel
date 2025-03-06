<div>
    <h2>Add New Users</h2>

    <form action="adduser2" method="post">
        @csrf
        <div>
            <h4>User Skills</h4>
            <input type="checkbox" name="skill[]" value="Php" id="php">
            <label for="php">Php</label>

            <input type="checkbox" name="skill[]" value="Node" id="node">
            <label for="node">Node</label>

            <input type="checkbox" name="skill[]" value="React" id="react">
            <label for="react">React</label>
        </div>

        <div>
            <h4>Gender</h4>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>

            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>

        </div>

        
        <div>
            <h4>City</h4>
             <select name="city">
                <option value="">Select City</option>
                <option value="Pandav Nagar">Pandav Nagar</option>
                <option value="Phase-3">Phase-3</option>
                <option value="Laxmi Nagar">Laxmi Nagar</option>
             </select>

        </div>

        <div>
            <h4>Age Range</h4>
            <input type="range" name="age" min="18" max="100">
        </div>

        <button type="submit"> Add New User</button>
    </form>
</div>